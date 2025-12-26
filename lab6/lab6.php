 'MySQL' ط الاتصال بقاعدة بيانات




<?php
$host = "localhost";      // اسم المضيف (عادة localhost)
$user = "root";           // اسم المستخدم
$password = "";           // كلمة المرور
$database = "my_database"; // اسم قاعدة البيانات

// إنشاء الاتصال
$conn = new mysqli($host, $user, $password, $database);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: ". $conn->connect_error);
}

echo "تم الاتصال بنجاح!";
?>




<?php
$conn->set_charset("utf8");
?>



<?php
$host = "localhost";
$dbname = "my_database";
$user = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "تم الاتصال بنجاح!";
} catch (PDOException $e) {
    echo "فشل الاتصال: ". $e->getMessage();
}
?>
