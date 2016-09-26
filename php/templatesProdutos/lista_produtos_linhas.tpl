<tr class="LinhaProdutos">
    <td>
    	<input type="checkbox" id="tu" name="checkprod"/>
     </td>
    <td name="tdprod" onclick="verificarTab()">
		    <div class="codJs">[@codigoProd]</div>
    </td>
    <td>
	    <div id="idProd" class="NomeJs">[@nomeProd]</div>
    </td>
    <td id="idProd" class="QtdeJS">[@qtde]</td>
    <td id="idProd" class="ptoJS">[@pontoRep]</td>
    <td id="idProd" class="precoCSS">
    <div class="precoJs">R$ [@preco]</div> 
    <input type="hidden" class="precoCal" value="[@precoCal]"/></td>
    <td>
        <input type="text" size="3" class="classInpQtdeReq1" id="idqtdeReq" style="text-align: center;" name="qtdeRequerida"  onsubmit="carrinhoPrincipal()"/>
    </td>
    <td></td>
</tr>