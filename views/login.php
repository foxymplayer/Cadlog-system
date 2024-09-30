<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='../css/login.css'>
    
    
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