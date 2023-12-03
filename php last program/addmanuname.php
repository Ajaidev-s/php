<?php
$conn=new mysqli("localhost","root","","shop");
$q2="alter table product add(p_manufacture varchar(30))";
$conn->query($q2);
$q1="select * from product";
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
                <?php if($product['p_manufacture'])
                      {?>
                      <td><?php echo $product['p_manufacture'];?></td>
                <?php }
                      else{
                        ?>
                        <td>
                           <a href="addmanufacture.php?id=<?php echo $product['p_id']?>"> <input type="button" value="add" class="form-control"></a>
                    </td>
                     <?php }?>
                
                
                
            </tr>
<?php
            } ?>
        </table>
</CENTER>
    </body>
</html>