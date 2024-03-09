<?php

$connect = mysqli_connect("localhost","root","","ledger");

if(!$connect) {
    die("connection failed!");
}

$type = $_POST['type'];
$name = $_POST['name'];
$date = $_POST['date'];
$amount = $_POST['amount'];

// Check if amount is negative
if ($amount < 0) {
    echo "<p style='color:red;'>กรุณากรอกจำนวนเงินเป็นค่าบวก</p>";
} else {
    $sql = "INSERT INTO payment(type,name,amount,date) VALUES('$type','$name','$date','$amount')";

    $result = mysqli_query($connect,$sql);
    if($result) {
        echo "<button style='background-color:green; color:white;'>Success!</button>";
        echo "<style> body { background-color: #FC8EAC; } </style>";
    } else {
        echo "Failed!";
        echo "<style> body { background-color: #FC8EAC; } </style>";
    }
}

?>