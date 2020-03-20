function mostrarSenha() {
    var tipo = document.getElementById("senha");
    if (tipo.type == "password") {
        tipo.type = "text";
    } else {
        tipo.type = "password";
    }
}

function mostrarSenha1() {
    var tipo = document.getElementById("novasenha");
    if (tipo.type == "password") {
        tipo.type = "text";
    } else {
        tipo.type = "password";
    }
}

function mostrarSenha2() {
    var tipo = document.getElementById("confirmarsenha");
    if (tipo.type == "password") {
        tipo.type = "text";
    } else {
        tipo.type = "password";
    }
}