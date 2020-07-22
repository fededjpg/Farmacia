$(document).ready(function() {
    $('#example').DataTable( {
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
    } );
    $('#mainMenu li a').click(function(){
        $('#mainMenu li').removeClass('active');
        $(this).parent().addClass('active');
    });
} );