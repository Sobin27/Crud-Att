<?php 
include_once "conection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="POST">
        <div></div>
            <label for="">Nome:</label> <input type="text" name="nome" id="nome" > <br>
            <label for="">Email</label> <input type="text" name="email" id="email"> <br>
            <input type="submit" value="Conectar" id="conectar" name="conectar">
            <a href="form.php">Cadastre-se</a>
        </div>
    </form>
</body>
</html>