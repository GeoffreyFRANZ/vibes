filterSelection("all") // all select par default
function filterSelection(c) {
  var   x = document.getElementsByClassName("filterDiv"); // selection de tout les element  qui à la class filterDiv
  if (c == "all") {
    c = "";
  }
  //  parcourt tout les element  qui ont la class filterDiv pour enlever la class dflex
  for (let i = 0; i < x.length; i++) {
   RemoveClass(x[i], "dflex");
    if (x[i].className.indexOf(c) > -1) {
    
      AddClass(x[i], "dflex");
    } 
  }
}

// ajout de class 
function AddClass(element, name) {
  var  arr1 = element.className.split(" "),
       arr2 = name.split(" ")

  for (let i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) { 
      element.className += " " + arr2[i]
    }
  }
}

//  remove  les class ajouter 
function RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}