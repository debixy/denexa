import Swiper from 'swiper';
import 'swiper/swiper-bundle.css';  // Import the Swiper CSS
import ApexCharts from 'apexcharts';  // If you're using ApexCharts for charts

document.addEventListener('DOMContentLoaded', function () {

    // Initialize Swiper for Web Analytics Overview
    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    // Initialize ApexCharts for Earnings or Revenue (Example)
    const revenueOptions = {
        series: [{
            name: 'Revenue',
            data: [10000, 20000, 30000, 40000, 50000, 75000]  // Example data
        }],
        chart: {
            type: 'line',
            height: 350
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        },
        stroke: {
            curve: 'smooth'
        },
        title: {
            text: 'Revenue Generated (Monthly)',
            align: 'left'
        },
        colors: ['#007bff'],
    };

    const earningsChartElement = document.querySelector("#earnings-chart");
    if (earningsChartElement) {
        const earningsChart = new ApexCharts(earningsChartElement, revenueOptions);
        earningsChart.render();
    } else {
        console.error("Earnings chart element not found");
    }

    // Dynamically Update Progress Bars (if any)
    document.querySelectorAll('.progress-bar').forEach((progressBar) => {
        const progress = progressBar.getAttribute('aria-valuenow');
        progressBar.style.width = `${progress}%`;
    });

    // Handle support tracker notifications or other real-time updates
    function updateSupportTickets() {
        const supportCount = document.querySelector('.support-count');

        if (supportCount) {
            const activeTickets = 35;  // This should be dynamic
            supportCount.textContent = activeTickets;
        } else {
            console.error('Support count element not found');
        }
    }

    // Call function to update support tracker on load
    updateSupportTickets();
});
