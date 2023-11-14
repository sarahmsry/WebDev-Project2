<?php
// Start or resume the session
session_start();

// Retrieve category and value from the URL
$category = $_GET['category'];
$value = $_GET['value'];

// Save the current question in the session
$_SESSION['current_question'] = ["category" => $category, "value" => $value];

$posCat = ["geo", "sci", "mov", "ani", "spo"];
$cat = $posCat[$category];

// Define the path to the question file
$questionFile = __DIR__ . "/" . strtolower($cat) . $value . ".php";

$answer;

// Check if the question file exists
if (file_exists($questionFile)) {
  // Load and include the question file
  include($questionFile);
} else {
  // Display a default message if the question file is not found
  echo "<p>Question not available.</p>";
  echo $questionFile;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jeopardy Question</title>
  <!-- Add your CSS styles here -->
  <link rel="stylesheet" type="text/css" href="question.css" />

</head>
<body>
  <!-- Add your question content here -->

  <a href="answer.php?ans=<?php echo urlencode($ans);?>">Submit Answer</a>
</body>
</html>
