<?php

include "crud.php";
$id = $_POST['id'];
$title = $_POST['title'];
$short_description = $_POST['short_description'];
$description = $_POST['description'];
$category_id = $_POST['category_id'];
$status = $_POST['status'];

$updateQuery = "UPDATE posts SET title='$title', short_description='$short_description',description='$description',category_id='$category_id',status='$status' WHERE id=$id";

$sql = cmsUpdate($updateQuery, "Save Failed!");

if ($sql) {
    $msg = "Post UPDATED successfully!";
    header("Location: post-list.php?msg=" . $msg);
} else {
    $message = "SORRY! Post not updated!, Please try again";

    header("Location: post-list.php?msg=" . $msg);
}
;

?>
