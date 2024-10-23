<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type='text/css' media='screen' href="">

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap');
    body{
        background-color:  rgba(10, 10, 160, 0.692);
    }

    .container{
        background-color: #FFFFFF;
        width: 700px;
        border-radius: 20px;
        text-align: center;

        position: relative;
        left:325px;
    }
    h1{
        font-family: "Fredoka", sans-serif;
        font-weight: 50px;
    }
    p{
        font-family: "Fredoka", sans-serif;
    }
    button#butao{
        background-color: rgb(3, 73, 165);
        border-radius:5px;
        color:#FFFFFF;
        border: none;
        height: 30px;

        position: relative;
        top:10px;
    }
    a#log{
        font-family: "Fredoka", sans-serif;
    }
    .txt1{
        position: relative;
        top :10px; 
    }


    </style>
</head>
 
<body class="<?=$_SESSION['perfil']?>"> <!-- Define a classe com base no perfil -->
    <div class="container">
        <h1>Bem-vindo, <?=$_SESSION['perfil']?>!</h1>
        <p>Esta é a visão do perfil <?=$_SESSION['perfil']?>.</p>

        <?php if($_SESSION['perfil'] == 'admin'): ?>
            <!-- Admin pode gerenciar usuários (editar e excluir) -->
            <a href="index.php?action=list" class="btn" ><button id='butao'>Gerenciar Usuários (Admin)</button></a>
 
            <?php elseif($_SESSION['perfil'] == 'gestor'): ?>
            <!-- Gestor pode gerenciar usuários (apenas editar) -->
            <a href="index.php?action=list" class="btn" ><button id='butao'>Gerenciar Usuários (Gestor)</button></a>
            <p class='txt1'>Área exclusiva do Gestor.</p>
 
            <?php else: ?>
            <p>Área exclusiva do Colaborador.</p>
            <?php endif; ?>
 
        <br><br><br><br>
        <!-- Link para logout -->
        <a href="index.php?action=logout" class="btn" id='log'>Logout</a>
    </div>
</body>
 
</html>