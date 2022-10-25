<?php

session_start();

session_destroy();

$msg = "Logout Success!";
header("Location: ../login.php?msg=" . $msg);
