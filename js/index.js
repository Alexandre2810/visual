var ctx = document.getElementById('acuity').getContext('2d');


var acuityGraph = new Chart(ctx, {
    scaleFontColor: "white",
    type: 'bar',
    data: {
        labels: ['Gamer', 'Non Gamer'],
        datasets: [{
            label: 'Acuité visuelle',
            data: [1.5, 1],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
})

