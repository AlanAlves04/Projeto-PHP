<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="formulario">

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

        Nome: <input type="text" name="nome"><br><br>

        Sobrenome: <input type="text" name="sobrenome"><br><br>

        Email: <input type="email" name="email"><br><br>

        Senha: <input type="password" name="senha"><br><br>

        <button type="submit" name="enviar-formulario">Enviar</button>

        <?php
            if(isset($_POST['enviar-formulario']));
        ?>

        </form>

    </div>
    
    