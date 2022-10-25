<?php

include "../crud.php";

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

//check duplicate

$updateQuery = "UPDATE user SET username='$username', email='$email',password='$password' WHERE id=$id";

$sql = cmsUpdate($updateQuery, "Save Failed!");

if ($sql) {
    $msg = "Your information UPDATED successfully!, Please Log In";
    header("Location: ../all-users.php?msg=" . $msg);
} else {
    $message = "SORRY! Your Account info not updated!, Please try again";

    header("Location: ../all-users.php?msg=" . $msg);
}
;

// echo $username . $email . $password;
// exit();

?>