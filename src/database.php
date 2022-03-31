<?php
/**
 * Establish a connection to a database
 * @param string $db the db connection
 * @param string $user the db user
 * @param string $password the db password
 * @return PDO the pdo instance
 */
function dbConnect(string $db,string $user='root',string $password=''):PDO {
    $pdo = new PDO("mysql:host=localhost;dbname=$db",$user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}

function deleteFrom(PDO $db,string $table,string $condition){
    $sql="DELETE FROM `$table` WHERE $condition";
    return $db->exec($sql);
}


