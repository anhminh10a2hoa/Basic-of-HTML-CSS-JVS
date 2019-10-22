<!DOCTYPE html>
<html>
<head>
	<title>Find</title>
<style>
	h2{
		color:red
	}
	th, td {
		border: 1px solid black;
		padding: 15px;
    }
    th {
		text-align: center;
		background-color: #ff8c00
    }
    td {
		text-align: center;
    }
 </style>
 <body style='text-align:center;'>
<?php 
$dir="../uploads/a3/";
$file_name="a3.txt";
$count = 0;
$userComments=file($dir . $file_name);
$a = $_POST["find"];
foreach($userComments as $comment) {
if(strpos($comment, $a) > 0) {
$count++;
}}
if ($count == 0) {
echo "<br><br>";
echo "<h2>Don't have information before\n<br></h2>";
}
else {
echo "<div style='text-align:center;'>";
echo "<h2>Employee's information</h2>";
echo "<table border='1' style='margin-left:auto;margin-right:auto;'>";
echo "<tr><th>Date Time</th><th>First name</th><th>Last name</th><th>Job</th><th>Gross Salary</th><th>Net Salary</th><th>Tax paid</th></tr>";
foreach($userComments as $comment) {
if(strpos($comment, $a) > 0) {
$count++;
echo $comment ;
}
}
echo "</table></div>\n"; 
}
echo "<a href='hello.html'>Return</a>";
?>
 </body>
 </html>