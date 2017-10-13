<?php
    $temp = $_POST["temp"];
    $humidity = $_POST["humidity"];
    // Connect to our DB with mysql_connect(<server>, <username>, <password>)
	 $sql_connection = mysql_connect("localhost", "root", "123456789");
 
    mysql_select_db("dht", $sql_connection);
	// Probably should check to make sure the connection was successful
    // But I'm too lazy...
    $sql = "INSERT INTO temphumid (
                temp,
                humidity,
        time
            )
            VALUES (
                '$temp',
                '$humidity',
                NOW()
            )";
			 mysql_query($sql, $sql_connection); 
    mysql_close($sql_connection);
	include ("show.php");
?>