<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//addcslashes
echo "<br>";
echo "<br>";
echo "<br>";
echo "addcslashes:";
echo "<br>";

echo addcslashes('foo[]', 'A..z');

echo "<br>";
echo addcslashes("zoo['.']", 'z..A');

//addslashes
echo "<br>";
echo "<br>";
echo "<br>";
echo "addslashes:";
echo "<br>";
$str="Is your name O' reilly?";
echo addslashes($str);
echo "<br>";

//bin2hex
echo "<br>";
echo "<br>";
echo "<br>";
echo "bin2hex:";
echo "<br>";


//chr,返回指定的字符
echo "<br>";
echo "<br>";
echo "<br>";
echo "chr:";
echo "<br>";

$str="this is a str";
$str.=chr(65);
echo $str;
echo "<br>";
$str= sprintf("this is a str: %c",90);//sprintf() - Return a formatted string 如何使用格式字符串 %c。
echo $str;

//chunk_split — 将字符串分割成小块
echo "<br>";
echo "<br>";
echo "<br>";
echo "chunk_split:";
echo "<br>";

$new_string= chunk_split(base64_decode("abcde"));
echo $new_string;
echo "<br>"."\n";
$str="abcdefg";
echo chunk_split($str,2)."\n";
echo var_dump($new_string);

//convert_cyr_string — 将字符由一种 Cyrillic 字符转换成另一种
echo "convert_cyr_string:"."\n";
$str="abcdefg";
echo convert_cyr_string($str, "k", "w")."\n";
function convert_cyr_array($array,$from,$to){
     foreach($array as $key=>$value){
         if(is_array($value)) {
             $result[$key] = convert_cyr_array($value,$from,$to);
             continue;
         }
         $result[$key] = convert_cyr_string($value,$from,$to);
     }
     return $result;
 }
$array[0] = "сВМПЛП";
$array[1] = "зТХЫБ";
$array[2] = array("пЗХТЕГ","рПНЙДПТ");
$array[3] = array(
                      array("бРЕМШУЙО","нБОДБТЙО"),
                      array("бВТЙЛПУ","рЕТУЙЛ")
                 );

$result = convert_cyr_array($array,"k","w");
echo "\n". var_dump($result)."\n";

//convert_uudecode — 解码一个 uuencode 编码的字符串
echo "convert_uudecode:"."\n";
echo convert_uudecode("+22!L;W9E(%!(4\"$`\n`")."\n";

//convert_uuencode — 使用 uuencode 编码一个字符串
echo "convert_uuencode:"."\n";
echo convert_uuencode("Hello World!!");

//count_chars — 返回字符串所用字符的信息
echo "count_chars — 返回字符串所用字符的信息:"."\n";
//echo var_dump(count_chars("aabcdefg",0))."\n";//以所有的每个字节值作为键名，出现次数作为值的数组。 
echo var_dump(count_chars("aabcdefg",1))."\n";//与 0 相同，但只列出出现次数大于零的字节值。 
//echo var_dump(count_chars("aabcdefg",2))."\n";//与 0 相同，但只列出出现次数等于零的字节值。 
//echo var_dump(count_chars("aabcdefg",3))."\n";//返回由所有使用了的字节值组成的字符串。 
//echo var_dump(count_chars("aabcdefg",4))."\n";//返回由所有未使用的字节值组成的字符串。 

//crc32 — 计算一个字符串的 crc32 多项式
echo "crc32 — 计算一个字符串的 crc32 多项式:"."\n";
echo crc32("abcdefg")."\n";
echo crc32("abcdefgh")."\n";
$checksum= crc32("abcdefg");
printf("%u", $checksum);
echo "\n";
echo "\n";

echo "crypt — 单向字符串散列:"."\n";
echo crypt("abcdefg",'rl')."\n";//'Standard DES
echo crypt("abcdefg",'_J9..rasm')."\n";//Extended EES
echo crypt("abcdefg",'$1$rasmusle$')."\n";//MD5
echo crypt("abcdefg",'$2a$07$usesomesillystringforsalt$')."\n";//Blowfish
echo crypt("abcdefg",'$5$rounds=5000$usesomesillystringforsalt$')."\n";//SHA-256
echo crypt("abcdefg",'$6$rounds=5000$usesomesillystringforsalt$')."\n\n";//SHA-512

echo 'echo — 输出一个或多个字符串:'."\n";
echo "ssdg"."\n";
echo "asdjg","dasjg","\n";
print 'asdg'."asojg"."\n\n";

echo "explode — 使用一个字符串分割另一个字符串:","\n";
$pizza="piece1 piece2 piece3 piece4 piece5 piece6";
$pizza_array1= explode(" ", $pizza,-1);
$pizza_array2= explode("p", $pizza);
echo var_dump($pizza_array1);
echo var_dump($pizza_array2);

echo "fprintf — 将格式化后的字符串写入到流:","\n";
if (!($fp = fopen('test.local.com/PhpString/date.txt', 'w'))) {
    return;
}

fprintf($fp, "%04d-%02d-%02d", $year, $month, $day);
?>

