document.addEventListener('DOMContentLoaded', function() {
 
  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
  
  var addMealButton = document.getElementById("addMeal"); 
  var closeFormButton = document.getElementById("closeFormButton");
  
  closeFormButton.addEventListener("click", closeForm, false);
  addMealButton.addEventListener("click", openForm, false);
  
});