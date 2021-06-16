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
var direction = 1
var point = 0

const buttonRightArrow = document.querySelector('#button_right_arrow')
const rotateDirection = document.querySelector('.testv3')
buttonRightArrow.addEventListener('click', chooseRight)

function chooseRight() {
    console.log(direction)
    choose = 1
    if (choose == direction) {
        point++

    }
    direction = 2
    rotate()

}

function rotate() {
    if (direction == 0) {
        rotateDirection.classList.add('rotatetop')
    }
    else if (direction == 2) {
        rotateDirection.classList.add('rotatebot')
    }
    else if (direction == 3) {
        rotateDirection.classList.add('rotateleft')
    }
}

