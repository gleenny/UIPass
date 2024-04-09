<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $host = "localhost:3307"; //problema to if online na 
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "iupassdb";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT * FROM accounttbl WHERE username ='$username' AND password ='$password'";

    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        header("Location: Dashboard.html");
        exit();
    } else {
        $_SESSION['message'] = "Incorrect User Name or Password";
        header("Location: Login.php"); //remember to change to index.php
        exit();
    }

    $conn->close();
} else {
    header("Location: Login.php"); //remember to change to index.php
    echo "did not login properly";
}
?>