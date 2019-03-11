<?php
    echo('<a href="index.php">Wróć</a>');
    $conn = new mysqli('127.0.0.1', 'root', '', 'test');
    $sql = "INSERT INTO imiona VALUES(null, '" .$_POST['imie']. "')";
    mysqli_query($conn, $sql);
?>