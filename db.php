<?php
$dbHostname = 'localhost';
$dbDatabase = 'sergio_rios1';
$dbUsername = 'sergio.rios1';
$dbPassword = '6505';
$db = new PDO("mysql:host=$dbHostname;dbname=$dbDatabase;charset=utf8", $dbUsername, $dbPassword);
function getResultFromSQL($sql, $values = []) {
    global $db;
    
    $stmt = $db->prepare($sql);
    $stmt->execute($values);
    
    return $stmt->fetchAll();
}
?>