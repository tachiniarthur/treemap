<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cellphones Treemap</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-chart-treemap"></script>
</head>
<body>
    <div style="width: 100%; height: 100vh;">
        <canvas id="treemapChart"></canvas>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const data = @json($cellphones);
            const ctx = document.getElementById('treemapChart').getContext('2d');

            const chartData = data.map(cellphone => ({
                label: cellphone.brand + ' ' + cellphone.model,
                value: cellphone.units_sold
            }));

            new Chart(ctx, {
                type: 'treemap',
                data: {
                    datasets: [{
                        label: 'Cellphones Sold',
                        tree: chartData,
                        key: 'value',
                        groups: ['label']
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.raw.g + ': ' + context.raw.v + ' units';
                                }
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>
