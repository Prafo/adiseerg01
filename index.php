<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>

<?php 
$DisplayForm = True;
	if(isset($_POST['submit'])){
	$DisplayForm = False;
	}
if ($DisplayForm = True) {
?>

<form method="post" action="calcOnePage.php"> 

Number 1: <input type="text" name="num1" value="" /> 
+
Number 2: <input type="text" name="num2" value=""/>

<input type="submit" name="submit" value="=" />

</form>
	<?php 
}
	?>
</body>

</html>
