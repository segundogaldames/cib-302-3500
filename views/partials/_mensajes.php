<?php if(Session::get('msg_success')): ?>
    <p class="alert alert-success"><?= Session::get('msg_success') ?></p>
<?php 
    endif; 
    Session::destroy('msg_success');
?>

<?php if(Session::get('msg_error')): ?>
    <p class="alert alert-danger"><?= Session::get('msg_error') ?></p>
<?php 
    endif; 
    Session::destroy('msg_error');
?>