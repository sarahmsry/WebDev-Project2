<?php
// Start or resume the session
session_start();
?>
<?php
$userName =$_GET["name"]
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
    <div class="table2">
      <tr>
        <td><h3>Name: <?= $userName?></h3> </td>
        <td><h3></h3></td>
      </tr>
      <tr>
        <td><h3>Score: <?= ($_SESSION['user_score'] ?? 0)?></h3></td>
        <td><h3></h3></td>
      </tr>
    </div>
  </header>
  
  <br>
  

<table>
  <!-- Create a 5x5 grid of buttons for Jeopardy --> 
  <tr>
      <div class="category">
        <td><a href="" class="jeopardy-button">Geography</a></td>
        <td><a href="#" class="jeopardy-button">Science</a></td>
        <td><a href="#" class="jeopardy-button">Movies</a></td>
        <td><a href="#" class="jeopardy-button">Animals</a></td>
        <td><a href="#" class="jeopardy-button">Sports</a></td>
      </div>
    </tr>

    <tr>
      <td><a href="question.php?category=0&value=200" class="jeopardy-button">$200</a></td>
      <td><a href="question.php?category=1&value=200" class="jeopardy-button">$200</a></td>
      <td><a href="question.php?category=2&value=200" class="jeopardy-button">$200</a></td>
      <td><a href="question.php?category=3&value=200" class="jeopardy-button">$200</a></td>
      <td><a href="question.php?category=4&value=200" class="jeopardy-button">$200</a></td>
    </tr>

    <tr>
      <td><a href="question.php?category=0&value=400" class="jeopardy-button">$400</a></td>
      <td><a href="question.php?category=1&value=400" class="jeopardy-button">$400</a></td>
      <td><a href="question.php?category=2&value=400" class="jeopardy-button">$400</a></td>
      <td><a href="question.php?category=3&value=400" class="jeopardy-button">$400</a></td>
      <td><a href="question.php?category=4&value=400" class="jeopardy-button">$400</a></td>
    </tr>

    <tr>
      <td><a href="question.php?category=0&value=600" class="jeopardy-button">$600</a></td>
      <td><a href="question.php?category=1&value=600" class="jeopardy-button">$600</a></td>
      <td><a href="question.php?category=2&value=600" class="jeopardy-button">$600</a></td>
      <td><a href="question.php?category=3&value=600" class="jeopardy-button">$600</a></td>
      <td><a href="question.php?category=4&value=600" class="jeopardy-button">$600</a></td>
    </tr>

    <tr>
      <td><a href="question.php?category=0&value=800" class="jeopardy-button">$800</a></td>
      <td><a href="question.php?category=1&value=800" class="jeopardy-button">$800</a></td>
      <td><a href="question.php?category=2&value=800" class="jeopardy-button">$800</a></td>
      <td><a href="question.php?category=3&value=800" class="jeopardy-button">$800</a></td>
      <td><a href="question.php?category=4&value=800" class="jeopardy-button">$800</a></td>
    </tr>
  </table>




  
</body>
</html>
