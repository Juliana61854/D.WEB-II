<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body style = "background-color: <?php
if (isset($_COOKIE['cordefundo'])) {
    echo $_COOKIE['cordefundo'];
} else {
    echo "white";} ?>">
    <h3>Selecione a cor de fundo que deseja para esta pagina de agora em diante:</h3>
    <form action="create_cookie.php" method="post">
        <input type="radio" name="cor" value="red">Vermelho<br>
        <input type="radio" name="cor" value="green">Verde<br>
        <input type="radio" name="cor" value="blue">Azul<br>
        <input type="submit" value="Cookie">
    </form>
</body>
</html>