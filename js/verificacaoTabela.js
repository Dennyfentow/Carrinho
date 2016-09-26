// JavaScript Document
//Teste de clicks nos itens da tabela de Pediddos

	var tdValor = document.querySelectorAll(".LinhaProdutos td");
	var checkboxes = document.getElementsByName("checkprod");


	var cont = tdValor.length;
	var x = 0;
	
	for(x = 0;x<=cont;x++){
		tdValor[x].click = function() {
			tdValor[x].addEventListener("click", function (e) {
				checkboxes[x].checked = true;
			}
		}
	}
		
	
