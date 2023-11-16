<?php
session_start();
?>
<html>
    <head>
        <title>Jeopardy User Login</title>

        <meta charset="utf-8"/>
        <link rel="stylesheet" href="jeopardy.css" />
    </head>
    <body>

    <div>
    <form action="jeopardy.php" method="post">
        <fieldset>
            <p>Returning User:</p>
            <h3 class="column">Name: </h3>
            <input type="text" name="user_name" maxlength="16"><br><br>
            <?php
            if (!isset($_SESSION['user_name'])) {
                $_SESSION['user_name'] = "New User";
            }
            ?>
            <input type="submit" value="Log in">
        </fieldset>
    </form>
    </div>
    </body>
</html>