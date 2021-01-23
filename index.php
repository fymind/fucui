<?
include "data/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><? echo "$name" ?></title>
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" href="favicon.png" type="image/png">
</head>

<body>
<div class="wrapper">
	<div class="header">
		<img src="header.png" width="960px" height="120px"></img>
	</div>
	<div class="info-box">
<? echo "$info" ?>
	</div>
	<div class="link-box">
	<table>
   <tr><th>Topic</th><th>Description</th></tr>
   <tr><td><a href="tb/">Test board /tb/</a></td><td>Default test board</td></tr>
    </table>
	</div>
</div>
</body>
</html>
