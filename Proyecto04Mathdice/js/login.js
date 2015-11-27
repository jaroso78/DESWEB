function validar(){
    var codigo_email = document.getElementById('email').value; //Obtenemso el Email.
    var expEmail =/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
    if (!expEmail.test(codigo_email)){
	    document.getElementById('incorrecto_email').style.display ="block";// Ocultamos en caos de que este mostrado el div incorrecto.
    } else
    {
	    document.getElementById('incorrecto_email').style.display ="none";// Ocultamos en caos de que este mostrado el div incorrecto.
    }
}