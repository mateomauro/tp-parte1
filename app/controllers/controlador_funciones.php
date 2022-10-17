<?php
    require_once "app/models/modelo_vehiculo.php";
    require_once "app/models/modelo_especificacion.php";
    require_once "app/views/vista.php";

    class Controlador_funciones {
        //atributos
        private $modelo_vehiculo;
        private $modelo_especificacion;
        private $vista;

        public function __construct(){
            //instancio todo los objetos
            $this->modelo_vehiculo = new modelo_vehiculo();
            $this->modelo_especificacion = new modelo_especificacion();
            $this->vista = new vista();
        }

        //llama a la vista para mostrar la pagina principal 
        function mostrarHome(){
            $this->vista->mostrarHome();
        }
        
        //llama a vista para mostrar el formulario de login 
        function login(){
            session_start();
            $this->vista->mostrarFormularioLogin();
        }

        //una vez clickeado el boton invitado o administrador{y logeado}, muestra el inicio de la pagina
        function inicio(){
            session_start();
            $this->vista->mostrarInicio();
        }

        //muestra los vehiculos depende si es invitado o administrador con sus respectivos botones
        function vehiculos(){
            $vehiculos = $this->modelo_vehiculo->obtenerVehiculos();
            session_start();
            $this->vista->mostrarVehiculos($vehiculos);
        }

        //muestra la especificacion de un vehiculo clikeado con sus especificaciones, y si no tiene aparece el formulario para completarlas
        function especificacionVehiculo($id_vehiculo){
            $especificacion = $this->modelo_especificacion->obtenerEspecificacionVehiculo($id_vehiculo);
            $vehiculo = $this->modelo_vehiculo->obtenerVehiculo($id_vehiculo);
            session_start();
            if(isset($_SESSION['IS_LOGGED'])){
                if($especificacion){
                    $this->vista->mostrarEspecificacion($especificacion, $vehiculo);
                    die();
                }
                else {
                    $this->vista->completarEspecificaciones($id_vehiculo);
                    die();
                }
            }
            $this->vista->mostrarEspecificacion($especificacion, $vehiculo);
        }

        //muestra la categoria
        function mostrarCategoria(){
            session_start();
            if(isset($_POST['filtrarEspecificaciones'])){
                $especificaciones = $this->modelo_especificacion->obtenerEspecificaciones();
                $vehiculos = $this->modelo_vehiculo->obtenerVehiculos();
                $this->vista->mostrarCategoria($vehiculos, "especificaciones", $especificaciones);
                die();
            }
            
            if(isset($_POST['filtrar'])){
                $vehiculos = $this->modelo_vehiculo->obtenerVehiculos();
                $this->vista->mostrarCategoria($vehiculos, "vehiculos");
                die();
            }

            if(isset($_POST['desfiltrar'])){
                header("location: " . BASE_URL . "vehiculos");
            }
            if(isset($_POST['desfiltrarEspecificaciones'])){
                header("location: " . BASE_URL . "especificaciones");
            }
        }

        //muestra las especificaciones 
        function mostrarEspecificaciones(){
            session_start();
            $especificaciones = $this->modelo_especificacion->obtenerEspecificaciones();
            $vehiculos = $this->modelo_vehiculo->obtenerVehiculos();
            $this->vista->mostrarEspecificaciones($especificaciones, $vehiculos);
        }

    }
?>