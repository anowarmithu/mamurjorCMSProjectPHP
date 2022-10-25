<?php

include "crud.php";

$name = $_POST['name'];
$code = $_POST['code'];

//check duplicate

$query = "SELECT * FROM category where name='$name'";

$result = getDataByColumn($query);

$row = mysqli_num_rows($result);

if ($row > 0) {
    $message = "SORRY! this category is exist. Try with new name.";
    header("Location: add-category.php?msg=" . $message);

} else {
    $query = "INSERT INTO category (name, code) VALUES ('$name' ,'$code')";

    $sql = cmsInsert($query, "Save Failed!");

    if ($sql) {
        $message = "Category has been added successfully!";
        header("Location: category-list.php?msg=" . $message);
    } else {
        $message = "SORRY! Cannot create category, Please try again";

        header("Location: add-category.php?msg=" . $message);
    }
}
;

// echo $username . $email . $password;
// exit();

?>