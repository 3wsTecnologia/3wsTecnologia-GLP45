function validarRadio()
{
 if(document.getElementById('idCodigo').checked === true && document.getElementById('tx_codigo').value===""){
   window.alert('Necessário informar Código do cliente');   
   return false;
 }else{
if(document.getElementById('idNome').checked === true && document.getElementById('tx_nome').value===""){
   window.alert('Necessário informar Nome do cliente');   
   return false;
 }else{
 if(document.getElementById('idFone').checked === true && document.getElementById('tx_fone').value===""){
   window.alert('Necessário informar telefone do cliente');   
   return false;
 }else{
   return true;
 }
 }
 }
}
function validarVasilhame()
{
    if(document.getElementById('cristal').value === ""  && document.getElementById('pet').value === "" && document.getElementById('branco').value === "" && 
            document.getElementById('outros').value === "") {
       window.alert('Necessário informar Quantidade de pelo menos um tipo de garrafão');   
       return false;
     }else{
       return true;
}

}
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}