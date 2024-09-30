<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='../css/register.css'>
    <title>Cadastrar-se</title>

    
</head>
<body class="fundo1"> 
    <div class="fundo2">
        <h2 class="txt1">Cadastro de usuario</h2>
        <form action="" method="post">
            <label for="nome"></label>
            <input type="text" name="nome" id="nome" required class="nome" placeholder="Nome">
 
            <label for="email"></label>
            <input type="email" name="email" id="email" required class="email" placeholder="Email">
 
            <label for="senha"></label>
            <input type="password" name="senha" id="senha" required class="senha" placeholder="Senha">
 
            <label for="perfil"> Perfil:</label>
            <select name="perfil" id="perfil" class="seleciona">
                <option value="admin"> Admin</option>
                <option value="gestor">Gestor</option>
                <option value="colaborador">Colaborador</option>
            </select>
            <button type="submit" class="botão">Cadastrar</button>
            <a href="" class="link">Voltar ao login</a>
        </form>

    </div>
</body>
</html>