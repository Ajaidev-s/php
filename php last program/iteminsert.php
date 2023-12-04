<?php
require("connect.php");
?>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<main class="container">
  
    <center> <h3 color:red;>STOCK UPLOAD</h3></center>
        <form name="bill" method="POST">
          <table cellpadding="5">
            <?php
              $i=1;
              for($i=1;$i<=4;$i++)
              {
                $name="name".$i;
                $quant="quant".$i;
                $price= "price".$i;
                $manu="manu".$i;
                $exp="exp".$i;
              
            ?>
              <tr>
                  <td>Item name</td>
                  <td><input type="text" placeholder="item name" name="<?php echo $name ?>" class="form-control"></td>
                  <td>Quantity:</td>
                  <td><input type="number" placeholder="Quantity" name="<?php echo $quant ?>" class="form-control"></td>
                  <td>price</td>
                  <td><input type="number" placeholder="price" name="<?php echo $price ?>" class="form-control"></td>
                  <td>Manufature</td>
                  <td><input type="date" placeholder="manufature date" name="<?php echo $manu ?>" class="form-control"></td>
                  <td>expiry</td>
                  <td><input type="date" placeholder="expiry" name="<?php echo $exp ?>" class="form-control"></td>
                  
              </tr>
              <?php
              }
              ?>
              <tr>  
          </table>
         <div class="row">
                    <div class="col-6">
                   <input type="submit" value="UPLOAD" class="form-control" style="background:green;color:white;" name="btn1">
                    </div>
                    <div class="col-6">               
                   <input type="submit" value="CLEAR" class="form-control" style="background:red;color:white;position:relative;" name="clr">
                    </div>
         </div>
        <form>
       
       
      <?php
        if(isset($_POST['btn1']))
        {
         $i=1;
         for($i=1;$i<=4;$i++)
           {
            $name="name".$i;
            $quant="quant".$i;
            $price= "price".$i;
            $manu="manu".$i;
            $exp="exp".$i;
            $ins1="insert into product(p_name,p_quant,p_price,p_manu,p_exp) values('$_POST[$name]','$_POST[$quant]','$_POST[$price]','$_POST[$manu]','$_POST[$exp]')";
            
            $q1=$conn->query($ins1);
           }
        }
        ?>
      
    
    
    

     

</main>
</body>
</html>
