
//********************************************************

function carrinhoPrincipalIns() {
    var contador = inputs.length;
    var teste = false;
    
    var espaco = "      ";

    for (i = 0; i < contador; i++) {

        var QtdeReq = inputsQtdeReq[i].value;


        //marcado o checkbox
        if (inputs[i].checked === true) {
            if (inputs[i].type === 'checkbox' && QtdeReq !== "") {

                ArrayChecandoAdd[i] = true;
                addnoCarrinho(i);

                //alert("Adicionado o : " + i);
            }
            if (QtdeReq === "") {

                alert("Digite a quantidade requerida!");
                for (i = 0; i < contador; i++) {

                    inputs[i].checked = false;
                    setarNoInput("classInpQtdeReq1", i);
                }
            }

        }

        inputs[i].checked = false;
        setarNoInput("classInpQtdeReq1", i);



    }
}
function carrinhoPrincipalRem() {
    for (i = 0; i < inputs.length; i++) {
        var QtdeReq = inputsQtdeReq[i].value;

        //Desmarcado o checkbox
        if (inputs[i].type === 'checkbox' && inputs[i].checked === true) {
            ArrayChecandoAdd[i] = false;
            remdoCarrinho(i);
            //alert("Removido o :" + i);

        }
        inputs[i].checked = false;
    }
}
function addnoCarrinho(indice) {

    var indSTR = "" + indice;
    var codCarrinho = document.createElement("INPUT");
    codCarrinho.setAttribute("type", "hidden");
    codCarrinho.setAttribute("class", "prodCarrinhoJS");
    codCarrinho.setAttribute("name", "cod_" + indSTR);

    codCarrinho.setAttribute("value", pegardaClassDiv("codJs", indice));

    var nomCarrinho = document.createElement("INPUT");
    nomCarrinho.setAttribute("type", "hidden");
    nomCarrinho.setAttribute("class", "prodCarrinhoJS");
    nomCarrinho.setAttribute("name", "nome_" + indSTR);
    nomCarrinho.setAttribute("value", pegardaClassDiv("NomeJs", indice));

    var QtdeCarrinho = document.createElement("INPUT");
    QtdeCarrinho.setAttribute("type", "hidden");
    QtdeCarrinho.setAttribute("class", "prodCarrinhoJS");
    QtdeCarrinho.setAttribute("name", "QtdeReq_" + indSTR);
    QtdeCarrinho.setAttribute("value", pegarInputText("classInpQtdeReq1", indice));

    var precoCarrinho = document.createElement("INPUT");
    precoCarrinho.setAttribute("type", "hidden");
    precoCarrinho.setAttribute("class", "prodCarrinhoJS");
    precoCarrinho.setAttribute("name", "preco_" + indSTR);
    precoCarrinho.setAttribute("value", pegardaClassDiv("precoJs", indice));
    
    //Calculo do Preço Total de Cada Produto
    var preco = pegarInputText("precoCal", indice);
    var QtdeRed = pegarInputText("classInpQtdeReq1", indice);
    var valorTotal = parseFloat(preco) * parseFloat(QtdeRed);
    
    //Setando o Preço Total no Input
    var precoTotal = document.createElement("INPUT");
    precoTotal.setAttribute("type", "hidden");
    precoTotal.setAttribute("class", "prodCarrinhoJS");
    precoTotal.setAttribute("name", "precoTotal_" + indSTR);    
    precoTotal.setAttribute("value", valorTotal);
    
    

    //Exibição do Produto Selecionado
    var pLinhaCarrinho = document.createElement("p");
    pLinhaCarrinho.setAttribute("class", "pProdEscolhido");
    pLinhaCarrinho.setAttribute("name", "Exib_" + indSTR);
    var TextP = document.createTextNode("Produto: " + pegardaClassDiv("NomeJs", indice) + " | Quantidade: " + pegarInputText("classInpQtdeReq1", indice) + " | Preco: " + converteFloatMoeda(valorTotal) );
    pLinhaCarrinho.appendChild(TextP);
    
    

    //DivPai e o Inicial hidden para usar o insertBefore
    var divCarrinho = document.getElementById("idCarrinho1");
    var incialBefore = document.getElementsByName("InicialJS");

    //Para Exibição
    divCarrinho.insertBefore(pLinhaCarrinho, incialBefore[0]);

    //Text ocultos que iram no formulário.
    divCarrinho.insertBefore(codCarrinho, incialBefore[0]);
    divCarrinho.insertBefore(nomCarrinho, incialBefore[0]);
    divCarrinho.insertBefore(QtdeCarrinho, incialBefore[0]);
    divCarrinho.insertBefore(precoCarrinho, incialBefore[0]);
    divCarrinho.insertBefore(precoTotal, incialBefore[0]);
    //alert("Inserido Com Sucesso");


}

function remdoCarrinho(indice) {
    var DivCarrinho = document.getElementById("idCarrinho1");
    var codRem = document.getElementsByName("cod_" + indice);
    var nomeRem = document.getElementsByName("nome_" + indice);
    var QtdereqRem = document.getElementsByName("QtdeReq_" + indice);
    var precoCarrinho = document.getElementsByName("preco_" + indice);
    var precoTotal = document.getElementsByName("precoTotal_" + indice)
    var pLinhaCarrinho = document.getElementsByName("Exib_" + indice);
    
    //retirar Text Ocultos 
    DivCarrinho.removeChild(codRem[0]);
    DivCarrinho.removeChild(nomeRem[0]);
    DivCarrinho.removeChild(QtdereqRem[0]);
    DivCarrinho.removeChild(precoCarrinho[0]);
    DivCarrinho.removeChild(precoTotal[0]);

    //Retirar o Exibidor
    DivCarrinho.removeChild(pLinhaCarrinho[0]);

}
//
function pegarInputText(nomeClasse, indice) {
    var objInput = document.getElementsByClassName(nomeClasse);
    var valorReq = objInput[indice].value;
    return valorReq;
}

function setarNoInput(nomeClasse, indice) {

    var campos = document.getElementsByClassName(nomeClasse);
    campos[indice].value = "";

}

function pegardaClassDiv(nomedaDiv, indice) {
    var ValorClassDiv = document.getElementsByClassName(nomedaDiv);
//var orcamentoAssuntoForm = document.getElementById("orcamentoAssuntoForm");
//orcamentoAssuntoForm.value = ValorDiv[0].innerText;
    valor = ValorClassDiv[indice].innerText;
    return valor;
}


function converteFloatMoeda(valor){
      var inteiro = null, decimal = null, c = null, j = null;
      var aux = new Array();
      valor = ""+valor;
      c = valor.indexOf(".",0);
      //encontrou o ponto na string
      if(c > 0){
         //separa as partes em inteiro e decimal
         inteiro = valor.substring(0,c);
         decimal = valor.substring(c+1,valor.length);
      }else{
         inteiro = valor;
      }
      
      //pega a parte inteiro de 3 em 3 partes
      for (j = inteiro.length, c = 0; j > 0; j-=3, c++){
         aux[c]=inteiro.substring(j-3,j);
      }
      
      //percorre a string acrescentando os pontos
      inteiro = "";
      for(c = aux.length-1; c >= 0; c--){
         inteiro += aux[c]+'.';
      }
      //retirando o ultimo ponto e finalizando a parte inteiro
      
      inteiro = inteiro.substring(0,inteiro.length-1);
      
      decimal = parseInt(decimal);
      if(isNaN(decimal)){
         decimal = "00";
      }else{
         decimal = ""+decimal;
         if(decimal.length === 1){
            decimal = decimal+"0";
         }
      }
      
      
      valor = "R$ "+inteiro+","+decimal;
      
      
      return valor;

   }