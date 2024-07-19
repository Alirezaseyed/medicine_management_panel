<?php
include 'config.php';

$sql = "SELECT * FROM reports";
$result = $conn->query($sql);

$reports = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $reports[] = $row;
    }
}

echo json_encode($reports);
?>