<html>
    <head><title>testform</title>
    <script>
       function verify()
            {
                
                if(document.forms.f1.name1.value=="")
                 {
                    window.alert("please fill the name");
                 }
                else if(document.forms.f1.add.value=="")
                 {
                    window.alert("please fill the adress");
                 }
            }

    </script>
</head>
    <body>
        <center>
        <form method="post" onsubmit="return verify()" name="f1">
            <table>
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="name1" id="name1"></td>
                </tr>
                <tr>
                    <td>adress</td>
                    <td><textarea name="add" cols="30" rows="10" id="add" required></textarea></td>
                </tr>
            </table>
            <input type="submit" value="submit" style="color:red;background:yellow;" name="btn">
        </form>
        </center>
    </body>
</html>
<?php

if(isset($_POST['btn']))
    {
        echo $_POST['name1'];
    }
?>