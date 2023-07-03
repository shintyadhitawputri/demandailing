<?php
include_once 'connectDB.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reservation_id'], $_POST['status'])) {
    $reservationId = $_POST['reservation_id'];
    $status = $_POST['status'];

    $updateQuery = "UPDATE reservtable SET status = '$status' WHERE unique_code = '$reservationId'";
    if ($connection->query($updateQuery) === TRUE) {
        header('Location: sysadmin.php');
        exit;
    } else {
        echo "Error updating status: " . $connection->error;
    }
} else {
    echo "Invalid request";
}
?>