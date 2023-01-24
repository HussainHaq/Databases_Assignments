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
    $supplier = $_POST['supplier'];
    $part = $_POST['part'];
    $amount = $_POST['bought'];
    $rowsAffect= $pdo->exec("UPDATE SuppliedParts SET qty = qty - $amount WHERE SuppliedParts.P = \"$part\" AND SuppliedParts.S =\"$supplier\" ");
    //$result = $pdo->query($sqlSearch);  
    echo $rowsAffect." row(s) affected.";
?>
