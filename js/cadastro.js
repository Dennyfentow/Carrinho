function validar_cadastro() {
    var usuario = document.getElementsByName("usuario").value;
    var senha = document.getElementsByName("senha").value;
    var email = document.getElementsByName("email").value;
    var cidade = document.getElementsByName("cidade").value;
    var estado = document.getElementsByName("estado").value;

    if (usuario === null ||usuario === " ") {
        alert("Preencha o campo nome!");
        document.formcadastro.usuario.focus();
        return false;
    }
    if (usuario.length >= 15) {
        alert("Campo nao pode possuir mais de 15 caracteres");
        document.formcadastro.usuario.focus();
        return false;
    }
    if (senha === null || senha=== " ") {
        alert("Preencha o campo senha!");
        document.formcadastro.senha.focus();
        return false;
    }
    if (senha.length >= 15) {
        alert("Campo nao pode conter mais de 15 caracteres!");
        document.formcadastro.senha.focus();
        return false;
    }
    if (email === " " || email===null ) {
        alert("Preencha o campo email!");
        document.formcadastro.email.focus();
        return false;
    }
    if (email.length >= 4) {
        alert("Campo nao pode conter mais de 30 caracteres!");
        document.formcadastro.email.focus();
        return false;
    }
    if (cidade === " " || cidade === null) {
        alert("Preencha o campo cidade!");
        document.formcadastro.cidade.focus();
        return false;
    }
    if (cidade.length >= 20) {
        alert("Campo nao pode conter mais de 20 caracteres!");
        document.formcadastro.cidade.focus();
        return false;
    }
    
    if (estado === " " || estado === null) {
        alert("Preencha o campo cidade!");
        document.formcadastro.estado.focus();
        return false;
    }
    if (estado.length >= 2) {
        alert("Campo nao pode conter mais de 2 caracteres!");
        document.formcadastro.estado.focus();
        return false;
    }

}