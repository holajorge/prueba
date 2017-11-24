<h3 class="space-top-1">TAGS</h3>
<hr class="space-bottom-1">
<form accept-charset="utf-8" method="POST" id="tags" action="guarda_tags">
<div class="row space-bottom-1">
  <div class="row">
    <form class="col s12">
        <div class="input-field col s6">
          <input placeholder="Tags" id="nombreTags" name="nombreTags" type="text">
          <label for="tags"></label>
        </div>
        <button onclick="guardar_tags()">Guardar</button>
    </form>
  </div>
</div>
</form>
<script>
    $("#tags").on("submit", function(e) {
    e.preventDefault();
    var nombreTags = $("#nombreTags").val();
          function guardar_tags(){
                    $.ajax({
                        url: "http://localhost/gitchetugo/administrador/guarda_tags",
                        type: "POST",
                        data: {
                            nombreTags: nombreTags
                        },
                    success: function(respuesta) {
                        var obj = JSON.parse(respuesta);
                   
                        if (obj.respuesta == true) {
                            alert(":v");
                        }else{
                            alert("error");
                        }
                        
                    }
                    });
            
                }
 </script>