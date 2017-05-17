function validateData() {

     if ($("#fldNam").val() == "" && $("#fldDescript").val() == "" && $("#fldQuant").val() == "" && $("#fldPrice").val() == "") {

        swal("ERROR", "there aren't information in the form, try again", "error");    
        return false;

    }else if ($("#fldNam").val() == "") { 

        swal("There was an error", 
             "The field trademark is required", 
             "error");    
        return false;

    }else if($("#fldDescript").val() == ""){

       swal("There was an error", 
             "The field description is required", 
             "error");
            return false;  

    }else if($("#fldQuant").val() == ""){

       swal("There was an error", 
             "The field quantity is required", 
             "error");
            return false;

    }else if($("#fldPrice").val() == ""){

       swal("There was an error", 
             "The field price is required", 
             "error");
              return false;
    }else {
        swal("", "", "success");
        return true;
    }
}       

function Validate(ctl, event) {
    event.preventDefault();
    swal({
        title: "Are you sure you want to save this information?",
        text: "Check the information before save!",
        type: "info",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Guardar",
        cancelButtonText: "Cancelar",
        closeOnConfirm: false,
        closeOnCancel: false
    },
    
        function (isConfirm) {
            
            if (isConfirm) {
                if (validateData()) {
                    swal("", "", "success");
                    $("#SavedFormProduct").submit();
                    isConfirm.closeOnConfirm = true
                }                 
            } else {
                swal("Canceled", "You didn't save nothing!", "error");
            }
        });
}