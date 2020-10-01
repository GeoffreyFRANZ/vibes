(function (){
     // fonction comme un menu burger 
    document.querySelector('.goutte').addEventListener('click', function(e){
        document.querySelector('.goutte').classList.add('open_goutte')
        e.stopPropagation()
        e.preventDefault()
          })

    document.body.addEventListener('click', function(e){
        document.querySelector('.goutte').classList.remove('open_goutte')
    
    })

    
}) ()