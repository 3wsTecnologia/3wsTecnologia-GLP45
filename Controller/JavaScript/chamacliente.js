
function chamarPhpAjax() {
   var nome = document.getElementById("nome").value;
   var rua = document.getElementById("rua").value;
   var numero = document.getElementById("numero").value;
   var fone = document.getElementById("fone").value;
   $.ajax({
      type: "POST",
      url:"http://192.168.25.119:80/Controller/Form/pesqcli.php",
      data: { pesqnome: nome, pesqrua: rua, pesqnumero: numero , pesqfone: fone},
      complete: function (response) {
         $("#pesqcliente").html(response.responseText);
      },
      error: function () {
          alert("Erro");
      }
  });  

  return false;
}