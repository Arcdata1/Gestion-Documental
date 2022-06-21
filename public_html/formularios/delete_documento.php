<?php
   error_reporting(0);
   include("../conexiones/conexiondatos.php");
   $con=conectar();

   $cod_departamento= $_GET['id']; 

   $sql= "DELETE FROM departamentos WHERE codDepartamento = '$cod_departamento'";
   $query=mysqli_query($con,$sql);

        if($query){
            header("location: frm_Departamento.php");
        }
       
   ?>

