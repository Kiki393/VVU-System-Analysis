<?php

$conn = new mysqli('localhost', 'root', '', 'fpmu_projectmgnt_db') or die("Could not connect to mysql" . mysqli_error($con));

//Contact Us
//If the send button is clicked
if (isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "insert into messages values ('', '$name', '$message', '$email')";
    $results  = mysqli_query($conn, $sql);

    if ($results == 1) {
        echo "<script>alert('Message successfully sent.');</script>";
    }else {
        echo "<script>alert('Failed to send message. Please try again later.');</script>";
    }
}
