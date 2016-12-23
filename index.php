<!DOCTYPE html>
<html>
<head>
	<title>Pruebas de Menú</title>
<link href="includes/bootstrap.min.css" rel="stylesheet">


</head>
<body>

<div class="container" style="padding-top: 1em;">
  <nav class="navbar navbar-default" role="navigation">
    <!-- El logotipo y el icono que despliega el menú se agrupan
         para mostrarlos mejor en los dispositivos móviles -->
    <div class="navbar-header">
      
      <a class="navbar-brand" href="#">Logotipo</a>
    </div>
  
    <!-- Agrupar los enlaces de navegación, los formularios y cualquier
         otro elemento que se pueda ocultar al minimizar la barra -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Inicio</a></li>
       
        
      </ul>
  
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar">
        </div>
        <button type="submit" class="btn btn-default">Enviar</button>
      </form>
  
      <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            Clientes <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#">Ingresar</a></li>
            <li><a href="#">Modificar</a></li>
            <li><a href="#">Eliminar</a></li>
            <li class="divider"></li>
            <li><a href="#">Buscar</a></li>
            
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            Productos <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#">Ingresar</a></li>
            <li><a href="#">Modificar</a></li>
            <li><a href="#">Eliminar</a></li>
            <li class="divider"></li>
            <li><a href="#">Buscar</a></li>
            
          </ul>
        </li>
        
        <li><a href="#">Login</a></li>
        
      </ul>

      
    </div>
  </nav>
</div>

<script type="text/javascript" src="includes/jquery.js"></script>
<script type="text/javascript" src="includes/bootstrap.min.js"></script>



</body>
</html>