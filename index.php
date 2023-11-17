<?php include 'template/header.php' ?>

<?php
    include_once "model/conexion.php";
    $sentencia = $bd -> query("select * from tbl_sucursal");
    $sucursal = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <!-- inicio alerta -->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Rellena todos los campos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>


            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Registrado!</strong> Se agregaron los datos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   
            
            

            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Vuelve a intentar.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   



            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Cambiado!</strong> Los datos fueron actualizados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 


            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Eliminado!</strong> Los datos fueron borrados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 

            <!-- fin alerta -->
            <div class="card">
                <div class="card-header">
                    Lista de sucursales
                </div>
                <div class="p-4">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">Codigo Postal</th>
                                <th scope="col">Empleados</th>
                                <th scope="col">Sector</th>
                                <th scope="col">Numero de Telefono</th>
                                <th scope="col">Departamentos</th>
                                <th scope="col">Nombre del Encargado</th>
                                <th scope="col" colspan="2">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                                foreach($sucursal as $dato){ 
                            ?>

                            <tr>
                                <td scope="row"><?php echo $dato->num_sucursal; ?></td>
                                <td><?php echo $dato->direccion; ?></td>
                                <td><?php echo $dato->codigo_postal; ?></td>
                                <td><?php echo $dato->empleados; ?></td>
                                <td><?php echo $dato->sector; ?></td>
                                <td><?php echo $dato->num_telefono; ?></td>
                                <td><?php echo $dato->departamentos; ?></td>
                                <td><?php echo $dato->nombre_encargado; ?></td>
                                <td><a class="text-success" href="editar.php?id=<?php echo $dato->num_sucursal; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminar.php?id=<?php echo $dato->num_sucursal; ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>

                            <?php 
                                }
                            ?>

                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        <div class="col-md-10">
    <div class="card">
        <div class="card-header">
            Ingresar datos:
        </div>
        <div class="p-4">
            <form method="POST" action="registrar.php">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Direccion:</label>
                        <input type="text" class="form-control" name="txtDireccion" autofocus required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Codigo Postal:</label>
                        <input type="number" class="form-control" name="txtCP" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Empleados:</label>
                        <input type="number" class="form-control" name="txtEmpleado" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Sector:</label>
                        <input type="number" class="form-control" name="txtSector" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Numero de Teléfono:</label>
                        <input type="text" class="form-control" name="txtNumTel" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Departamentos:</label>
                        <input type="number" class="form-control" name="txtDepartamento" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label class="form-label">Nombre del Encargado:</label>
                        <input type="text" class="form-control" name="txtEncargado" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12 d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value="Registrar">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

    </div>
</div>

<?php include 'template/footer.php' ?>