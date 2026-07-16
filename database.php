
<?php
$serverName = "localhost";
$database = "SalesDB";
$username = "sa";
$password = "123";
try {
    $conn = new PDO("sqlsrv:server=$serverName;Database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) { 
    die("فشل الاتصال: " . $e->getMessage()); 
؟>
