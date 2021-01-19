 <?php
$con = mysqli_connect("localhost","root","","forum");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>/tb/ Test board</title>
	<link rel="stylesheet" href="../style.css">
	<link rel="shortcut icon" href="../runa_svobodi.png" type="image/png">
</head>
<body>
	<?php
// define variables and set to empty values
$heading = $postt = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $heading = test_input($_POST["heading"]);
  $postt = test_input($_POST["postt"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="wrapper">
	<div class="header">
<a class="back-button" href="..">🡄 </a><h1>/tb/</h1>
<form method="post" action="add.php">  
  <p><input type="submit" value="Add post">
 </form>
	</div>
	<div id="post">
		<b><?php echo $heading; ?></b><br>
<p><?php echo $postt; ?></p><br>

	<a href="#">Reply</a>
	</div>
</div>
</body>
</html>
