<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $oname = $_POST['oname'];
    $dob = $_POST['dob'];
    //$gender = $_POST['gender'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $zip = $_POST['zip'];
    $pnumber = $_POST['pnumber'];
    $email = $_POST['email'];
    $college = $_POST['college'];
    $programme = $_POST['programme'];
    $level = $_POST['level'];
    $conn = new mysqli('localhost','root','','csc310project');

    
    if($conn->connect_error){
        die('connection Failed:' .$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into studentreg(fname, lname, oname, dob, address, state, country, zip, pnumber, email, college, programme, level) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssssssss",$fname,$lname,$oname,$dob, $address,$state,$country,$zip,$pnumber,$email,$college,$programme,$level);
        $execval = $stmt->execute();
        echo $execval;
        echo "Registered Successfully-----------";
        $stmt->close();
        $conn->close();
    }
?>