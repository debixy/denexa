<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\Service;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display the dashboard view based on user role.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Role-based dashboard
        $user = Auth::user();
        $role = $user->roles->first()->name ?? 'user'; // Assuming one role per user

        if ($role === 'admin') {
            return $this->adminDashboard();
        } elseif ($role === 'manager') {
            return $this->managerDashboard();
        } else {
            return $this->userDashboard();
        }
    }

    /**
     * Admin Dashboard
     *
     * @return \Illuminate\View\View
     */
    protected function adminDashboard()
    {
        // Get user, project, and service statistics
        $userCount = User::count();
        $projectCount = Project::count();
        $serviceCount = Service::count();
        $recentUsers = User::orderBy('created_at', 'desc')->take(5)->get();
        $recentProjects = Project::orderBy('created_at', 'desc')->take(5)->get();

        // Render the view
        return view('dashboard.admin', compact('userCount', 'projectCount', 'serviceCount', 'recentUsers', 'recentProjects'));
    }

    /**
     * Manager Dashboard
     *
     * @return \Illuminate\View\View
     */
    protected function managerDashboard()
    {
        // Get data specific to the manager's view
        $projects = Project::where('user_id', Auth::id())->get();  // Projects managed by this user
        $recentServices = Service::orderBy('created_at', 'desc')->take(5)->get();

        // Render the view
        return view('dashboard.manager', compact('projects', 'recentServices'));
    }

    /**
     * User Dashboard
     *
     * @return \Illuminate\View\View
     */
    protected function userDashboard()
    {
        // Get data specific to the user's view
        $user = Auth::user();
        $userProjects = $user->projects()->get(); // Projects belonging to the user
        $userRole = $user->roles->first()->display_name ?? 'User'; // Display the user's role

        // Render the view
        return view('dashboard.user', compact('user', 'userProjects', 'userRole'));
    }

    /**
     * Show User Profile
     *
     * @return \Illuminate\View\View
     */
    public function profile()
    {
        $user = Auth::user();
        return view('dashboard.profile', compact('user'));
    }

    /**
     * Show recent activities
     *
     * @return \Illuminate\View\View
     */
    public function recentActivities()
    {
        // Fetch recent activities (could come from an audit trail system or manual logging)
        $activities = Auth::user()->activities()->orderBy('created_at', 'desc')->take(10)->get();

        return view('dashboard.activities', compact('activities'));
    }
}
