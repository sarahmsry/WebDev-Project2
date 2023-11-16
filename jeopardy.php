<?php
// Start or resume the session
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $_SESSION['user_name'] = $_POST['user_name'];  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jeopardy Grid</title>
		<link rel="stylesheet" type="text/css" href="jeopardy.css" />

  </style>
</head>
<body>
  <header>
    <img src="jeopardy.png">
      <tr>
        <td><h3>Name: <?= ($_SESSION['user_name'] ?? 0)?></h3> </td>
        <td><h3></h3></td>
      </tr>
      <tr>
        <td><h3>Score: <?= ($_SESSION['user_score'] ?? 0)?></h3></td>
        <td><h3></h3></td>
      </tr>
      <tr>
          <!--<h3><a href="index.php">Reset</a></h3>-->
          <td><form action="index.php" method="$_POST">
            <input type="submit" value="Reset">
          </form></td>

      </tr>
  </header>
  
  <br>
  

<table>
  <!-- Create a 5x5 grid of buttons for Jeopardy --> 
  <tr>
      <div class="category">
        <td><a class="jeopardy-category">Geography</a></td>
        <td><a class="jeopardy-category">Science</a></td>
        <td><a class="jeopardy-category">Movies</a></td>
        <td><a class="jeopardy-category">Animals</a></td>
        <td><a class="jeopardy-category">Sports</a></td>
      </div>
    </tr>

    <tr>
      <td><a href="question.php?category=0&value=200" class="jeopardy-button" tabindex="1">$200</a></td>
      <td><a href="question.php?category=1&value=200" class="jeopardy-button" tabindex="1">$200</a></td>
      <td><a href="question.php?category=2&value=200" class="jeopardy-button" tabindex="1">$200</a></td>
      <td><a href="question.php?category=3&value=200" class="jeopardy-button" tabindex="1">$200</a></td>
      <td><a href="question.php?category=4&value=200" class="jeopardy-button" tabindex="1">$200</a></td>
    </tr>

    <tr>
      <td><a href="question.php?category=0&value=400" class="jeopardy-button" tabindex="1">$400</a></td>
      <td><a href="question.php?category=1&value=400" class="jeopardy-button" tabindex="1">$400</a></td>
      <td><a href="question.php?category=2&value=400" class="jeopardy-button" tabindex="1">$400</a></td>
      <td><a href="question.php?category=3&value=400" class="jeopardy-button" tabindex="1">$400</a></td>
      <td><a href="question.php?category=4&value=400" class="jeopardy-button" tabindex="1">$400</a></td>
    </tr>

    <tr>
      <td><a href="question.php?category=0&value=600" class="jeopardy-button" tabindex="1">$600</a></td>
      <td><a href="question.php?category=1&value=600" class="jeopardy-button" tabindex="1">$600</a></td>
      <td><a href="question.php?category=2&value=600" class="jeopardy-button" tabindex="1">$600</a></td>
      <td><a href="question.php?category=3&value=600" class="jeopardy-button" tabindex="1">$600</a></td>
      <td><a href="question.php?category=4&value=600" class="jeopardy-button" tabindex="1">$600</a></td>
    </tr>

    <tr>
      <td><a href="question.php?category=0&value=800" class="jeopardy-button" tabindex="1">$800</a></td>
      <td><a href="question.php?category=1&value=800" class="jeopardy-button" tabindex="1">$800</a></td>
      <td><a href="question.php?category=2&value=800" class="jeopardy-button" tabindex="1">$800</a></td>
      <td><a href="question.php?category=3&value=800" class="jeopardy-button" tabindex="1">$800</a></td>
      <td><a href="question.php?category=4&value=800" class="jeopardy-button" tabindex="1">$800</a></td>
    </tr>
  </table>




  
</body>
</html>
