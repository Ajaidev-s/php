<?php
$ar=array(array("id"=>1,"name"=>"Ajai","physic"=>28,"maths"=>38,"python"=>40),
         array("id"=>2,"name"=>"Ajith","physic"=>28,"maths"=>38,"python"=>40),
         array("id"=>3,"name"=>"Akhil","physic"=>28,"maths"=>38,"python"=>40),
         array("id"=>4,"name"=>"Arjun","physic"=>28,"maths"=>38,"python"=>40));
         $id=4;
?>
<html>
    <head>
        <title>Mace</title>
       <style>   body{
                background-color: rgba(12, 30, 31, 0.058);
            }
            td,th{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <main>
            <center><h3>MACE</h3>
            <form method="post">
                <table width="50%" cellpadding="10">
                    <tr>
                        <td>NAME:</td>
                        <td><input type="text" name="name" ></td>
                    </tr>
                    <tr>
                        <td>ID:</td>
                        <td><input type="number" name="id" ></td>
                    </tr>
                </table>
                <div class="col-2"><input type="submit" name="btn" class="form-control btn btn-dark" value="check" ></div>
            </form>
            
            
                
                
             <?php if (isset($_POST['btn']))
                    { 
                        foreach($ar as $student)
                             {
                              if($student["id"]==$_POST['id'] && $student['name']==$_POST['name'])
                                  {
            ?>
                                    <table width="40%" cellpadding="10" text-align="center" >
                                             <tr>
                                                 <th>key</th>
                                                 <th>value</th>
                                                 </tr>
                                    <?php  foreach($student as $key=>$value)
                                            { ?>
                                                <tr>
                                                     <td><?php echo $key ?></td>
                                                     <td><?php echo $value ?></td>
                                               </tr>
                                    <?php   } ?> 
                   
                             <?php break;
                                   }
                             }
                   } ?>        
                                    </table>
                </center>
            

                
                
           
        </main>
    </body>
</html>

