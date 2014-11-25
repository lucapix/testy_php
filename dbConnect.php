<?php
/**
 * Created by PhpStorm.
 * User: pawel.bednarski
 * Date: 2014-11-19
 * Time: 12:49
 */

require "config.php";

function connection($dbHost, $dbUser, $dbPass)
{
    mysql_connect($dbHost, $dbUser, $dbPass)
    or die('Brak połączenia z serwerem MySQL.' . " " . mysql_error());
    echo "połączenie zostało ustanowione";

    mysql_select_db('test')
    or die('<br>połaczenie z bazą nie jest mozliwe.<br> Bład: ' . "" . mysql_error());
    echo "<br>jest połączenie";

    $query = mysql_query('SHOW TABLES');
    while ($wynik = mysql_fetch_row($query)) {
        if ($wynik == null){
            echo 'cos jednak nie dziala' .mysql_error();
        }
        echo $wynik[0] . "<br> coś innego";
    }

}


?>