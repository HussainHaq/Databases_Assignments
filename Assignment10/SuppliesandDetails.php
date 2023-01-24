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
    $sqlSearch = "SELECT P, qty FROM SupplierInfo,SuppliedParts WHERE SupplierInfo.S= \"$supplier\" AND SuppliedParts.S= \"$supplier\"";
    //$sqlSearch = "SELECT * FROM PartsInfo,SuppliedParts;";
    $result = $pdo->query($sqlSearch);  
?>

<h3> 3: Select Part</h3>
<table border="3" cellpadding="3" cellspacing="3" align="center">
<tr>
    <th>P</th>
    <th>Qty</th>
</tr>
<?php foreach($result as $data)
{
?>
<tr>
    <td><?php echo $data['P']; ?></td>
    <td><?php echo $data['qty']; ?></td>
</tr>
<?php
}
?>