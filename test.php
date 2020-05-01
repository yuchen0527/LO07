<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>第一个php</title>
    <style>
    body{
        background:yellow;
    }
    </style>
</head>
<body>
    <script>
        document.write(new Date());
    </script>
    <?php 
    for($i=0;$i<10;$i++)
    echo "$i #####<br>";
    ?>
</body>
</html>

 
 <?php
 $url="hello";
 $url=$url."yes";
 echo $url;
 ?>

/**
isset()判断变量存不存在  unset()删除一个变量
变量前要使用$,PHP语言对于变量区分大小写，eg：$a $A不一样
但是其他的大小写PHP不进行区分


注意： $a和$$a

赋值：$a=$b和$a=&$b不一样，第一个是只赋值，第二个是赋地址


PHP共有八种类型的变量
四种标量（整型 int，integer 布尔型 bool，boolean 浮点型 float，double，real 字符串 string）

两种复合类型（数组 array 对象 object）
两种特殊类型（资源 resource 空 null）

echo '<pre>'
    输出代码原型输出
echo '</pre>'
Var_dump(); //既可以查看变量或者值的类型，又可以看到数据


声明
1.整型
$int=045//以0开头的是声明的八进制
$int=0xff//0x开头的是十六进制
$float=3.14e5  3.14e-5//科学计数法，e可以大写也可以小写

//以下都是假的情况
$bool=false
$bool=0; 0.000;'';"";null;"0";array();

3.字符串
单引号和双引号都可以声明字符串
声明的字符串没有长度限制
在双引号的字符串中，既可以解析变量又可以使用转义字符
在单引号的字符串中，不可以解析变量也不可以使用转义字符（但可以转义单引号，和转义字符本身\）
在双引号中不可以使用双引号，单引号中也不可以使用单引号

定界符号声明字符串，大量字符串

$str=<<<hello
svtbdfbghnjmk,f04938090@$%^^&dvwnejkv

hello;

 */