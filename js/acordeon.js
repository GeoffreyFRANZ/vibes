var accordion = document.querySelectorAll(".acordeon div")
           
        for (let i = 0; i < accordion.length; i++) {
          accordion[i].addEventListener("click", function() {
            this.classList.toggle("open");
            var panel = this;
            if (panel.style.maxHeight) {
              panel.style.maxHeight = null;
            } else {
              panel.style.maxHeight = panel.scrollHeight + "px";
            } 
          });
        }

