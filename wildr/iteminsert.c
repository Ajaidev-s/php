<?php
require("connect.php");
?>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<main class="container">
  <div class="row">
        <div class="col-9">
    <center> <h3 color:red;>WALLMART</h3></center>
        <form name="bill" method="POST">
          <table cellpadding="20">
              <tr>
                  <td>Item name</td>
                  <td><input type="text" placeholder="item name" name="name1" class="form-control"></td>
                  <td>Quantity:</td>
                  <td><input type="number" placeholder="Quantity" name="quant1" class="form-control"></td>
                  <td>price</td>
                  <td><input type="number" placeholder="price" name="price1" class="form-control"></td>
                  <td>Manufaturing date</td>
                  <td><input type="date" placeholder="manufature date" name="manu1" class="form-control"></td>
                  <td>expiry Date</td>
                  <td><input type="date" placeholder="expiry date" name="exp1" class="form-control"></td>
                  
              </tr>
              <tr>
                  <td>Item name</td>
                  <td><input type="text" placeholder="item name" name="name2" class="form-control"></td>
                  <td>QuantityS:</td>
                  <td><input type="number" placeholder="Quantity" name="quant2" class="form-control"></td>
                  <td>price</td>
                  <td><input type="number" placeholder="price" name="price2" class="form-control"></td>
                  <td><input type="date" placeholder="manufature date" name="manu2" class="form-control"></td>
                  <td>expiry Date</td>
                  <td><input type="date" placeholder="expiry date" name="exp2" class="form-control"></td>
              </tr>
              <tr>
                  <td>Item name</td>
                  <td><input type="text" placeholder="item name" name="name3" class="form-control"></td>
                  <td>Quantity:</td>
                  <td><input type="number" placeholder="Quantity" name="quant3" class="form-control"></td>
                  <td>price</td>
                  <td><input type="number" placeholder="price" name="price3" class="form-control"></td>
                  <td><input type="date" placeholder="manufature date" name="manu3" class="form-control"></td>
                  <td>expiry Date</td>
                  <td><input type="date" placeholder="expiry date" name="exp3" class="form-control"></td>
              </tr>
              <tr>
                  <td>Item name</td>
                  <td><input type="text" placeholder="item name" name="name4" class="form-control"></td>
                  <td>Quantity:</td>
                  <td><input type="number" placeholder="Quantity" name="quant4" class="form-control"></td>
                  <td>price</td>
                  <td><input type="number" placeholder="price" name="price4" class="form-control"></td>
                  <td><input type="date" placeholder="manufature date" name="manu4" class="form-control"></td>
                  <td>expiry Date</td>
                  <td><input type="date" placeholder="expiry date" name="exp4" class="form-control"></td>
              </tr>
            
          </table>
         
                   <input type="submit" value="BILLS" class="form-control" style="background:green;color:white;width:50%;" name="bill">
                   <input type="submit" value="CLEAR" class="form-control" style="background:red;color:white;width:50%;position:relative;" name="clr">
             
         
        <form>
        </div>
 
       <div class="col-3">
       
      <?php
         $i=1;
         $grandtotal=0;
         for($i=1;$i<=4;$i++)
         {
            $name="name".$i;
            $quant="quant".$i;
            $price= "price".$i;
            $manu="manu".$i;
            $exp="exp".$i;
            $ins1="insert into product(p_name,p_quant,p_price,p_manu,p_exp) values('$name','$quant','$price','$manu','$exp')";
            $q1=$conn->query($ins1);
       <?php } ?>
       <tr>
        <td>GRANDTOTAL</td>
        <td><?php echo $grandtotal."$"; ?></td>
       </tr>
       
    </table>
    
    
    
    
    
    
<?php    
    }
    
?>
        </div>
  </div>

</main>
</body>
</html>
