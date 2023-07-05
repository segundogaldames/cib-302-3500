<form name="form" action="<?= $_layoutParams['root'] . $this->process ?>" method="post">
    <div class="mb-2">
        <label for="nombre" class="form-label">Rol</label>
        <input type="text" name="nombre" id="" class="form-control" value="<?php if(isset($this->rol)) echo $this->rol['nombre']; else echo '' ?>">
    </div>
    <div class="mb-2">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="send" value="<?= $this->send ?>">
        <button type="button" onclick="validar();" class="btn btn-primary">Guardar</button>
        <a href="<?= $_layoutParams['root'] ?>roles" class="btn btn-link">Volver</a>
    </div>
</form>