<?php 
$connect=new mysqli("localhost","root","");
if($connect->connect_error)
	{
	  die("Connection failed".$connect->connect_error);
	  
	}
$crt="create database student";
if($connect->query($crt)==TRUE)
	{
	   echo "Database created successfully with name student";
	   
	}
else
	{
	   echo "Error creating database".$connect->error;
	}
$connect->close();
?>
