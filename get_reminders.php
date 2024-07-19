<?php
include 'config.php';

$sql = "SELECT * FROM reminders";
$result = $conn->query($sql);

$reminders = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $reminders[] = $row;
    }
}

echo json_encode($reminders);
?>