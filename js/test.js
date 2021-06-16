var direction = 1
var point = 0

const buttonRightArrow = document.querySelector('#button_right_arrow')
const buttonLeftArrow = document.querySelector('#button_left_arrow')
const buttonTopArrow = document.querySelector('#button_top_arrow')
const buttonBotArrow = document.querySelector('#button_bot_arrow')

const rotateDirection = document.querySelector('.testv3')

buttonRightArrow.addEventListener('click', chooseRight)
buttonLeftArrow.addEventListener('click', chooseLeft)
buttonTopArrow.addEventListener('click', chooseTop)
buttonBotArrow.addEventListener('click', chooseBot)

var countClick = 0;
var maxClickNullOpacity = 5;

var maxClickSizeEm = 5;
var initialSizeEm = 5;
var minSizeEm = 1;

function changeOpacityC() {
    rotateDirection.style.opacity = 1 - countClick * (1 / maxClickNullOpacity);
}

function changeTailleC() {
    rotateDirection.style.fontSize = (5 + countClick * ((minSizeEm - initialSizeEm) / maxClickSizeEm)) + 'em';
}

function chooseRight() {
    console.log(direction)
    choose = 1
    if (choose == direction) {
        point++
    }
    direction = 0
    reset()
    rotate()


}
function chooseLeft() {
    console.log(direction)
    choose = 3
    if (choose == direction) {
        point++
    }
    direction = 2
    reset()
    rotate()


}
function chooseTop() {
    console.log(direction)
    choose = 0
    if (choose == direction) {
        point++

    }
    direction = 3
    reset()
    rotate()


}
function chooseBot() {
    console.log(direction)
    choose = 2
    if (choose == direction) {
        point++

    }
    direction = 1
    reset()
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
    countClick++;
    changeOpacityC();
    changeTailleC();
}

function reset() {
    rotateDirection.classList.remove('rotatetop')
    rotateDirection.classList.remove('rotatebot')
    rotateDirection.classList.remove('rotateleft')
}
