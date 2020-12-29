<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">	

	<title>PHP Loop</title>
</head>
<h1>PHP Loop</h1>
<body class="container">
<br>
<form action="" method="GET">
<table border="1" align="center">
	<tr>
		<td>
		    <input type="text" id="num1" name="num1" placeholder="Input Number 1" >
		</td>
        <td>
			<button type="submit" name="submit">Enter</button>
		</td>
	</tr>
</table>
</form>
<br>

  
<div class="row" >
<div class="col bg-warning" text-align="center">
<h3>Count Up 1-10</h3>
<ol>
    <!-- For Loop -->
<?php
if (isset($_GET['submit'])) {
	if (is_numeric($_GET['num1'])) {
		$n1=$_GET['num1'];

for ($i=$n1; $i <= 10; $i++) { 
	echo "<li>Hi!!! - $i</li>";
}
    }}
?>
</ol>
</div>
<div class="col bg-info">
<h3>Count Down 10-1</h3>
<ol>
<?php
if (isset($_GET['submit'])) {
	if (is_numeric($_GET['num1'])) {
		$n1=$_GET['num1'];
for ($j=$n1; $j > 0; $j--) { 
	echo "<li>Down \/ - $j</li>";
}
    }}
?>
</div>
<br>

<!-- While Loop -->
<ol>
<div class="col bg-light">
<h3>Count Up</h3>    
</ol>

<?php
if (isset($_GET['submit'])) {
	if (is_numeric($_GET['num1'])) {
		$n1=$_GET['num1'];
$x = $n1;

while($x <= 10) {
  echo "<li>The number is: $x </li>";
  $x++;
}
    }}
?>
</div>
</div>
</div>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>