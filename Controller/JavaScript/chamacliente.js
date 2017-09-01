
function chamarCliente() {
   var ipaddress = document.URL;
   var cnpj = document.getElementById("CNPJ").value;
   var nome = document.getElementById("nome").value;
   $.ajax({
      type: "POST",
      url: ipaddress + "Controller/Form/pesqcli.php",
      data: { pesqcnpj: cnpj, pesqnome: nome },
      complete: function (response) {
         $("#pesqcliente").html(response.responseText);
      },
      error: function () {
          alert("Erro");
      }
  });  

  return false;
}