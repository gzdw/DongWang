<?php
define("APP_PATH", dirname(__FILE__));
define("SP_PATH", dirname(__FILE__).'/SpeedPHP');

require(APP_PATH.'/include/config.php');
require(APP_PATH.'/include/Acl.php');


$spConfig = array(
    'default_controller' => 'znMain',  // 默认首页的控制器
    'default_action' => 'index',    // 默认的动作名称
    'db' => array(
        'login' => $db_user,
        'password' => $db_password,
        'database' => $db_name,
        'prefix' => $db_prefix,
    ),
    'view' => array(
        'config' => array(
            'template_dir' => APP_PATH.'/template', // 模板目录
    		'compile_dir' => APP_PATH.'/tmp', // 编译目录
    		'cache_dir' => APP_PATH.'/tmp', // 缓存目录
    		'left_delimiter' => '{',  // smarty左限定符
    		'right_delimiter' => '}', // smarty右限定符
    		'auto_literal' => TRUE, // Smarty3新特性
        )
    ),
    'lanch' => array(
        'router_prefilter' => array( 
            array('spUrlRewrite', 'setReWrite'),  // 对路由进行挂靠，处理转向地址
            array('spAcl','maxcheck'), // 开启强制的权限控制
         ),
     	'function_url' => array(
			array("spUrlRewrite", "getReWrite"),  // 对spUrl进行挂靠，让spUrl可以进行Url_ReWrite地址的生成
	    ),
    ),
    'url' => array(
		'url_path_info' => TRUE, // 是否使用path_info方式的URL
		'url_path_base' => '/speedphp/index.php', // URL的根目录访问地址
	),
    'ext' => array( // 扩展设置
    	'spAcl' => array( // acl扩展设置
    		'prompt' => array("m_user", "acljump"),
    	),
        'spUrlRewrite' => array(
			'hide_default' => false, // 隐藏默认的main/index名称，但这前提是需要隐藏的默认动作是无GET参数的
 			'args_path_info' => false, // 地址参数是否使用path_info的方式，默认否
			'suffix' => '.html', // 生成地址的结尾符
		),
    ),
    'html' => array(  // HTML生成配置
		'enabled' => TRUE, // 开启HTML生成功能
        'safe_check_file_exists' => TRUE, // 获取URL时，检查物理HTML文件是否存在，如文件不存在，则返回安全的动态地址
	),
);


require(SP_PATH."/SpeedPHP.php");
import(APP_PATH.'/include/functions.php');

spRun();

/*
$sql_path = 'speedphp.sql';

if (file_exists($sql_path)) { 
    $sql = file_get_contents($sql_path);
}

*/
//$sql = trim($sql);


/*
$query = "";
while(!feof($fp))
{
 $line = trim(fgets($fp,1024));
if(ereg(";",$line)){
$query .= $line;
// $dsql->ExecuteNoneQuery($query);

mysql_query($query);
$str = mysql_error();
echo  $query."<br><br><br> [ $sql ] <br><br><br><br><br>";
$query='';
}else if(!ereg("^(//|--)",$line)){
$query .= $line;
 }
}

*/
