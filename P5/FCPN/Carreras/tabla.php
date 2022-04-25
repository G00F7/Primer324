<?php
    $CIUsuario = $_GET["ci"];
    $usuario = $_GET['user'];
    $IDrol = $_GET['rol'];
    $carrera = $_GET['carrera'];
?>
<?php  
  if($carrera=='1'){
    $m = 'Física';
  }else if($carrera=='2'){
    $m = 'Informática';
  }else{
    $m = 'Matemática';
  }
?>
<?php
  if($IDrol=='1'){
    $r = 'Director';
  }else {
    $r = 'Estudiante';
  }
?>
<?php
    session_start();
    //conexion
    include('../conexion.php');
    //la consulta 
    if($IDrol == "3"){
        //muestra las notas de los estudiantes
        $sql_consulta ="SELECT sigla, nota1, nota2, nota3, notafinal
                    FROM inscripcion 
                    where CIEst like '$CIUsuario'";
        $resultado = mysqli_query($conexion ,$sql_consulta);
    }else{
        //muestra la consulta de media por departamentos
        $sql_consulta ="SELECT round(tem1.CH, 2) as CH, round(tem2.LP, 2) as LP, round(tem3.CB, 2) as CB, round(tem4.ORU, 2) as ORU, round(tem5.PT, 2) as PT, round(tem6.TJ, 2) as TJ, round(tem7.SC, 2) as SC, round(tem8.BE, 2) as BE, round(tem9.PD, 2) as PD 
        FROM
        (SELECT avg(i.NotaFinal) as CH from persona p, inscripcion i, usuario u where p.Departamento like '01' and p.CI = i.CIEst and p.CI = u.CI and u.IDRol = '3')tem1,
        (SELECT avg(i.NotaFinal) as LP from persona p, inscripcion i, usuario u where p.Departamento like '02' and p.CI = i.CIEst and p.CI = u.CI and u.IDRol = '3')tem2,
        (SELECT avg(i.NotaFinal) as CB from persona p, inscripcion i, usuario u where p.Departamento like '03' and p.CI = i.CIEst and p.CI = u.CI and u.IDRol = '3')tem3,
        (SELECT avg(i.NotaFinal) as ORU from persona p, inscripcion i, usuario u where p.Departamento like '04' and p.CI = i.CIEst and p.CI = u.CI and u.IDRol = '3')tem4,
        (SELECT avg(i.NotaFinal) as PT from persona p, inscripcion i, usuario u where p.Departamento like '05' and p.CI = i.CIEst and p.CI = u.CI and u.IDRol = '3')tem5,
        (SELECT avg(i.NotaFinal) as TJ from persona p, inscripcion i, usuario u where p.Departamento like '06' and p.CI = i.CIEst and p.CI = u.CI and u.IDRol = '3')tem6,
        (SELECT avg(i.NotaFinal) as SC from persona p, inscripcion i, usuario u where p.Departamento like '07' and p.CI = i.CIEst and p.CI = u.CI and u.IDRol = '3')tem7,
        (SELECT avg(i.NotaFinal) as BE from persona p, inscripcion i, usuario u where p.Departamento like '08' and p.CI = i.CIEst and p.CI = u.CI and u.IDRol = '3')tem8,
        (SELECT avg(i.NotaFinal) as PD from persona p, inscripcion i, usuario u where p.Departamento like '09' and p.CI = i.CIEst and p.CI = u.CI and u.IDRol = '3')tem9;";
        $resultado = mysqli_query($conexion, $sql_consulta);
    } 
?>
<?php
  //la consulta
  $sql_consulta1 ="SELECT * 
                  FROM persona 
                  where ci like '$CIUsuario'";
  $resultado1 = mysqli_query($conexion ,$sql_consulta1);
  $filas = mysqli_fetch_array($resultado1);
  //print_r($filas1);
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
          <a href="" class="anchor-btn"  >Ver Notas <i class="fas fa-arrow-right pd-lt-10"></i></a> </div>
      </div>
      <div class="col-md-6 mb-50">
      <?php if($r == "Estudiante"){?>
          <div>
          <table border="5px">
              <div>
                  <thead>
                      <tr>
                          <th>Sigla</th>
                          <th>Nota2</th>
                          <th>Nota2</th>
                          <th>Nota3</th>
                          <th>NotaFinal</th>
                      </tr>
                  </thead>
              </div>
              <?php
                while($filas = mysqli_fetch_array($resultado)){
                    echo "<tr>";
                    echo "<th>".$filas['sigla']."</th>";
                    echo "<th>".$filas['nota1']."</th>";
                    echo "<th>".$filas['nota2']."</th>";
                    echo "<th>".$filas['nota3']."</th>";
                    echo "<th>".$filas['notafinal']."</th>";
                    echo "</tr>";
                }
              ?>
          </table>
          </div>
      </div>
      <?php }elseif($r == "Director"){?>
        <div>
            <table border="5px">
                <div>
                    <thead>
                        <tr>
                            <th>CH</th>
                            <th>LP</th>
                            <th>CB</th>
                            <th>OR</th>
                            <th>PT</th>
                            <th>TJ</th>
                            <th>SC</th>
                            <th>BE</th>
                            <th>PD</th>
                        </tr>
                    </thead>
                </div>
                <?php
                    while($filas = mysqli_fetch_array($resultado)){
                        //print_r($filas);
                        echo "<tr>";
                        echo "<th>".$filas['CH']."</th>";
                        echo "<th>".$filas['LP']."</th>";
                        echo "<th>".$filas['CB']."</th>";
                        echo "<th>".$filas['ORU']."</th>";
                        echo "<th>".$filas['PT']."</th>";
                        echo "<th>".$filas['TJ']."</th>";
                        echo "<th>".$filas['SC']."</th>";
                        echo "<th>".$filas['BE']."</th>";
                        echo "<th>".$filas['PD']."</th>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>
      <?php }?>
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

