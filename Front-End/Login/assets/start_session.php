<?php 
    $inputEmail = $_POST["inputEmail"];
    $inputPassword = $_POST["inputPassword"];

    include '../../../Back-End/banco/conecta_banco.php';

    $sql = "select * from grandes_altitudes.login";

    $link = conexao();

    $query = mysqli_query($link, $sql);

    $confirm = 0;

    if($query){
        $row = mysqli_fetch_assoc($query);
        while($row){
            if($row["Email"] == $inputEmail && $row["Senha"] == sha1($inputPassword)){
                $confirm = 1;
                break;
            }
            else
                $row = mysqli_fetch_assoc($query);
        }
    }
    else
        echo mysqli_error($link);

    if($confirm == 1){
        session_start();
        $_SESSION["email"] = $inputEmail; 
        header('Location: ../../pag_perfil_vol_coord/conta.php');
        exit();
    }
    else
        echo '<script>alert("Usuário ou senha estão errados.");location.href="../login.php";</script>';
?>