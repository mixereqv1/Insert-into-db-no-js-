<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        
        <form method="POST" action='dane.php'>

            <input type='text' class='imie' name='imie'>
            <input type="submit" name="dodaj">

        </form>

        <?php

            $conn = new mysqli('127.0.0.1', 'root', '', 'test');
            $sql = 'SELECT * FROM imiona';

            $result = mysqli_query($conn, $sql);

            echo('<table>');

            while($row = mysqli_fetch_assoc($result)){
                echo('<tr>');
                echo('<td>' .$row['id']. '</td><td>' .$row['imie']. '</td>');
                echo('</tr>');
            }

            echo('</table>');

        ?>

    </body>
</html>