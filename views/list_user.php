<?php 
    session_start();

    if(isset($_SESSION['perfil'])):
?>

<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" type='text/css' media='screen' href="css/list.css"> <!-- Link para o arquivo CSS -->
</head>

<style>
    body{
        background-color: rgba(10, 10, 160, 0.692);
    }
    .container{
        background-color:#FFFFFF;
        width: 700px;
        height: 300px;
        text-align: center;
        border-radius:20px;

        position: relative;
        left:350px;
        top:30px;
    }
    .txt1{
        font-family: "Fredoka", sans-serif;

        position: relative;
        top: 20px;
    }
    .tabela1{
        background-color:rgb(180, 180, 180);
        position: relative;
        left: 35px;
        top: 20px;

        font-family: "Fredoka", sans-serif;
        font-weight: 100;
        height: 20px;
    }
    .tabela2{
        background-color:rgb(180, 180, 180);
        position: relative;
        left: 35px;
        top: 20px;

        font-family: "Fredoka", sans-serif;
        height: 25px;
    }
    .tb1{
        width: 150px;
    }
    .button1{
        background-color: #08d33b;
        color: #FFFFFF;
        border: none;
        border-radius: 5px;
    }
    .button2{
        background-color: #d84444;
        color: #FFFFFF;
        border: none;
        border-radius: 5px;
    }
    a#txt2{
        font-family: "Fredoka", sans-serif;
        position: relative;
        top: 20px;
    }
</style>
 
<body class="<?= $_SESSION['perfil'] ?> "> <!-- Define a classe com base no perfil do usuário -->
    <div class="container">
        <h2 class='txt1'>Lista de Usuários</h2>
        <table class="styled-table">
            <thead class='tabela1'>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Perfil</th>
                    <th class='tb1'>Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($users as $user): ?>
                <tr class='tabela2'>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['nome'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['perfil'] ?></td>
                    <td>
                        <?php if($_SESSION['perfil'] == 'admin' || $_SESSION['perfil'] == 'gestor'): ?>
                            <a href=""><button class='button1'>Editar</button></a>
                        <?php endif; ?>

                        <!-- Insere botão de exclusão apenas para perfil admin -->
                        <?php if($_SESSION['perfil'] == 'admin'): ?>
                            <a href=""><button class='button2'>Excluir</button></a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
 
        <a href="index.php?action=dashboard" class="btn" id='txt2'>Voltar ao Dashboard</a>
    </div>
</body>
 
</html>

<?php else: ?>
    <p>Erro: Você não tem permissão para visualizar esta pagina</p>
<?php endif; ?>