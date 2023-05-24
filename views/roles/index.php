<section>
    <div></div>
    <div>
        <h1>
            Lista de Roles
            <a href="<?= $_layoutParams['root'] ?>roles/create" class="btn btn-outline-dark">Nuevo Rol</a>
        </h1>
        <?php if(isset($this->roles) && count($this->roles)): ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($this->roles as $model): ?>
                <tr>
                    <td><?= $model['id'] ?></td>
                    <td><?= $model['nombre'] ?></td>
                    <td>
                        <a href="<?= $_layoutParams['root'] ?>roles/show/<?= $model['id']?>">Ver</a>
                        <a href="<?= $_layoutParams['root'] ?>roles/edit/<?= $model['id']?>">Editar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <?php else: ?>
            <p class="text-info">No hay roles disponibles</p>
        <?php endif; ?>
    </div>
</section>