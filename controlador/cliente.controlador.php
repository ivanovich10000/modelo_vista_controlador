<?php
require_once '../modelo/cliente.php';

class clienteController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new cliente();
    }
    
    public function Index(){
        require_once '../vista/header.php';
        require_once '../vista/cliente.php'; 
    }
    
    public function Crud(){
        $cliente = new cliente();
        
        if(isset($_REQUEST['id'])){
            $cliente = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once '../vista/header.php';
        require_once '../vista/cliente-editar.php';
        
    }
    
    public function Guardar(){
        $cliente = new cliente();
        
        $cliente->id = $_REQUEST['id'];
        $cliente->dni = $_REQUEST['dni'];
        $cliente->Nombre = $_REQUEST['Nombre'];
        $cliente->Apellido = $_REQUEST['Apellido'];
        $cliente->Correo = $_REQUEST['Correo'];  
        $cliente->telefono = $_REQUEST['telefono'];    
      

        $cliente->id > 0 
            ? $this->model->Actualizar($cliente)
            : $this->model->Registrar($cliente);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}