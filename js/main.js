$(document).ready(function() {
    $('#example').DataTable( {
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
    } );
    $('#example-2').DataTable( {
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
    } );

    $('#mainMenu li a').click(function(e){
        // e.preventDefault();
        $('#mainMenu li').removeClass('active');
        $(this).parent().addClass('active');
    });

    var url =window.location.origin;

    function buscar (e) { 
        let buscar = $(this).val();
        let action = 'infoBuscar';
        console.log(buscar);
        
        $.ajax({
            type: "POST",
            url:url+"/farmacia/cobrar/buscar",
            data: {buscar:buscar},
            async:true,
            success: function (response) {
                console.log(response);
                if(response != 'error'){
                let info= JSON.parse(response);
                $('#clave').html(info.id_producto);
                $('.descripcion').html(info.descripcion);
                $('#gramos').html(info.gramos);
                $('#contenido').html(info.contenido);
                $('#precio_publico').html(info.precio_publico);
                $('#tipo').html(info.tipo);
                $('#stock').html(info.stock);
                $('#cantidad').val('0');
                $('#descuento').val('0');

                //activar cantidad
                $('#cantidad').removeAttr('disabled');
                $('#descuento').removeAttr('disabled');
                //muestra el boton agregar
            }else{
                $('#gramos').html('0');
                $('#contenido').html('0');
                $('#precio_publico').html('0');
                $('#tipo').html('-');
                $('#stock').html('0');
                $('#cantidad').val('0');
                $('#descuento').val('0');

                //bloquear cantidad
                $('#cantidad').attr('disabled', 'disabled');
                $('#descuento').attr('disabled', 'disabled');
                //ocultar boton agregar
                $('.ocultar').slideUp();
            }

            }
        });
    }

    $('.buscar').keyup(buscar);


    $('#cantidad').keyup(function (e) { 
        e.preventDefault();
        let precio_total= $(this).val() * $('#precio_publico').html();
        
        let stock = parseInt($('#stock').html());

        $('#total').html(precio_total);

        if($(this).val() < 1 || isNaN($(this).val()) || $(this).val() > stock){
            $('.agregar').slideUp();
        }else{
            $('.agregar').slideDown();
        }

    });

    $('#descuento').keyup(function (e) { 
        e.preventDefault();
        console.log(total)
        let valor_restar=0;
        if($(this).val() < 0 || isNaN($(this).val()) ||  $(this).val() == ""){
            $('.agregar').slideUp();
        }else{
            $('.agregar').slideDown();

        }
        

        if ($(this).val() > 0) {
            valor_restar = parseFloat($(this).val());
        let precio_total= $('#cantidad').val() * $('#precio_publico').html();


            let total=(precio_total - (precio_total / 100) * valor_restar) ;
            
            console.log(total);
            $('#total').html(total.toFixed(2));
          }
        else if($(this).val() == 0){
            let precio_total= $('#cantidad').val() * $('#precio_publico').html();
        console.log(precio_total);
        $('#total').html(precio_total);
        }

    });

    $('.agregar').on('click',function(e){
        e.preventDefault();
        let folio = $('#folio').html();
        let clave= $('#clave').html();
        let usuario = $('#inicioSesion').val();
        let descripcion = $('.descripcion').html();
        let gramos = $('#gramos').html();
        let contenido = $('#contenido').html();
        let tipo = $('#tipo').html();
        let precio_publico = $('#precio_publico').html();
        let stock = $('#stock').html();
        let cantidad = $('#cantidad').val();
        let descuento = $('#descuento').val();
        let total = $('#total').html();

        data={
            folio:folio,
            clave:clave,       
            descripcion:descripcion,
            gramos:gramos,
            contenido:contenido,
            tipo:tipo,
            precio_publico:precio_publico,
            stock:stock,
            cantidad:cantidad,
            descuento:descuento,
            total:total,
            usuario:usuario
        }
        console.log(data);

        $.ajax({
            type: "POST",
            url: url+"/farmacia/cobrar/recibo",
            data: data,
            dataType: "dataType",
            success: function (response) {
                
            }
        });
    })

 let petition = document.querySelector(".agregar");


 //MOSTRAR LOS DATOS 
 petition.addEventListener('click', e =>{

    	$.ajax({
		type:"POST",
		url:url+"/farmacia/cobrar/visualizar",
		success:function(r){
            console.log(r);
            $('#tablaDatos').html(r);
            var sum=0;
            $('.sumame').each(function() {  
             sum += parseFloat($(this).text().replace(/,/g, ''), 10);  
            }); 
            $('.subtotal').val(sum.toFixed(2));
		}
    });
});

let peticion = document.querySelector(".eliminame");

peticion.addEventListener('click', e =>{

    $.ajax({
    type:"POST",
    url:url+"/farmacia/cobrar/visualizar",
    success:function(r){
        console.log(r);
        $('#tablaDatos').html(r);
        var sum=0;
            $('.sumame').each(function() {  
             sum += parseFloat($(this).text().replace(/,/g, ''), 10);  
            }); 
            $('.subtotal').val(sum.toFixed(2));
    }
});
});

//-------------------------------------SUBTOTAL---------------------------------------
$('.descuento').keyup(function (e) { 
    e.preventDefault();
    let descuento=$(this).val();
    // console.log(mostrar);

    if(descuento == 100){
        $('total').val("Producto gratis");
    }

    let subtotal= $('.subtotal').val();
    let total=(subtotal - (subtotal / 100) * descuento);


    $('.total').val(total.toFixed(2));

});


$('.eliminame').on('click', function(e){
    e.preventDefault();
    $("input:checkbox:checked").each(function() {

        let valor=$(this).val();
        data={
            valor:valor
        }
        

        $.ajax({
            type: "POST",
            url: url+"/farmacia/cobrar/eliminarProducto",
            data: data,
            dataType: "dataType",
            success: function (r) {
                console.log(r);
            }
        });

   });
})

$('#cobrar').slideUp();

$('#recibo').keyup(function (e) { 

    let cambio= $(this).val() - $('#totalAPagar').val();
    $('#cambio').val(cambio);
    // console.log(cambio);
    console.log($(this).val());


    if($(this).val() == "" || $(this).val() == 0 || $('#cambio').val() < 0){
        $('#cambio').val("pago insuficiente");
        $('#cobrar').slideUp();

    }
    if(cambio >= 0 && $('#totalAPagar').val() != 0 ){
            $('#cobrar').slideDown();
    }

});


    
} );


    let vamonosPerras = document.querySelector("#corte");
    let totaleshion = document.querySelector("#totaleshion");
    //MOSTRAR LOS DATOS 
 vamonosPerras.addEventListener('click', e =>{

           
        let fechas = document.querySelector('#fechas').value;
        let fechass =  document.querySelector('#fechass').value;
        let corteUsuario=  document.querySelector('#corteUsuario').value;

        console.log(fechas);
        console.log(fechass);
        console.log(corteUsuario);

        data={
            fechas:fechas,
            fechass:fechass,
            corteUsuario:corteUsuario
        }
   
           $.ajax({
           type:"POST",
           data: data,
           url:url+"/farmacia/historial/corte",
           success:function(r){
            let info= JSON.parse(r);
            console.log(info.suma);
            totaleshion.innerHTML= `El corte de ${info.usuario} es ${info.suma} pesos`;

           }
       });
   });
