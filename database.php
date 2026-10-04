<?php

$conn = new mysqli('localhost', 'root', '', 'phpcrud_bedural_glysah');

if ($conn->connect_error)  {
    die("Connection failed: " . $conn->connect_error);
}
?>