<!-- Your form has been successfully submitted.... -->
<html>
<body>
<?php
	
	$name=$_REQUEST["name"];
	$email=$_REQUEST["email"];
	$contact=$_REQUEST["number"];
	$comment=$_REQUEST["comment"];

	$connection=mysqli_connect("localhost","root","") 
    or die("Couldn't connect to server");
	
	$query="CREATE DATABASE IF NOT EXISTS Manish";
	
	$result=mysqli_query($connection , $query) 
    or die("Query failed : " . mysql_error ($connection));
	
	$db=mysqli_select_db($connection,"Manish") 
    or die("Couldn't connect to database");
	
	$query="CREATE TABLE IF NOT EXISTS MT ( Username VARCHAR(30) , Email VARCHAR(50)  , Contact BIGINT(10) , Comment VARCHAR(200))";
	
	$result=mysqli_query($connection , $query) 
    or die("Query failed : " . mysql_error ($connection));
	
	$query="INSERT INTO MT ( Username , Email , Contact , Comment) VALUES ('$name','$email','$contact','$comment')";
	
	$result=mysqli_query($connection , $query)
    or die("Query failed : " . mysql_error ($connection));
	 echo "<script>alert('Thanks For Your Feedback');</script>";
	 echo "<script>alert('You will get your Welcome mail in 24hrs');window.location.href='GTS.html'</script>";
     mysqli_close($connection);
		
     ?>
     </body>
     </html>