<?php
    error_reporting(0);
    include("../conexiones/conexiondatos.php");
    $con=conectar();

    $id=$_GET['id'];

    $sql="SELECT * FROM departamentos WHERE codDepartamento='$id'";
    $query=mysqli_query($con,$sql);
    
    $row=mysqli_fetch_array($query);
?>


<!DOCTYPE html>

<html>
    <head>
        <title>Actualizar Departamentos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../estilos/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="../estilos/menudesplegable.css" rel="stylesheet" type="text/css"/>
		<style type="text/css">
		.navbar.navbar-expand-lg.navbar-dark.bg-primary .container-fluid {
    color: #fefefe;
}
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <img src="../imagenes/imagen sin fondo.png" width="110" height="117" alt=""/>humanity &amp; inclusion
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                  <a class="nav-link" href="#">Inicio</a>
                  <a class="nav-link" href="#">Gestión Documental</a>                 
                  <a class="nav-link" href="#">Archivo Central</a>         
                  <a class="nav-link" href="#">Archivo Histórico</a>                
				  <li><a class="nav-link" href="">Configuración</a>
					 <ul>	
						<li><a class="nav-link" href="public_html/formularios/frm_Departamento.php">Departamentos</a></li>
						 <li><a class="nav-link" href="#">Dependencia</a></li>
						 <li><a class="nav-link" href="#">Municipio</a></li>
						 <li><a class="nav-link" href="#">T. Retención</a></li>
						 <li><a class="nav-link" href="#">Tipo Documento</a></li>
						 <li><a class="nav-link" href="#">Usuario</a></li>
					 </ul>
				</li>
					<a class="nav-link" href="#">Salir</a> 
                </div>
              </div>
            </div>
</nav>
<div class="container mt-5">
                    <form action="update_dep.php" method="POST">
                    
                                <input type="hidden" name="codDepartamento" value="<?php echo $row['codDepartamento']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="DepNombreDepartamento" placeholder="Nombre Departamento" value="<?php echo $row['DepNombreDepartamento']  ?>">
                                                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
                
				
				

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>