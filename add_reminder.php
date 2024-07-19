<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $medicine_id = $_POST['medicine_id'];
    $reminder_time = $_POST['reminder_time'];

    $sql = "INSERT INTO reminders (medicine_id, reminder_time) VALUES ('$medicine_id', '$reminder_time')";

    if ($conn->query($sql) === TRUE) {
        echo "یادآور با موفقیت اضافه شد.";
    } else {
        echo "خطا: " . $sql . "<br>" . $conn->error;
    }
}
?>