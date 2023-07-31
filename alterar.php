<?php
        include("conexao.php");
        if (isset($_POST['bt_id'])) {
        $id_login = $_POST['bt_id'];
        $sql_consultar = "SELECT * FROM tabela_login WHERE id_login= '$id_login'";
        $mysqli_consultar = $mysqli->query($sql_consultar) or die($mysqli->error);
        $consultar = $mysqli_consultar->fetch_assoc();
        
}

        if (isset($_POST['bt_login'])) {

    

        $id_login = $_POST['bt_id'];
        $login = $_POST['bt_login'];
        $senha = $_POST['bt_senha'];

            $sql_alterar = "UPDATE tabela_login
            SET login = '$login', 
            senha = '$senha'
            WHERE id_login = '$id_login'";

            $mysqli_alterar = $mysqli->query($sql_alterar) or die($mysqli->error);

            var_dump( $mysqli_alterar);
}



?>

        <!DOCTYPE html>
        <html lang="pt-br">

        <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Revisão - Cadastrar</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-4">
                <form action="" method="post">
                    <div class="mb-3">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <label class="form-label" for="">Digite o ID do login para alteração:</label>
                        <input class="form-control" type="text" name="bt_id">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Consultar">
                    
                </form>
            </div>
            <div class="col-4">
                <form action="" method="post">
                    <div class="mb-3">
                        <h1 class="text-center"> Para Fazer - Revisão - Cadastrar</h1>
                        <label class="form-label" for="">Login</label>
                        <input type="hidden" name="bt_id" value="
                            <?php
                            if(isset($consultar['id_login'])){
                                echo $consultar['id_login']; 
                            }
                            
                            ?>"> 
                        
                        <input class="form-control" type="text" name="bt_login" value="<?php
                        if(isset($consultar['login'])){
                            echo $consultar['login']; 
                        }else{
                            echo "Sem valor";
                        }
                        
                        ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="">Senha</label>
                        <input class="form-control" type="text" name="bt_senha" value="<?php
                        if(isset($consultar['senha'])){
                            echo $consultar['senha']; 
                        }else{
                            echo "Sem valor";
                        }
                        
                        
                        
                        ?>">
                    </div>

                    <input class="btn btn-primary" type="submit" value="Cadastrar">
                    <input class="btn btn-danger" type="reset">
                </form>
            </div>
        </div>
        <div class="col-4">

        </div>



    </div>

