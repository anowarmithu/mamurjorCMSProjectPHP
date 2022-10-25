<?php

include "../crud.php";

$id = $_POST['id'];
$name = $_POST['name'];
$code = $_POST['code'];

//check duplicate

$updateQuery = "UPDATE category SET name='$name', code='$code' WHERE id=$id";

$sql = cmsUpdate($updateQuery, "Save Failed!");

if ($sql) {
    $msg = "Your information UPDATED successfully!, Please Log In";
    header("Location: ../category-list.php?msg=" . $msg);
} else {
    $message = "SORRY! Your Account info not updated!, Please try again";

    header("Location: ../category-list.php?msg=" . $msg);
}
;

// echo $username . $email . $password;
// exit();

?>