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
?>
<html>
<body>
    <h3>Search Part: </h3>
    <form action="partSel.php" method="post">
        "Part: "
        <input type="text" name="part" value= "part" > 
        <br>
        <input type="submit" >
    </form>
    <h3> Supply details </h3>
    <form action="SuppliesandDetails.php" method="post">
        Supplier: 
        <input type="text" name="supplier">
        <br>
        <input type="submit" value="supplier">
    </form>
    <h3> BUY HERE: </h3>
    <form action="buyer.php" method="post">
        Supplier: <input type="text" name="supplier"><br>
        Part:     <input type="text" name="part"><br>
        Amount:   <input type="text" name="bought"><br>
        <input type="submit" value="Purchase Part">
    </form>
    <h3> Add part: </h3>
    <form action="newpart.php" method="post">
        Part:      <input type="text" name="P"><br>
        Part Name: <input type="text" name="pName"><br>
        Color:     <input type="text" name="color"><br>
        Weight:    <input type="text" name="weight"><br>
    <input type="submit" value="Insert Part">
    </form>
    <h3> Add supplier </h3>
    <form action="newsup.php" method="post">
        Supplier:      <input type="text" name="s"><br>
        Supplier Name: <input type="text" name="sName"><br>
        Status:        <input type="text" name="stats"><br>
        City:          <input type="text" name="city"><br>
        <input type="submit" value="Insert Supplier">
    </form>
</body>
</html>

<?php
    $sql = "SELECT * FROM SupplierInfo";
    $result = $pdo->query($sql);
?>
<h3> Suppliers and details</h3>
<table border="3" cellpadding="3" cellspacing="3" align="center">
<tr>
    <th>S</th>
    <th>sName</th>
    <th>stats</th>
    <th>city</th>
</tr>
<?php foreach($result as $data)
{
?>
<tr>
    <td><?php echo $data['S']; ?></td>
    <td><?php echo $data['sName']; ?></td>
    <td><?php echo $data['stats']; ?></td>
    <td><?php echo $data['city']; ?></td>
</tr>
<?php
}
?>
</table>
<h3> All parts and details </h3>
<?php
    //Parts and detail table:
    $parts = "SELECT * FROM PartsInfo";
    $display = $pdo->query($parts);
?>
<table border="3" cellpadding="3" cellspacing="3" align="center">
<tr>
    <th>P</th>
    <th>pName</th>
    <th>color</th>
    <th>weight</th>
</tr>
<?php foreach($display as $data)
{
?>
<tr>
    <td><?php echo $data['P']; ?></td>
    <td><?php echo $data['pName']; ?></td>
    <td><?php echo $data['color']; ?></td>
    <td><?php echo $data['weight']; ?></td>
</tr>
<?php
}
?>
</table>