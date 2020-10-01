

var  redColor = document.querySelector('.rouge'),
     greenColor = document.querySelector('.vert'),
     blueColor = document.querySelector('.bleu'),
     purpleColor = document.querySelector('.violet')
     resetColor = document.querySelector('.reset')


    //  change color 
     var red = document.createElement('style')
   redColor.addEventListener('click', function (){
    red.innerHTML = " .red {color: red !important;}.bgred{ background-color: red!important;} .content span{background-color: hsla(0, 79%, 54%, 0.184)!important;}"
    red.innerHTML += " .faq blockquote::before{color: red;}  .open blockquote::before{color: red;}"
    red.innerHTML += "body{background: rgb(255,0,0);background: linear-gradient(180deg, rgba(255,0,0,1) 0%, rgba(226,105,44,1) 13%, rgba(255,0,0,1) 55%, rgba(226,105,44,1) 80%, rgba(255,0,0,1) 100%);} "
    red.innerHTML += "button:hover{color: red!important; border-color: red!important; } .btn:hover{color: red!important;} "     
    document.body.appendChild(red)

})
// change color
var green = document.createElement('style')
greenColor.addEventListener('click', function (){
    green.innerHTML = " .green {color: green !important;}.bggreen{ background-color: green!important;} .content span{background-color: hsla(108, 79%, 54%, 0.184)!important;}"
    green.innerHTML += " .faq blockquote::before{color: green;}  .open blockquote::before{color: green;}"
    green.innerHTML += "body{background: rgb(28,176,35);       background: linear-gradient(180deg, rgba(28,176,35,1) 0%, rgba(226,193,44,1) 13%, rgba(28,176,35,1) 55%, rgba(226,193,44,1) 80%, rgba(28,176,35,1) 100%);} "
    green.innerHTML += "button:hover{color: green!important; border-color: green!important; } .btn:hover{color: green!important;} "     
    document.body.appendChild(green)

})
//  change color
var blue = document.createElement('style')
blueColor.addEventListener('click', function (){
    blue.innerHTML = " .blue {color: blue !important;}.bggreen{ background-color: blue!important;} .content span{background-color: hsla(219, 79%, 54%, 0.184)!important;}"
    blue.innerHTML += " .faq blockquote::before{color: blue;}  .open blockquote::before{color: blue;}"
    blue.innerHTML += "body{background: rgb(28,71,176); background: linear-gradient(180deg, rgba(28,71,176,1) 0%, rgba(97,184,182,1) 13%, rgba(28,71,176,1) 55%, rgba(97,184,182,1) 80%, rgba(28,71,176,1) 100%);} "
    blue.innerHTML += "button:hover{color: blue!important; border-color: blue!important; } .btn:hover{color: blue!important;} "     
    document.body.appendChild(blue)

})

// change color
var purple = document.createElement('style')
purpleColor.addEventListener('click', function (){
    purple.innerHTML = " .purple {color: purple!important;}.bgpurple{ background-color: purple!important;} .content span{background-color: hsla(303, 93%, 52%, 0.184)!important;}"
    purple.innerHTML += " .faq blockquote::before{color: purple;}  .open blockquote::before{color: purple;}"
    purple.innerHTML += "body{background: rgb(167,28,176);background: linear-gradient(180deg, rgba(167,28,176,1) 0%, rgba(232,160,210,1) 13%, rgba(167,28,176,1) 55%, rgba(232,160,210,1) 80%, rgba(167,28,176,1) 100%);} "
    purple.innerHTML += "button:hover{color: purple!important; border-color: purple!important; } .btn:hover{color: purple!important;} "     
    document.body.appendChild(purple)

})

//  suppression de toutes  le couleur modifié 
resetColor.addEventListener('click', function (){
  purple.innerHTML = null
  blue.innerHTML = null
  green.innerHTML = null
  red.innerHTML = null
  document.body.removeChild(purple)
})