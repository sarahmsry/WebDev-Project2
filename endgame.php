<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $_SESSION['user_name'] = $_POST['user_name'];  
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="jeopardy.css" />
</head>
<body>
  <div class="endgameContainer">
    <img src = "confetti.png" class = "confettiL" alt = "confettiL">
    <p>
      Congrats <?= ($_SESSION['user_name'] ?? 0)?>! You win!
      <br> Final Score: <?= ($_SESSION['user_score'] ?? 0)?>
    </p>
    <img src = "confetti.png" class = "confettiR" alt = "confettiR">
  </div>
  <form action="index.php" method="$_POST">
  <input type="submit" value="Start New Game">
</body>
</html>
