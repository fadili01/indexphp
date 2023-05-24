<?php

$dbhost = "localhost:3306";
$dbuser = "root";
$dbwaachtwoord = "2001Mohamed?!";
$dbnaam = "winkel";

$dsn = "mysql:host=$dbhost;dbname=$dbnaam;";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try 
{
     $pdo = new PDO($dsn, $dbuser, $dbwaachtwoord, $options);
} 
catch (\PDOException $e) 
{
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

echo "connected to $dbnaam"
?>