<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php
        $Usuario = filter_input(INPUT_POST, "Usuario", FILTER_SANITIZE_STRING);
        echo "Nome do Usuario: $Usuario <br>";
        $Email = filter_input(INPUT_POST, "Email", FILTER_SANITIZE_STRING);
        echo "Email do Usuário: $Email <br>";
    ?>
</body>
</html>