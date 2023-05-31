<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-2">
            <?php include_once ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'sidebar.php' ?>
        </div>
        <div class="col-md-10">
            <div class="col-md-6">
                <?php include_once ROOT . 'views' . DS . 'partials' . DS . '_mensajes.php' ?>
                <form action="<?= $_layoutParams['root'] ?>roles/store" method="post">
                    <div class="mb-2">
                        <label for="nombre" class="form-label">Rol</label>
                        <input type="text" name="nombre" id="" class="form-control">
                    </div>
                    <div class="mb-2">
                        <input type="hidden" name="send" value="<?= $this->send?>">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="<?= $_layoutParams['root'] ?>roles" class="btn btn-link">Volver</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>