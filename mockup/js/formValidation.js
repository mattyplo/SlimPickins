function validateForm() {
    var name = document.forms["login"]["userName"].value;
    var email = document.forms["login"]["password"].value;
    if (name == "" || email == "") {
        alert("Required input cannot be empty");
        return false;
    }
}