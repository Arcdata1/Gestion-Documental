<!--/conexion a la base de datos -->
<?php 
    include("../conexiones/conexiondatos.php");
    $con=conectar();

    $sql="SELECT DepNombreDepartamento,municipios.MunNombreMunicipio,tipodocumento.docNombre, DocFechaDocumento  
    FROM departamentos
    inner JOIN documentos
    on departamentos.codDepartamento = documentos.DocDepartamento
    INNER JOIN municipios
    on municipios.codMunicipio = documentos.DocMunicipio
    INNER JOIN tipodocumento
    on tipodocumento.codDocumento = documentos.DocTipoDocumento;";
    
?>


<!DOCTYPE html>

<html>
    <head>
        <title>Gestión Documental</title>
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
                    <h2> Gestión Documental</h2>
                    <form action="../../public_html/conexiones/registrodepartamento.php" method="post" class="formulario">
                        <div class="mb-3">
                            <label for="search" class="form-label">Buscar</label>
                            <input type="search" class="form-control" id="search" placeholder="Buscar">
                        </div>
                        <div class="mb-3">
                            <label for="Codigo Documento" class="form-label"></label>
                            <input type="hidden" class="form-control" id="search" placeholder="Codigo Documento">
                        </div>
                        <div class="mb-3">
                            <label for="Departamento" class="form-label">Departamento</label>
                            <input type="Text" class="form-control" id="search" placeholder="Seleccion Departamento">
                        </div>
                        <div class="mb-3">
                            <label for="Municipio" class="form-label">Municipio</label>
                            <input type="Text" class="form-control" id="Municipio" placeholder="Seleccione Municipio">
                        </div>
                        <div class="mb-3">
                            <label for="Dependencia" class="form-label">Dependencia</label>
                            <input type="Text" class="form-control" id="search" placeholder="Seleccione Dependencia">
                        </div>
                        <div class="mb-3">
                            <label for="TablaRetencion" class="form-label">Buscar</label>
                            <input type="Text" class="form-control" id="search" placeholder="Seleccion Codigo">
                        </div>
                        <div class="mb-3">
                            <label for="FechaDocumento" class="form-label">FechaDocumento</label>
                            <input type="Date" class="form-control" id="search" placeholder="FechaDocumento">
                        </div>
                        <div class="mb-3">
                            <label for="TipoDocumentoDocumento" class="form-label">Buscar</label>
                            <input type="text" class="form-control" id="search" placeholder="Selecione Tipo DOC">
                        </div>
                        <div class="mb-3">
                            <label for="Plantilla" class="form-label">Plantilla</label>
                            <input type="text" class="form-control" id="search" placeholder="Seleccione Plantilla">
                            
                        </div>
                        <div class="mb-3">
                            <label for="TituloDocumento" class="form-label">TituloDocumento</label>
                            <input type="TituloDocumento" class="form-control" id="search" placeholder="TituloDocumento">
                        </div>
                        <div class="mb-3">
                            <label for="ResumenContenido" class="form-label">ResumenContenido</label>
                            <textarea class="form-control" id="ResumenContenido" rows="1"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="Ubicación" class="form-label">Ubicación</label>
                            <input type="text" class="form-control" id="Ubicación" placeholder="Ubicacion Fisica Documento">
                        </div>
                        <div class="mb-3">
                            <label for="Responsable" class="form-label">Responsable</label>
                            <input type="text" class="form-control" id="Ubicación" placeholder="Responsable">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">email</label>
                            <input type="email" class="form-control" id="Ubicación" placeholder="email">
                        </div>
                        <div class="mb-3">
                            <label for="EstatusDoc" class="form-label">EstatusDoc</label>
                            <input type="text" class="form-control" id="Ubicación" placeholder="Selecciones Estatus">
                        </div>
                        <div class="mb-3">
                            <label for="Adjuntar Documento " class="form-label">Adjuntar Documento</label>
                            <input type="file" class="form-control" id="Ubicación" placeholder="Adjunto Soporte">
                        </div>
                            <input class="btn btn-primary" type="Submit" value="Registrar">
                            <input class="btn btn-primary" type="Submit" value="Modificar">
                            <input class="btn btn-primary" type="Submit" value="Borrar">
                    </form>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <h2>Lista Documentos En Gestión</h2>
                    <table class="t-cliente">
                <thead>                         
                            <tr>
                                <th>Departamento</th>
                                <th>Municipio</th>	
                                <th>Documento</th>
                                <th>Fecha</th>
                                <th></th>	
                                <th></th>
                                <th></th>	
                                <th></th>	                 
                            </tr>                            
                        </thead>
    <?php 
            
            $query=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($query)) {
    ?>
        
   
                <tr>
                    <th><?php echo $row["DepNombreDepartamento"]?></th>
                    <th><?php echo $row["MunNombreMunicipio"]?></th>
                    <th><?php echo $row["docNombre"]?></th>
                    <th><?php echo $row["DocFechaDocumento"]?></th>                    
                </tr>
                <?php   } mysqli_free_result($query);    ?> 
            </table>						
                </div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
 