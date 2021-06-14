const text1 = document.querySelector('.acuity_text')
const text2 = document.querySelector('.test2_text')
const text3 = document.querySelector('.test3_text')

// const button0 = document.querySelector('#part0')
const button1 = document.querySelector('#part1')
const button2 = document.querySelector('#part2')
const button3 = document.querySelector('#part3')


// button0.addEventListener('click', nbPart(button0))
button1.addEventListener('click', Part1)
button2.addEventListener('click', Part2)
button3.addEventListener('click', Part3)




function Part1 () {
    text1.classList.add('hide_acuity_text')
    text2.classList.remove('hide_test2_text')
    text3.classList.remove('hide_test3_text')        
}


function Part2 () {    
    text1.classList.remove('hide_acuity_text')
    text2.classList.add('hide_test2_text')
    text3.classList.remove('hide_test3_text')
}

function Part3 () {
    text1.classList.remove('hide_acuity_text')
    text2.classList.remove('hide_test2_text')
    text3.classList.add('hide_test3_text')
}
