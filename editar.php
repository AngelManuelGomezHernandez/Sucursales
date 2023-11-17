<?php include 'template/header.php' ?>

<?php
    if(!isset($_GET['id'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once 'model/conexion.php';
    $num_sucursal = $_GET['id'];

    $sentencia = $bd->prepare("select * from tbl_sucursal where num_sucursal = ?;");
    $sentencia->execute([$num_sucursal]);
    $sucursal = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="editarProceso.php">
                <div class="row mb-3">    
                    <div class="col-md-6">
                        <label class="form-label">Direccion: </label>
                        <input type="text" class="form-control" name="txtDireccion" required 
                        value="<?php echo $sucursal->direccion; ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Codigo Postal: </label>
                        <input type="number" class="form-control" name="txtCP" autofocus required
                        value="<?php echo $sucursal->codigo_postal; ?>">
                    </div>
                </div>
                <div class="row mb-3">   
                    <div class="col-md-6">
                        <label class="form-label">Empleados: </label>
                        <input type="text" class="form-control" name="txtEmpleado" autofocus required
                        value="<?php echo $sucursal->empleados; ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Sector: </label>
                        <input type="text" class="form-control" name="txtSector" autofocus required
                        value="<?php echo $sucursal->sector; ?>">
                    </div>
                </div>
                <div class="row mb-3"> 
                    <div class="col-md-6">
                        <label class="form-label">Numero de Telefono: </label>
                        <input type="text" class="form-control" name="txtNumTel" autofocus required
                        value="<?php echo $sucursal->num_telefono; ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Departametos: </label>
                        <input type="text" class="form-control" name="txtDepartamento" autofocus required
                        value="<?php echo $sucursal->departamentos; ?>">
                    </div>
                </div>
                    <div class="mb-3">
                        <label class="form-label">Nombre del Encargado: </label>
                        <input type="text" class="form-control" name="txtEncargado" autofocus required
                        value="<?php echo $sucursal->nombre_encargado; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="id" value="<?php echo $sucursal->num_sucursal; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>