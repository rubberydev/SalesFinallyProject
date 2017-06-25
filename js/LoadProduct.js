  function selectProduct(str){
                var conexion;

                if(str == ""){
                    document.getElementById('category').InnerHTML ="";
                }
                if(window.XMLHttpRequest){
                    conexion = new XMLHttpRequest();
                }else{
                    conexion = new ActiveXObject("Microsoft.XMLHTTP");
                }

                conexion.onreadystatechange = function(){
                    if(conexion.readyState == 4 && conexion.status == 200){
                        document.getElementById('product').innerHTML = conexion.responseText;
                    }
                }
                conexion.open("GET","../Models/BringProduct.php?c="+str, true);
                conexion.send();
                
            }
            