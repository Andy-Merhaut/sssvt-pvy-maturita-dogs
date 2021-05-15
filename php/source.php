<?php
$conn = new PDO('mysql:host=localhost; dbname=dogs', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);