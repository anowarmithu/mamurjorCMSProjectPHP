<?php
session_start();
include "../crud.php";

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM user where email='$email' and password='$password'";

$result = getDataByColumn($query);

$row = mysqli_num_rows($result);

if ($row > 0) {

    $_SESSION['username'] = $email;
    header("Location: ../dashboard.php");

} else {
    $msg = "OPPS! User credential dose not matched, pleas try again";
    header("Location: ../login.php?msg=" . $msg);
}
;

?>