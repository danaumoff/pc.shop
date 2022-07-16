window.onload = function () {
    let name = document.getElementById("name");
    let surname = document.getElementById("surname");
    let login = document.getElementById("login");
    let email = document.getElementById("email");
    let password = document.getElementById("password");
    let rp_password = document.getElementById("rp_password");
    let btn_sub = document.getElementById("btn_sub");


    document.onkeyup = function () {
        if (name.value.length >= 1 && surname.value.length >= 1 && login.value.length >= 1 &&
            email.value.length >= 1 && password.value.length >= 1 && rp_password.value.length >= 1) {
            btn_sub.disabled = false;
        } else {
            btn_sub.disabled = true;
        }
    }
}


