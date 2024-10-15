<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='../css/register.css'>
    <title>Cadastrar-se</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap');
body{
    background-color: rgba(10, 10, 160, 0.692);
}
.txt1{
    font-family: "Fredoka", sans-serif;

    position: relative;
    left: 135px;
}
.fundo2{
    background-color: #FFFFFF;
    border: black;
    border-radius: 20px;
    
    width: 500px;
    height: 300px;

    position: absolute;
    left: 450px;
    top: 50px;
}
.nome{
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
    top: 20px;
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
    top: 40px;
}
.seleciona{
    width: 100px;
    height: 20px;
    text-align: center;
    border-width: 2px;
    border-top: 2px solid rgb(139, 139, 139);
    border-left: 2px solid rgb(139, 139, 139) ;
    border-radius: 2px;

    position: relative;
    left: -250px;
    top: 80px;
}
.botão{
    background-color: rgb(3, 73, 165);
    border: none;
    border-radius: 2px;
    width: 70px;
    height: 25px;
    color: #FFFFFF;

    position: absolute;
    left: 290px;
    top: 203px;
}
.link{
    font-family: "Fredoka", sans-serif;
    width: 200px;

    position: absolute;
    left: 350px;
    top: 260px;
}

    </style>
    
</head>
<body class="fundo1"> 
    <div class="fundo2">
        <h2 class="txt1">Cadastro de usuario</h2>
        <form action="index.php?action=register" method="post">
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
            <a href="index.php?action=login" class="link">Voltar ao login</a>
        </form>

    </div>
</body>
</html>