let password = document.getElementById("password");
let confirm_password = document.getElementById("confirm_password");

function validate_password() {
    if (password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Password not matched");
    }
    else {
        confirm_password.setCustomValidity('');
    }
};

password.onchange = validate_password;
confirm_password.onkeyup = validate_password;