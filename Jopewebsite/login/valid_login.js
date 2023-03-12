

function validation() {
    var valid = true;
    labelform = document.getElementsByTagName("label");
    var email = document.login_form.email.value;
    var password = document.login_form.password.value;
    var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

    if (email == "") {
        labelform[0].innerHTML = "Email * required";
        labelform[0].style.color = "red";
        valid = false;
    }
    else if (reg.test(email) == false) {
        labelform[0].innerHTML = "Email * Incorrect";
        labelform[0].style.color = "red";
        valid = false;
    }

    if (password == "") {
        labelform[1].innerHTML = "Password * required";
        labelform[1].style.color = "red";
        valid = false;
    }
    else if (password.length <= 8) {
        labelform[1].innerHTML = "Password * less than 8 characters";
        labelform[1].style.color = "red";
        valid = false;
    }
    return valid;
}