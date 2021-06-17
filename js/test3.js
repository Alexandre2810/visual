var direction = Math.floor(Math.random() * 4)
var point = 0

const buttonRightArrow = document.querySelector('#button_right_arrow')
const buttonLeftArrow = document.querySelector('#button_left_arrow')
const buttonTopArrow = document.querySelector('#button_top_arrow')
const buttonBotArrow = document.querySelector('#button_bot_arrow')
const containTestV3 = document.querySelector('#containertestv3')

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

function changeTailleCC() {
    console.log(direction);
    rotateDirection.style.fontSize = 5 + 'em';
}
function changeOpacityCC() {
    rotateDirection.style.opacity = 1;
}

function restart() {
    if (countClick == 4) {

        countClick = 0;
        changeOpacityCC();
        changeTailleCC();
    }
}

function chooseRight() {
    direction = Math.floor(Math.random() * 4)
    reset()
    rotate()


}
function chooseLeft() {
    direction = Math.floor(Math.random() * 4)
    reset()
    rotate()


}
function chooseTop() {
    direction = Math.floor(Math.random() * 4)
    reset()
    rotate()


}
function chooseBot() {
    direction = Math.floor(Math.random() * 4)
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
    restart()
    countClick++;
    changeOpacityC();
    changeTailleC();
}

function reset() {
    rotateDirection.classList.remove('rotatetop')
    rotateDirection.classList.remove('rotatebot')
    rotateDirection.classList.remove('rotateleft')
}
