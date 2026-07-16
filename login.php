
<?php
session_start();
require 'database.php';

$error = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // هنا بنتحقق من اليوزر والباسورد من الداتا بيز
    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username, $password]);
    $user = $stmt->fetch();

    if($user){
        $_SESSION['user'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "اسم المستخدم او كلمة السر خطأ";
    }
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تسجيل الدخول</title>
</head>
<body>
    <h2>تسجيل الدخول</h2>
    <p style="color:red;"><?php echo $error; ?></p>
    <form method="post">
        <label>اسم المستخدم:</label><br>
        <input type="text" name="username" required><br><br>
        
        <label>كلمة السر:</label><br>
        <input type="password" name="password" required><br><br>
        
        <button type="submit">دخول</button>
    </for
