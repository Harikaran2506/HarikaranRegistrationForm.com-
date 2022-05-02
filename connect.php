<?php
    $firstName = $_GET['firstName'];
    $lastName = $_GET['lastName'];
    $gender = $_GET['gender'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    $phoneNumber = $_GET['phoneNumber'];

    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('connection Failed : '.$conn->connect_error);
    }else{
        $stmt =  $conn->prepare("insert into registration(firstName, lastName, gender, email, password, phoneNumber)values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi",$firstName, $lastName, $gender, $email, $password, $phoneNumber);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        echo "Your Details Registered Successfully...........";
    }
?>