<?php
     include("conexao.php");

     $sql_consultar = "SELECT * FROM tabela_login";

     $consulta = $mysqli->query( $sql_consultar) or die($mysqli->error);
     $quantidade_login = $consulta->num_rows; // Retornar quantidade de linhas
?>

        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link  rel="stylesheet"  href="meu.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
            <title>Lista de usuários</title>
        </head>
        <body>
            <div class="container">
                <h1>Consultar Logins</h1>
            <table class="table table-striped">
            <tr>
                <th>Id do Login</th>
                <th>Login</th>
                <th>Senha</th>
            </tr>

                <?php
                    while ($logins = $consulta -> fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $logins['id_login']; ?></td>
                    <td><?php echo $logins['login']; ?></td>
                    <td><?php echo $logins['senha']; ?></td>
                   
                    
                </tr>
                <?php
                    }
                
                ?>
            
        </table>
        <a class="btn btn-warning" href="revisao.php">Voltar</a>
        </div> 
            
        </body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        </html>