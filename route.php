<?php
    require_once "app/controllers/controlador_validar.php";
    require_once "app/controllers/controlador_funciones.php";

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    $action = 'home';

    if(!empty($_GET['action'])){
        $action = $_GET['action'];
    }

    $params = explode ("/", $action);


    switch ($params[0]) {
        case 'home':
            $controladorFunciones = new Controlador_funciones();
            $controladorFunciones->mostrarHome();
            break; 
        case 'login':
            $controladorFunciones = new Controlador_funciones();
            $controladorFunciones->login();
            break;
        case 'validar':
            $controladorValidar = new Controlador_validar();
            $controladorValidar->validar();
            break;
        case 'inicio':
            $controladorFunciones = new Controlador_funciones();
            $controladorFunciones->inicio();
            break;
        case 'vehiculos':
            $controladorFunciones = new Controlador_funciones();
            $controladorFunciones->vehiculos();
            break;
        case 'vehiculo':
            $controladorFunciones = new Controlador_funciones();
            $controladorFunciones->especificacionVehiculo($params[1]);
            break;
        case 'eliminar':
            $controladorValidar = new Controlador_validar();
            $controladorValidar->eliminarTabla($params[1], $params[2]);
            break;
        case 'agregar':
            $controladorValidar = new Controlador_validar();
            $controladorValidar->agregar();
            break;
        case 'editar':
            $controladorValidar = new Controlador_validar();
            $controladorValidar->editar($params[1], $params[2]);
            break;
        case 'completo':
            $controladorValidar = new Controlador_validar();
            $controladorValidar->agregarEspecificacion($params[1]);
            break;
        case 'editado':
            $controladorValidar = new Controlador_validar();
            $controladorValidar->editarTabla($params[1], $params[2]);
            break;
        case 'categoria':
            $controladorFunciones = new Controlador_funciones();
            $controladorFunciones->mostrarCategoria();
            break;
        case 'desloguearse':
            $controladorValidar = new Controlador_validar();
            $controladorValidar->desloguearse();
            break;
        case 'especificaciones':
            $controladorFunciones = new Controlador_funciones();
            $controladorFunciones->mostrarEspecificaciones();
            break;
        default:
            echo "ERROR NOT FOUND";
            break;
    }
?>