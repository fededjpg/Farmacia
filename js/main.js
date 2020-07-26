$(document).ready(function() {
    $('#example').DataTable( {
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
    } );

    $('#mainMenu li a').click(function(){
        $('#mainMenu li').removeClass('active');
        $(this).parent().addClass('active');
    });

    $('.agregar').on('click', function() {
        var hermano=$(this).parent();
        var numero=10;
        $("#tabla2").prepend("<tr>\
                                    <td>"+hermano.siblings("td:eq(0)").text()+"</td>\
                                    <td>"+hermano.siblings("td:eq(1)").text()+"</td>\
                                    <td>"+hermano.siblings("td:eq(2)").text()+"</td>\
                                    <td>"+hermano.siblings("td:eq(3)").text()+"</td>\
                                    <td>"+hermano.siblings("td:eq(4)").text()+"</td>\
                                    <td>"+hermano.siblings("td:eq(5)").text()+"</td>\
                                    <td class='saludar'><input type='button' value='salud'/></td>\
                             </tr>")
        $(".input-group").prepend("<input = 'text' class='mi-valor' value='"+hermano.siblings("td:eq(5)").text() +"'/>")

        let aver=$(".mi-valor").val();
        let fin = parseInt(aver) + parseInt(aver);
        console.log(fin);
                
      });

    // $('.saludar').on('click', function(){
    //     alert("me diste click 🧔");
    //    })
    
} );