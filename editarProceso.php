<?php
    print_r($_POST);
    if(!isset($_POST['codigo'])){
        header('Location: index.php?mensaje=error');
    }

    include 'model/conexion.php';
    $num_sucursal = $_POST['id'];
    $direccion = $_POST["txtDireccion"];
    $codigopostal = $_POST["txtCP"];
    $empleados = $_POST["txtEmpleado"];
    $sector = $_POST["txtSector"];
    $numerotelefono = $_POST["txtNumTel"];
    $departamentos = $_POST["txtDepartamento"];
    $nombreencargado = $_POST["txtEncargado"];

    $sentencia = $bd->prepare("UPDATE tbl_sucursal SET direccion = ?, codigo_postal = ?, empleados = ?,sector = ?, num_telefono = ?, departamentos = ?, nombre_encargado = ? where num_sucursal = ?;");
    $resultado = $sentencia->execute([$direccion, $codigopostal, $empleados,$sector,$numerotelefono,$departamentos,$nombreencargado, $num_sucursal]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>