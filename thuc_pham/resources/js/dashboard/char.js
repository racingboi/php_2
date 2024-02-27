const ctx = document.getElementById('myChart');
const ctxLine = document.getElementById('myChartLine');
new Chart(ctxLine, {
    type: 'line',
    data: {
        labels: ['Ngay 1', 'Ngay 2', 'Ngay 3', 'Ngay 4', 'Ngay 5', 'Ngay 6'],
        datasets: [{
            label: 'Doanh thu',
            data: [123123, 3219, 344334, 53, 225552, 33],
            borderWidth: 1
        }]
    }, options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
fetch('http://127.0.0.1:8000/admin/dashboard/chart')
    .then((response) => response.json())
    .then((data) => {
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: data.chartLine.label,
                datasets: [{
                    label: 'Tong don hang',
                    data: data.chartLine.data,
                    borderWidth: 1
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
    })
    .catch(e => console.log(e))
