<?php

include "config.php";

$link = mysqli_connect($hostname, $username, $password, $dbname);

function cmsInsert($query, $error_msg = "DB Connection Failed!") {
    global $link;
    if ($link) {

        $sql = mysqli_query($link, $query);

        if ($sql == true) {
            return $sql;
        } else {
            return $sql;
        }
    } else {
        return $error_msg;
    }
}

function getDataByColumn($query, $error_msg = "DB Connection Failed!") {

    global $link;
    if ($link) {

        $sql = mysqli_query($link, $query);

        return $sql;

    } else {
        return $error_msg;
    }

}

function getAllData($query, $error_msg = "DB Connection Failed!") {

    global $link;
    if ($link) {

        $sql = mysqli_query($link, $query);

        return $sql;

    } else {
        return $error_msg;
    }

}

function cmsUpdate($query, $error_msg = "DB Connection Failed!") {
    global $link;
    if ($link) {

        $sql = mysqli_query($link, $query);

        if ($sql == true) {
            return $sql;
        } else {
            return $sql;
        }
    } else {
        return $error_msg;
    }
}


function Delete($query, $error_msg = "DB Connection Failed!") {
    global $link;
    if ($link) {

        $sql = mysqli_query($link, $query);

        if ($sql == true) {
            return $sql;
        } else {
            return $sql;
        }
    } else {
        return $error_msg;
    }
}
