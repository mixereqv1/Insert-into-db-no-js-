<?php

    $conn = new mysqli('127.0.0.1', 'root', '', 'test');
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $zarobki = $_POST['zarobki'];
    $sql = "INSERT INTO inz VALUES(null, '$imie', '$nazwisko', $zarobki)";
    mysqli_query($conn,$sql);
    header('location:index.php');

?>