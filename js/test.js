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
