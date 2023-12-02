<?php
$conn=new mysqli("localhost","root","","shop");
$crt1="CREATE TABLE product (
    p_id INT(2) PRIMARY KEY AUTO_INCREMENT,
    p_name VARCHAR(15) NOT NULL,
    p_quant INT(4) NOT NULL,
    p_price DECIMAL(7,2) NOT NULL,
    p_manu DATE NOT NULL,
    p_exp DATE NOT NULL
)";
$sel1=$conn->query($crt1);
?>
