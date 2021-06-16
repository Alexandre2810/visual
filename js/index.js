const text0 = document.querySelector('.test0_text')
const text1 = document.querySelector('.acuity_text')
const text2 = document.querySelector('.test2_text')
const text3 = document.querySelector('.test3_text')

const button0 = document.querySelector('#part0')
const button1 = document.querySelector('#part1')
const button2 = document.querySelector('#part2')
const button3 = document.querySelector('#part3')

const rightArrow = document.querySelector('#right_arrow')
const leftArrow = document.querySelector('#left_arrow')

const title0 = document.querySelector('.intro')
const title1 = document.querySelector('.title1')
const title2 = document.querySelector('.title2')
const title3 = document.querySelector('.title3')

var nbPage = 0

button0.addEventListener('click', Part0)
button1.addEventListener('click', Part1)
button2.addEventListener('click', Part2)
button3.addEventListener('click', Part3)

rightArrow.addEventListener('click', rightPage)
leftArrow.addEventListener('click', leftPage)


function rightPage() {
    console.log(nbPage)
    if (nbPage == 0) {
        Part1()
    }
    else if (nbPage == 1) {
        Part2()
    }
    else if (nbPage == 2) {
        Part3()
    }
}

function leftPage() {
    console.log(nbPage)
    if (nbPage == 1) {
        Part0()
    }
    else if (nbPage == 2) {
        Part1()
    }
    else if (nbPage == 3) {
        Part2()
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
    nbPage = 2
}

function Part3 () {
    affPart3()
    nbPage = 3
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
}

