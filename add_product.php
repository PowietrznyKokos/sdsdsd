<?php

include "db_connection.php";

$title = $_POST["title"];
$price = $_POST["price"];

$sql = "INSERT INTO `product` VALUES ($title, $price)";

if($conn->query($sql) === TRUE) {
    echo "Piotrek ojebał kogoś na bapesty";
} else {
    echo "Piotrkowi nie działają metody xD";
}




$conn->close();
?>