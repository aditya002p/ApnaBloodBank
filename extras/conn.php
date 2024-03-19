<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'blood_bank';

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Die if connection was not successful
if ($conn) {
    //     echo "connection successful!";
} else {
    echo "connection failed!";
}
