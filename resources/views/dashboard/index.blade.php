@extends('layouts.dashboard')

@section('title', 'Dashboard Analytics')

@section('page-title', 'Dashboard Analytics Overview')

@section('content')
    <div class="row">

        <!-- Web Analytics Swiper -->
        <div class="col-12 mb-4">
            <div class="card p-3">
                <h5 class="card-title">Web Analytics Overview</h5>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- Slide 1: Total Users -->
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Total Users</h6>
                                    <p class="text-muted">28,000</p>
                                    <i class="bi bi-people display-4 text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 2: Active Users -->
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Active Users</h6>
                                    <p class="text-muted">15,000</p>
                                    <i class="bi bi-person-check display-4 text-success"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 3: Bounce Rate -->
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Bounce Rate</h6>
                                    <p class="text-muted">33%</p>
                                    <i class="bi bi-arrow-repeat display-4 text-warning"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 4: Average Session Duration -->
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Avg. Session Duration</h6>
                                    <p class="text-muted">3m 40s</p>
                                    <i class="bi bi-clock display-4 text-danger"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Revenue Generated -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Revenue Generated</h6>
                    <h2 class="text-primary">$75,000</h2>
                    <p class="text-muted">Monthly Revenue</p>
                    <i class="bi bi-cash-stack display-4 text-primary"></i>
                </div>
            </div>
        </div>

        <!-- Earnings Report -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Earnings Report</h6>
                    <p class="text-muted">Year-to-Date Earnings</p>
                    <h2 class="text-success">$1,200,000</h2>
                    <i class="bi bi-graph-up-arrow display-4 text-success"></i>
                </div>
            </div>
        </div>

        <!-- Support Tracker -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Support Tracker</h6>
                    <p class="text-muted">Active Tickets</p>
                    <h2 class="text-warning">35</h2>
                    <i class="bi bi-life-preserver display-4 text-warning"></i>
                </div>
            </div>
        </div>

        <!-- Total Earnings -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Total Earnings</h6>
                    <h2 class="text-success">$1,275,000</h2>
                    <p class="text-muted">Lifetime Earnings</p>
                    <i class="bi bi-wallet2 display-4 text-success"></i>
                </div>
            </div>
        </div>

        <!-- Source Visit -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Source Visit</h6>
                    <p class="text-muted">Traffic Breakdown</p>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Google <span class="badge bg-primary">60%</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Facebook <span class="badge bg-info">25%</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Instagram <span class="badge bg-warning">15%</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Projects Table -->
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Projects Overview</h6>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Project</th>
                                <th>Status</th>
                                <th>Team Members</th>
                                <th>Progress</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Website Redesign</td>
                                <td><span class="badge bg-success">In Progress</span></td>
                                <td>John, Anna, Steve</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 70%"
                                            aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Mobile App Development</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td>Mark, Lucy, Mike</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Marketing Campaign</td>
                                <td><span class="badge bg-danger">Delayed</span></td>
                                <td>Emma, Chris, Kevin</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 30%"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
