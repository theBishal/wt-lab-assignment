<?php
require_once "../../utils/db.php";

$id = $_POST['id'];


$sql = "DELETE FROM `students` WHERE `students`.`id` = $id;";


if ($conn->query($sql) == TRUE) {
    header('location:../?success=Record Deleted Sucessfully');
} else {
    header('location:../?error=Error While Deleting');
}
