function Confirm(ctl, event) {
    event.preventDefault();
    swal({
        title: "Are you sure you want to delete this?",
        text: "Check the information before delete.",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Aceptar",
        cancelButtonText: "Cancelar",
        closeOnConfirm: true,
        closeOnCancel: false
    }, function (isConfirm) {
        if (isConfirm) {
            //$("#DeleteProduct").submit();
           

        } else {
            swal("Canceled", "You didn't delete this register!", "error");
        }
    });
}