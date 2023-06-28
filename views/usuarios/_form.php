<p class="text-danger">Campos obligatorios</p>
<form action="<?= $_layoutParams['root'] . $this->process ?>" method="post">
<div class="mb-2">
        <label for="rut" class="form-label">RUT <span class="text-danger">*</span> </label>
        <input type="text" name="rut" id="" class="form-control" value="<?php if(isset($this->usuario)) echo $this->usuario['rut']; else echo '' ?>">
    </div>
    <div class="mb-2">
        <label for="nombre" class="form-label">Nombre <span class="text-danger">*</span></label>
        <input type="text" name="nombre" id="" class="form-control" value="<?php if(isset($this->usuario)) echo $this->usuario['nombre']; else echo '' ?>">
    </div>
    <div class="mb-2">
        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
        <input type="email" name="email" id="" class="form-control" value="<?php if(isset($this->usuario)) echo $this->usuario['email']; else echo '' ?>">
    </div>
    <div class="mb-2">
        <label for="rol" class="form-label">Rol <span class="text-danger">*</span></label>
        <select name="rol" class="form-control">
            <?php if($this->action == 'edit'): ?>
                <option value="<?= $this->usuario['rol_id'] ?>">
                    <?= $this->usuario['rol']; ?>
                </option>
            <?php endif;?>
            <option value="">Seleccione un rol</option>
            <?php foreach($this->roles as $rol): ?>
                <option value="<?= $rol['id'] ?>"><?= $rol['nombre'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <?php if($this->action == 'edit'): ?>
        <div class="mb-2">
            <label for="activo" class="form-label">Estado <span class="text-danger">*</span></label>
            <select name="activo" class="form-control">
                <?php if($this->usuario['activo'] == 1): ?>
                    <option value="1">Activo</option>
                    <option value="2">Desactivar</option>
                <?php else:?>
                    <option value="2">Inactivo</option>
                    <option value="1">Activar</option>
                <?php endif;?>
            </select>
        </div>
    <?php endif;?>
    <?php if($this->action == 'create'): ?>
        <div class="mb-2">
            <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
            <input type="password" name="password" id="" class="form-control">
        </div>
        <div class="mb-2">
            <label for="repassword" class="form-label">Confirmar Password <span class="text-danger">*</span></label>
            <input type="password" name="repassword" id="" class="form-control">
        </div>
    <?php endif;?>
    <div class="mb-2">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="send" value="<?= $this->send ?>">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="<?= $_layoutParams['root'] ?>usuarios" class="btn btn-link">Volver</a>
    </div>
</form>