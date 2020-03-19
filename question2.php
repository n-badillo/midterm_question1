<?php
$connection = mysqli_connect("localhost", "username", "password", "database");

/* checking the connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>