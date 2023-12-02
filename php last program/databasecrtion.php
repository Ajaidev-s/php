<?php 
$connect=new mysqli("localhost","root","");
if($connect->connect_error)
	{
	  die("Connection failed".$connect->connect_error);
	  
	}
$crt="create database shop";
if($connect->query($crt)==TRUE)
	{
	   echo "Database created successfully with name shop";
	   
	}
else
	{
	   echo "Error creating database".$connect->error;
	}
$connect->close();
?>
