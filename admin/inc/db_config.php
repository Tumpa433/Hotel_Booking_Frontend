<?php


$host = '127.0.0.1';
$db = 'hbdb';
$user = 'root';
$pass = 'BISWAS';
$charset = 'utf8mb4';

// Using PDO
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    
} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}

function filternation($data){
    foreach($data as $key => $value){
        $data[$key] = trim($value);
        $data[$key] = stripslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value);
    }
    return $data;
}

function select($sql, $values=[]){
    global $pdo;


    try{
        $stmt =$pdo->prepare($sql);
        $stmt->execute($values);
        return $stmt->fetchAll();
    }catch(PDOException $e){
        echo "❌ Error: " . $e->getMessage();
    }
}


?>