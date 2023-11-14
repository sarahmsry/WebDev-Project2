<?php
// Start or resume the session
session_start();

// Retrieve the current question from the session
$currentQuestion = $_SESSION['current_question'];
$ans = isset($_GET['ans']) ? urldecode($_GET['ans']) : 'error';

if (!isset($_SESSION['user_score'])) {
    $_SESSION['user_score'] = 0;
}

// Handle form submission (answer processing)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $userAnswer = $_POST['user_answer'];

  if($userAnswer != $ans){
	$_SESSION['user_score'] -= $currentQuestion['value'];
  }else{
	$_SESSION['user_score'] += $currentQuestion['value'];  
  }
  
}
?>
<div class="leaderboard">
  <?php

// Example: Display the temporary leaderboard
echo "<h1>Temporary Leaderboard</h1>";
echo "<p>User Score: " . ($_SESSION['user_score'] ?? 0) . "</p>";

// Add your answer submission form here
?>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jeopardy Answer</title>
  <!-- Add your CSS styles here -->
  <link rel="stylesheet" type="text/css" href="jeopardy.css" />

</head>
<body>
  <h1>Jeopardy Answer Submission</h1>
  <p>Category: <?php echo ["Geography", "Science", "Movies", "Animals", "Sports"][$currentQuestion['category']]; ?></p>
  <p>Value: $<?php echo $currentQuestion['value']; ?></p>

  <!-- Add your answer submission form here -->
  <form method="post">
    <label for="user_answer">Your Answer:</label>
    <div class="myDiv">
      <p>
      <input type="text" id="user_answer" name="user_answer" required>

      </p>
    <button type="submit" onclick="window.location.href='jeopardy.php'">Submit Answer</button>
    </div>
    
    
  </form>
</body>
</html>
