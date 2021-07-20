<?php

/*
Please set up here your MySQL database.
*/
$host = "";
$name = "db_321408";
$user = "db_321408";
$password = "c04d0de83d";

try{
    $mysql = new PDO("mysql:host=$host;dbname=$name", $user, $password);
} catch (PDOException $e){
    ?>
    <div class="alert alert-danger" role="alert">
        <p>An error with the MySQL database occurred. Do you have to forget to set up your database in the modules/mysql.php file?</p>
        <ul>
            <li><?php echo $e->getMessage() ?></li>
        </ul>
    </div>
    <?php
}
 ?>
