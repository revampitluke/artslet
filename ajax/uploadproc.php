<?php
$target_dir =  $_SERVER['DOCUMENT_ROOT']. "/img/";
$photo_name = time(). basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . $photo_name;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        
//	echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
//        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
 //   echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
//    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
//    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {

        echo '<script type="text/javascript">';
echo 'alert("Error changing photo. Please try a different image");';
echo 'window.location="../profile.php";';
echo '</script>';

//    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
session_start();
$pname = $_SESSION["name"];
$SESSION["avatar"] = $photo_name;
$connection = mysql_connect("labeeto3.cloudapp.net", "artslet", "dale4152");
// Selecting Database
$db = mysql_select_db("artslet", $connection);
$ses_sql = mysql_query("UPDATE login SET photo='$photo_name'" . " WHERE name='$pname'", $connection);
//header("Location:../logout.php");
mysql_close($connection);

echo '<script type="text/javascript">';
echo 'alert("Selfie changed successfully");';
echo 'window.location="../profile.php";';
echo '</script>';


    } else {
	echo '<script type="text/javascript">';
echo 'alert("Error uploading photo");';
echo 'window.location="../profile.php";';
echo '</script>';

    }
}
?>
