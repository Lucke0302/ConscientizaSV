$(document).ready(function()
  {
    $.ajax({
        url: "../../controller/getoptions/controller.php",
        success: function(retorno)
        { 
            $('#pessoas').html(retorno);
        }
    });   
 });