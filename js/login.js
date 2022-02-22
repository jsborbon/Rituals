
function mostrarContrasena(){
    var tipo = document.getElementById("password");
    var hideP = document.getElementById("hidePassword");
    var showP = document.getElementById("showPassword");

    if(tipo.type == "password"){
        tipo.type = "text";
        hideP.style.display='block';
        showP.style.display='none';
    }else{
        tipo.type = "password";
        hideP.style.display='none';
        showP.style.display='block';
    }
}
function loginFunc(){
    var user = document.login.user.value;
    var pass = document.login.password.value;

    if(user=="user" && pass=="password"){
        window.alert("Bienvenido!");
    }else{
        window.alert("Contraseña Incorrecta");

    }
}