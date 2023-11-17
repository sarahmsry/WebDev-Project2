<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $_SESSION['user_score'] = 0;
    $_SESSION['user_name'] = NULL;
    
  }
  if (isset($_SESSION['user_score'])) {
    $_SESSION['user_score'] = 0;
}
?>
<html>
    <head>
        <title>Jeopardy</title>

        <meta charset="utf-8"/>
        <link rel="stylesheet" href="jeopardy.css" />
    </head>
    <body>

    <img src="jeopardy.gif" alt="icon" id="logo"/>
    <h3>
        <a href="signup.php">
        Sign up to play
        </a>
    </h3>
    <h3>
    <a href="login.php">
        Log in to last session
    </a>
    </h3>

    </body>
</html>
