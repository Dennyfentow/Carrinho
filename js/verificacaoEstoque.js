/**
 * Radios
 */
var radios = document.getElementsByName("MEstoque");
function MudarEstadoTodos() {
    MudarEstadoIncluir('DivInserir');
    MudarEstadoAlterar('DivAlterar');
    MudarEstadoExluir('DivExcluir');
    MudarEstadoConsultar('DivConsultar');
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