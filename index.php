<?php 
    require('conexion.php');
    session_start();
    if (empty($_SESSION['Usuario'])) {
        include('PublicHeader.php');
    }else{
        /*$clv_trabajador=$_SESSION['Usuario'];

        $consultaTrabajador = " CALL sp_SelectSession($clv_trabajador)";
        $resultado=mysqli_query($Conexion, $consultaTrabajador);

        $num_filas = $resultado->num_rows;
        if ($num_filas==0)
            header("Location: ../login.html");

        $row=mysqli_fetch_array($resultado);
        mysqli_free_result($resultado);
        mysqli_close($Conexion);*/
        include('Header.php');
    }
    //require('../conexion.php');*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    
    <header id="Header uwu">
    </header>
<br><br><br>
<div class="container">
    <center>
        <img src="Imagenes/Bienvenido.png" alt="">
    </center>
</div>
    
    <script type="text/javascript" src="css/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="css/popper.min.js"></script>
    <script type="text/javascript" src="css/bootstrap.min.js"></script>


</body>
</html>