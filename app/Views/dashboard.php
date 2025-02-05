<?= $this->extend('layout/template'); ?>

<?= $this->section('content') ?>

<h2 class="my-4">Dashboard</h2>
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <div id="chart1"></div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <div id="chart2"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-12 mt-4">
    <div class="card">
        <div class="card-body">
            <div id="chart3"></div>
        </div>
    </div>
</div>


<script>
    var options = {
        series: [{
            name: 'Handphone',
            data: [31, 40, 28, 51, 42, 109, 100]
        }, {
            name: 'Laptop',
            data: [11, 32, 45, 32, 34, 52, 41]
        }, 
        {
            name: 'TV',
            data: [20, 15, 35, 17, 20, 73, 51]
        }],
        chart: {
            height: 350,
            type: 'area'
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth'
        },
        xaxis: {
            type: 'datetime',
            categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
        },
        tooltip: {
            x: {
                format: 'dd/MM/yy HH:mm'
            },
        },
    };

    var chart = new ApexCharts(document.querySelector("#chart3"), options);
    chart.render();
</script>

<script>
    var options = {
        series: [{
            name: 'Handphone',
            data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
        }, {
            name: 'Laptop',
            data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
        }, {
            name: 'TV',
            data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
        }],
        chart: {
            type: 'bar',
            height: 210
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
        },
        yaxis: {
            title: {
                text: '$ (thousands)'
            }
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function(val) {
                    return "$ " + val + " thousands"
                }
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart1"), options);
    chart.render();
</script>

<script>
    var options = {
        series: [44, 55, 13],
        chart: {
            width: 380,
            type: 'pie',
        },
        labels: ['Handphone', 'Laptop', 'TV'],
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };

    var chart = new ApexCharts(document.querySelector("#chart2"), options);
    chart.render();
</script>
<?= $this->endSection(); ?>