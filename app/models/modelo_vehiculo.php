<?php
    class Modelo_vehiculo {

        //nos conectamos a la base de datos
        function conectarVehiculos(){
            $db = new PDO('mysql:host=localhost;'.'dbname=fiat_db;charset=utf8', 'root', '');
            return $db;
        }

        //obtiene todos los vehiculos
        function obtenerVehiculos(){
            $db = $this->conectarVehiculos();
            $sentencia = $db->prepare("SELECT * FROM vehiculos");
            $sentencia->execute();
            $vehiculos = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $vehiculos;
        }

        //elimina un vehiculo en especial por el id
        function eliminarVehiculo($id_vehiculo){
            $db = $this->conectarVehiculos();
            $sentencia = $db->prepare("DELETE FROM vehiculos WHERE id_vehiculo = ?");
            $sentencia->execute([$id_vehiculo]);
        }

        //agregar un nuevo vehiculo a la base de datos
        function agregarVehiculo($vehiculo, $agencia, $categoria, $imagen){
            $db = $this->conectarVehiculos();
            $sentencia = $db->prepare("INSERT INTO vehiculos(vehiculo, categoria, agencia, imagen) VALUES (?, ?, ?, ?)");
            $sentencia->execute([$vehiculo, $categoria, $agencia, $imagen]);
        }

        //edita un vehiculo en especial por el id
        function editarVehiculo($id_vehiculo, $vehiculo, $agencia, $categoria, $imagen){
            $db = $this->conectarVehiculos();
            $sentencia = $db->prepare("UPDATE vehiculos SET vehiculo=?, categoria=?, agencia=?, imagen=? WHERE id_vehiculo = ?");
            $sentencia->execute([$vehiculo, $categoria, $agencia, $imagen, $id_vehiculo]);
        }
    
        //obtiene un vehiculo en especial por el id
        function obtenerVehiculo($id_vehiculo){
            $db = $this->conectarVehiculos();
            $sentencia = $db->prepare("SELECT vehiculo, imagen FROM vehiculos WHERE id_vehiculo = ?");
            $sentencia->execute([$id_vehiculo]);
            $vehiculo = $sentencia->fetch(PDO::FETCH_OBJ);
            return $vehiculo;
        }  
        }
?>