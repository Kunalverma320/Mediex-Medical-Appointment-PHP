<?php
include("../config.php");
error_reporting(0);

$Introduction=$_POST['Introduction'];
$email=$_POST['email'];
$name=$_POST['fname'];
$department=$_POST['department'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$fathername=$_POST['fathername'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$facebook=$_POST['facebook'];
$twitter=$_POST['twitter'];
$linkedin=$_POST['linkedin'];
$whatsapp=$_POST['whatsapp'];
$educational_info=$_POST['educational_info'];
$status=$_POST['status'];

if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
    $image = $_FILES["image"]["name"];
    $uploadFolder = "../assets/img/team/";
    $uploadFilePath = $uploadFolder . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $uploadFilePath);
} else {
    // Handle the case where the image file is not uploaded
    $image = "";
}

$sql="INSERT INTO `doctors` (Introduction,email,fname,image,department,gender,dob,fathername,phone,address,facebook,twitter,linkedin,whatsapp,educational_info,status) VALUE ('$Introduction','$email','$name','$image','$department','$gender','$dob','$fathername','$phone','$address','$facebook'.'$twitter','$linkedin','$whatsapp','$educational_info','$status');";

if ($con->query($sql) === TRUE) {
    echo "data submitted";
} else {
    echo "Error updating record: " . $con->error;
}

?>