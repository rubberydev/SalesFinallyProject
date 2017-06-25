function Confirm(ctl, event) {
    event.preventDefault();
    swal({
        title: "Are you sure you want to delete this?",
        text: "Check the information before delete.",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Delete",
        cancelButtonText: "Cancel",
        closeOnConfirm: true,
        closeOnCancel: false
    }, function (isConfirm) {
        if (isConfirm) {
            //$("#DeleteProduct").submit();
           swal("", "", "success");
                    $("#ShowListProducts").submit();
                    isConfirm.closeOnConfirm = true

        } else {
            swal("Canceled", "You didn't delete this register!", "error");
        }
    });
}

