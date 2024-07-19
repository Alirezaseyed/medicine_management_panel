<?php
include 'config.php';

$sql = "SELECT * FROM medicines";
$result = $conn->query($sql);

$medicines = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $medicines[] = $row;
    }
}

echo json_encode($medicines);
?>