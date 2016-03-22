$(document).ready(function() {
   $("#btn").click(function(){
      $.ajax({
	    type: "POST",
	    url: "../modulo1/registroProyecto.php",
	    success: function(a) {
                $('#dere').html(a);
	    }
       });
   });

});