
fopen()
لفتح ملف (للقراءة أو الكتابة أو الإضافة).
<?php
$handle = fopen("example.txt", "r"); // فتح الملف للقراءة فقط
echo "<pre>";
echo "------------------------";
?>


:أنماط الفتح الشائعة* 
- "r" → قراءة فقط
- "w" → كتابة (يحذف المحتوى السابق)
- "a" → إضافة في نهاية الملف
- "r+" → قراءة وكتابة
- "a+" → قراءة وإضافة


 fread() و fgets()
لقراءة محتوى الملف.
<?php
$content = fread($handle, filesize("example.txt")); // قراءة كل المحتوى
$line = fgets($handle); // قراءة سطر واحد فقط
echo "<pre>";
echo "------------------------";
?>




 fwrite()
للكتابة داخل الملف.
<?php
$handle = fopen("example.txt", "w");
fwrite($handle, "مرحبًا بك في PHP!");
fclose($handle);
echo "<pre>";
echo "------------------------";
?>




 fclose()
لإغلاق الملف بعد الانتهاء.
<?php
fclose($handle);
echo "<pre>";
echo "------------------------";
?>




 file_get_contents() و file_put_contents()
طرق سريعة لقراءة أو كتابة ملف بالكامل.
<?php
$data = file_get_contents("example.txt"); // قراءة الملف بالكامل
file_put_contents("example.txt", "نص جديد"); // كتابة واستبدال المحتوى
echo "<pre>";
echo "------------------------";
?>




 unlink()
لحذف ملف.
<?php
unlink("example.txt");
echo "<pre>";
echo "------------------------";
?>




 file_exists() و is_file()
للتحقق من وجود الملف.
<?php
if (file_exists("example.txt")) {
    $size=
    file_exists("example.txt");
    
}
echo "<pre>";
echo "------------------------";
?>



mkdir() و rmdir()
لإنشاء أو حذف مجلد.
<?php
mkdir("myfolder"); // إنشاء مجلد
rmdir("myfolder"); // حذف مجلد (يجب أن يكون فارغًا)
echo "<pre>";
echo "------------------------";
?>



 scandir()
لقراءة محتويات مجلد.
<?php
$files = scandir("myfolder");
print_r($files);
echo "<pre>";
echo "------------------------";
?>




 مثال تطبيقي صغير*
<?php
$filename = "log.txt";
if (!file_exists($filename)) {
    file_put_contents($filename, "تم إنشاء الملف\n");
} else {
    file_put_contents($filename, "تمت إضافة سطر جديد\n", FILE_APPEND);
}
echo "<pre>";
echo "------------------------";
?>