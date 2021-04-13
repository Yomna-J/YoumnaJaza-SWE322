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

function validateUsername(field) {
  if (field == "") {
    return "Empty Username.\n";
  } else if (field.length < 3 || field.length > 15) {
    return "Username must be at least 3 characters. \n";
  } else {
    return "";
  }
}

function validatePassword(field) {
  if (field == "") {
    return "Empty Password.\n";
  } else if (field.length < 8) {
    return "Password must be at least 8 characters.\n";
  } else if (!/[a-z]/.test(field) || !/[A-Z]/.test(field) || !/[0-9]/.test(field) || !/[@$#]/.test(field)) {
    return "Password requires one of each a-z, A-Z, symbols, and 0-9.\n";
  } else {
    return "";
  }
}

function validateEmail(field) {
  if (field == "") {
    return "Email is empty.\n";
  } else if (!((field.indexOf(".") > 0 && field.indexOf("@") > 0) ||/[^a-zA-Z0-9.@_-]/.test(field))) {
    return "The Email address is invalid.\n";
  } else {
    return "";
  }
}
