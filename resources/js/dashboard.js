import Chart from 'chart.js/auto';

const visitsCanvas = document.getElementById('visitsChart');

if (visitsCanvas) {
    const visitsData = JSON.parse(
        visitsCanvas.dataset.visits
    );

    new Chart(visitsCanvas, {
        type: 'line',

        data: {
            labels: visitsData.map(item => item.date),

            datasets: [
                {
                    label: 'بازدید',
                    data: visitsData.map(item => item.visits),

                    borderWidth: 2,
                    tension: 0.4,
                    fill: true,

                    pointRadius: 3,
                    pointHoverRadius: 5,
                },
            ],
        },

        options: {
            responsive: true,
            maintainAspectRatio: false,

            plugins: {
                legend: {
                    display: false,
                },
            },

            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        precision: 0,
                    },
                },

                x: {
                    grid: {
                        display: false,
                    },
                },
            },
        },
    });
}