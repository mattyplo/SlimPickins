document.addEventListener('DOMContentLoaded', function() {
 
    function openForm() {
      document.getElementById("myForm").style.display = "inline";
      document.getElementById("myForm").style.position = "inherit";
    }

    function openDelForm(){
      document.getElementById("myDelForm").style.display = "inline";
      document.getElementById("myDelForm").style.position = "inherit";        
    }
  
    function closeForm() {
      document.getElementById("myForm").style.display = "none";
      document.getElementById("myDelForm").style.display = "none";
    }
    
    var openFormButton = document.getElementsByClassName("foodItemManipulation"); 
    var closeFormButton = document.getElementById("closeFormButton");
    
    //add
    openFormButton[0].addEventListener("click", openForm, false);
    //edit
    openFormButton[1].addEventListener("click", openForm, false);
    //delete
    openFormButton[2].addEventListener("click", openDelForm, false);
    closeFormButton.addEventListener("click", closeForm, false);
    
  });