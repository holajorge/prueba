
// SCRIPT DE VALIDACION

 function insert_categoria(){
    var numeroCat  = document.getElementById('numeroCat').value;      
    if(numeroCat === ""){
      alert("Oops...NUMERO ES UN DATO OBLIGATORIO");              
      return false;               
    }      
    var nombreCat  = document.getElementById('nombrec').value;
    if(nombreCat === ""){               
     alert("Oops... EL NOMBRE DE LA CATEGORIA ES UN DATO OBLIGATORIO"); 
     return false;
   } else if(nombreCat.length>100){                  
    alert("Oops... EL NOMBRE DE LA CATEGORIA MUY LARGOS"); 
    return false;
  }   

$.ajax({
 type: "POST",
 url:  "http://localhost/prueba/administrador/guardarCategoria",
             data: $("#formCat").serialize(), 
             success: function(respuesta) 
             {
               if(respuesta)
               {
                alert("HECHO!", "CATEGORIA AGREGADA!", "success");
                setTimeout(function() 
                {
                  window.location.href = "http://localhost/prueba/administrador/administrador_index";
                }, 3000);     
              }
            }
          });

}

// function ajaxdoctor(id) 
// {
//   var nombre=document.getElementById("nombre"+id).innerHTML;
//   var Apellidoss=document.getElementById("Apellido"+id).innerHTML;
//   var correo=document.getElementById("Correo"+id).innerHTML;
//   var cedula=document.getElementById("Cedula"+id).innerHTML;
//         // var consultorio=document.getElementById("consultorio"+id).innerHTML;
//         var usuario=document.getElementById("Usuario"+id).innerHTML;
//         var contraseña=document.getElementById("Password"+id).innerHTML;

//         document.getElementById("idEditar").innerHTML=id;
//         document.getElementById("idEditar").value=id;
//         document.getElementById("nombreEditar").value=nombre;
//         document.getElementById("apellidoEditar").value=Apellidoss;
//         document.getElementById("correoEditar").value=correo;
//         document.getElementById("cedulaEditar").value=cedula;
//         // document.getElementById("consultorioEditar").value=consultorio;
//         document.getElementById("usuarioEditar").value=usuario;
//         document.getElementById("passwordEditar").value=contraseña;

//       }
