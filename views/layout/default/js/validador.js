function validar()
{
    let form = document.form;

    if (form.nombre.value == '') {
        alert('Ingrese el nombre del rol');
        form.nombre.value = '';
        form.reset();
        return false;
    }

    form.submit();
}

function validateLogin()
{
    let form = document.form;

    if (form.email.value == '') {
        document.getElementById('msg_email').innerHTML="Ingrese su correo electrónico";
        form.email.value = '';
        form.reset();
        return false;
    }

    if (form.password.value == '') {
        document.getElementById('msg_pass').innerHTML="Ingrese su password";
        form.password.value = '';
        form.reset();
        return false;
    }

    form.submit();
}