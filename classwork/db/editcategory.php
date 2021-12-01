<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Records</title>
</head>
<body>
    <?php
    if(isset($_POST['updatecategory'])){
        //getting data from form 
        $catid=$_POST['id'];
        $catname=$_POST['name'];
        $catdesc=$_POST['description'];
        $catstat=$_POST['status'];
        //connecting to database 
        include('connection.php');
        $sql="UPDATE category SET name='$catname',description='$catdesc',status='$catstat' WHERE id='$catid'";
        //execute query 
        $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if($qry)
        {
            header("Location:categorydisplay.php?Category Table Updated Successfully");
        }

    }
    


    ?>
    <?php 
    if(isset($_GET['id'])){
        $editid=$_GET['id'];
        //getting data from table 
        $sql = "SELECT * FROM category WHERE id = '$editid'";
        //connection to database 
        include('connection.php');
        $qry = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        $count = mysqli_num_rows($qry);
        if($count ==1){
            while($row = mysqli_fetch_array($qry)){
                $eid=$row['id'];
                $ename=$row['name'];
                $edesc=$row['description'];
                $estat=$row['status'];
                echo "<form method='POST' action='' name='updatecategory'>";
                echo"<fieldset>"; 
                echo"<legend>Edit Category Details</legend>";
                echo"<label>Category ID: </label><input type='number' name='id' value='$eid' readonly><br><br>";
                echo"<label>Category Name: </label><input type='text' name='name' value='$ename'><br><br>";
                echo"<label>Category Description: </label><textarea name='description' value='$edesc'></textarea><br><br>";
                echo"<label>Category Status: </label><input type='number' name='status' value='$estat'><br><br>";
                echo"<input type='submit' name='updatecategory' value='update'/>";
                echo"</fieldset></form>";

            }
        }
        


     

    }

    else {
        header("Location:categorydisplay.php");
    }

    ?>
    
</body>
</html>