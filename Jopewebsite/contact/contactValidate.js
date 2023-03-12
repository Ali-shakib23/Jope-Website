function Validation() {
    var valid = true;
    labelform = document.getElementsByTagName("label");
    textareaform = document.getElementsByTagName("textarea");
    var fullName = document.contactform.fullname.value;
    var email = document.contactform.email.value;
    var mobile = document.contactform.mobile.value;
    var subject = document.contactform.title.value;
    // var article = document.contactform.article.value;
    var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    if (fullName == "") {
        labelform[0].innerHTML = "Fullname * required";
        labelform[0].style.color = "red";
        valid = false;
    }
    else if (!isNaN(fullName)) {
        labelform[0].innerHTML = "Firstname * onlyText";
        labelform[0].style.color = "red";
        valid = false;
    }

    if (email == "") {
        labelform[1].innerHTML = "Email * required";
        labelform[1].style.color = "red";
        valid = false;
    }
    else if (reg.test(email) == false) {
        labelform[1].innerHTML = "Email * Incorrect";
        labelform[1].style.color = "red";
        valid = false;
    }
    if (mobile == "") {
        labelform[2].innerHTML = "Mobile * required";
        labelform[2].style.color = "red";
        valid = false;
    }
    else if (isNaN(mobile)) {
        labelform[2].innerHTML = "Mobile * onlyNumbers";
        labelform[2].style.color = "red";
        valid = false;
    }

    if (subject == "") {
        labelform[3].innerHTML = "Subject Title * required";
        labelform[3].style.color = "red";
        valid = false;
    }
    else if (!isNaN(subject)) {
        labelform[3].innerHTML = "Subject Title * onlyText";
        labelform[3].style.color = "red";
        valid = false;
    }
    // if (article == "") {
    //     labelform[4].innerHTML = "Article * required";
    //     labelform[4].style.color = "red";
    //     valid = false;
    // }
    return valid;
}
