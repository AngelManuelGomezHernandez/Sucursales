<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtDireccion"]) || empty($_POST["txtCP"]) || empty($_POST["txtEmpleado"])|| empty($_POST["txtSector"]) || empty($_POST["txtNumTel"]) || empty($_POST["txtDepartamento"])|| empty($_POST["txtEncargado"])){
        header('Location: index.php?mensaje=falta');
        exit();
    }

    include_once 'model/conexion.php';
    $direccion = $_POST["txtDireccion"];
    $codigopostal = $_POST["txtCP"];
    $empleados = $_POST["txtEmpleado"];
    $sector = $_POST["txtSector"];
    $numerotelefono = $_POST["txtNumTel"];
    $departamentos = $_POST["txtDepartamento"];
    $nombreencargado = $_POST["txtEncargado"];
    
    $sentencia = $bd->prepare("INSERT INTO tbl_sucursal(direccion,codigo_postal,empleados,sector,num_telefono,departamentos,nombre_encargado) VALUES (?,?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$direccion,$codigopostal,$empleados,$sector,$numerotelefono,$departamentos,$nombreencargado]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>