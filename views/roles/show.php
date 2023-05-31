<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-2">
            <?php include_once ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'sidebar.php' ?>
        </div>
        <div class="col-md-10">
            <div class="col-md-6">
                <?php include_once ROOT . 'views' . DS . 'partials' . DS . '_mensajes.php' ?>
                <h1>Detalle de Rol</h1>
                <?php if($this->rol): ?>
                    <table class="table">
                        <tr>
                            <th>Id:</th>
                            <td><?= $this->rol['id'] ?></td>
                        </tr>
                        <tr>
                            <th>Nombre:</th>
                            <td><?= $this->rol['nombre'] ?></td>
                        </tr>
                        <tr>
                            <th>Fecha creación:</th>
                            <td><?= $this->rol['created_at'] ?></td>
                        </tr>
                        <tr>
                            <th>Fecha actualización:</th>
                            <td><?= $this->rol['updated_at'] ?></td>
                        </tr>
                    </table>
                <?php else: ?>
                    <p class="text-info">El dato no existe</p>
                <?php endif; ?>
                <p>
                    <a href="<?= $_layoutParams['root'] ?>roles" class="btn btn-primary">Volver</a>
                </p>
            </div>
            
        </div>
    </div>
</div>