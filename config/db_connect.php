<?php 

    // connect to database
    $conn = mysqli_connect('localhost', 'heckles', 'dave3094', 'ninja_pizza');

    // check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }

?>