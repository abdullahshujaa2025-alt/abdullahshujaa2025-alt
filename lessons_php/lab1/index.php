<?php
echo "عبدالله عباس شجاع الدين<br> ";
echo "سنة ثااالث <br>";
echo "IT, group 1 <br> <br>";
echo "//////////////////////// <br> <br>";
echo "دوال النصوص <br>";
echo "________________________ <br> <br>";
echo "دالة طول النص: strlen() <br>";
$text="Abdullah";
$len= strlen($text);
echo "النص: $text <br>";
echo "طول النص : $len <br> <br>";

////////
echo "دالة قطع جزء من النص: substr() <br> ";
$s=substr($text,4);
echo "النص كامل $text <br>";
echo "النص بعد $s <br> <br>";

//////////
echo "دالة استبدال جزء من النص :substr_replace() <br>";
$d="hello world";
$res= substr_replace($d, "php",6);
echo "النص قبل $d <br>";
echo "النص بعد $res <br> <br>";

///////////
echo "دالة ايجاد اول موقع لحرف او لكلمة :strpos() <br>";
$a="Abdullah Abass";
$aa= strpos("$a","Abass");
echo "الكلمة: $a <br>";
echo "اول موقع : $aa <br> <br>";

/////////
echo "دالة ايجاد اخر موقع :strrpos() <br>";
$q="Abdullah Abass";
$qq= strrpos("$q","Abass");
echo "الكلمة: $q <br>";
echo "اخر موقع: $qq <br> <br>";

/////////////
echo "دالة بحث بدون حساسية لحالة الاحرف stripos() <br>";
$c="hello world";
$cc= stripos("$c","WORLD");
echo "الكلمة: $c <br>";
echo "بعد: $cc <br> <br>"; 

//////////////
echo "دالة استبدال نص str_replace() <br>";
$x="abdullah abass";
$xx= str_replace("abass","shujaa","$x");
echo "قبل: $x <br>";
echo "بعد: $xx <br> <br>";

/////////////
echo "دالة استبدال بدون حساسية خالة الاحرف: str_ireplace <br>";
$z="hello world";
$zz= str_ireplace("WORld","php","$z");
echo "قبل: $z <br>";
echo "بعد: $zz <br> <br>";

/////////////
echo "دالة تقسيم النص الى مصفوفة :explode() <br>";
$v="abdullah abass shujaa";
$vv= explode(" ","$v");
echo "النص: $v <br>";
print_r($vv);

////////////
echo "<br> <br> دالة تغير النص الى حروف كبيرة: strtoupper() <br>";
$b="abdullah";
$bb= strtoupper("$b");
echo "قبل: $b <br>";
echo "بعد: $bb <br> <br>";

////////////
echo " دالة تغير النص الى حروف صغيرة: strtolower() <br>";
$d="ABDULLAH";
$dd= strtolower("$d");
echo "قبل: $d <br>";
echo "بعد: $dd <br> <br>";

////////////
echo " دالة تغير اول حرف الى كبير: ucfirst() <br>";
$u="abdullah";
$uu= ucfirst("$u");
echo "قبل: $u <br>";
echo "بعد: $uu <br> <br>";

////////////
echo "< دالة تغير أول حرف كبير لكل كلمة: ucwords() <br>";
$n="abdullah abass";
$nn= ucwords("$n");
echo "قبل: $n <br>";
echo "بعد: $nn <br> <br>";

////////////
echo " دالةإزالة المسافات من الطرفين: trim() <br>";
$t=" abdullah ";
$tt= trim("$t");
echo "قبل: $t <br>";
echo "بعد: $tt <br> <br>";

////////////
echo " دالةالتشفير والترميز: md5() <br>";
$m=" abdullah ";
$mm= md5("$m");
echo "قبل: $m <br>";
echo "بعد: $mm <br> <br>";

////////////
echo " دالةالتشفير والترميز: sha1() <br>";
$m=" abdullah ";
$mm= sha1("$m");
echo "قبل: $m <br>";
echo "بعد: $mm <br> <br>";

////////////
echo " دالة تشفييير: base64_encode() <br>";
$m=" abdullah ";
$mm= base64_encode("$m");
echo "قبل: $m <br>";
echo "بعد: $mm <br> <br>"; 

////////////
echo " دالة فك تشفير: base64_decode() <br>";
$m=" IGFiZHVsbGFoIA== ";
$mm= base64_decode("$m");
echo "قبل: $m <br>";
echo "بعد: $mm <br> <br>";

////////////
echo "دالة التحقق من حروف فقط: ctype_alpha() <br>";
$y="hello";
$yy= ctype_alpha("$y");
echo "قبل: $y <br>";
echo "بعد: $yy <br> <br>";

////////////
echo "دالة التحقق من حروف فقط: ctype_digit() <br>";
$y="123456789";
$yy= ctype_digit("$y");
echo "قبل: $y <br>";
echo "بعد: $yy <br> <br>";

////////////
echo "دالة عكس النص: strrev() <br>";
$y="abdullah";
$yy= strrev("$y");
echo "قبل: $y <br>";
echo "بعد: $yy <br> <br>";
//////////////////////////
/////////////////////////

echo "دوال انشاء المصفوفااات <br> <br>";
////////////////
echo "<br>دالة انشاء مصفوفة array() <br>";
$arr=array("a","b","c");
print_r($arr);

?>
