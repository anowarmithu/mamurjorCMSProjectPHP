<?php

$id = $_GET['id'];

include '../crud.php';
$query = "DELETE FROM user WHERE id=$id";

$result = Delete($query);

if ($result) {
    $msg = "Your account has deleted!";
    header("Location: ../all-users.php?msg=" . $msg);
} else {
    $msg = "SORRY! Action Failed";

    header("Location: ../all-users.php?msg=" . $msg);
}