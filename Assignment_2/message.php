 <!DOCTYPE html>
<html>
<head>
<title>Message</title>
<style>
h3 {
	color: red
}
h1 {
	color: #FF8C00
}
h1,h3 {
	text-align: center
}
</style>
</head>
<body>
<h1>Message:</h1>
<h3>
<?php   
$fb=$_POST["fb"];
	if ($fb == "Unacceptable") {
		echo "I will improve next time!!<br>";
	} elseif ($fb == "Satisfactory") {
		echo"Hopefully the customer will be happier next time!!<br>";
	} elseif ($fb == "Good") {
		echo"Thanks your feedback!!<br>";
	} else {
		echo"Thanks your feedback! Have a nice day<br>";
	}
?>
<h3>
<a href="http://www.cc.puv.fi/~e1800956/hello.html">Back</a>
</body>
</html>