	<footer class="page-footer blue darken-4">
	    <div class="container-fluid">
	      <div class="row" style="margin-bottom: 0px;">
	        <div class="col l3 s12">
	          <img src="<?php echo base_url(); ?>assets/img/ChetuGo-02.png" alt="logo" class="responsive-img responsive-img hide-on-small-only hide-on-med-only hide-on-med-and-down img-footer">
	        </div>
	        <div class="col l9 s12">         
	          <p class="grey-text text-lighten-4 footer ">Facebook</p>
	        </div>
	      </div>
	    </div>
	</footer>

  <script src="<?php echo base_url('assets/jquery-3.2.1.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/materialize.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/script-page.js'); ?>"></script>
  
  <script>
  function myMap() {
    var mapProp= {
      center:new google.maps.LatLng(18.518362, -88.302492),
      zoom:17,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      scrollwheel: false,
      navigationControl: false,
      mapTypeControl: false,
      scaleControl: false,
      draggable: false,
    };
    
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    var map=new google.maps.Map(document.getElementById("googleMap2"),mapProp);
  }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBz_n5_QFgYNuzzd4lXUIi8f2ZPpUbfsKw&callback=myMap"></script>
  </body>
</html>