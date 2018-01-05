<?php
$str='<?php'.PHP_EOL;
$str.='define(\'ROOT_PART\', Root_part());'.PHP_EOL;
$str.='define(\'APIKEY\', \'AIzaSyA2bW64hNAVxVFBDBuVtddHsYRoBPHzD8E\');'.PHP_EOL;
$str.='define(\'GJ_CODE\', \'VN\');'.PHP_EOL;
$str.='define(\'SITE_NAME\', \'WOrd视频\');'.PHP_EOL;
$str.='define(\'TITLENAME\', \'Youtube内容聚合\');'.PHP_EOL;
$str.='define(\'EN2DEKEY\', \'FpsxS09KxD9&d;!l;~M>2?N7>a$;^Pz\');'.PHP_EOL;
$str.='define(\'EMAIL\', \'gmail@gmail.com\');'.PHP_EOL;
$str.='?>';
$fp=fopen('cccc.php',"w"); //写方式打开文件 
$file=fwrite($fp,$str); //存入内容 
if(!$file===false){
    echo 'cg';
}
fclose($fp); //关闭文件 
?>