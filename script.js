//Meny
function navFunction() {
    document.getElementById("dropdown").classList.toggle("show");
    }
    
    // lukker dropdown når knappen trykkes uttenfor menyen
    window.onclick = function(event) {
      if (!event.target.matches('.navKnapp')) {
        let dropdowns = document.getElementsByClassName("navLenkerDropdown");
        let i;
        //i++ betyr i=i+1
        for (i = 0; i < dropdowns.length; i++) {
          let openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show')
          }
        }
      }
    }
  
