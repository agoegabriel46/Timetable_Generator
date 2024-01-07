<?php

$con = mysqli_connect("localhost", "root", "", "billytime");

if(mysqli_connect_errno()){
    echo "Failed to connect mysqli: ". mysqli_connect_errno();
}

?>