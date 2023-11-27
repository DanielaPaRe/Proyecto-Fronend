<?php


class UsuarioControlador
{

    public function login()
    {

        if (isset($_POST["loginUsuario"])) {

            $usuario = $_POST["loginUsuario"];
            $password = $_POST["loginPassword"];

            $respuesta = UsuarioModelo::mdlIniciarSesion($usuario, $password);

            if (count($respuesta) > 0) {
                $_SESSION["usuario"] = $respuesta[0];

                echo '
                    <script>
                        window.location = "http://localhost/proyecto-fronend/"

                        </script>
                ';
            } else{
                echo '
                    <script>

                        fncSweetAlert("error", "Usuario y/o contraseña invalida","http://localhost/proyecto-fronend/");
                            
                    
                    </script>

                    ';
            }

        }

    }

}