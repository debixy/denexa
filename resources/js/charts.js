import ApexCharts from 'apexcharts';

const chartOptions = {
    chart: { type: 'line' },
    series: [{ name: 'Users', data: [10, 41, 35, 51, 49, 62, 69, 91, 148] }],
    xaxis: { categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'] }
};

const chart = new ApexCharts(document.querySelector('#chart'), chartOptions);
chart.render();
