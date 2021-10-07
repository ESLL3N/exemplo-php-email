<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
</head>
<body>
    <h1>Contato</h1>
    <form action="enviar_email.php" method="post">
        <label for="nome">Digite aqui seu nome</label>
        <input type="text" name="nome" require />
        <br>
        <label for="nome">Digite aqui seu email</label>
        <input type="email" name="email" require/>
        <br>
        <label for="mensagem">Mensagem</label>
        <textarea name="mensagem"></textarea>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>