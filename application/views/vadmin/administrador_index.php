<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/style2.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/font/material-design-icons/Material-Design-Icons.woff">
    <link rel="stylesheet" type="text/css" href="assets/css/materialize.css">
    
 
</head>

<body>

<!--   <ul id="slide-out" class="side-nav fixed z-depth-2">
    <li class="center no-padding">
      <div class="indigo darken-2 white-text" style="height: 180px;">
        <div class="row">
          <img style="margin-top: 5%;" width="100" height="100" src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463990208/photo_dkkrxc.png" class="circle responsive-img" />

          <p style="margin-top: -13%;">
            Tirth Patel
          </p>
        </div>
      </div>
    </li>

    <li id="dash_dashboard"><a class="waves-effect" href="#!"><b>Dashboard</b></a></li>

    <ul class="collapsible" data-collapsible="accordion">
      <li id="dash_users">
        <div id="dash_users_header" class="collapsible-header waves-effect"><b>Users</b></div>
        <div id="dash_users_body" class="collapsible-body">
          <ul>
            <li id="users_seller">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Seller</a>
            </li>

            <li id="users_customer">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Customer</a>
            </li>
          </ul>
        </div>
      </li>

      <li id="dash_products">
        <div id="dash_products_header" class="collapsible-header waves-effect"><b>Products</b></div>
        <div id="dash_products_body" class="collapsible-body">
          <ul>
            <li id="products_product">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Products</a>
              <a class="waves-effect" style="text-decoration: none;" href="#!">Orders</a>
            </li>
          </ul>
        </div>
      </li>

      <li id="dash_categories">
        <div id="dash_categories_header" class="collapsible-header waves-effect"><b>Categories</b></div>
        <div id="dash_categories_body" class="collapsible-body">
          <ul>
            <li id="categories_category">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Category</a>
            </li>

            <li id="categories_sub_category">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Sub Category</a>
            </li>
          </ul>
        </div>
      </li>

      <li id="dash_brands">
        <div id="dash_brands_header" class="collapsible-header waves-effect"><b>Brands</b></div>
        <div id="dash_brands_body" class="collapsible-body">
          <ul>
            <li id="brands_brand">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Brand</a>
            </li>

            <li id="brands_sub_brand">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Sub Brand</a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </ul>
 -->
  <header>
    <ul class="dropdown-content" id="user_dropdown">
      <li><a class="indigo-text" href="#!">Perfil</a></li>
      <li><a class="indigo-text" href="#!">Salir</a></li>
    </ul>

    <nav class="indigo" role="navigation">
      <div class="nav-wrapper">
        <a data-activates="slide-out" class="button-collapse show-on-" href="#!"><img style="margin-top: 17px; margin-left: 5px;" src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463989873/smaller-main-logo_3_bm40iv.gif" /></a>

        <ul class="right hide-on-med-and-down">
          <li>
            <a class='right dropdown-button' href='' data-activates='user_dropdown'><i class=' material-icons'>account_circle</i></a>
          </li>
        </ul>

        <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      </div>
    </nav>

    <nav>
      <div class="nav-wrapper indigo darken-2">
        <a style="margin-left: 20px;" class="breadcrumb" href="#!">Admin</a>
        <a class="breadcrumb" href="#!">Home</a>

        <div style="margin-right: 20px;" id="timestamp" class="right"></div>
      </div>
    </nav>
  </header>

  <main>
    <div class="container">
          <div class="row">
      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
              <b>Sitios</b>
            </div>
          </div>

          <div class="row">
            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="indigo-text text-lighten-1 large material-icons">add</i>
                <span class="indigo-text text-lighten-1"><h5>Agregar</h5></span>
              </div>
            </a>
            <div class="col s1">&nbsp;</div>
            <div class="col s1">&nbsp;</div>

            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="indigo-text text-lighten-1 large material-icons">search</i>
                <span class="indigo-text text-lighten-1"><h5>Ver</h5></span>
              </div>
            </a>
          </div>
        </div>
      </div>
<!-- inicio  mi modulo de agregar y ver-->
      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
              <b>Categorías</b>
            </div>
          </div>
          <div class="row ">
            <a class="modal-trigger" href="#modal1">
              <div style="padding: 30px;" class="grey lighten-3 col s5 ">
                <i class="indigo-text text-lighten-1 large material-icons">add</i>
                <span class="indigo-text text-lighten-1"><h5>Agregar</h5></span>
              </a>
              <a class="modal-trigger" href="#modalVer">
                <div style="padding: 30px;" class=" grey lighten-3 col s5 waves-effect">
                  <i class="indigo-text text-lighten-1 large material-icons">search</i>
                  <span class="indigo-text text-lighten-1"><h5>Ver</h5></span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div id="modal1" class="modal">
        <div class="modal-content">
          <h4>Agregar Categoria</h4>

          <form id="formCat" method="POST">
            <label>Numero de la Categoria:</label>
            <input type="number" name="numeroCat" id="numeroCat" placeholder="numero"  >
            <label>Categoria:</label>
            <input type="text" name="nombrec" id="nombrec" placeholder="categoria">

            <div class="modal-footer">
              <button type="submit" id="bottomR" onclick="insert_categoria()" class="btn-flat">Guardar</button>                                                     
            </div>
          </form>
        </div>
      </div>
<!-- modal de ver -->
      <div id="modalVer" class="modal">
        <div class="modal-content">
          <h4>Ver Categorias</h4>

          <table class="responsive-table">
            <thead>
              <tr>
                <th>Numero de Categorias</th>
                <th>Nombre de las Categorias</th>
              </tr>
            </thead>
            <?php foreach ($categorias as $categoia): ?>
              
            <tbody>              
              
                <th><?php echo $categoia->NumeroCategorias?></th>
                <th><?php echo $categoia->NombreCategorias?></th>
              
            </tbody>
            <?php endforeach ?>
          </table>
        </div>
      </div>

<!--  fin de mi modulo de agregar y ver -->
    <div class="row">
      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
              <b>Tags</b>
            </div>
          </div>

          <div class="row">
            <a href="http://localhost/gitchetugo/administrador/admin_tags">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="indigo-text text-lighten-1 large material-icons">add</i>
                <span class="indigo-text text-lighten-1"><h5>Agregar</h5></span>
              </div>
            </a>

            <div class="col s1">&nbsp;</div>
            <div class="col s1">&nbsp;</div>

            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="indigo-text text-lighten-1 large material-icons">search</i>
                <span class="indigo-text text-lighten-1"><h5>Ver</h5></span>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
              <b>Sitios Cercanos</b>
            </div>
          </div>
          <div class="row">
            <a href="http://localhost/gitchetugo/administrador/agregarsc">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="indigo-text text-lighten-1 large material-icons" >add</i>
                <span class="indigo-text text-lighten-1"><h5>Agregar</h5></span>
              </div>
            </a>
            <div class="col s1">&nbsp;</div>
            <div class="col s1">&nbsp;</div>

            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="indigo-text text-lighten-1 large material-icons">search</i>
                <span class="truncate indigo-text text-lighten-1"><h5>Ver</h5></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </main>

  <footer class="indigo page-footer">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h5 class="white-text">ChetuGo 2017</h5>
          <ul id='credits'>
            <li>
              Este trabajo fue realizado por alumnos de Ingeniería en Tecnologías de la Información y comunicaciones del Instituto Tecnológico de Chetumal y colaboradores de fotografía y video para la materia de Mercadotecnia en Internet.
            </li>
          
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
         <span>Realizado por<a style='font-weight: bold;' href="·" target="_blank"> Equipo 1</a></span>
      </div>
    </div>
  </footer>
  
  <script src="material.js" type="text/javascript" ></script>
  <script src="<?php echo base_url('assets/js/modal.js');?>"></script>
  <script src="<?php echo base_url('assets/jquery-3.2.1.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/materialize.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/modal.js') ?>"></script>
  


<script>

   $(document).ready(function() {

  $('.modal').modal();


   

});

 

</script>




 
 

</body>

</html>