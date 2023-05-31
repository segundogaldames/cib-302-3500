<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-2">
            <?php include_once ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'sidebar.php' ?>
        </div>
        <div class="col-md-10">
            <h1>
                Lista de Roles
                <a href="<?= $_layoutParams['root'] ?>roles/create" class="btn btn-outline-dark">Nuevo Rol</a>
            </h1>
            
            <?php include_once ROOT . 'views' . DS . 'partials' . DS . '_mensajes.php' ?>
            
            <?php if(isset($this->roles) && count($this->roles)): ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="col-2">Id</th>
                        <th class="col-7" >Rol</th>
                        <th class="col-1" >Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($this->roles as $model): ?>
                    <tr>
                        <td><?= $model['id'] ?></td>
                        <td><?= $model['nombre'] ?></td>
                        <td>
                            <a class="btn btn-success btn-sm" href="<?= $_layoutParams['root'] ?>roles/show/<?= $model['id']?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                </svg>
                            </a>
                            <a class="btn btn-warning btn-sm" href="<?= $_layoutParams['root'] ?>roles/edit/<?= $model['id']?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            
            <?php else: ?>
                <p class="text-info">No hay roles disponibles</p>
            <?php endif; ?>
            
        </div>
    </div>
</div>
