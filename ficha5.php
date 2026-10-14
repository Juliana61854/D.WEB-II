<!doctype html>
<html>
    <head>
    </head>
    <body>
        
        <form action="sucesso.php" method="post" enctype="multipart/form-data">
        <label>Nome de Utilizador:</label>
        <input type="text" name="nome" required><br><br>
        <label for="idade">Idade:</label>
        <input type="number" name="idade" required><br><br>
        <label for="morada">Morada:</label>
        <input type="text" name="morada" required><br><br>
        <label for="cv">CV:</label>
        <input type="file" name="cv" required><br><br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Reset">
        </form>
    </body>
</html>

<?php
?>