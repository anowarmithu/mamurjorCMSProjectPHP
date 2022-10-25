<?php

$id = $_GET['id'];

include '../crud.php';
$query = "DELETE FROM category WHERE id=$id";

$result = Delete($query);

if ($result) {
    $msg = "Your account has deleted!";
    header("Location: ../category-list.php?msg=" . $msg);
} else {
    $msg = "SORRY! Action Failed";

    header("Location: ../category-list.php?msg=" . $msg);
}