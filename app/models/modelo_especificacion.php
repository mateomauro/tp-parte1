<?php
    class Modelo_especificacion {
        
        //se conecta a la base de datos
        function conectarEspecificaciones(){
            $db = new PDO('mysql:host=localhost;'.'dbname=fiat_db;charset=utf8', 'root', '');
            return $db;
        }

        //obtiene todas las especificaciones 
        function obtenerEspecificaciones(){
            $db = $this->conectarEspecificaciones();
            $sentencia = $db->prepare( "SELECT * FROM especificaciones");
            $sentencia->execute();
            $especificaciones = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $especificaciones;
        }

        //trae una especificacion en especial por el id
        function obtenerEspecificacionVehiculo($id_vehiculo){
            $db = $this->conectarEspecificaciones();
            $sentencia = $db->prepare( "SELECT * FROM especificaciones WHERE id_vehiculo = ?");
            $sentencia->execute([$id_vehiculo]);
            $especificacion = $sentencia->fetch(PDO::FETCH_OBJ);

            return $especificacion;
        }

        //elimina una especificacion en especial por id
        function eliminarEspecificacion($id_producto){
            $db = $this->conectarEspecificaciones();
            $sentencia = $db->prepare("DELETE FROM especificaciones WHERE id_vehiculo = ?");
            $sentencia->execute([$id_producto]);
        }

        //agregar una especificacion a la base de datos 
        function agregarEspecificacion($id_vehiculo, $color, $valor, $km){
            $db = $this->conectarEspecificaciones();
            $sentencia = $db->prepare("INSERT INTO especificaciones(id_vehiculo, color, valor, km) VALUES (?, ?, ?, ?)");
            $sentencia->execute([$id_vehiculo, $color, $valor, $km]);
        }

        //edita una especificacion en especial por el id
        function editarEspecificacion($id_vehiculo, $valor, $color, $km){
            $db = $this->conectarEspecificaciones();
            $sentencia = $db->prepare("UPDATE especificaciones SET color=?, valor=?, km=? WHERE id_vehiculo = ?");
            $sentencia->execute([$color, $valor, $km, $id_vehiculo]);
        }

    }
?>