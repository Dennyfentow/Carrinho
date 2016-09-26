/* global formalterar, formincluir2, formExcluir, formConsultar, frmConsultar1 */

/**
 * Radios
 */
var radios = document.getElementsByName("MFornecedor");
function MudarEstadoTodos() {
    MudarEstadoIncluir('DivInserir');
    MudarEstadoAlterar('DivAlterar');
    MudarEstadoExluir('DivExcluir');
    MudarEstadoConsultar('DivConsultar')
}
function MudarEstadoIncluir(el) {
    if (radios[0].checked) {
        document.getElementById(el).style.display = 'block';
    } else {
        document.getElementById(el).style.display = 'none';
    }
}
function MudarEstadoAlterar(el) {

    if (radios[1].checked) {
        document.getElementById(el).style.display = 'block';
    } else {
        document.getElementById(el).style.display = 'none';
    }
}
function MudarEstadoExluir(el) {

    if (radios[2].checked) {
        document.getElementById(el).style.display = 'block';
    } else {
        document.getElementById(el).style.display = 'none';
    }
}
function MudarEstadoConsultar(el) {

    if (radios[3].checked) {
        document.getElementById(el).style.display = 'block';
    } else {
        document.getElementById(el).style.display = 'none';
    }
}


function validar() {
    var nf = formincluir2.nf.value;
    var ef = formincluir2.ef.value;
    var tf = formincluir2.tf.value;
    var cf = formincluir2.cf.value;


    if (nf === "") {
        alert("Preenencha o campo nome do fornecedor!");
        formincluir2.nf.focus();
        return false;
    }
    if (nf.length >= 50) {
        alert("Campo nao pode possuir mais de 50 caracteres");
        formincluir2.nf.focus();
        return false;
    }
    if (ef === "") {
        alert("Preencha o campo endereço!");
        formincluir2.ef.focus();
        return false;
    }
    if (ef.length >= 50) {
        alert("Campo nao pode conter mais de 50 caracteres!");
        formincluir2.ef.focus();
        return false;
    }
    if (tf === "") {
        alert("Preencha o campo telefone!");
        formincluir2.tf.focus();
        return false;
    }
    if (tf.length >= 50) {
        alert("Campo nao pode conter mais de 50 caracteres!");
        formincluir2.tf.focus();
        return false;
    }
    if (cf === "") {
        alert("Preencha o campo contatos!");
        formincluir2.cf.focus();
        return false;
    }
    if (cf.length >= 50) {
        alert("Campo nao pode conter mais de 50 caracteres!");
        formincluir2.cf.focus();
        return false;
    }

}
function validar22() {
    var codfa = formalterar2.codfa.value;
    var nfa = formalterar2.nfa.value;
    var efa = formalterar2.efa.value;
    var tfa = formalterar2.tfa.value;
    var cfa = formalterar2.cfa.value;

    if (codfa === "" || codfa === null) {
        alert("Campo obrigatorio!");
        formalterar2.codfa.focus();
        return false;
    }
    if (codfa.length >= 4) {
        alert("Campo nao pode possuir mais de 4 caracteres");
        formalterar2.codfa.focus();
        return false;
    }
    if (nfa.length >= 50) {
        alert("Campo nao pode possuir mais de 50 caracteres");
        formalterar2.nfa.focus();
        return false;
    }

    if (efa.length >= 50) {
        alert("Campo nao pode conter mais de 50 caracteres!");
        formalterar2.efa.focus();
        return false;
    }

    if (tfa.length >= 15) {
        alert("Campo nao pode conter mais de 15 caracteres!");
        formalterar2.tfa.focus();
        return false;
    }

    if (cfa.length >= 50) {
        alert("Campo nao pode conter mais de 50 caracteres!");
        formalterar2.rfa.focus();
        return false;
    }
}
function validar33() {
    var codfe = formExcluir2.codfe.value;

    if (codfe === "") {
        alert("Preencha o campo codigo a ser excluido!");
        formExcluir2.codfe.focus();
        return false;
    }
    if (codfe.length >= 4) {
        alert("Campo nao pode conter mais de 4 caracteres!");
        formExcluir2.codfe.focus();
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
function validar44() {
    var codfc = document.formConsultar22.codfc.value;

    if (codfc === "") {
        alert("Preencha o campo codigo para realizar a consulta!");
        document.formConsultar22.codfc.focus();
        return false;
    }
    if (codfc.length >= 4) {
        alert("Campo nao pode conter mais de 4 caracteres!");
        document.formConsultar22.codfc.focus();
        return false;
    }
}