const text0 = document.querySelector('.test0_text')
const text1 = document.querySelector('.acuity_text')
const text2 = document.querySelector('.test2_text')
const text3 = document.querySelector('.test3_text')

const button0 = document.querySelector('#part0')
const button1 = document.querySelector('#part1')
const button2 = document.querySelector('#part2')
const button3 = document.querySelector('#part3')

const test1 = document.querySelector('.containertext')
const test2 = document.querySelector('.containertestv2')
const test3 = document.querySelector('.containertestv3')

const contain_canva = document.querySelector('.contain-canvas')
const contain_canva2 = document.querySelector('.contain-canvas2')

const rightArrow = document.querySelector('#right_arrow')
const leftArrow = document.querySelector('#left_arrow')

const title0 = document.querySelector('.intro')
const title1 = document.querySelector('.title1')
const title2 = document.querySelector('.title2')
const title3 = document.querySelector('.title3')

const soundIcon = document.querySelector('#sound')
const eraser = new Audio('sounds/eraser_sound.ogg')
const chalk = new Audio('sounds/chalk_sound.ogg')
let sound = true

var nbPage = 0

button0.addEventListener('click', Part0)
button1.addEventListener('click', Part1)
button2.addEventListener('click', Part2)
button3.addEventListener('click', Part3)

rightArrow.addEventListener('click', rightPage)
leftArrow.addEventListener('click', leftPage)

function chalkPlay() {
    chalk.play()
}

soundIcon.addEventListener('click', () => {
    if (sound) {
        sound = false
        document.querySelector('#sound').src = './img/sound_off.png'
    } else {
        sound = true
        document.querySelector('#sound').src = './img/sound_on.png'
    }
})

function transiSound () {
    eraser.play()
        eraser.addEventListener("ended", () => {
            chalk.play()
        })
}

function rightPage() {
    console.log(nbPage)
    if (nbPage == 0) {
        transiSound()
        Part1()


    }
    else if (nbPage == 1) {
        transiSound()
        removePart()
        affTest1()

        
    }
    else if (nbPage == 2) {
        transiSound()
        Part2()

    }

    else if (nbPage == 3) {
        removePart()
        transiSound()
        affTest2()
    }

    else if (nbPage == 4) {
        transiSound()
        Part3()


    }

    else if (nbPage == 5) {
        transiSound()
        removePart()
        affTest3()
    }
}

function leftPage() {
    console.log(nbPage)
    if (nbPage == 1) {
        transiSound()
        Part0()
    }

    else if (nbPage == 2) {
        transiSound()
        Part1()
    }

    else if (nbPage == 3) {
        transiSound()
        removePart()
        affTest1()
    }

    else if (nbPage == 4) {
        transiSound()
        Part2()


    }

    else if (nbPage == 5) {
        transiSound()
        removePart()
        affTest2()
    }

    else if (nbPage == 6) {
        transiSound()
        Part3()
    }
}

function Part0 () {
    affPart0()
    nbPage = 0
}

function Part1 () {
    affPart1()
    nbPage = 1
}


function Part2 () {    
    affPart2()
    nbPage = 3
}

function Part3 () {
    affPart3()
    nbPage = 5
}

function removePart() {
    text0.classList.add('hide_test0_text')
    text1.classList.remove('show_acuity_text')
    text2.classList.remove('show_test2_text')
    text3.classList.remove('show_test3_text')
    title0.classList.add('hide_intro')
    title1.classList.remove('show_title1')
    title2.classList.remove('show_title2')
    title3.classList.remove('show_title3')
    contain_canva.classList.remove('show_contain-canvas')
    contain_canva2.classList.remove('show_contain-canvas2')
}

function affPart0 () {
    text0.classList.remove('hide_test0_text')
    text1.classList.remove('show_acuity_text')
    text2.classList.remove('show_test2_text')
    text3.classList.remove('show_test3_text')
    title0.classList.remove('hide_intro')
    title1.classList.remove('show_title1')
    title2.classList.remove('show_title2')
    title3.classList.remove('show_title3')
    test1.classList.remove('show_containertext')
    test2.classList.remove('show_containertestv2')
    test3.classList.remove('show_containerv3')
    contain_canva.classList.remove('show_contain-canvas')
    contain_canva2.classList.remove('show_contain-canvas2')
}


function affPart1 () {

    text0.classList.add('hide_test0_text')
    text1.classList.add('show_acuity_text')
    text2.classList.remove('show_test2_text')
    text3.classList.remove('show_test3_text')  
    title0.classList.add('hide_intro')
    title1.classList.add('show_title1')
    title2.classList.remove('show_title2')
    title3.classList.remove('show_title3')
    test1.classList.remove('show_containertext')
    test2.classList.remove('show_containertestv2')
    test3.classList.remove('show_containerv3')
    contain_canva.classList.add('show_contain-canvas')
    contain_canva2.classList.remove('show_contain-canvas2')
}

function affTest1 () {
    test1.classList.add('show_containertext')
    test2.classList.remove('show_containertestv2')
    test3.classList.remove('show_containerv3')
    nbPage = 2
}

function affPart2 () {

    text0.classList.add('hide_test0_text')
    text1.classList.remove('show_acuity_text')
    text2.classList.add('show_test2_text')
    text3.classList.remove('show_test3_text')
    title0.classList.add('hide_intro')
    title1.classList.remove('show_title1')
    title2.classList.add('show_title2')
    title3.classList.remove('show_title3')
    test1.classList.remove('show_containertext')
    test2.classList.remove('show_containertestv2')
    test3.classList.remove('show_containerv3')
    contain_canva.classList.remove('show_contain-canvas')
    contain_canva2.classList.add('show_contain-canvas2')
}

function affTest2 () {
    test1.classList.remove('show_containertext')
    test2.classList.add('show_containertestv2')
    test3.classList.remove('show_containerv3')
    nbPage = 4
}


function affPart3 () {
    text0.classList.add('hide_test0_text')
    text1.classList.remove('show_acuity_text')
    text2.classList.remove('show_test2_text')
    text3.classList.add('show_test3_text')
    title0.classList.add('hide_intro')
    title1.classList.remove('show_title1')
    title2.classList.remove('show_title2')
    title3.classList.add('show_title3')
    test1.classList.remove('show_containertext')
    test2.classList.remove('show_containertestv2')
    test3.classList.remove('show_containerv3')
    contain_canva.classList.remove('show_contain-canvas')
    contain_canva2.classList.remove('show_contain-canvas2')

}

function affTest3 () {
    test1.classList.remove('show_containertext')
    test2.classList.remove('show_containertestv2')
    test3.classList.add('show_containerv3')
    nbPage = 6
}

