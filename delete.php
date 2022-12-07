<?php
if (isset($_GET["id"]) ) {
    $id = $_GET["id"];

    $servername = "localhost:3307 ";
    $username = "root";
    $password = "";
    $database = "mycompany";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM clients WHERE id=$id";
    $connection->query($sql);
}

header("location: /mycompany/index.php");
exit;
?>