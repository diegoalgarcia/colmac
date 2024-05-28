<?php 

include("conexion.php");
 
    // formulrio de registro de alumnos de sexto colmac 2024
    $p_nom=$_POST['p_nom'];
	$s_nom=$_POST['s_nom'];	
	$p_ape=$_POST['p_ape'];
    $s_ape=$_POST['s_ape'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];

	
    $sql="INSERT INTO once
    (p_nombre, s_nombre, p_apellido, s_apellido, telefono, correo)
    VALUES
    (:miPnom, :miSnom, :miPape, :miSape, :miTel, :miCorr)";
    $resultado=$base->prepare($sql);

$resultado->execute(array(":miPnom"=>$p_nom, ":miSnom"=>$s_nom, ":miPape"=>$p_ape, ":miSape"=>$s_ape, ":miTel"=>$telefono, ":miCorr"=>$correo));

//,           
    header("location:index.php");
   //   echo "Exito al ingresar el registro de usuario...";
?>
