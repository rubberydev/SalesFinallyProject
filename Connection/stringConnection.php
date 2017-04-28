<?php
class dbConnection{

public static function connectedDB(){
      try{

      $base = new PDO('mysql:host=localhost; dbname=FirstConnection','root','7lp3cqmfF4:13');
      //echo "Connection with the database succesfully";
      //?
      $base-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //formato
      $base->exec("SET CHARACTER SET utf8");

      return $base;

      }catch(Exception $ex){

      return die('Error: ' . $ex->GetMessage());    

      }finally{
          $base = null;
      }
   }
}
?>