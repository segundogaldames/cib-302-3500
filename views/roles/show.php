<section>
    <div></div>
    <div>
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
</section>