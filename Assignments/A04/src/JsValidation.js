// Registration page
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
// Change password page
function validateNewPassword(form){
    var fail = validatePassword(form.new_pass.value);

    if (fail == "") {
        return true;
    } else {
        alert(fail);
        return false;
    }
}
// Create profile page
function validateProfile(form){
    var fail = validateFirstName(form.f_name.value);
    fail += validateLastName(form.l_name.value);
    fail += validatePhone(form.c_phone.value);
    fail += validateEmail(form.c_email.value);
    fail += validateCity(form.city.value);
    fail += validateCountry(form.country.value);

    if (fail == "") {
        return true;
    } else {
        alert(fail);
        return false;
    }
}
function validateFirstName(field){
    if (field == "") {
        return "No First Name was entered.\n";
    } else if (!(/^[a-z ,.'-]+$/i.test(field))) { 
        return "Invalid First Name.\n";
    } else {
        return "";
    }
}
function validateLastName(field){
    if (field == "") {
        return "No Last Name was entered.\n";
    } else if (!(/^[a-z ,.'-]+$/i.test(field))) { 
        return "Invalid last name.\n";
    } else {
        return "";
    }
}
function validatePhone(field){
    if (field == "") {
        return "No Contact Phone number was entered.\n";
    } else if (!(/^05[0-9]{8}$/.test(field))) { 
        return "Invalid phone number.\n";
    } else {
        return "";
    }
}
function validateCity(field) {
    if (field == "") {
        return "No City was entered.\n";
    } else if (!(/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/.test(field))) { 
        return "Invalid City.\n";
    } else {
        return "";
    }
}
function validateCountry(field) {
    if (field == "") {
        return "No Country was entered.\n";
    } else if (!(/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/.test(field))) { 
        return "Invalid Country.\n";
    } else {
        return "";
    }
}
