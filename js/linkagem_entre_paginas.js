function VoltarPrincipal() {
    window.open("pagina_inicial.php", '_parent');
}

function VoltarEstoque() {
    window.open("ManutencaoEstoque.php", '_parent');
}

function VoltarFornecedor() {
    window.open("ManutencaoFornecedor.php", '_parent');
}
function irIndex() {
    window.open("../index.html", '_parent');
}

function CertezaLogout(){
    var x;
    var r = confirm("Deseja Realmente Realizar Logout!");
    if (r == false){
        x = "valor nao excluido!";
        return false;
    }
}
function VoltarPrincipalPHP() {
    
    window.open("../pagina_inicial.php", '_parent');
    
}
function VoltarPedidoPHP() {
    
    window.open("../RealizarPedido.php", '_parent');
    
}


