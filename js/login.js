
$(document).ready(function () {

(function ($) {
    "use strict";
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    

})(jQuery);
});

let enviar = document.querySelector('.enviar'),
    login = document.querySelector('#login'),
    draw = document.querySelector('.draw'),
    response = document.querySelector('#respuesta');
    let url = window.location.href;
    console.log(url);

login.addEventListener('submit', e => {
    e.preventDefault();
    let registrar = new FormData(login);
    console.log(registrar);
   
    document.querySelector('.carga').classList.add('visible');
    fetch(url+'login/login', {
        method: "POST",
        body: registrar
    })
        .then(response => {
            if (response.ok) {
                return response.text();
            }
            else {
                throw "No se ha podido acceder a ese recurso. Status: " + response.status;
            }
        })
        .then(data => {
            console.log(data);
            document.querySelector('.carga').classList.remove('visible');
            if (data == 1) {
                location.href= url+'cobrar/index'; 
            }
            if(data == 2){
                location.href=url+'bienvenida/index'; 
            }
            if(data==0){
            response.innerHTML=`<p class="alert alert-danger" role="alert">Usuario o Contraseña Incorrecta</p>`;     
            }
        })
        .catch(error => {
            document.querySelector('.carga').classList.remove('visible');
            response.innerHTML=`${error}`;
        })
});
