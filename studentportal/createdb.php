<?php
    $con = new mysqli('localhost','root','','exam');
    if($con->connect_error){
        die("Connection Failed: ". $con->connect_error);
    }

    $sql = "CREATE TABLE table2(fname VARCHAR(20) NOT NULL, lname VARCHAR(20) NOT NULL)";
    if($con->query($sql)===TRUE){
        echo "Table created";
    }
    else{
        echo "Error". $conn->error;
    }

    $conn->close();
?>