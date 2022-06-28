<?php
require_once "../../utils/db.php";
// if (!isset($_POST['id'])) {
// 	header("location:../?error=invalid id");
// }
if (isset($_POST['update'])) {
 
    $filename = $_FILES["profile"]["name"];
    $tempname = $_FILES["profile"]["tmp_name"];
    $folder = "../image/" . $filename;

$id = $_POST['id'];
// var_dump($_POST);
$name=$_POST['name'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$favourite_color=$_POST['color'];
$weight=$_POST['weight'];
$gender=$_POST['gender'];
$hobbies=implode(",",$_POST['hobbies']);
$nationality=$_POST['nationality'];
$sql="UPDATE students SET name='$name',email='$email', dob='$dob', favourite_color='$favourite_color', weight='$weight', gender='$gender', hobbies='$hobbies', nationality='$nationality', profile='$filename' WHERE id=$id;";
mysqli_query($conn, $sql);
    
if (move_uploaded_file($tempname, $folder)) {
    echo "<h3>  Image uploaded successfully!</h3>";
} else {
    echo "<h3>  Failed to upload image!</h3>";
}
if($conn->query($sql) == TRUE) {
	header("location:../?success=Updated Successfully");
} else {
	header("location:../?error=Error Occured");
}
}
?>