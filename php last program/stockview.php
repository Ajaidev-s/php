<?php
$conn=new mysqli("localhost","root","","shop");
$q1="select * from product";
$sel1=$conn->query($q1);

?>
<html>
    <head>
        <title>STOCK VIEW</title>
    </head>
    <body>
        <CENTER>
            <H2>STOCK DETAILS</H2>
        <table cellpadding="20">
            <tr>
                <th>ID</th>
                <th>PRODUCT NAME</th>
                <th>QUANTITY</th>
                <th>PRICE</th>
                <th>MANUFATURING DATE</th>
                <th>EXPIRY DATE</th>
            </tr>
            <?php
            while($product=$sel1->fetch_assoc())
            {?>
            <tr>
                <td><?php echo $product['p_id']?></td>
                <td><?php echo $product['p_name']?></td>
                <td><?php echo $product['p_quant']?></td>
                <td><?php echo $product['p_price']?></td>
                <td><?php echo $product['p_manu']?></td>
                <td><?php echo $product['p_exp']?></td>
            </tr>
<?php
            } ?>
        </table>
</CENTER>
    </body>
</html>