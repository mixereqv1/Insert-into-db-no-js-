<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>

        <?php

            function connect(){
                $conn = new mysqli('127.0.0.1', 'root', '', 'test');
                return $conn;
            }

        ?>
        
        <div class="container">

            <div class="top">

                <?php

                    $sql = 'SELECT * FROM inz WHERE imie NOT LIKE "%a"';
                    $result = mysqli_query(connect(),$sql);

                    echo('<table>');
                    echo('<td> Imię </td><td> Nazwisko </td><td> Zarobki </td>');
                    while($row = mysqli_fetch_assoc($result)){
                        echo('<tr>');
                        echo('<td>' .$row['imie']. '</td><td>' .$row['nazwisko']. '</td><td>' .$row['zarobki']. '</td>');
                        echo('</tr>');
                    }
                    echo('</table>')

                ?>

            </div>

            <div class="center_left">

                <form method="POST" action="insert.php">

                    <input type="text" name="imie" placeholder="Podaj imię"><br />
                    <input type="text" name="nazwisko" placeholder="Podaj nazwisko"><br />
                    <input type="text" name="zarobki" placeholder="Podaj zarobki"><br />
                    <input type="submit"  value="Dodaj">

                </form>

            </div>

            <div class="center_right">

                <?php

                    $sql = 'SELECT * FROM inz WHERE imie LIKE "%a"';
                    $result = mysqli_query(connect(),$sql);

                    echo('<table>');
                    echo('<td> Imię </td><td> Nazwisko </td><td> Zarobki </td>');
                    while($row = mysqli_fetch_assoc($result)){
                        echo('<tr>');
                        echo('<td>' .$row['imie']. '</td><td>' .$row['nazwisko']. '</td><td>' .$row['zarobki']. '</td>');
                        echo('</tr>');
                    }
                    echo('</table>')

                ?>

            </div>

            <div class="bottom">

                <?php

                    $sql = 'SELECT * FROM inz WHERE zarobki >= 30';
                    $result = mysqli_query(connect(),$sql);

                    echo('<table>');
                    echo('<td> Imię </td><td> Nazwisko </td><td> Zarobki </td>');
                    while($row = mysqli_fetch_assoc($result)){
                        echo('<tr>');
                        echo('<td>' .$row['imie']. '</td><td>' .$row['nazwisko']. '</td><td>' .$row['zarobki']. '</td>');
                        echo('</tr>');
                    }
                    echo('</table>')

                ?>

            </div>

        </div>

    </body>
</html>