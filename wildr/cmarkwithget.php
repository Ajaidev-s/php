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
        
            <center><h3>MACE</h3>
            <form method="get">
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
                <input type="submit" name="btn"  value="check" >
            </form>
            </center>
            
             <?php if (isset($_GET['btn']))
                    { 
                        foreach($ar as $student)
                             {
                              if($student["id"]==$_GET['id'] && $student['name']==$_GET['name'])
                                  { $total=0;
                                    $fail=0;
            ?>                     <CENTER> <h2>FIRST SERIES EXAMINATION RESULT</h2>
                                    <table width="40%" cellpadding="10" text-align="center" >
                                    
                                             
                                             <tr>
                                                 <th>Subject</th>
                                                 <th>Mark</th>
                                                 <th>status</th>
                                                 </tr>
                                    
                                    <?php  foreach($student as $key=>$value)
                                            { 
                                               if($key!="id" and $key!="name")
                                               	  {
                                            ?>
                                                <tr>
                                                     <td><?php echo $key ?></td>
                                                     <td><?php echo $value ?></td>
                                                     <td><?php if($value>=30) {echo "pass";} else {echo "fail" ;$fail=1;}?></td>
                                               </tr>
                                    <?php   $total=$total+$value;
                                                   }
                                            } ?> 
                                               <tr>
                                               	     <td>TOTAL</td>
                                               	     <td><?php echo $total ?></td>
                                               	     <td><?php if($fail=1){echo "fail";} else {echo "pass";} ?> </td>
                                               </tr>
                   
                             <?php break;
                                   }
                             }
                   } ?>        
                                    </table>
                    </CENTER>
            

              
   
    </body>
</html>
