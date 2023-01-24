<?php
    try
    {
        $dsn = "mysql:host=courses;dbname=z1911897";
        $username = 'z1911897';
        $password = '1998Oct03';
        $pdo = new PDO($dsn, $username, $password);
    }
    catch(PDOexception $e) 
    { 
        echo "Connection to database failed: " . $e->getMessage();
    }
    $s = $_POST['s'];
    $name = $_POST['sName'];
    $stats = $_POST['stats'];
    $city = $_POST['city'];
    $rowsAffect = $pdo->exec("INSERT INTO SupplierInfo (`s`, `sName`, `stats`, `city`) VALUES (\"$s\", \"$name\", $stats, \"$city\")");   
    echo $rowsAffect." row(s) affected.";
?>
