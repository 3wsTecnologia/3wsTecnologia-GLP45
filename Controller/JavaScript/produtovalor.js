
function produto() {
   var ipaddress = document.URL;
   var quantidade = document.getElementById("quant").value;
   var tproduto = $("input[name='glp']:checked").val();
   $.ajax({
      type: "POST",
      url: ipaddress + "Controller/Php/produtovalor.php",
      data: { Vproduto: tproduto },
      complete: function (response) {
         document.getElementById("valor").value = response.responseText;
         document.getElementById("total").value = response.responseText;
         
         if (quantidade !== "")
         {
            var valor = response.responseText;
            var tot = quantidade * valor;
            document.getElementById("total").value = tot;
         }
         if ($("input[name='glp']:checked").val())
         {
            $('input[name=cliente]').attr('checked',false);
         }
      },
      error: function () {
          alert(ipaddress);
      }
  });  
   
}