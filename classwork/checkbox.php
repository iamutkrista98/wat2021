<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox and File Upload Concept</title>
</head>
<body>
    <?php 
    if(isset($_POST['submit'])){
        $course=$_POST["course"];
        foreach($course as $c)
        {
            echo "$c ";
        }
        //$_Files //Two Dimesnion Associative Array
        //getting the file name
        $filename=$_FILES["upload"]["name"];
        //getting the file size
        $filesize=$_FILES["upload"]["size"];
        //getting file type
        $filetype=$_FILES["upload"]["type"];
        //getting tmp file name
        $tmpfilename=$_FILES["upload"]["tmp_name"];

        echo "<br/> The uploaded file info is as follows";
        echo "<br/> The uploaded file name is: $filename";
        echo "<br/> The uploaded file size is: $filesize";
        echo "<br/> The uploaded file type is: $filename";
        echo "<br/> The uploaded temp file name is: $tmpfilename";
    }
    
    
    
    
    ?>

    <form method="POST" name="fileupload" action="" enctype="multipart/form-data">
        <input type ="checkbox" name="course[]" value="PHP"/>PHP
        <input type ="checkbox" name="course[]" value="JAVA"/>JAVA
        <input type ="checkbox" name="course[]" value="ASP"/>ASP
        <input type ="checkbox" name="course[]" value="C#"/>C#
        <br/>
        <input type="file" name="upload"/>
        <input type="submit" name="submit" value="Enrol"/>
</form>
</body>
</html>