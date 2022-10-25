<?php

include "crud.php";

$title = $_POST['title'];
$short_description = $_POST['short_description'];
// $description = $_POST['description'];
$description = htmlentities($_POST['editor']);
// $image = $_POST['image'];
$category_id = $_POST['category_id'];
// $user_id = $_POST['user_id'];
$status = $_POST['status'];

//check duplicate

$query = "SELECT * FROM posts where title='$title'";

$result = getDataByColumn($query);

$row = mysqli_num_rows($result);

if ($row > 0) {
    $message = "SORRY! this exact title is exist. Try with some thing new.";
    header("Location: add-post.php?msg=" . $message);

} else {
    $query = "INSERT INTO posts (title, short_description, description, category_id, status  ) VALUES ('$title' ,'$short_description', '$description','$category_id','$status')";

    $sql = cmsInsert($query, "Save Failed!");

    if ($sql) {
        $message = "Category has been added successfully!";
        header("Location: post-list.php?msg=" . $message);
    } else {
        $message = "SORRY! Cannot create Post, Please try again";

        header("Location: add-post.php?msg=" . $message);
    }
}
;

// echo $username . $email . $password;
// exit();

?>