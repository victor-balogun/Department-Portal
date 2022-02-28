<?php
    $BFN311 = $_POST['BFN311'];
    $BUS313 = $_POST['BUS313'];
    $CBS211 = $_POST['CBS211'];
    $CIT310 = $_POST['CIT310'];
    $CSC310 = $_POST['CSC310'];
    $CSC312 = $_POST['CSC312'];
    $CSC313 = $_POST['CSC313'];
    $CSC317 = $_POST['CSC317'];
    $EDS311 = $_POST['EDS311'];
    $GST311 = $_POST['GST311'];
    $MIS316 = $_POST['MIS316'];
    $TMC311 = $_POST['TMC311'];
    $TMC312 = $_POST['TMC312'];
    $conn = new mysqli('localhost','root','','csc310project');

    
    if($conn->connect_error){
        die('connection Failed:' .$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into coursereg(BFN311,BUS313,CBS211,CIT310,CSC310,CSC312,CSC313,CSC317,EDS311,GST311,MIS316,TMC311,TMC312) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssssssss",$BFN311,$BUS313,$CBS211,$CIT310,$CSC310,$CSC312,$CSC313,$CSC317,$EDS311,$GST311,$MIS316,$TMC311,$TMC312);
        $execval = $stmt->execute();
        echo $execval;
        echo "Login Successfully-----------";
        $stmt->close();
        $conn->close();
    }
?>