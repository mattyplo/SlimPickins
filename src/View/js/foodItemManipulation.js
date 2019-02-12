document.addEventListener('DOMContentLoaded', function() {
 
    function openForm() {
      document.getElementById("myForm").style.display = "inline";
      document.getElementById("myForm").style.position = "inherit";
    }
  
    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
    
    var openFormButton = document.getElementsByClassName("foodItemManipulation"); 
    var closeFormButton = document.getElementById("closeFormButton");
    
    openFormButton[0].addEventListener("click", openForm, false);
    openFormButton[1].addEventListener("click", openForm, false);
    closeFormButton.addEventListener("click", closeForm, false);
    
  });