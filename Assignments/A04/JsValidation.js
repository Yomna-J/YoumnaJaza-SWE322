  // Form JS Validation
// Form JS Validation
function validate(form) {
    var fail = validateEmail(form.email.value);
    fail += validateUsername(form.username.value);
    fail += validatePassword(form.password.value);

    if (fail == "") {
        return true;
    } else {
        alert(fail);
        return false;
    }
}

function validateEmail(field) {
    if (field == "") {
        return "No Email was entered.\n";
    }
    else if (!((field.indexOf(".") > 0) && (field.indexOf("@") > 0)) || /[^a-zA-Z0-9._-]@/.test(field)) { //false regex = matches
        return "Invalid Email Address.\n";
    } else {
        return "";
    }
}
function validateUsername(field) {
    if (field == "") {
        return "No Username was entered.\n";
    } else if (field.length < 3 || field.length > 15) {
        return "Invalid Username. Length should be between 3 and 15 characters.\n";
    } else if (!(/^[A-Za-z_][A-Za-z0-9_]{2,14}$/.test(field))) {
        return "Invalid Username. Only letters, numbers, underscores are allowed.\n";
    } else {
        return "";
    }
}
function validatePassword(field) {
    if (field == "") {
        return "No password was entered.\n";
    } else if (!(/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@#!%]).{8,}$/.test(field))) { // at least 1 capital, 1 small letter, 1 number and 1 symbol
        return "Password should be contain more than 8 characters. Only capital and small letters, numbers, and symbols.\n"
    } else {
        return "";
    }
}

function validateNewPassword(form){
    var fail = validatePassword(form.new_pass.value);

    if (fail == "") {
        return true;
    } else {
        alert(fail);
        return false;
    }
}