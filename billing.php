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
              </tr>
              <tr>
                  <td>Item name</td>
                  <td><input type="text" placeholder="item name" name="name2" class="form-control"></td>
                  <td>QuantityS:</td>
                  <td><input type="number" placeholder="Quantity" name="quant2" class="form-control"></td>
                  <td>price</td>
                  <td><input type="number" placeholder="price" name="price2" class="form-control"></td>
              </tr>
              <tr>
                  <td>Item name</td>
                  <td><input type="text" placeholder="item name" name="name3" class="form-control"></td>
                  <td>Quantity:</td>
                  <td><input type="number" placeholder="Quantity" name="quant3" class="form-control"></td>
                  <td>price</td>
                  <td><input type="number" placeholder="price" name="price3" class="form-control"></td>
              </tr>
              <tr>
                  <td>Item name</td>
                  <td><input type="text" placeholder="item name" name="name4" class="form-control"></td>
                  <td>Quantity:</td>
                  <td><input type="number" placeholder="Quantity" name="quant4" class="form-control"></td>
                  <td>price</td>
                  <td><input type="number" placeholder="price" name="price4" class="form-control"></td>
              </tr>
            
          </table>
         <div class="row">
                <div class="col-4">
                   <input type="submit" value="BILLS" class="form-control" style="background:green;color:white;" name="bill">
                </div>
                <div class="col-4">
                   <input type="submit" value="CLEAR" class="form-control" style="background:red;color:white;" name="clr">
                </div>
         </div>
         
        <form>
        </div>
 
       <div class="col-3">
       
<?php
    if(isset($_POST["bill"]))
    {
    ?>
    <center><h3>BILLS</h3></center>
    <table cellpadding="2">
       <tr>
           <th>SL NO</th>
           <th>Name</th>
           <th>Quantity</th>
           <th>Price</th>
           <th>Total<th>
       <tr>
        <?php
         $i=1;
         $grandtotal=0;
         for($i=1;$i<=4;$i++)
         {
            $name="name".$i;
            $quant="quant".$i;
            $price= "price".$i;
            $total=$_POST[$quant]*$_POST[$price];
            $grandtotal=$grandtotal+$total;
        
            ?>
                
       <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $_POST[$name]; ?></td>
          <td><?php echo $_POST[$quant]; ?></td>
          <td><?php echo $_POST[$price]; ?></td>
          <td><?php echo $total; ?></td>
       </tr>
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
