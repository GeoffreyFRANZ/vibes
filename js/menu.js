(function () {
    let menuOpened = false
    let button = document.querySelector('#menu')
    button.addEventListener('click', function(e) {
        document.querySelector('nav').classList.add('open')
        e.stopPropagation()
        e.preventDefault()
       menuOpened = true
    })
    
    document.body.addEventListener('click', function(){
       document.querySelector('nav').classList.remove('open')  
      menuOpened = false
    })
    
    })()