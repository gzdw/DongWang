<?php

/**
 * 后台登陆控制
 **/

class znUser extends spController {
    
    // 首页
    function index() {
        if (spClass('spAcl')->get() == SPACL_ADMIN) {   // 如果已登录
            $this->jump(spUrl('znManage'));
        } else {
            $this->display('znUser.html');    // 显示模板
        }
    }
    
    // 提交后的处理行为
    function submit() {
        
        $args = new spArgs();
        $user = mysql_escape_string($args->get('user', '', 'post'));
        $pass = mysql_escape_string($args->get('password', '', 'post'));
        $verify = mysql_escape_string($args->get('verify', '', 'post'));
        
        // 校验输入
        if (empty($verify) || empty($user) || empty($pass)) {
            $this->jump(spUrl('znUser'));
        } else {
            // 校验验证码
            if (strcasecmp($_SESSION['verify_code'], $verify)) {
                $_SESSION['error'] = '<p style="color: red;">验证码错误</p>';
                $this->jump(spUrl('znUser'));
                exit;
            }
            
            $db = spClass('m_user');
            $condition = array('user' => $user, 'password' => md5($pass));
                
            // 校验账号和密码
            if ($result = $db->find($condition)) {
                spClass('spAcl')->set(SPACL_ADMIN);
                $this->jump(spUrl('znManage','index'));
            } else {
                $this->jump(spUrl('znUser'));
            }
        }
    }
    
    // 生成验证码
    function verify() {
        include(APP_PATH.'/include/Verify.php');
        header('Content-type: image/png');
        $image = spClass('Verify');
        $_SESSION['verify_code'] = $image->show();
    }
}