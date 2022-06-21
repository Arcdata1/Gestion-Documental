<?php 
    include("../conexiones/conexiondatos.php");
    $con=conectar();

    $sql="SELECT *  FROM departamentos";
    $query=mysqli_query($con,$sql);
?>


<!DOCTYPE html>

<html>
    <head>
        <title>Formulario Departamentos</title>
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
                  <a class="nav-link" href="public_html/formularios/index.php">Inicio</a>
                  <a class="nav-link" href="../../public_html/formularios/frm_gestion_documental.php">Gestión Documental</a>                 
                  <a class="nav-link" href="public_html/formularios/archivo_central.php">Archivo Central</a>         
                  <a class="nav-link" href="/public_html/formularios/archivo_historico.php">Archivo Histórico</a> 
                  <li><a class="nav-link" href="/public_html/formularios/archivo_Reportes.php">Reportes</a>
                  <ul>	
						<li><a class="nav-link" href="../../public_html/formularios/frm_Departamento.php">Reporte Gestion Documental</a></li>
						 <li><a class="nav-link" href="../../public_html/formularios/frm_dependencias.php">Reporte Archivo Historico</a></li>
						 <li><a class="nav-link" href="../../public_html/formularios/frm_municipio.php">Reporte Archivo Fisico</a></li>
						 <li><a class="nav-link" href="../../public_html/formularios/frm_t_retencion.php">Reporte Archivos Por Expirar</a></li>
						 <li><a class="nav-link" href="../../public_html/formularios/tipo_documento.php">Reporte Inventario Documental</a></li>
						 <li><a class="nav-link" href="../../public_html/formularios/usuario.php">Usuario</a></li>
					 </ul>
				</li>                      
				  <li><a class="nav-link" href="">Configuración</a>
					 <ul>	
						<li><a class="nav-link" href="../../public_html/formularios/frm_Departamento.php">Departamentos</a></li>
						 <li><a class="nav-link" href="../../public_html/formularios/frm_dependencias.php">Dependencia</a></li>
						 <li><a class="nav-link" href="../../public_html/formularios/frm_municipio.php">Municipio</a></li>
						 <li><a class="nav-link" href="../../public_html/formularios/frm_t_retencion.php">T. Retención</a></li>
						 <li><a class="nav-link" href="../../public_html/formularios/tipo_documento.php">Tipo Documento</a></li>
						 <li><a class="nav-link" href="../../public_html/formularios/usuario.php">Usuario</a></li>
					 </ul>
				</li>
					<a class="nav-link" href="#">Salir</a> 
                </div>
              </div>
            </div>
</nav>
        <div class="container my-3">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <h2> Form Departamento</h2>
                    <form action="../../public_html/conexiones/registrodepartamento.php" method="post" class="formulario">
                     
                        <div class="auto">
                            <label for="" class="form-label"></label>
                            <input type="hidden" name="codDepto" class="form-control"placeholder="">
                        </div>

                        <div class="mb-3">
                            <label for="Nombre Departamento" class="form-label">Nombre Departamento</label>
                            <input type="Text" name="nameDepto" class="form-control"placeholder="Digite Nombre Departamento">
                        </div>                 
                    
                        
                        
                      <input class="btn btn-primary" type="Submit" value="Registrar">

                    </form>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <h2>Lista Departamentos</h2>
                   <div class="cont-tabla">
            
				<table class="t-cliente">
                <thead>                         
                            <tr>
                                <th>Cod. Departamento</th>
                                <th>Nombre Departamento</th>	
                                <th>Accion</th>
                                <th></th>		                 
                            </tr>                            
                        </thead>
    <?php 
            
            while($row=mysqli_fetch_array($query)) {
    ?>
        
   
                <tr>
                    <th><?php echo $row["codDepartamento"]?></th>
                    <th><?php echo $row["DepNombreDepartamento"]?></th>
                    <th><a href="actualizar_depto.php?id=<?php echo $row['codDepartamento'] ?>" class="btn btn-info">Editar</a></th>
                    <th><a href="delete_depto.php?id=<?php echo $row['codDepartamento'] ?>" class="btn btn-danger">Eliminar</a></th>  
                </tr>
    <?php
    } 


    ?>
                
            </table>													
				

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
 