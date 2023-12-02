<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require('modelo/conexion.php');

    //Verificar si se ha enviado el formulario de inicio de Sesión


    $usuario = $_POST["usuario"];
    $Contraseña = $_POST["Contraseña"];

    $Sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' and Contraseña = '$Contraseña'";
    $result = mysqli_query($conexion, $Sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }


    // Verificar la contraseña utilizando password_verify

    if (password_verify($Contrasena, $row['Contrasena'])) {
        $_SESSION['usuario'] = $row['usuario'];
        $_SESSION['usuario'] = $usuario;
        
        header("Location: index.php");

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

$conn->close();
    }
}
?>

