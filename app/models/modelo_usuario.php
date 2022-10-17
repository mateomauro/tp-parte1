<?php
    class modelo_usuario {

        //nos conectamos a la base de datos
        function conectarUsuarios(){
            $db = new PDO('mysql:host=localhost;'.'dbname=fiat_db;charset=utf8', 'root', '');
            return $db;
        }

        //obtiene todo los usuarios, pero en este caso solo hay uno
        function obtenerUsuarios(){
            $db = $this->conectarUsuarios();
            $sentencia = $db->prepare( "SELECT * FROM usuarios");
            $sentencia->execute();
            $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $usuarios;
        }

        //en el caso de que exista obtiene un usuario por medio del mail
        function existeUsuario($email){
            $db = $this->conectarUsuarios();
            $sentencia = $db->prepare( "SELECT * FROM usuarios WHERE email = ?");
            $sentencia->execute([$email]);
            $usuario = $sentencia->fetch(PDO::FETCH_OBJ);
            return $usuario;
        }
    }
?>