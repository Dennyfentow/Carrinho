/* global formincluir, formalterar, formExcluir, formConsultar */

function validar() {
    var n = formincluir.n.value;
    var qt = formincluir.qt.value;
    var pr = formincluir.pr.value;
    var cod = formincluir.cod.value;


    if (n === "") {
        alert("Preencha o campo nome do item de estoque!");
        formincluir.n.focus();
        return false;
    }
    if (n.length >= 50) {
        alert("Campo nao pode possuir mais de 50 caracteres");
        formincluir.n.focus();
        return false;
    }
    if (qt === "") {
        alert("Preencha o campo quantidade em estoque!");
        formincluir.qt.focus();
        return false;
    }
    if (qt.length >= 4) {
        alert("Campo nao pode conter mais de 4 caracteres!");
        formincluir.qt.focus();
        return false;
    }
    if (pr === "") {
        alert("Preencha o campo reposicao!");
        formincluir.pr.focus();
        return false;
    }
    if (pr.length >= 4) {
        alert("Campo nao pode conter mais de 4 caracteres!");
        formincluir.pr.focus();
        return false;
    }
    if (cod === "") {
        alert("Preencha o campo fornecedor!");
        formincluir.cod.focus();
        return false;
    }
    if (cod.length >= 4) {
        alert("Campo nao pode conter mais de 4 caracteres!");
        formincluir.cod.focus();
        return false;
    }

}
function validar2() {
    var codea = formalterar.codea.value;
    var na = formalterar.na.value;
    var qta = formalterar.qta.value;
    var pra = formalterar.pra.value;
    var coda = formalterar.coda.value;


    if (codea === "") {
        alert("campo codigo do registro é obrigatorio!");
        formalterar.codea.focus();
        return false;
    }

    if (codea.length >= 4) {
        alert("Campo nao pode possuir mais de 50 caracteres");
        formalterar.codea.focus();
        return false;
    }

    if (na.length >= 50) {
        alert("Campo nao pode conter mais de 4 caracteres!");
        formalterar.na.focus();
        return false;
    }

    if (qta.length >= 4) {
        alert("Campo nao pode conter mais de 4 caracteres!");
        formalterar.qta.focus();
        return false;
    }

    if (pra.length >= 4) {
        alert("Campo nao pode conter mais de 4 caracteres!");
        formalterar.pra.focus();
        return false;
    }

    if (coda.length >= 4) {
        alert("Campo nao pode conter mais de 4 caracteres!");
        formalterar.coda.focus();
        return false;
    }
}
function validar3() {
    var codee = formExcluir.codee.value;

    if (codee === "") {
        alert("Preencha o campo codigo a ser excluido!");
        formExcluir.codee.focus();
        return false;
    }
    if (codee.length >= 4) {
        alert("Campo nao pode conter mais de 4 caracteres!");
        formExcluir.codee.focus();
        return false;
    }
    var x;
    var r = confirm("deseja realmente excluir esse item!");
    if (r == false)
    {
        x = "valor nao excluido!";
        return false;
    }
}
function validar4() {
    var codec = formConsultar1.codec.value;

    if (codec === "") {
        alert("Preencha o campo codigo para realizar a consulta!");
        formConsultar1.codec.focus();
        return false;
    }
    if (codec.length >= 4) {
        alert("Campo nao pode conter mais de 4 caracteres!");
        formConsultar1.codec.focus();
        return false;
    }
}