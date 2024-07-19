<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];

    $sql = "INSERT INTO medicines (name) VALUES ('$name')";

    if ($conn->query($sql) === TRUE) {
        echo "دارو با موفقیت اضافه شد.";
    } else {
        echo "خطا: " . $sql . "<br>" . $conn->error;
    }
}
?>