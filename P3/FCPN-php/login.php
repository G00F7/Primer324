<?php
    session_start();
    $usuario = $_GET["name"];
    $contraseña = $_GET["password"];
?>
<?php
    //conexion
    include('conexion.php');  
    //la consulta
    $sql_consulta ="SELECT * FROM usuario where User like '$usuario' and  Password like '$contraseña'";
    $resultado = mysqli_query($conexion ,$sql_consulta);
    $filas = mysqli_fetch_array($resultado);
    //verificacion
    if($filas['IDRol'] =='3'){
        $_SESSION['ci'] = $filas[0];
        $_SESSION['user'] = $filas[1];
        $_SESSION['rol'] = $filas[3];
        $_SESSION['carrera'] = $filas[4];
        header("location:./Carreras/persona.php");
    }elseif(($filas['IDRol'] =='1')){
        $_SESSION['ci'] = $filas[0];
        $_SESSION['user'] = $filas[1];
        $_SESSION['rol'] = $filas[3];
        $_SESSION['carrera'] = $filas[4];
        header("location:./Carreras/persona.php");
    }else{
        header('location:index.php');
    }
    mysqli_close($conexion);
?>