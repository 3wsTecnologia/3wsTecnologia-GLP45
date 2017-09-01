
function VprodutoDif()
{
   var ipaddress = document.URL;
   var cliente = $("input[name='cliente']:checked").val();
   var tproduto = $("input[name='glp']:checked").val();
   var quantidade = document.getElementById("quant").value;
   
   $.ajax({
      type: "POST",
      url: ipaddress + "Controller/Php/valorprodclient.php",
      data: { IdCliente: cliente, Vproduto: tproduto },
      complete: function (response) {
         if ($("input[name='glp']:checked").val())
         {
         document.getElementById("valor").value = response.responseText;
         document.getElementById("total").value = response.responseText;
         }
         if (quantidade !== "")
         {
            var valor = response.responseText;
            var tot = quantidade * valor;
            document.getElementById("total").value = tot;
         }
      },
      error: function () {
          alert("Erro");
      }
  });
   
}