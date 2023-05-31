<?php

$conn = mysqli_connect("localhost","root","","contact");

if(mysqli_connect_error()){
    echo "connection not successful";
    return;
}

