<section>
    <div></div>
    <div>
        <h1>Lista de Roles</h1>
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
                <tr>
                    <td>#</td>
                    <td>Nombre del rol</td>
                    <td>Botones</td>
                </tr>
            </tbody>
        </table>

        <?php else: ?>
            <p class="text-info">No hay roles disponibles</p>
        <?php endif; ?>
    </div>
</section>