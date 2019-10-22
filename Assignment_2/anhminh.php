<!DOCTYPE html>
<head>
<title>Feedback</title>
<style>
th, td {
    border: 1px solid black;
    padding: 15px;
	text-align: center
}
h1 {
	color: red
}
</style>
</head>
<body>
<h1>Feedback</h1>
<table> <tr><th>First name</th><th>Surname</th><th>Phone number</th><th>Email</th>
<th>Type of services</th><th>Rate</th></tr> <tr>
<td>
<?php 
echo $_POST["fname"] 
?></td>
<td><?php  
echo $_POST["sname"] 
?></td>
<td> <?php  
echo $_POST["pnumber"]
 ?></td>
<td> <?php 
echo $_POST["email"]
 ?></td>
<td><?php

if(isset($_POST['box'])) {
    $box = $_POST['box'];
    echo $box;
}

?></td>
<td><?php
$fb=$_POST["fb"];
echo $fb;
 ?></td>
</tr> </table>
<?php
$subject="Feedback";
$message="First name: " . $_POST["fname"] . "\r\n". "Sur name: ". $_POST["sname"]. "\r\n". "Email: " .  $_POST["email"]. "\r\n" . "Type of services: " . $_POST["box"]. "\r\n" . "Rate: " . $_POST["fb"] ;
$headers="From Feedback";
if(mail($_POST["email"],$subject,$message,$headers)){
    echo 'Data was successfully sent to ' . $_POST["email"] . '<br>' ;
} else {
    echo 'Sending data to ' . $_POST["email"] . ' failed!<br>' ;
 
}
?>
<a href="http://www.cc.puv.fi/~e1800956/hello.html">Back</a>
</body>
</html>