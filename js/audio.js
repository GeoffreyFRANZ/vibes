  //  recup des music
var firstMusic = document.querySelector('.music1'),
  secondMusic = document.querySelector('.music2'),
  
    //  recup des image 
  calypso = document.querySelector('.calypso'), 
  nina = document.querySelector('.nina'), 
  //   recup de la span 
  blues = document.querySelector('.blues'),
  simone = document.querySelector('.simone'),
    //  container des controleurs
  controleur1 = document.querySelector(".control1"),
  controleur2 = document.querySelector(".control2"),
//  element des controleur
  play1 = document.querySelector('.control1 .play'),
  play2 = document.querySelector('.control2 .play'),
  pause1 = document.querySelector('.control1 .pause'),
  reset1 = document.querySelector('.control1 .reset'),
  pause2 = document.querySelector('.control2 .pause'),
  reset2 = document.querySelector('.control2 .reset'),
  back1 = document.querySelector('.control1 .back10'),
  back2 = document.querySelector('.control2 .back10'),
  advence1 = document.querySelector('.control1 .advence10')
  advence2 = document.querySelector('.control2 .advence10'),
  //  animation music
  animation1 = document.querySelector('.animation1'),
  animation2 = document.querySelector(' .animation2'),

  // music play au click
simone.addEventListener('click', startControl(simone, secondMusic, controleur2, animation2))
blues.addEventListener('click', startControl(blues, firstMusic, controleur1, animation1))

// function du play 
function startControl(span, music, control, animation) {
  span.addEventListener('click', () => {
    music.play()
    span.classList.add('none')
    span.classList.remove('dflex')
    control.classList.remove('none')
    control.classList.add('dflex')
    animation.classList.remove('none')

  })
}

//  function  play
play1.addEventListener('click', play(play1, firstMusic))
play2.addEventListener('click', play(play2, secondMusic))

function play(play, music) {
  play.addEventListener('click', function () {
    music.play()
  })
}

// function pause
pause1.addEventListener('click', pause(pause1, firstMusic))
pause2.addEventListener('click', pause(pause2, secondMusic))

function pause(play, music) {
  play.addEventListener('click', function () {
    music.pause()

  })
}

// function music remise a  0  + stop music
reset1.addEventListener('click', reset(reset1, firstMusic, blues, controleur1, animation1))
reset2.addEventListener('click', reset(reset2, secondMusic, simone, controleur2, animation2))

function reset(reset, music, span, control, animation) {
  reset.addEventListener('click', function () {
    music.pause()
    music.currentTime = 0
    span.classList.remove('none')
    span.classList.add('dflex')
    control.classList.add('none')
    control.classList.remove('dflex')
    animation.classList.add('none')
  })
}

//  retour   music  10 sec 
back1.addEventListener('click', back(back1, firstMusic))
back2.addEventListener('click', back(back2, secondMusic))

function back(back, music) {
  back.addEventListener('click', function () {
    music.currentTime -= 10
  })
}

//  avence music 10 sec 
advence2.addEventListener('click', advence(advence2, secondMusic))
advence1.addEventListener('click', advence(advence1, firstMusic))

function advence(advence, music) {
  advence.addEventListener('click', function () {
    music.currentTime += 10
  })
}

// controleur animation en fin de music 
function end(span, control, animation) {
  span.classList.add('dflex')
  span.classList.remove('none')
  control.classList.add('none')
  control.classList.remove('dflex')
  animation.classList.add('none')
}

