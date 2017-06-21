<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "get_html_translation_table — 返回使用 htmlspecialchars() 和 htmlentities() 后的转换表:","\n";
//echo var_dump(get_html_translation_table(HTML_ENTITIES, ENT_QUOTES | ENT_HTML5))."\n\n";

echo "hebrev — 将逻辑顺序希伯来文（logical-Hebrew）转换为视觉顺序希伯来文（visual-Hebrew）:"."\n";
echo hebrev("UTF-8","abc"),"\n\n";

echo "将逻辑顺序希伯来文（logical-Hebrew）转换为视觉顺序希伯来文（visual-Hebrew），并且转换换行符:"."\n";


echo "hex2bin — 转换十六进制字符串为二进制字符串:"."\n";
$b=hex2bin("6578616d706c65206865782064617461");
echo $b."\n";
echo var_dump($b)."\n\n";
echo bin2hex("Hello World")."\n\n";

echo "html_entity_decode — Convert all HTML entities to their applicable characters:"."\n";
$orig = "I'll \"walk\" the <b>dog</b> now";
$a= htmlentities($orig);
$b= html_entity_decode($a);
echo $a."\n";
echo "$b"."\n\n";

echo "htmlentities — 将字符转换为 HTML 转义字符:"."\n";
//example1:
$str = "A 'quote' is <b>bold</b>";
echo htmlentities($str)."\n";
echo htmlentities($str,ENT_QUOTES)."\n";

//example2:
$str="\x8F!!!";
echo htmlentities($str,ENT_QUOTES,"UTF-8")."\n";
echo htmlentities($str,ENT_QUOTES|ENT_IGNORE,"UTF-8")."\n";

echo "htmlspecialchars_decode — 将特殊的 HTML 实体转换回普通字符 :"."\n";
$str="<p>this -&gt; &quot;</p>\n";
echo htmlspecialchars_decode($str,ENT_NOQUOTES)."\n\n";

echo "htmlspecialchars — 将特殊字符转换为 HTML 实体:"."\n";
$str="<a href='test'>Test</a>";
echo htmlspecialchars($str,ENT_QUOTES)."\n\n";

echo "implode — 将一个一维数组的值转化为字符串:"."\n";
$array=array("apple","hodle","bmw");
echo implode("  ", $array)."\n\n";

echo "join — 别名 implode():","\n";
$array=array("apple","hodle","bmw");
echo join("  ", $array)."\n\n";

echo "lcfirst — 使一个字符串的第一个字符小写:"."\n";
$str="Hello World!!";
$str2="HELLO WORLD!!";
echo strtoupper($str)."\n";//转大写
echo strtolower($str2)."\n";//转小写
echo lcfirst($str)."\n";
echo lcfirst($str2)."\n\n";

echo "levenshtein — 计算两个字符串之间的编辑距离:"."\n";
echo levenshtein('apple', "aplajsdfg")."\n\n";

echo "localeconv — Get numeric formatting information:"."\n";
if (false !== setlocale(LC_ALL, 'nl_NL.UTF-8@euro')) {
    $locale_info = localeconv();
    print_r($locale_info);
}
echo "\n\n";

echo "ltrim — 删除字符串开头的空白字符（或其他字符）:"."\n";
echo ltrim("abasdlgjl","abs")."\n\n";

echo "md5_file — 计算指定文件的 MD5 散列值:"."\n";
$file="http://test.local.com/PhpString/data.txt";
//$file="data.txt";
echo md5_file($file,TRUE)."\n";
echo md5_file($file)."\n\n";

echo "md5 — 计算字符串的 MD5 散列值:"."\n";
echo md5("abd",TRUE)."\n";
echo md5("abd")."\n\n";

echo "metaphone — Calculate the metaphone key of a string:"."\n";
echo metaphone("programming")."\n";
echo metaphone("programming",6)."\n";
echo metaphone("programmer")."\n";
echo metaphone("programmer",5)."\n\n";

echo "money_format — 将数字格式化成货币字符串:"."\n";
//echo money_format("%i", 123456)."\n\n";

echo "nl_langinfo — Query language and locale information:"."\n";
//echo nl_langinfo(1)."\n\n";

echo "nl2br — 在字符串所有新行之前插入 HTML 换行标记:"."\n";
echo nl2br("this si \n bar")."\n";
echo nl2br("this si \n bar",FALSE)."\n\n";

echo "number_format — 以千位分隔符方式格式化一个数字:"."\n";
echo number_format(132456789.12,5,".",",")."\n\n";

echo "ord — 返回字符的 ASCII 码值:"."\n";
echo ord("a")."\n\n";

echo "parse_str — 将字符串解析成多个变量:"."\n";
$str = "first=value&arr[]=foo+bar&arr[]=baz";
parse_str($str);
echo $first."\n";
echo $arr[0]."\n";
echo $arr[1]."\n\n";

parse_str($str, $output);
echo $output['first']."\n";  // value
echo $output['arr'][0],"\n"; // foo bar
echo $output['arr'][1]."\n\n"; // baz

echo "print — 输出字符串:"."\n";//和 echo 的唯一区别： print 仅支持一个参数。 
print("abd"."\n");
print "1111"."\n\n";

echo "printf — 输出格式化字符串:"."\n";
$printf = printf("abdcd");
$printf = printf("abdcd",5,"tree");
echo "\n";
echo "$printf"."\n\n";

echo "quoted_printable_decode — 将 quoted-printable 字符串转换为 8-bit 字符串:"."\n";
echo quoted_printable_decode("asdg")."\n\n";

echo "quoted_printable_encode — 将 8-bit 字符串转换成 quoted-printable 字符串:"."\n";
echo quoted_printable_encode("abd")."\n\n";

echo "quotemeta — 转义元字符集:"."\n";
echo quotemeta(". \ + * ? [ ^ ] ( $ )")."\n\n";

echo "rtrim — 删除字符串末端的空白字符（或者其他字符）:"."\n";
echo rtrim("abd","d")."\n\n";

?>

