var fields = {};

document.addEventListener("DOMContentLoaded", function() {
    fields.name = document.getElementById('name');
    fields.lastname = document.getElementById('lastname');
    fields.email = document.getElementById('email');
    fields.phone = document.getElementById('phone');
    fields.message = document.getElementById('message');
});

function isNotEmpty(value) {
    if (value == null || typeof value == 'undefined' ) return false;
        return (value.length > 0);
}

function isNumber(num) {
    return !isNaN(num);
}

function isEmail(email) {
    let regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    return regex.test(String(email).toLowerCase());
}

function fieldValidation(field, validationFunction) {
    if (field == null) return false;
   
    let isFieldValid = validationFunction(field.value);
    return isFieldValid;
}


function isValid() {
    var valid = true;
    
    valid &= fieldValidation(fields.name, isNotEmpty);
    valid &= fieldValidation(fields.lastname, isNotEmpty);
    valid &= fieldValidation(fields.email, isEmail);
    valid &= fieldValidation(fields.phone, isNumber);
    valid &= fieldValidation(fields.message, isNotEmpty);   
    return valid;
}

class User {
    constructor(firstName, lastName, email, phone, message) {
    this.firstName = firstName;
    this.lastName = lastName;
    this.email = email;
    this.phone = phone;
    this.message = message;
    }
}

function sendContact() {
    if(isValid()) {
        let user = new User(name.value, lastname.value, email.value, phone.value, message.value);
        alert("${user.firstName}, your message has been sent")
    } else {
        alert("There was a mistake, please re-check your input")
    }
}