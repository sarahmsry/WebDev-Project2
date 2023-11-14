<?php
// Start or resume the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jeopardy Grid</title>
	<style>
    body {
      font-family: 'Arial', sans-serif;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-evenly;
      max-width: 1000px; /* Set a maximum width for the grid */
      margin: 0 auto; /* Center the grid on the page */
    }

    .jeopardy-button {
      width: 150px;
      height: 100px;
      margin: 10px;
      border: 2px solid #000;
      background-color: #4CAF50;
      color: #fff;
      font-size: 18px;
      font-weight: bold;
      text-align: center;
      line-height: 100px;
      text-decoration: none;
      display: inline-block;
      cursor: pointer;
    }

    .jeopardy-button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <!-- Create a 5x5 grid of buttons for Jeopardy -->
  <a href="" class="jeopardy-button">Geography</a>
  <a href="#" class="jeopardy-button">Science</a>
  <a href="#" class="jeopardy-button">Movies</a>
  <a href="#" class="jeopardy-button">Animals</a>
  <a href="#" class="jeopardy-button">Sports</a>
  
  <a href="question.php?category=0&value=200" class="jeopardy-button">$200</a>
  <a href="question.php?category=1&value=200" class="jeopardy-button">$200</a>
  <a href="question.php?category=2&value=200" class="jeopardy-button">$200</a>
  <a href="question.php?category=3&value=200" class="jeopardy-button">$200</a>
  <a href="question.php?category=4&value=200" class="jeopardy-button">$200</a>

  <a href="question.php?category=0&value=400" class="jeopardy-button">$400</a>
  <a href="question.php?category=1&value=400" class="jeopardy-button">$400</a>
  <a href="question.php?category=2&value=400" class="jeopardy-button">$400</a>
  <a href="question.php?category=3&value=400" class="jeopardy-button">$400</a>
  <a href="question.php?category=4&value=400" class="jeopardy-button">$400</a>

  <a href="question.php?category=0&value=600" class="jeopardy-button">$600</a>
  <a href="question.php?category=1&value=600" class="jeopardy-button">$600</a>
  <a href="question.php?category=2&value=600" class="jeopardy-button">$600</a>
  <a href="question.php?category=3&value=600" class="jeopardy-button">$600</a>
  <a href="question.php?category=4&value=600" class="jeopardy-button">$600</a>
  
  <a href="question.php?category=0&value=800" class="jeopardy-button">$800</a>
  <a href="question.php?category=1&value=800" class="jeopardy-button">$800</a>
  <a href="question.php?category=2&value=800" class="jeopardy-button">$800</a>
  <a href="question.php?category=3&value=800" class="jeopardy-button">$800</a>
  <a href="question.php?category=4&value=800" class="jeopardy-button">$800</a>
</body>
</html>
