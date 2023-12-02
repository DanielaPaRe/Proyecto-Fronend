<?php

session_start();
    
    if(isset($_POST['usuario']) && isset($_POST['Contraseña'])){

        require('modelo/conexion.php');
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
    
        return $data;
    }

    $usuario = validate($_POST['usuario']);
    $Contraseña = validate($_POST['Contraseña']);

    if (empty($usuario)){
        header("El Usuario es requerdio");
        exit();
    }elseif (empty($Contraseña)){
        header("El Clave es requerdio");
        exit();
    }else{

        //$Contraseña = md5($Contraseña);

        $Sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' and Contraseña = '$Contraseña'";
        $result = mysqli_query($conexion, $Sql);

        if(mysqli_num_rows($resul) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['usuario'] === $usuario && $row['Contraseña'] === $Contraseña){

                $_SESSION['usuario'] = $row['usuario'];
                $_SESSION['Contraseña'] = $row['Conraseña'];
                header("Location: index.php");
                exit();    
            }else {
                header("El Usuario o la Contraseña son incorrectos");
                exit();
            }

        }else{
            header(" El Usuario o la Contraseña son incorrectos");
            exit();
            
        }
        
    }
}else {
    header("Location: index.php");
    exit();

}
?>