<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="style.css">	

	<title>Calculator</title>
</head>
<body>
<h1>Calculator</h1>
<form action="" method="GET">
<table border="1" align="center">
	<tr>
		<td>
		<input type="text" id="num1" name="num1" placeholder="Input Number 1" >
		</td>

		<td>
			<input type="text" id="num2" name="num2" placeholder="Input Number 2" >
		</td>
	
		<td>
		<input type="radio" name="radio" value="+" checked>Addition
		<input type="radio" name="radio" value="-">Subtraction
		<input type="radio" name="radio" value="*">Multiplication
		<input type="radio" name="radio" value="/">Division
		</td>

		<td>
			<button type="submit" name="submit">=</button>
		</td>
	</tr>
</table>
</form>
<br>

<?php

if (isset($_GET['submit'])) {
	if (is_numeric($_GET['num1'])) {
		$n1=$_GET['num1'];
	if (is_numeric($_GET['num2'])) {
		$n2=$_GET['num2'];
	$op=$_GET['radio'];
	$result="";

switch ($op) {
	case '+':
		$result = $n1 + $n2;
		break;
	case '-':
		$result = $n1 - $n2;
		break;
	case '*':
		$result = $n1 * $n2;
		break;
	case '/':
		$result = $n1 / $n2;
		break;
	default:
	break;

	}
}
	}
echo"<br>";
 echo "<center><h3>$n1 $op $n2 = $result</h3></center>";

}
?>



</body>
</html>