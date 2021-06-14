const text1 = document.querySelector('.acuity_text')
const text2 = document.querySelector('.test2_text')
const text3 = document.querySelector('.test3_text')

var button
var m
var mo
var mon

// const button0 = document.querySelector('#part0')
const button1 = document.querySelector('#part1')
const button2 = document.querySelector('#part2')
const button3 = document.querySelector('#part3')


// button0.addEventListener('click', nbPart(button0))
button1.addEventListener('click', nbPart(m))
button2.addEventListener('click', nbPart(mo))
button3.addEventListener('click', nbPart(mon))




function nbPart (button) {
    if (button == m) {
        text1.classList.add('hide_acuity_text')
        text2.classList.remove('hide_test2_text')
        text3.classList.remove('hide_test3_text')
    };

    if (button == mo) {
        text1.classList.remove('hide_acuity_text')
        text2.classList.add('hide_test2_text')
        text3.classList.remove('hide_test3_text')
    };

    if (button == mon) {
        text1.classList.remove('hide_acuity_text')
        text2.classList.remove('hide_test2_text')
        text3.classList.add('hide_test3_text')
    }
}


