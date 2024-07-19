<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $medicine_id = $_POST['medicine_id'];
    $report_date = $_POST['report_date'];
    $status = $_POST['status'];

    $sql = "INSERT INTO reports (medicine_id, report_date, status) VALUES ('$medicine_id', '$report_date', '$status')";

    if ($conn->query($sql) === TRUE) {
        echo "گزارش با موفقیت اضافه شد.";
    } else {
        echo "خطا: " . $sql . "<br>" . $conn->error;
    }
}
?>