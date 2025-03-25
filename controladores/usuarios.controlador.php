<?php

session_start();

class ControladorUsuarios{

    public function ctrIngresoUsuario(){


        if (isset($_POST["ingUsuario"])){
            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){

                $tabla = "usuarios";
                $item = "Usuario";
                $valor = $_POST["ingUsuario"];

                $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);
                    var_dump($respuesta);
                if ($respuesta["Usuario"] == $_POST["ingUsuario"] && $respuesta["Clave"] == $_POST["ingPassword"]){
                    
                    $_SESSION["iniciarSesion"] = "ok";
                    echo '<script>

                        window.location = "inicio";

                    </script>';
                }else{

                    echo '<div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';

                }

            }

        }
    }
}

?>