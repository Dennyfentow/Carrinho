/**
 * Botão Proximo1
 * Alternativo... Mudar em index.html
 * document.getElementById("btnProximo1").onclick = function ()
 */
function BotaoProximo1() {
    var radios = document.getElementsByName("rads");
    if ((radios[0].checked === false) && (radios[1].checked === false) && (radios[2].checked ===false)) { //Caso nenhuma opção seja selecionada
        alert("Por Favor Selecione Uma Opção!");
        return false;
    }

    if (radios[0].checked) {
        window.open("ManutencaoEstoque.php", '_parent');  
    }
    if (radios[1].checked) {
        window.open("ManutencaoFornecedor.php", '_parent');  
    }
    if (radios[2].checked) {
        window.open("RealizarPedido.php", '_parent');
    }
}
