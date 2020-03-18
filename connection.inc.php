<?php
$conn = mysqli_connect("localhost","rootsouschef", "explainingData99","userdata");
    if ($conn->connect_error) {
        die ("Connection failed: " . $conn->connect_error);
    }
?>