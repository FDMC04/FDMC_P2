<?php 


    session_start();
    include 'conexion/conexion.php';
    if(isset($_POST['nombreusuario']) && isset($_POST['passwords'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $nombreusuario = validate($_POST['nombreusuario']);
        $pass = validate($_POST['passwords']);
        if(empty($nombreusuario)){
            header("Location: index.php?error=Error");
            exit();
        }else{
            $sql = "SELECT * FROM usuarios WHERE nombreusuario = '$nombreusuario' AND passwords = '$pass'";
            $resultado = mysqli_query($conexion, $sql);
            if(mysqli_num_rows($resultado) === 1){
                $row = mysqli_fetch_assoc($resultado);
                if($row['nombreusuario'] === $nombreusuario && $row['passwords'] === $pass){
                    $_SESSION['nombreusuario'] = $row['nombreusuario'];
                    $_SESSION['passwords'] = $row['passwords'];
                    header("Location: inicio.php");
                    exit();
                }else{
                    header("Location: index.php?error=Error");
                    exit();
                }
            }else{
                header("Location: index.php?error=Error");
                exit();
            }
        }
    }else{
        header("Location: index.php");
        exit();
    }

?>