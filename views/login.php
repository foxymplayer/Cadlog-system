<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='../css/login.css'>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap');
body{
    background-color: rgba(10, 10, 160, 0.692);
}

h1{
    font-family: "Fredoka", sans-serif;

    position: relative;
    left: 200px;
}
.fundo{
    background-color: #FFFFFF;
    border: black;
    border-radius: 20px;
    
    width: 500px;
    height: 300px;

    position: absolute;
    left: 450px;
    top: 50px;
}

.email{
    width: 300px;
    height: 20px;
    text-align: center;
    border-width: 2px;
    border-top: 2px solid rgb(139, 139, 139);
    border-left: 2px solid rgb(139, 139, 139) ;
    border-radius: 2px;

    position: relative;
    left: 90px;
}

.senha{
    width: 300px;
    height: 20px;
    text-align: center;
    border-width: 2px;
    border-top: 2px solid rgb(139, 139, 139);
    border-left: 2px solid rgb(139, 139, 139) ;
    border-radius: 2px;

    position: relative;
    left: 90px;
    top: 20px;
}
.botão{
    background-color: rgb(3, 73, 165);
    border: none;
    border-radius: 2px;
    width: 50px;
    height: 20px;
    color: #FFFFFF;

    position: absolute;
    left: 220px;
    top: 175px;
}
.link{
    font-family: "Fredoka", sans-serif;

    position: absolute;
    left: 800px;
    top: 300px;
}
    </style>
    
    
    
    <title>Entrar</title>
</head>
 
<body>
    <!-- O formulário usa o método POST para enviar dados de forma segura -->
    <!-- Os dados serão enviados para 'index.php' com a ação 'login' -->
<main> <form method="post" action="index.php?action=login" class="fundo">
    <h1>Login</h1>
        <input type="email" name="email" placeholder="Email" required class="email"><br>
        <input type="password" name="senha" placeholder="Senha" required class="senha"><br>
        <button type="submit" class="botão">Login</button>
    </form>
    <!-- Define o destino do link e leva à opção de cadastro -->
    <a href="index.php?action=register" class="link">Cadastrar-se</a>
</main>
 
</body>
 
</html>