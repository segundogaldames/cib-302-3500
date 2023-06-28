<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-2">
            <?php include_once ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'sidebar.php' ?>
        </div>
        <div class="col-md-10">
            <h1>
                Lista de Usuarios
            </h1>
            
            <?php include_once ROOT . 'views' . DS . 'partials' . DS . '_mensajes.php' ?>
            
            <div class="col-md-6">
                <?php include_once ROOT . 'views' . DS . 'partials' . DS . '_mensajes.php' ?>
                <h1>Detalle de Rol</h1>
                <?php if($this->usuario): ?>
                    <table class="table">
                        <tr>
                            <th>Id:</th>
                            <td><?= $this->usuario['id'] ?></td>
                        </tr>
                        <tr>
                            <th>RUT:</th>
                            <td><?= $this->usuario['rut'] ?></td>
                        </tr>
                        <tr>
                            <th>Nombre:</th>
                            <td><?= $this->usuario['nombre'] ?></td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td><?= $this->usuario['email'] ?></td>
                        </tr>
                        <tr>
                            <th>Activo:</th>
                            <td>
                                <?php if($this->usuario['activo'] == 1): ?>
                                    Si
                                <?php else: ?>
                                    No
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Rol:</th>
                            <td><?= $this->usuario['rol'] ?></td>
                        </tr>
                        <tr>
                            <th>Fecha creación:</th>
                            <td><?= $this->usuario['created_at'] ?></td>
                        </tr>
                        <tr>
                            <th>Fecha actualización:</th>
                            <td><?= $this->usuario['updated_at'] ?></td>
                        </tr>
                    </table>
                <?php else: ?>
                    <p class="text-info">El dato no existe</p>
                <?php endif; ?>
                <p>
                    <a href="<?= $_layoutParams['root'] ?>usuarios" class="btn btn-primary">Volver</a>
                </p>
            </div>
        </div>
    </div>
</div>
