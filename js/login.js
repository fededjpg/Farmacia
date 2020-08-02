
$(document).ready(function () {

    $('#registrar').click(function () {

        var datos = $('#form_registro').serialize();

        console.log(datos);
        $.ajax({
            type: "POST",
            url: "http://192.168.0.21/farmacia/login/login",
            data: datos,
            beforeSend: function () {
                // $('#img').show();
                $('#respuesta').html("Validando su información" + "<img src='img/preview.gif' width='200px'></img>");
            
            },
            success: function (respuesta) {
                if( respuesta == 1 ){
                    $(location).attr('href','http://192.168.0.21/farmacia/bienvenida/index');
                }
            }
        });
    });
        



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
