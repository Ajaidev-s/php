<head>

</head>
<body>

    <center> <h3 color:red;>OLIVIA SUPERMARKET</h3></center>
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
         
                   <input type="submit" value="BILLS" class="form-control" style="color:pink";width:50%" ;name="bill">
                   <input type="submit" value="CLEAR" class="form-control" style="color:purple";width:50%;position:relative;" name="clr">
             
         
        <form>
        </div>
 
       <div class="col-3">
       
<?php
    if(isset($_POST["bill"]))
    {
    ?>
    <center><h3>BILLS</h3></center>
    <table cellpadding="20">
       <tr>
           <th>SL NO</th>
           <th>Name</th>
           <th>Quantity</th>
           <th>Price</th>
           <th>Total<th>
       <tr>
       <tr>
          <td><?php echo "1"; ?></td>
          <td><?php echo $_POST["name1"]; ?> </td>
          <td><?php echo "2"; ?> </td>
          <td><?php echo "3"; ?> </td>
          <td><?php echo "4"; ?> </td>
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
