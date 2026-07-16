
<?php
require 'database.php';

$msg = "";
if(isset($_POST['register'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $check = $conn->query("SELECT * FROM users WHERE username='$user'");
    if($check->num_rows > 0){
        $msg = "الاسم ده مستخدم قبل كده";
    } else {
        $conn->query("INSERT INTO users (username, password) VALUES ('$user', '$pass')");
        $msg = "تم انشاء الحساب بنجاح. <a href='login.php'>سجل دخول</a>";
    }
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>انشاء حساب</title>
</head>
<body>
    <h2>انشاء حساب جديد</h2>
    <p style="color:red;"><?php echo $msg; ?></p>
    
    <form method="POST">
        <label>اسم المستخدم:</label><br>
        <input type="text" name="username" required><br><br>
        
        <label>كلمة السر:</label><br>
        <input type="password" name="password" required><br><br>
        
        <button type="submit" name="register">تسجيل</button>
    </form>
    
    <br>
    <a href="login.php">عندك حساب؟ سجل دخول</a>
</body>
</html>
