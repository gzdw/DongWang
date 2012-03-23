<?php

// 数据库
$db_user = 'root';
$db_password = '123456';
$db_name = 'speedphp';
$db_prefix = 'sp_';


// spAcl定义权限常量
$SPACL_CONSTS = array(
    'SPACL_ADMIN' => 'SPADMIN',     // 超级管理员
    'SPACL_ANONYMOUS' => 'SPANONYMOUS',  // 游客
);
foreach ($SPACL_CONSTS as $k => $v) {
    define($k, $v);
}
unset($SPACL_CONSTS);
