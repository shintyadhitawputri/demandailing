<?php
include_once 'connectDB.php';
if (isset($_POST['delete'])) {
    $unique_code = $_POST['reservation_id'];

    $sql = "DELETE FROM reservtable WHERE unique_code = '$unique_code'";
    if ($connection->query($sql) === TRUE) {
        header('Location: sysadmin.php');
    } else {
        echo "Error deleting record: " . $connection->error;
    }
}
?>
