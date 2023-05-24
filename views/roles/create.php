<section>
    <div></div>
    <div style="width: 50%">
        <?php if(Session::get('msg_error')): ?>
            <p class="alert-danger"><?= Session::get('msg_error') ?></p>
        <?php 
            endif; 
            Session::destroy('msg_error');
        ?>
        <form action="<?= $_layoutParams['root'] ?>roles/store" method="post">
            <div class="form-group">
                <label for="nombre" class="form-label">Rol</label>
                <input type="text" name="nombre" id="" class="form-control">
            </div>
            <div class="form-group">
                <input type="hidden" name="send" value="<?= $this->send?>">
               <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
    <div></div>
</section>