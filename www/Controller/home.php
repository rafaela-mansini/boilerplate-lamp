<?php
/**
* @category Index
* @since 27/05/2020
* @author Rafaela Mansini
*/

$DBuser = 'root';
$DBpass = $_ENV['MYSQL_ROOT_PASSWORD'];
$pdo = null;

try{
    $database = 'mysql:host=database:3306';
    $pdo = new PDO($database, $DBuser, $DBpass);
    echo "Success: A proper connection to MySQL was made! The docker database is great.";    
} catch(PDOException $e) {
    echo "Error: Unable to connect to MySQL. Error:\n $e";
}

$stmt = $pdo->prepare('INSERT INTO docker.test (id, name) VALUES(1, :name)');
$stmt->execute(array(
  ':name' => 'Rafaela'
));

echo $stmt->rowCount();


// include VIEW .'home/index.html';

?>