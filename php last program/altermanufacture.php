<?php
$conn=new mysqli("localhost","root","","shop");
$q2="alter table product add(p_manufacture varchar(30))";
$conn->query($q2);
?>
