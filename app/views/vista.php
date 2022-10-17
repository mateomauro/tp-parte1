<?php
    require_once('libs/Smarty.class.php');

    class Vista {

        //muestra la pagina principal donde puede seleccionar ser invitado o administrador
        function mostrarHome(){
            $smarty = new smarty();
            $smarty->display("templates/home.tpl");
        }

        //muestra el formulario de login 
        function mostrarFormularioLogin($error = null){
            $smarty = new smarty();
            $smarty->assign("error", $error);
            $smarty->display("templates/formularioLogin.tpl");
        }

        //una vez clickeado el boton invitado o administrador{y logeado}, muestra el inicio de la pagina
        function mostrarInicio(){
            $smarty = new smarty();
            $smarty->display("templates/inicio.tpl");
        }

        //muestra todo los vehiculos
        function mostrarVehiculos($vehiculos){
            $smarty = new smarty();
            $smarty->assign("vehiculos", $vehiculos);
            $smarty->display("templates/vehiculos.tpl");
        }

        //muestra las espeficaciones del vehiculo clikeado
        function mostrarEspecificacion($especificacion, $vehiculo){
            $smarty = new smarty();
            $smarty->assign("especificacion", $especificacion);
            $smarty->assign("vehiculo", $vehiculo);
            $smarty->display("templates/especificacionVehiculo.tpl");
        }

        //muestra el formulario para completarlas si el auto clikeado no tiene especificaciones
        function completarEspecificaciones($id_vehiculo){
            $smarty = new smarty();
            $smarty->assign("id_vehiculo", $id_vehiculo);
            $smarty->display("templates/formularioEspecificaciones.tpl");
        }

        //muestra el formulario de edicion para poder editar una especificacion o un tipo de vehiculo
        function editar($id_vehiculo, $tabla){
            $smarty = new smarty();
            $smarty->assign("id", $id_vehiculo);
            $smarty->assign("tabla", $tabla);
            $smarty->display("templates/formularioEdicion.tpl");
        }

        //muestra el filtrado por categoria
        function mostrarCategoria($vehiculos, $filtro, $especificaciones = null){
            $categoria = $_POST['categorias'];
            $smarty = new smarty();
            $smarty->assign("vehiculos", $vehiculos);
            $smarty->assign("especificaciones", $especificaciones);
            $smarty->assign("filtro", $filtro);
            $smarty->assign("categoria", $categoria);
            $smarty->display("templates/filtrado.tpl");
        }

        //muestra las especificaciones
        function mostrarEspecificaciones($especificaciones, $vehiculos){
            $smarty = new smarty();
            $smarty->assign("especificaciones", $especificaciones);
            $smarty->assign("vehiculos", $vehiculos);
            $smarty->display("templates/especificaciones.tpl");
        }
    }

?>