<?php
  session_start();
  $CIusuario = $_SESSION['ci'];
  $usuario = $_SESSION['user'];
  $IDrol = $_SESSION['rol'];
  $carrera = $_SESSION['carrera'];
  if($carrera=='1'){
    $m = 'Física';
  }else if($carrera=='2'){
    $m = 'Informática';
  }else{
    $m = 'Matemática';
  }

  if($IDrol=='1'){
    $r = 'Director';
  }else {
    $r = 'Estudiante';
  }

?>
<?php
  //conexion
  include('../conexion.php');
  //la consulta
  $sql_consulta ="SELECT * 
                  FROM persona 
                  where ci like '$CIusuario'";
  $resultado = mysqli_query($conexion ,$sql_consulta);
  $filas = mysqli_fetch_array($resultado);
  //print_r($filas);
  if($filas[4]=="01"){
    $dep='Chuquisaca';
  }elseif($filas[4]=="02"){
    $dep='La Paz';
  }elseif($filas[4]=="03"){
    $dep='Cochabamba';
  }elseif($filas[4]=="04"){
    $dep='Oruro';
  }elseif($filas[4]=="05"){
    $dep='Potosí';
  }elseif($filas[4]=="06"){
    $dep='Tarija';
  }elseif($filas[4]=="07"){
    $dep='Santa Cruz';
  }elseif($filas[4]=="08"){
    $dep='Beni';
  }else{
    $dep='Pando';
  }
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo 'Inicio de sesion en '.$m;?></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<?php
  if($carrera=='1'){
      echo '<link rel="stylesheet" type="text/css" href="../css/style1.css"/>';
  }elseif($carrera=='2'){
      echo '<link rel="stylesheet" type="text/css" href="../css/style2.css"/>';
  }else{
      echo '<link rel="stylesheet" type="text/css" href="../css/style3.css"/>';
  }
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.min.css"/>
<link rel="stylesheet" type="text/css" href="../css/owl.carousel.min.css"/>
<link rel="stylesheet" type="text/css" href="../css/owl.theme.default.min.css"/>

<!-- Font Google -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container"> <a class="navbar-brand navbar-logo" href="#"> <img src="../images/logo-white-user.png" alt="logo" class="logo-1"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="fas fa-bars"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"> <a class="nav-link" href="" data-scroll-nav="0">Home</a> </li>  
        <li class="nav-item"> <a class="nav-link" href="" data-scroll-nav="2">Administracion</a> </li>
        <li class="nav-item"> <a class="nav-link" href="../cerrar_sesion.php">Cerrar Sesión</a> </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar --> 
<!-- Banner Image -->
<div class="banner text-center" data-scroll-index='0'>
  <div class="banner-overlay">
    <div class="container">
      <h1 class="text-capitalize">Carrera de <?php echo $m;?></h1>
      <p>Bienvenido, has logrado iniciar sesion</p>
    </div>
  </div>
</div>
<!-- End Banner Image --> 
<!--Administracion-->
<div class="about-us section-padding" data-scroll-index='2'>
  <div class="container">
    <div class="row">
      <div class="col-md-12 section-title text-center">
        <h3>Bienvenido</h3>
        <span class="section-title-line"></span> </div>
      <div class="col-md-6 mb-50">
        <div class="section-info">
          <div class="sub-title-paragraph">
            <h4>Administración de <?php echo $r;?></h4>
            <h5>Usuario : <?php echo $usuario;?></h5>
            <h5>Carrera : <?php echo $m;?></h5>
            <h5>Nombre : <?php echo $filas[1];?></h5>
            <h5>Apellido : <?php echo $filas[2];?></h5>
            <h5>CI : <?php echo $filas[0];?></h5>
            <h5>Fecha Nacimiento : <?php echo $filas[3];?></h5>
            <h5>Departamento : <?php echo $dep;?></h5>
          </div>
          <a href="" class="anchor-btn"  onClick="">Ver Notas <i class="fas fa-arrow-right pd-lt-10"></i></a> </div>
      </div>
      <div class="col-md-6 mb-50">

      </div>
    </div>
  </div>
</div>
<!-- Testimonials -->
<div class="testimonials">
  <div class="testimonials-overlay section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="owl-carousel owl-theme">
            <div class="testimonial-item text-center">
              <div class="icon"> <i class="fas fa-info"></i> </div>
              <p class="m-auto">Mencionar el origen de la Facultad de Ciencias Puras y Naturales (FCPN), es referirse al inicio de la misma Universidad Mayor de San Andrés (UMSA), cuando el 30 de noviembre de 1830, se inauguró la Universidad Menor de San Andrés, con los grados de profesor, bachiller o licenciado.</p>
              <div class="testimonial-author text-center">
                <h5>FCPN</h5>
                <h6>UMSA</h6>
              </div>
            </div>
            <div class="testimonial-item text-center">
              <div class="icon"> <i class="fas fa-map-marker-alt"></i> </div>
              <p class="m-auto">Dirección: Av. Villazón Nº 1995, Plaza del Bicentenario - Zona Central, </p>
              <p class="m-auto">La Paz - Bolivia.</p>
              <div class="testimonial-author text-center">
                <h5>FCPN</h5>
                <h6>UMSA</h6>
              </div>
            </div>
            <div class="testimonial-item text-center">
              <div class="icon"> <i class="fas fa-envelope"></i> </div>
              <p class="m-auto">Telf.: (591-2) 2441570 / 2440571</p>
              <p class="m-auto">Fax: 2441092</p> 
              <p class="m-auto">Email: decanato@fcpn.edu.bo</p>  
              <div class="testimonial-author text-center">
                <h5>FCPN</h5>
                <h6>UMSA</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Testimonials --> 
<footer class="footer-copy">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <p>2022 &copy; CVW. Facultad de Ciencias Puras y Naturales by <a href="http://www.fcpn.edu.bo/" target="_blank" rel="dofollow">FCPN</a></p>
      </div>
    </div>
  </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> 
<!-- owl carousel js --> 
<script src="../js/owl.carousel.min.js"></script> 
<!-- magnific-popup --> 
<script src="../js/jquery.fancybox.min.js"></script> 

<!-- scrollIt js --> 
<script src="../js/scrollIt.min.js"></script> 

<!-- isotope.pkgd.min js --> 
<script src="../js/isotope.pkgd.min.js"></script> 
<script>
  $(window).on("scroll",function () {
      var bodyScroll = $(window).scrollTop(),
          navbar = $(".navbar");
      if(bodyScroll > 130){
          navbar.addClass("nav-scroll");
          $('.navbar-logo img').attr('src','../images/logo-black-user.png');
      }else{
          navbar.removeClass("nav-scroll");
          $('.navbar-logo img').attr('src','../images/logo-white-user.png');
      }
  });
  $(window).on("load",function (){

var bodyScroll = $(window).scrollTop(),
navbar = $(".navbar");
if(bodyScroll > 130){
  navbar.addClass("nav-scroll");
  $('.navbar-logo img').attr('src','../images/logo-black-user.png');
}else{
navbar.removeClass("nav-scroll");
$('.navbar-logo img').attr('src','../images/logo-white-user.png');
}

/* smooth scroll
  -------------------------------------------------------*/
  $.scrollIt({

easing: 'swing',      // the easing function for animation
scrollTime: 900,       // how long (in ms) the animation takes
activeClass: 'active', // class given to the active nav element
onPageChange: null,    // function(pageIndex) that is called when page is changed
topOffset: -63
});

/* filter items on button click
-------------------------------------------------------*/
$('.filtering').on( 'click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    $gallery.isotope({ filter: filterValue });
    });
$('.filtering').on( 'click', 'button', function() {
    $(this).addClass('active').siblings().removeClass('active');
});
})
$(function () {
$( ".cover-bg" ).each(function() {
    var attr = $(this).attr('data-image-src');

    if (typeof attr !== typeof undefined && attr !== false) {
      $(this).css('background-image', 'url('+attr+')');
    }
  });
  /* sections background color from data background
  -------------------------------------------------------*/
  $("[data-background-color]").each(function() {
      $(this).css("background-color", $(this).attr("data-background-color")  );
  });
/* Owl Caroursel testimonial
  -------------------------------------------------------*/
  $('.testimonials .owl-carousel').owlCarousel({
    loop:true,
    autoplay:true,
    items:1,
    margin:30,
    dots: true,
    nav: false,
    
  });

});
</script>
</body>
</html>
