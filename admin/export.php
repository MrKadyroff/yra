<?php
// Connection 
header('Content-Type: text/html; charset=utf-8'); 
$conn=mysqli_connect('localhost','root','','yra');
$conn->query("SET NAMES utf8"); 
$conn->query("set names cp1251"); 


$filename = "Webinfopen.xls"; // File Name
// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
$user_query = $conn->query('SELECT * FROM mailing');
// Write data to file
$flag = false;
while ($row = $user_query->fetch_assoc()) {
    if (!$flag) {
        // display field/column names as first row
        echo implode("\t", array_keys($row)) . "\r\n";
        $flag = true;
    }
    echo implode("\t", array_values($row)) . "\r\n";
}
?>