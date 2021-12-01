<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Registration</title>
</head>
<body>
    <?php

        if(isset($_POST['submitcat']))
        {
            $catname = $_POST['catname'];
            $catdesc = $_POST['catdesc'];
            $catstat = $_POST['catstat']; 

            //sql query
            $sql = "INSERT INTO category(name,description,status) VALUES('$catname','$catdesc','$catstat')";
            //making a coonection to database
            include('connection.php');
            //execution of sql query
            $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
            if($qry)
            {
                header("Location: categorydisplay.php?msg=Data Inserted Successfully");
            }

        }
    
    
    
    
    
    
    ?>
    
    <form method="post" action="" enctype="multipart/form-data" name="registercat">
        <fieldset>
            <legend>Register Category</legend>
            <label>Category Name</label> 
            <input type="text" name="catname" value=""><br><br>
            <label>Category Description</label> 
            <textarea name="catdesc" value=""></textarea><br><br>
            <label>Category Status</label> 
            <input type="text" name="catstat" value=""><br><br>
            <input type="submit" name="submitcat" value="submit">  <input type="reset" name="resetcat" value="reset">








        </fieldset>








    </form>
    
</body>
</html>