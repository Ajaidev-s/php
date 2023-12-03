<?php
$conn=new mysqli("localhost","root","","shop");
$id=$_GET['id'];
$q1="select * from product where p_id='$id'";
$sel1=$conn->query($q1);


?>
<html>
    <head>
        <title>STOCK VIEW</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
          <style>
            a{text-decoration: none;}
          </style>
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
                <th>MANUFATURe</th>
            </tr>
            <?php
            while($product=$sel1->fetch_assoc())
            {
                ?>
            <tr>
                <td><?php echo $product['p_id']?></td>
                <td><?php echo $product['p_name']?></td>
                <td><?php echo $product['p_quant']?></td>
                <td><?php echo $product['p_price']?></td>
                <td><?php echo $product['p_manu']?></td>
                <td><?php echo $product['p_exp']?></td>
                 <form method="post">
                    <td><input type="text" placeholder="manufactures name" name="mname">
                        <input type="submit" value="update" name="btn2">
                    </td>
                 </form>
                
                
                
            </tr>
<?php
            } ?>
        </table>
</CENTER>
    </body>
</html>
<?php
if(isset($_POST['btn2']))
{
    $mname=$_POST['mname'];
    $q3="update  product set p_manufacture='$mname' where p_id='$id'";
    $conn->query($q3);
    var_dump($q3);
     header("Location:addmanuname.php");
}
?>