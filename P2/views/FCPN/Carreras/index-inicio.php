<?php
    $materia = $_GET["m"];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo $materia; ?></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<?php
  if($materia == "FÍSICA"){
    echo '<link rel="stylesheet" type="text/css" href="../../css/style1.css"/>';
  }
  if($materia == "INFORMÁTICA"){
    echo '<link rel="stylesheet" type="text/css" href="../../css/style2.css"/>';
  }
  if($materia == "MATEMÁTICA"){
    echo '<link rel="stylesheet" type="text/css" href="../../css/style3.css"/>';
  }
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css"/>
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css"/>
<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>

<!-- Font Google -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container"> <a class="navbar-brand navbar-logo" href="#"> <?php if($materia == "FÍSICA"){echo '<img src="../../images/logo-white-fis.png" alt="logo" class="logo-1">';} if($materia == "INFORMÁTICA"){echo '<img src="../../images/logo-white-info.png" alt="logo" class="logo-1">';} if($materia == "MATEMÁTICA"){echo '<img src="../../images/logo-white-mate.png" alt="logo" class="logo-1">';}?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="fas fa-bars"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"> <a class="nav-link" href="" data-scroll-nav="0">Home</a> </li>  
        <li class="nav-item"> <a class="nav-link" href="../../" >FCPN</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="5">Iniciar Sesión</a> </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar --> 
