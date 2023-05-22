<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastrar Usuário</h1>
    <form method= "POST" action="resultado.php">
        <label>Nome:</label>
        <input type="text" name="Usuario" placeholder="Digite seu Usuário" required/> <br>
        <label>Email: </label>
        <input type="Email" name="Email" placeholder="Digite seu e-mail" required/> <br>
        <label>Senha: </label>
        <input type="password" name="Senha" placeholder="Digite sua senha"  required/><br><br>
        <input type="submit" value="Cadastrar" onclick="msg()">
    </form>
    <script src="script.js"></script>

</body>
</html>