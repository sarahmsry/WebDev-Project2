<?php
session_start();
?>
<html>
    <head>
        <title>Jeopardy User Sign-Up</title>

        <meta charset="utf-8"/>
        <link rel="stylesheet" href="jeopardy.css" />
    </head>
    <body>

    <div>
    <form action="jeopardy.php" method="post">
        <fieldset>
            <p>New User Signup:</p>
            <h3 class="column">Name:</h3>
            <input type="text" name="user_name" size="17" maxlength="16"><br><br>
            <?php
                if (!isset($_SESSION['user_name'])) {
                    $_SESSION['user_name'] = ($_POST('user_name'));
                }
            ?>
            <input type="submit" value="Sign Up">
        </fieldset>
    </form>
</div>
    </body>
</html>