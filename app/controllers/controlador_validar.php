<?php
    require_once "app/models/modelo_vehiculo.php";
    require_once "app/models/modelo_especificacion.php";
    require_once "app/models/modelo_usuario.php";
    require_once "app/views/vista.php";
    require_once "app/helpers/helper.php";

    class Controlador_validar {
        private $modelo_vehiculo;
        private $modelo_especificacion;
        private $modelo_usuario;
        private $vista;
        private $helper;

        public function __construct(){
            //instancio todo los objetos
            $this->modelo_vehiculo = new Modelo_vehiculo();
            $this->modelo_especificacion = new modelo_especificacion();
            $this->modelo_usuario = new modelo_usuario();
            $this->vista = new vista();
            $this->helper = new helper();
        }

        //valida si el usuario existe
        function validar(){
            //traigo el email y password por el methodo POST
            $email = $_POST['email'];
            $password = $_POST['password'];

            //traigo el usuario de la base de datos si existe
            $usuario = $this->modelo_usuario->existeUsuario($email);

            //verifica si el usuario y la contraseña cohincide
            if($usuario && password_verify($password, $usuario->password)){

                // inicio una session para este usuario
                session_start();
                $_SESSION['USER_ID'] = $usuario->id;
                $_SESSION['USER_EMAIL'] = $usuario->email;
                $_SESSION['IS_LOGGED'] = true;

                header("Location: " . BASE_URL . "inicio");
            }
            else {
                $this->vista->mostrarFormularioLogin("el usuario o contraseña no existe.");
            }
        }

        //elimina de la base de datos el vehiculo o la especificacion del vehiculo depende lo clikeado
        function eliminarTabla($id_vehiculo, $tabla){

            $this->helper->estaLogeado();
            //elimina de la tabla de producto el que clickeo
            
            if ($tabla == "vehiculo"){
                $this->modelo_especificacion->eliminarEspecificacion($id_vehiculo);
                $this->modelo_vehiculo->eliminarVehiculo($id_vehiculo);
                header("location: " . BASE_URL . "vehiculos");
                die();
            }
            if ($tabla == "especificacion"){
                $this->modelo_especificacion->eliminarEspecificacion($id_vehiculo);
                header("location: " . BASE_URL . "especificaciones");
            }
        }

        //agregar una fila a la base de datos VEHICULOS
        function agregar(){
            $this->helper->estaLogeado();

            $vehiculo = $_POST['tipo_auto'];
            $agencia = $_POST['agencia'];
            $categoria = $_POST['categoria'];
            $imagen = $_POST['imagen'];

            
            if(isset($_POST['agregar'])){   
                $this->modelo_vehiculo->agregarVehiculo($vehiculo, $agencia, $categoria, $imagen);
                header("location: " . BASE_URL . "vehiculos");
            }
        }

        //agrega una especificacion a la base de datos 
        function agregarEspecificacion($id_vehiculo){
            $this->helper->estaLogeado();

            $color = $_POST['color'];
            $valor = $_POST['valor'];
            $km = $_POST['km'];

            
            if(isset($_POST['completo'])){   
                $this->modelo_especificacion->agregarEspecificacion($id_vehiculo, $color, $valor, $km);
                header("location: " . BASE_URL . "vehiculo/" . $id_vehiculo);
            }
        }

        //llama a vista para mostrar el formulario de edicion
        function editar($id_vehiculo, $tabla){
            $this->helper->estaLogeado();

            $this->vista->editar($id_vehiculo, $tabla);
        }

        //edita en la base de datos depende si es una especificacion como un tipo de vehiculo
        function editarTabla($id_vehiculo, $tabla){
            $this->helper->estaLogeado();
            if ($tabla == "vehiculo"){
                $vehiculo = $_POST['tipo_auto'];
                $agencia = $_POST['agencia'];
                $categoria = $_POST['categoria'];
                $imagen = $_POST['imagen'];

                if(isset($_POST['editar'])){   
                    $this->modelo_vehiculo->editarVehiculo($id_vehiculo, $vehiculo, $agencia, $categoria, $imagen);
                    header("location: " . BASE_URL . "vehiculos");
                    die();
                }
            }
            if ($tabla == "especificacion"){
                $valor = $_POST['valor'];
                $color = $_POST['color'];
                $km = $_POST['kilometraje'];

                if(isset($_POST['editar'])){   
                    $this->modelo_especificacion->editarEspecificacion($id_vehiculo, $valor, $color, $km);
                    header("location: " . BASE_URL . "especificaciones");
                }
            }
        }
        
        //se desloguea
        function desloguearse(){
            session_start();
            session_destroy();
            header("location: " . BASE_URL . "home");
        }
    }
?>