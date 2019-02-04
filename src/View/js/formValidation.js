function validateForm() {
    var name = document.forms["login"]["userName"].value;
    var password = document.forms["login"]["password"].value;
    if (name == "" || password == "") {
        alert("Required input cannot be empty."  + password.length);
        return false;
    } else if (name.length < 4 || password.length < 8){
        alert("Invaild username or password.");
        return false;
    }
}

function acknowledge(){
    alert("Ya Clicked!");
}