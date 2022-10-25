<?php

$id = $_GET['id'];

include 'crud.php';
$query = "DELETE FROM posts WHERE id=$id";

$result = Delete($query);

if ($result) {
    $msg = "Your Post has deleted!";
    header("Location: post-list.php?msg=" . $msg);
} else {
    $msg = "SORRY! Action Failed";

    header("Location: ../post-list.php?msg=" . $msg);
}