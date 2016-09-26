var inputs = document.getElementsByName('checkprod'); //Variavel dos Checkboxs
var ArrayChecandoAdd = new Array(inputs.length); //Array para verificar todos os checkboxs

var inputsQtdeReq = document.getElementsByName('qtdeRequerida');
for (i = 0; i < inputs.length; i++) { //valor Inicial para o Array 
    ArrayChecandoAdd[i] = false; //boleano para verificar se ta checkado ou nao
}

/*var divCarrinho = document.getElementsByClassName("divCarrinho");
document.getElementsByClassName("CarCodigo").innerHTML = "<p> codigo </p>";
document.getElementsByClassName("CarNome").innerHTML = "<p>nome</p>";
document.getElementsByClassName("CarQtdeReq").innerHTML = "<p> qtdeReq</p>";*/


