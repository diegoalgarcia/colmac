<?php

   try {

    $base=new PDO('mysql:host=localhost; dbname=colmac', 'root', '');

    /*
        $base=new PDO('mysql:host=localhost; dbname=jardines_cartera_prevexe', 'jardines_ingeniero', 'dyV{il=TCvW3');
      
  
       $base=new PDO('mysql:host=localhost; dbname=cartera_prevexe', 'root', '');  
   */    
       $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $base->exec("SET CHARACTER SET UTF8");

   } catch (Exception $e) {
       die('Error' . $e->getMessage());
       echo "Línea del error " . $e->getLine;
   }
   

?>