function zeta(id_alumno)
{
    swal
    ({   
        title: "Confirmación",   
        text: "Eliminar Usuario",   
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "SI, Eliminar", 
        closeOnConfirm: false 
    }, 
    function()
    {  
       swal("Eliminado!","", "success"); 
    });
}