<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        @include('admin.navbar')

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Total Users</h4>
                                <p class="card-text">{{ $totalUsers }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Total Products</h4>
                                <p class="card-text">{{ $totalProducts }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Total Orders</h4>
                                <p class="card-text">{{ $totalOrders }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Orders in the Last Month</h4>
                                <canvas id="ordersChart"></canvas>
                                <div id="chartData" data-labels='@json($dates)' data-values='@json($orderCounts)'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.script')

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var ctx = document.getElementById('ordersChart').getContext('2d');
                var ordersChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: JSON.parse(document.getElementById('chartData').dataset.labels),
                        datasets: [{
                            label: 'Orders',
                            data: JSON.parse(document.getElementById('chartData').dataset.values),
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1,
                            fill: false
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            });
        </script>
    </div>
</body>
</html>