<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-2">
            <?php include_once ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'sidebar.php' ?>
        </div>
        <div class="col-md-10">
            <div class="col-md-6">
                <?php include_once ROOT . 'views' . DS . 'partials' . DS . '_mensajes.php' ?>
                <p class="text-danger">Campos obligatorios</p>
                <form action="<?= $_layoutParams['root'] . $this->process ?>" method="post" name="form">

                    <div class="mb-2">
                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" id="" class="form-control">
                        <div id="msg_email" class="text-danger"></div>
                    </div>
                    <div class="mb-2">
                            <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                            <input type="password" name="password" id="" class="form-control">
                        </div>
                        <div id="msg_pass" class="text-danger mb-2"></div>
                    <div class="mb-2">
                        <input type="hidden" name="send" value="<?= $this->send ?>">
                        <button type="button" onclick="validateLogin();" class="btn btn-primary">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>