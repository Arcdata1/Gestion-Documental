<?php

    $coddepto      = $_POST["codDepto"];
    $nombreDepto   = $_POST["nameDepto"];
    

    $insertar = "INSERT INTO departamentos (codDepartamento,DepNombreDepartamento)
                values('$coddepto','$nombreDepto')";

                $conexion = mysqli_connect("localhost","root","123456789","gestiondocumental");

                $result = mysqli_query($conexion,$insertar);

                if($result){
                    echo "<script>alert('" .'Registro Exitoso' ."');</script>";
                }   else{
                    echo "<script>alert('" .'Error en Registro' ."' );</script>"; 
                }
    mysqli_close($conexion);
    
    echo "<script>window.location = '/gestiondocumentalhi/public_html/formularios/frm_departamento.php'; </script>";
    ?>