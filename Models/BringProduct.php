<?php
   $brought = (int)$_GET['c'];
   
   
   if($brought != null){
       echo "<select class='selectpicker' name='product'>";  
       require("../Models/Category.php");
       $categ = new Category();
	   $categ->BringProductsByCategory($brought);
	   echo "</select>";
   }

?>