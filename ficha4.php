<!DOCTYPE html>
    <html>
        <head></head>
        <body>
            <form action="resurs.php" method="get">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required><br><br>

                <label for="apelido">Apelido:</label>
                <input type="text" name="apelido" id="apelido" required><br><br>
                <label>Aluno do CTesP de Informatica?</label>
                <input type="checkbox" name="aluno" checked><br><br>
                <label>Idade:</label><br>
                <input type="radio" name="Idade" value="<=20" required><=20<br>
                <input type="radio" name="Idade" value="21-30" required>21-30<br>
                <input type="radio" name="Idade" value="31-40" required>31-40<br>
                <input type="radio" name="Idade" value=">40" required>>40<br>
                <label>Localidade:</label>
                <select name="Localidade" required><br><br>
                    <option value="Chaves">Chaves</option>
                    <option value="Porto">Porto</option>
                    <option value="Coimbra">Coimbra</option>
                    <option value="Faro">Faro</option>
                </select><br><br>
                <label for="sugestao">Sugestões:</label>
                <textarea name="sugestao" rows="4" cols="50"></textarea><br><br>
                <input type="submit" value="Enviar">
                <input type="reset" value="Reset">
            </form>
        </body>
    </html>

<?php

?>
