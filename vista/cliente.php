<?php
    require_once '../modelo/conexion.php';

    $controller = 'cliente';

    // Todo esta lógica hara el papel de un FrontController
    if(!isset($_REQUEST['c']))
    {
        require_once "../controlador/$controller.controlador.php";
        $controller = ucwords($controller) . 'Controller';
        $controller = new $controller;
        $controller->Index();    
    }
    else
    {
        // Obtenemos el controlador que queremos cargar
        $controller = strtolower($_REQUEST['c']);
        $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
        
        // Instanciamos el controlador
        require_once "../controlador/$controller.controlador.php";
        $controller = ucwords($controller) . 'Controller';
        $controller = new $controller;
        
        // Llama la accion
        call_user_func( array( $controller, $accion ) );
    }
?>


<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">

          <div class="col-sm-6">
            <h1 class="m-0">Cliente</h1>
          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Pagina Activa</li>
            </ol>
          </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<!--div class="content"->
    <div class="container-fluid">
       
    </div>< /.container-fluid -->
<!--/div-->
<!-- /.content -->



<h1 class="page-header">CRUD con el patrón MVC en PHP POO y PDO </h1>

<a class="btn btn-primary pull-right" href="?c=cliente&a=Crud">Agregar</a>

<br><br><br>

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
        <th style="width:120px; background-color: #5DACCD; color:#fff">DNI</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Nombre</th>
            <th style="background-color: #5DACCD; color:#fff">Apellido</th>
            <th style="background-color: #5DACCD; color:#fff">Correo</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Telefono</th>            
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
        </tr>
    </thead>

    <tbody>
      <?php foreach($this->model->Listar() as $r): ?>
          <tr>
              <td><?php echo $r->dni; ?></td>
              <td><?php echo $r->Nombre; ?></td>
              <td><?php echo $r->Apellido; ?></td>
              <td><?php echo $r->Correo; ?></td>
              <td><?php echo $r->Telefono; ?></td>
              <td>
                  <a  class="btn btn-warning" href="?c=cliente&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
              </td>
              <td>
                  <a  class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=cliente&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
              </td>
          </tr>
      <?php endforeach; ?>
    </tbody>
</table> 

</body>

<script  src="assets/js/datatable.js"></script>

</html>