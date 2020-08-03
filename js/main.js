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
 //   $('#saludar').on('click',function(){
    //       alert("hola");
    //   })

    // $('#corte').on('click',function (e) { 
    //     e.preventDefault();
        
    //     let fechas = $('#fechas').val();
    //     let fechass = $('#fechass').val();
    //     let corteUsuario= $('#corteUsuario').val();

    //     // console.log(fecha1);
    //     // console.log(fecha2);
    //     // console.log(corteUsuario);

    //     data={
    //         fechas:fechas,
    //         fechass:fechass,
    //         corteUsuario:corteUsuario
    //     }

    //     console.log(data);

    //     $.ajax({
    //         type: "POST",
    //         url: "http://192.168.0.21/farmacia/historial/corte",
    //         data: data,
    //         dataType: "dataType",
    //         success: function (response) {
    //             console.log(response);
    //             let info= JSON.parse(response);
    //             console.log(info.suma);
    //         }
    //     });
        
    // });

    // $('#buscarProducto').keyup(function (e) { 
    // let producto = $(this).val();
    // console.log(producto);
    // let accion = 'infoProducto';
    //     if(producto !=''){
    //         data= {producto:producto}
    // fetch('http://192.168.0.25/farmacia/cobrar/showAllProducto',{
    //     method: 'POST',
    //     body: JSON.stringify(data)
    // })
    // .then(response=>{
    //     if(response.ok){
    //         return response.json();
    //     }
    //     else{
    //         throw "ERROR EN LA PETICIÓN" + status;
    //     }

    // })
    // .then(data =>{
    //     console.log(data);
    //     // draw.innerHTML = ` ${JSON.stringify(data)}`;

    // })
    // .catch(error =>{
    // console.log(error);
    // })


    // $.ajax({
    //     type: "POST",
    //     url: "http://192.168.0.25/farmacia/cobrar/showAllProducto",
    //     data: {accion:accion, producto:producto},
    //     success: function (response) {
    //             console.log(response);
            
    //     }
    // });
// }
//     });
    // $('.agregar').on('click', function() {
    //     var hermano=$(this).parent();
    //     var numero=10;
    //     $("#tabla2").prepend("<tr>\
    //                                 <td>"+hermano.siblings("td:eq(0)").text()+"</td>\
    //                                 <td>"+hermano.siblings("td:eq(1)").text()+"</td>\
    //                                 <td>"+hermano.siblings("td:eq(2)").text()+"</td>\
    //                                 <td>"+hermano.siblings("td:eq(3)").text()+"</td>\
    //                                 <td>"+hermano.siblings("td:eq(4)").text()+"</td>\
    //                                 <td>"+hermano.siblings("td:eq(5)").text()+"</td>\
    //                                 <td><input id='saludar' type='button' value='salud'/></td>\
    //                          </tr>")

                
    //   });

    //   $('#saludar').on('click',function(){
    //       alert("hola");
    //   })

    // $('.saludar').on('click', function(){
    //     alert("me diste click 🧔");
    //    })


//     function obtenerDatos(id){
//         alert(id);
         
//         // $.ajax({
//         //     type: "POST",
//         //     url: "http://192.168.0.25/farmacia/cobrar/showAllProducto",
//         //     data: "id="+ id,
//         //     success: function (response) {
                
//         //     }
//         // });
// }


    // $('#cantidad').keyup(function (e) { 
    //     e.preventDefault();
    //     let precio_total= $(this).val() * $('#precio_publico').html();
    //     let stock = parseInt($('#stock').html());

    //     $('#total').html(precio_total);

    //     if($(this).val() < 1 || isNaN($(this).val()) || $(this).val() > stock){
    //         $('.agregar').slideUp();
    //     }else{
    //         $('.agregar').slideDown();
    //     }

    // });

    function buscar (e) { 
        let buscar = $(this).val();
        // let numero = $('.numero').val();
        let action = 'infoBuscar';
        console.log(buscar);
        
        $.ajax({
            type: "POST",
            url: "http://192.168.0.21/farmacia/cobrar/buscar",
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
                // $('.ocultar').slideDown();
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
                $('#total').attr('disabled', 'disabled');
                //ocultar boton agregar
                $('.ocultar').slideUp();



            }

            }
        });
    }

    $('.buscar').keyup(buscar);
    //validar cantidad del productos antes de agregar
    // $('#cantidad').keyup(function (e) { 
    //     e.preventDefault();
    //     let precio_total = $(this).val() * $('#precio_publico').html();
    //     let stock = parseInt($('#stock').html());
    //     console.log(stock);
    //     console.log(precio_total);
    //     $('#total').html(precio_total);

    //     //OCULTAR AGREGAR SI LA CANTIDAD ES MENOR QUE 1
    //     if($(this).val() < 1 || isNaN($(this).val()) || $(this).val() > stock){
    //         $('.ocultar').slideUp();
    //     }else{
    //         $('.ocultar').slideDown();
    //     }
    // });

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
        // let total = $('#total').html();
        console.log(total)
        // let valor = parseFloat(total);
        let valor_restar=0;
        if($(this).val() < 0 || isNaN($(this).val()) ||  $(this).val() == ""){
            $('.agregar').slideUp();
        }else{
            $('.agregar').slideDown();

        }
        

        if ($(this).val() > 0) {
            valor_restar = parseFloat($(this).val());
        let precio_total= $('#cantidad').val() * $('#precio_publico').html();

            // console.log(valor_restar);
            // let subtotal= $('#total').html();
            let total=(precio_total - (precio_total / 100) * valor_restar) ;
            
            // let total= subtotal -(subtotal * mostrar);
            console.log(total);
            $('#total').html(total.toFixed(2));
            // $('#total').html(valor - valor_restar);  
          }
        else if($(this).val() == 0){
            let precio_total= $('#cantidad').val() * $('#precio_publico').html();
        console.log(precio_total);
        $('#total').html(precio_total);
        }

    // let descuento=$(this).val();
    // let prueba = total - descuento;
    // console.log(prueba);
    // if(descuento == 0 || descuento == isNaN()){
    //     let precio_total= $('#cantidad').val() * $('#precio_publico').html();
    //     console.log(precio_total);
    //     $('#total').html(precio_total);
    // }
    // $('#total').html(prueba);

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
        // let descripcion = $('#descripcion').val();
        // let gramos = $('#gramos').html();
        // let contenido = $('#contenido').html();
        // let tipo = $('#tipo').html();
        // let precio_publico = $('#precio_publico').html();
        // let stock = $('#stock').html();
        // let cantidad = $('#cantidad').val();
        // let total = $('#total').html();

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
            url: "http://192.168.0.21/farmacia/cobrar/recibo",
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
		url:"http://192.168.0.21/farmacia/cobrar/visualizar",
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
    url:"http://192.168.0.21/farmacia/cobrar/visualizar",
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

    // let total= subtotal -(subtotal * mostrar);

    $('.total').val(total.toFixed(2));

    
    // console.log(total);
});

   
    
    //ESTO FUNCIONA
//    let petition = document.querySelector(".agregar"),
//     draw = document.querySelector(".draw");
//     let prueba = [];

// petition.addEventListener('click', e =>{
//     console.log("me haz dado click");

//     fetch('http://192.168.0.25/farmacia/cobrar/visualizar')
//     .then(response=>{
//         if(response.ok){
//             return response.json();
//         }
//         else{
//             throw "ERROR EN LA PETICIÓN" + status;
//         }

//     })
//     .then(data =>{
//         let response = '';  
//         for(let i in data){
//             response += ` 
//             <tr>
//             <td>${data[i].descripcion}</td>
//             <td>${data[i].gramos}</td>
//             <td>${data[i].contenido}</td>
//             <td>${data[i].precio_publico}</td>
//             <td>${data[i].tipo}</td>
//             <td>${data[i].cantidad}</td>
//             <td>${data[i].total}</td>
//             <td> <a href="#" class="eliminame">eliminar</a></td>
//             </tr>
//             `;
//         }
//         document.querySelector('.draw').innerHTML = response;
//     })
//     .catch(error =>{
//     console.log(error);
//     })

// });
//ESTO FUNCIONA TERMINA AQUI

$('.eliminame').on('click', function(e){
    e.preventDefault();
    $("input:checkbox:checked").each(function() {

        let valor=$(this).val();
        data={
            valor:valor
        }
        

        $.ajax({
            type: "POST",
            url: "http://192.168.0.21/farmacia/cobrar/eliminarProducto",
            data: data,
            dataType: "dataType",
            success: function (r) {
                console.log(r);
            }
        });

        // swal({
        //     title: "Eliminar Producto",
        //     text: "Deseas eliminar este medicamento",
        //     icon: "warning",
        //     buttons: true,
        //     dangerMode: true,
        //   })
        //   .then((willDelete) => {
        //     if (willDelete) {
        //       swal("Poof! Your imaginary file has been deleted!", {
        //         icon: "success",
        //       });
        //     } else {
        //       swal("Your imaginary file is safe!");
        //     }
        //   });
        // console.log($(this).val());
        // alert($(this).val());
   });
})

// $('.eliminar').on('click',function(e){
//     e.preventDefault();
//     console.log("hola");
    
// });

// function eliminame(id){
//     alert("hola perro");
// }
//     $('.holi').on('click', function () {
//         alert('hola');
//     });


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
    //  if(cambio < 0 && $('#totalAPagar').val() == ""){
    //     $('#cobrar').slideUp();
    // }
    // if($(this).val() >=  $('#totalAPagar').val()){
    //     $('#cobrar').slideDown();
    // }
    // if($(this).val() <  $('#totalAPagar').val()){
    //     $('#cobrar').slideUp();
    // }
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
           url:"http://192.168.0.21/farmacia/historial/corte",
           success:function(r){
            let info= JSON.parse(r);
            console.log(info.suma);
            totaleshion.innerHTML= `El corte de ${info.usuario} es ${info.suma} pesos`;

           }
       });
   });
