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
    $part = $_POST['P'];
    $name = $_POST['pName'];
    $color = $_POST['color'];
    $weight = $_POST['weight'];
    echo $part;
    echo $name;
    echo $color;
    echo $weight;
    $rowsAffect = $pdo->exec("INSERT INTO `PartsInfo` (`p`, `pName`, `color`, `weight`) VALUES (\"$part\", \"$name\", \"$color\", $weight)");   
    echo $rowsAffect." row(s) affected.";
?>
