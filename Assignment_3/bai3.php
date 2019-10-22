<!DOCTYPE html>
 <html>
 <head>
 <title>Employee's information</title>
 <style>
	h2 {
		color: red
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
 
 </head>
 <body style='text-align:center;'>
<?php
function handle_post() {
 
 
date_default_timezone_set('Finland/Helsinki');
$dir="../uploads/a3/";
$file_name="a3.txt";
if (!file_exists($dir)) {
if (!mkdir($dir, 0711, true))       
{         
    echo($dir . ' cannot be created recursively' . '<br>');       
 }     
 else       
{      
    echo($dir . ' created recursively' . '<br>');    
 }
 }

 $current_date = date('d.m.Y H:i:s', time());
 $a=$_POST["gs"];
 $b=$_POST["rate"];
 $d=$a*$b/100;
 $c=$a-$d;
$newEntry = "<tr><td>" . $current_date . "</td><td>" . $_POST["fname"] . "</td><td>" . $_POST["lname"] . "</td><td>" . $_POST["job"] . "</td><td>" . $_POST["gs"] . "</td><td>" . $c . "</td><td>" . $d . "</td></tr>\r\n";
 if(file_put_contents($dir . $file_name, $newEntry, FILE_APPEND ) >0)  
  echo "Data was successfully written to " . htmlentities($dir . $file_name) . "<br/>";
 else 
  echo "Data could not be written to " . htmlentities($dir . $file_name) . "<br/>";
echo "<hr>";
echo "<div style='text-align:center;'>";
echo "<h2>Employee's information</h2>";
echo "<table border='1' style='margin-left:auto;margin-right:auto;'>";
echo "<tr><th>Date Time</th><th>First name</th><th>Last name</th><th>Job</th><th>Gross Salary</th><th>Net Salary</th><th>Tax paid</th></tr>";
echo file_get_contents($dir . $file_name);
echo "</table>";
echo "</div>";
}
if(!empty($_POST['fname'])){ 
 handle_post();
 
} else { 
   echo "<p style='color:red;'>All fields must be filled!</p>"; 
  } 
  
   echo "<hr>";
   echo "<a href='hello.html'>Main Page</a>";
  
   ?>
 </body>
 </html>