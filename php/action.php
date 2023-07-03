<?php
session_start();
if (isset($_POST['submit'])) {

    $name = $_POST['nameC'];
    $date_time = $_POST['date_time'];
    $phone_number = $_POST['phone_number'];
    $people_num = $_POST['people_num'];
    $unique_code = generateUniqueCode();

    include_once 'connectDB.php'; 

    $sql = "INSERT INTO reservtable (unique_code, nameC, date_time, phone_number, people_num)
            VALUES ('$unique_code', '$name', '$date_time', '$phone_number', '$people_num')";

    if ($connection->query($sql) === TRUE) {
        header('Location: bookingform.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $connection->close();
}

//fungsi buat generate unique codenya
function generateUniqueCode()
{
    $random_number = mt_rand(1, 999);
    $unique_code = 'A' . str_pad($random_number, 3, '0', STR_PAD_LEFT);
    return $unique_code;
}
?>