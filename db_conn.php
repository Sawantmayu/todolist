<?php 

$sName = "sqlsrv:Server=tcp:todoserver1.database.windows.net,1433;Database=dbtodo"; // Correct format for SQL Server
$uName = "Mayuri";
$pass = "Azure12345678";

try {
    // Use the correct connection string format for SQL Server
    $conn = new PDO($sName, $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection successful!";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
