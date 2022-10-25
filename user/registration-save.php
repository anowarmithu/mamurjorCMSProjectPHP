<?php

include "../crud.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

//check duplicate

$query = "SELECT * FROM user where email='$email'";

$result = getDataByColumn($query);

$row = mysqli_num_rows($result);

if ($row > 0) {
    $message = "SORRY! this email has already registered. Try with new email.";
    header("Location: ../registration.php?msg=" . $message);

} else {
    $query = "INSERT INTO user(username, email, password) VALUES ('$username' ,'$email', '$password')";

    $sql = cmsInsert($query, "Save Failed!");

    if ($sql) {
        $message = "Your Account has been created successfully!, Please Log In";
        header("Location: ../login.php?msg=" . $message);
    } else {
        $message = "SORRY! Your Account not created!, Please try again";

        header("Location: ../registration.php?msg=" . $message);
    }
}
;

// echo $username . $email . $password;
// exit();

?>