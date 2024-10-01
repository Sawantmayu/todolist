<?php 

$sName = "todoserver1.database.windows.net";
$uName = "Mayuri";
$pass = "Azure12345678";
$db_name = "dbtodo";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}
