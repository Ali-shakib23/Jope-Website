

function validation() {
    var valid = true;
    labelform = document.getElementsByTagName("label");
    var firstName = document.signupform.firstname.value;
    var lastName = document.signupform.lastname.value;
    var email = document.signupform.email.value;
    var password = document.signupform.password.value;
    var confirm = document.signupform.confirmpassword.value;
    var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    if (firstName == "") {
        labelform[0].innerHTML = "Firstname * required";
        labelform[0].style.color = "red";
        valid = false;
    }
    else if (!isNaN(firstName)) {
        labelform[0].innerHTML = "Firstname * onlyText";
        labelform[0].style.color = "red";
        valid = false;
    }

    if (lastName == "") {
        labelform[1].innerHTML = "Lastname * required";
        labelform[1].style.color = "red";
        valid = false;
    }

    else if (!isNaN(lastName)) {
        labelform[1].innerHTML = "Lastname * onlyText";
        lebelform[1].style.color = "red";
        valid = false;
    }
    if (email == "") {
        labelform[2].innerHTML = "Email * required";
        labelform[2].style.color = "red";
        valid = false;
    }
    else if (reg.test(email) == false) {
        labelform[2].innerHTML = "Email * Incorrect";
        labelform[2].style.color = "red";
        valid = false;
    }

    if (password == "") {
        labelform[3].innerHTML = "Password * required";
        labelform[3].style.color = "red";
        valid = false;
    }
    else if (password.length <= 8) {
        labelform[3].innerHTML = "Password * less than 8 characters";
        labelform[3].style.color = "red";
        valid = false;
    }
    if (confirm == "") {
        labelform[4].innerHTML = "Password * required";
        labelform[4].style.color = "red";
        valid = false;
    }
    else if (confirm != password) {
        labelform[4].innerHTML = "Password * does not match";
        labelform[4].style.color = "red";
        valid = false;
    }
    return valid;
}