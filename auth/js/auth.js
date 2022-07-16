window.onload = function () {
    let login = document.getElementById("login");
    let password = document.getElementById("password");
    let btn_sub = document.getElementById("btn_sub");

    document.onkeyup = function () {
        if (login.value.length >= 1 && password.value.length >= 1) {
            btn_sub.disabled = false;
        } else {
            btn_sub.disabled = true;
        }
    }
}