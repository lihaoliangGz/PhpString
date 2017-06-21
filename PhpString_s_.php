<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "setlocale — 设置地区信息:"."\n";
/* Set locale to Dutch */
setlocale(LC_ALL, 'nl_NL');
/* Output: vrijdag 22 december 1978 */
echo strftime("%A %e %B %Y", mktime(0, 0, 0, 12, 22, 1978))."\n\n";

echo "sha1_file — 计算文件的 sha1 散列值:"."\n";
echo sha1_file("data.txt")."\n";
echo sha1_file("data.txt",TRUE)."\n";
echo sha1_file("http://test.local.com/PhpString/data.txt")."\n\n";

echo "sha1 — 计算字符串的 sha1 散列值:"."\n";
echo sha1("abd")."\n";
echo sha1("abd",TRUE)."\n\n";

echo "similar_text — 计算两个字符串的相似度:"."\n";
echo similar_text("abc", "abd")."\n";
echo similar_text("abc", "abd")."\n\n";

echo "soundex — Calculate the soundex key of a string:"."\n";
echo soundex("Lee")."\n\n";

echo "sprintf — Return a formatted string:"."\n";
$format = 'There are %d monkeys in the %s';
echo sprintf("%'.9d\n",123),"\n\n";

echo "sscanf — 根据指定格式解析输入的字符:"."\n";
echo var_dump(sscanf("abcdefg", "%d\t%s %s")),"\n\n";

echo "str_getcsv — 解析 CSV 字符串为一个数组 :"."\n";
echo var_dump(str_getcsv("abd")),"\n\n";

echo "str_ireplace — str_replace() 的忽略大小写版本:"."\n";
echo str_ireplace("b", "a", "bbbaaacccddd")."\n\n";

echo "str_pad — 使用另一个字符串填充字符串为指定长度:"."\n";
echo var_dump(str_pad("abc", 16,123456))."\n\n";

echo "str_repeat — 重复一个字符串:"."\n";
echo str_repeat("abd", 3)."\n\n";

echo "str_replace — 子字符串替换:"."\n";
echo str_replace("aaa", "b", "aaaaaaaaa")."\n";
echo str_replace("aaa", "b", "aaa") . "\n\n";

echo "str_rot13 — 对字符串执行 ROT13 转换"."\n";
echo str_rot13("ASDGSDAG 5.6.28")."\n\n";

echo "str_shuffle — 随机打乱一个字符串:"."\n";
echo str_shuffle("abcdefg")."\n\n";

echo "str_split — 将字符串转换为数组:"."\n";
echo var_dump(str_split("abcdefghijk"))."\n";
echo var_dump(str_split("abcdefghijk",2))."\n\n";

echo "str_word_count — 返回字符串中单词的使用情况"."\n";
echo str_word_count("This is a apple")."\n";
echo var_dump(str_word_count("This is a apple",1))."\n";
echo var_dump(str_word_count("This is a apple",2))."\n\n";

echo "strcasecmp — 二进制安全比较字符串（不区分大小写）:"."\n";
echo strcasecmp("abc", "aBc")."\n";
echo strcasecmp("abc", "abcd")."\n";
echo strcasecmp("abcd", "abc")."\n\n";

echo "strchr — 别名 strstr():"."\n";
echo "\n";

echo "strcmp — 二进制安全字符串比较(区分大小写):"."\n";
echo strcmp("aBc", "abc")."\n";
echo strcmp("abc", "aBc")."\n";
echo strcmp("abc", "abc")."\n";
echo strcmp("abc", "abcd") . "\n";
echo strcmp("abcd", "abc") . "\n\n";

echo "strcoll — 基于区域设置的字符串比较:"."\n";
echo strcoll("aBc", "abc") . "\n";
echo strcoll("abc", "aBc") . "\n";
echo strcoll("abc", "abc") . "\n";
echo strcoll("abc", "abcd") . "\n";
echo strcoll("abcd", "abc") . "\n\n";

echo "strcspn — 获取不匹配遮罩的起始子字符串的长度:"."\n";//?
echo strcspn("abc", "apple")."\n";
echo strcspn("apple", "apple") ."\n";

echo "strip_tags — 从字符串中去除 HTML 和 PHP 标记:"."\n";
echo strip_tags("<br>This is a apple</br>")."\n";
echo strip_tags("<br>This is a apple</br>","<br>")."\n\n";

echo "stripcslashes — 反引用一个使用 addcslashes() 转义的字符串:"."\n";
echo stripcslashes("\f\o\o\[\]")."\n\n";


echo "stripos — 查找字符串首次出现的位置（不区分大小写）:"."\n";
echo stripos("abcdefg", "g")."\n";
echo var_dump(stripos("abcdefg", "j"));
echo stripos("abcbefg", "b",2)."\n";
echo stripos("abcbefg", "bef",2)."\n\n";

echo "stripslashes — 反引用一个引用字符串:"."\n";
$str="This is O\' lee";
echo stripslashes($str)."\n\n";

echo "stristr — strstr() 函数的忽略大小写版本:"."\n";
echo stristr("abcdefg", "b")."\n";
echo var_dump(stristr("abcdefg", "bdf"));
echo stristr("abcdefg", "cd")."\n";
echo stristr("abcdefg", "bcd",TRUE)."\n\n";

echo "strlen — 获取字符串长度:"."\n";
echo strlen("This is a apple")."\n";
echo strlen(" ")."\n";
echo strlen("")."\n\n";

echo "strnatcasecmp — 使用\"自然顺序\"算法比较字符串（不区分大小写）:"."\n";
echo strnatcasecmp("abc", "abc")."\n";
echo strnatcasecmp("aBc", "abc")."\n";
echo strnatcasecmp("abcd", "abc")."\n";
echo strnatcasecmp("abc", "abcd")."\n\n";

echo "strnatcmp — 使用自然排序算法比较字符串(区分大小写):"."\n";
echo strnatcmp("abc", "abc") . "\n";
echo strnatcmp("aBc", "abc") . "\n";
echo strnatcmp("abcd", "abc") . "\n";
echo strnatcmp("abc", "abcd") . "\n\n";

echo "strncasecmp — 二进制安全比较字符串开头的若干个字符（不区分大小写）:"."\n";
echo strncasecmp("abacde", "abc",3)."\n\n";

echo "strncmp — 二进制安全比较字符串开头的若干个字符(区分大小写):"."\n";
echo strncmp("abc", "abc", 3) . "\n\n";

echo "strpbrk — 在字符串中查找一组字符的任何一个字符:"."\n ";
echo strpbrk("string ", "s")."\n";
echo strpbrk("String ", "nt")."\n";
echo strpbrk("This is a Simple text.", "mi")."\n\n";

echo "strpos — 查找字符串首次出现的位置:"."\n";
echo strpos("This is a Simple text", "i",5)."\n";
echo strpos("This is a Simple text", "T")."\n";
echo var_dump(strpos("This is a Simple text", "T",1));
echo strpos("This is a Simple text", "S")."\n\n";

echo "strrchr — 查找指定字符在字符串中的最后一次出现:"."\n";
echo strrchr("This is a Simple text", "t")."\n";
echo strrchr("This is a Simple text", "e")."\n";
echo strrchr("This is a Simple text", "et")."\n\n";

echo "strrev — 反转字符串:"."\n";
echo strrev("string")."\n\n";

echo "strripos — 计算指定字符串在目标字符串中最后一次出现的位置（不区分大小写）:"."\n";
echo strripos("This is a Simple text", "s")."\n";
echo strripos("This is a Simple text", "si")."\n";
echo strripos("This is a Simple text", "si",1)."\n";//???
echo var_dump(strripos("This is a Simple text", "sM"))."\n\n";

echo "strrpos — 计算指定字符串在目标字符串中最后一次出现的位置:"."\n";
echo strrpos("This is a Simple text", "s")."\n";
echo strrpos("This is a Simple text", "S")."\n";
echo strrpos("This is a Simple text", "S",5)."\n\n";

echo "strspn — 计算字符串中全部字符都存在于指定字符集合中的第一段子串的长度。 :"."\n";//????
echo strspn("42 is the answer to the 128th question.", "1234567890")."\n";
echo strspn("is the answer to the 128th question.", "1234567890")."\n\n";

echo "strstr — 查找字符串的首次出现:"."\n";
echo strstr("This is a Simple text.", "im")."\n";
echo var_dump(strstr("This is a Simple text.", "it"));
echo strstr("This is a Simple text.", "i",TRUE)."\n\n";

echo "strtok — 标记分割字符串:"."\n";//????
echo strtok("This \is \a Simple text", "\\")."\n\n";
//echo strtok(" ")."\n";

echo "strtolower — 将字符串转化为小写:"."\n";
echo strtolower("This Is a APPLE")."\n\n";

echo "strtoupper — 将字符串转化为大写:"."\n";
echo strtoupper("This is a apple")."\n\n";

echo "strtr — 转换指定字符:"."\n";
$str="ababcdcd";
echo strtr($str, "ab", "01")."\n";
echo strtr($str, "ab", "0101")."\n";
echo strtr($str, "abc", "010")."\n";
echo "$str"."\n\n";

echo "substr_compare — 二进制安全比较字符串（从偏移位置比较指定长度）:"."\n";
echo substr_compare("abcde", "bc", 1, 2)."\n\n";

echo "substr_count — 计算字串出现的次数:"."\n";
echo substr_count("This is a test", "is")."\n";
echo substr_count("This is a test", "is",3)."\n";
echo substr_count("This isa a test", "isa",3,4)."\n";
echo substr_count("isis", "is")."\n";

echo "substr_replace — 替换字符串的子串:"."\n";
$str="This is a Apple";
echo substr_replace($str, "0", 2,4)."\n";
echo "$str"."\n\n";;

echo "substr — 返回字符串的子串:"."\n";
$str = "This is a Apple";
echo substr($str, 1,3)."\n";
echo substr($str, 3,8)."\n";
echo "$str"."\n\n";

echo substr("abcdef", 0, -1)."\n";  // 返回 "abcde"//????????
echo substr("abcdef", 2, -1)."\n";  // 返回 "cde"
echo var_dump(substr("abcdef", 4, -4));  // 返回 "",false
echo substr("abcdef", -3, -1)."\n\n"; // 返回 "de"

echo "trim — 去除字符串首尾处的空白字符（或者其他字符）:"."\n";
$str=" abdca  ";
echo var_dump($str);
echo var_dump(trim($str))."\n\n";

echo "ucfirst — 将字符串的首字母转换为大写:"."\n";
echo ucfirst("this is a apple")."\n\n";

echo "ucwords — 将字符串中每个单词的首字母转换为大写:"."\n";
echo ucwords("hello world!!")."\n";
echo ucwords("hello|world!!")."\n";
echo ucwords("hello|world!!","|")."\n";
echo ucwords("hello\world!!", "\\") . "\n\n";

echo "vfprintf — 将格式化字符串写入流:"."\n";
$f= fopen("data.txt", "w");
echo var_dump($f);
if(!$f){
    return;
}
echo  vfprintf($f, "%04d-%02d-%02d", array(2017,5,29)),"\n\n";

echo "vprintf — 输出格式化字符串:"."\n";
vprintf("%04d-%02d-%02d", explode('-', '1988-8-1')); // 1988-08-01
echo "\n\n";

echo "vsprintf — 返回格式化字符串:"."\n";
echo vsprintf("%04d-%02d-%02d", explode('-', '1988-8-1')),"\n\n"; // 1988-08-01

echo "wordwrap — 打断字符串为指定数量的字串:"."\n";
$str="The quick brown fox jumped over the lazy dog.";
echo wordwrap($str,20,"==")."\n";
echo wordwrap($str,5,"==")."\n";
echo wordwrap($str,5,"==",TRUE)."\n\n";



?>
