
<?php
session_start();

// لو الزول ما مسجل دخول رجعه لصفحة login
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>لوحة التحكم</title>
</head>
<body>
    <h2>مرحبا <?php echo $_SESSION['user']; ?></h2>
    <p>دي لوحة التحكم لنظام المبيعات</p>
    
    <a href="logout.php">تسجيل خروج</a>
</body>
</html>
