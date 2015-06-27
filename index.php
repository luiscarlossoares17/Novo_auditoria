<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Auditoria Login</title>
    <h1>Auditoria</h1>
    </head>
    <body>
        <form action="login_form.php" method="POST">
            <input type="text" name="username" placeholder="NIF"><br><br>
            <input type="password" name="password" placeholder="Password"><br><br>
            <br><br>

            <button type="submit" name="submit">Iniciar Sessao</button>
        <?php
        // put your code here
        ?>
        </form>    
    </body>
</html>
