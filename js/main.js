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
            url: "http://192.168.0.25/farmacia/cobrar/buscar",
            data: {buscar:buscar},
            async:true,
            success: function (response) {
                console.log(response);
                if(response != 'error'){
                let info= JSON.parse(response);
                $('.descripcion').html(info.descripcion);
                $('#gramos').html(info.gramos);
                $('#contenido').html(info.contenido);
                $('#precio_publico').html(info.precio_publico);
                $('#tipo').html(info.tipo);
                $('#stock').html(info.stock);
                $('#cantidad').val('0');

                //activar cantidad
                $('#cantidad').removeAttr('disabled');
                //muestra el boton agregar
                $('.ocultar').slideDown();
            }else{
                $('#gramos').html('0');
                $('#contenido').html('0');
                $('#precio_publico').html('0');
                $('#tipo').html('-');
                $('#stock').html('0');
                $('#cantidad').val('0');

                //bloquear cantidad
                $('#cantidad').attr('disabled', 'disabled');
                //ocultar boton agregar
                $('.ocultar').slideUp();


            }

            }
        });
    }

    $('.buscar').keyup(buscar);
    //validar cantidad del productos antes de agregar
    $('#cantidad').keyup(function (e) { 
        e.preventDefault();
        let precio_total = $(this).val() * $('#precio_publico').html();
        let stock = parseInt($('#stock').html());
        console.log(stock);
        console.log(precio_total);
        $('#total').html(precio_total);

        //OCULTAR AGREGAR SI LA CANTIDAD ES MENOR QUE 1
        if($(this).val() < 1 || isNaN($(this).val()) || $(this).val() > stock){
            $('.ocultar').slideUp();
        }else{
            $('.ocultar').slideDown();
        }
    });

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

    $('.agregar').on('click',function(e){
        e.preventDefault();
        let descripcion = $('.descripcion').html();
        let gramos = $('#gramos').html();
        let contenido = $('#contenido').html();
        let tipo = $('#tipo').html();
        let precio_publico = $('#precio_publico').html();
        let stock = $('#stock').html();
        let cantidad = $('#cantidad').val();
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
            descripcion:descripcion,
            gramos:gramos,
            contenido:contenido,
            tipo:tipo,
            precio_publico:precio_publico,
            stock:stock,
            cantidad:cantidad,
            total:total
        }
        console.log(data);

        $.ajax({
            type: "POST",
            url: "http://192.168.0.25/farmacia/cobrar/recibo",
            data: data,
            dataType: "dataType",
            success: function (response) {
                
            }
        });
    })

    //MOSTRAR LOS DATOS 

    // 	$.ajax({
	// 	type:"POST",
	// 	url:"procesos/mostrarDatos.php",
	// 	success:function(r){
	// 		$('#tablaDatos').html(r);
	// 	}
    // });
    
   let petition = document.querySelector(".agregar"),
    draw = document.querySelector(".draw");
    let prueba = [];

petition.addEventListener('click', e =>{
    console.log("me haz dado click");

    fetch('http://192.168.0.25/farmacia/cobrar/visualizar')
    .then(response=>{
        if(response.ok){
            return response.json();
        }
        else{
            throw "ERROR EN LA PETICIÓN" + status;
        }

    })
    .then(data =>{
        let response = '';  
        for(let i in data){
            response += ` 
            <tr>
            <td>${data[i].descripcion}</td>
            <td>${data[i].gramos}</td>
            <td>${data[i].contenido}</td>
            <td>${data[i].precio_publico}</td>
            <td>${data[i].tipo}</td>
            <td>${data[i].cantidad}</td>
            <td>${data[i].total}</td>
            <td> <a href="#" class="eliminame">eliminar</a></td>
            </tr>
            `;
        }
        document.querySelector('.draw').innerHTML = response;
    })
    .catch(error =>{
    console.log(error);
    })

});

$('.eliminame').on('click', function(e){
    alert("hola como estas");
})

$('.eliminar').on('click',function(e){
    e.preventDefault();
    console.log("hola");
    
});
    
} );