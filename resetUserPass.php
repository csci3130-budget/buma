<?php
require_once('config.inc.php');
/**
 * 用base64_decode解开$_GET['p']的值
*/
 $array = explode('.',base64_decode($_GET['p']));

/**
 * 这时，我们会得到一个数组，$array，里面分别存放了用户名和我们需要一段字符串
 * $array[0] 为用户名
 * $array[1] 为我们生成的字符串
*/
//好了，我们开始进行匹配工作吧。

$sql = "select passwords from user where username = '".trim($_array['0'])."'";

$passwords = $db->GetOne($sql);

/**
 * 产生配置码 
*/
 $checkCode = md5($array['0'].'+'.$passwords);
 
 /**
 * 进行配置验证： => 
*/

if( $array['1'] === $checkCode ){
       //执行重置程序，一般给出三个输入框。
       Echo "<input name=username value='".$array['0']."' onlyread>";
       Echo "<input name=userpasswd type=password>";
       Echo "<input name=reinput type=password>";
}else{
       //给出定义错误页面
}

//OK了，接下来的工作是我们进行数据库更新了？这里就不再说了。。。
?>  