<?php 
    if(!isset($_GET['id'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';
    $num_sucursal = $_GET['id'];

    $sentencia = $bd->prepare("DELETE FROM tbl_sucursal where num_sucursal = ?;");
    $resultado = $sentencia->execute([$num_sucursal]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=eliminado');
    } else {
        header('Location: index.php?mensaje=error');
    }
    
?>