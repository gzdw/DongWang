<?php 

/**
 * 基于组的用户权限判断机制
 * 分级管理： 0 = 游客， 10 = 普通用户， 50 = 高级管理员， 100 = 超级管理员
 */
class spPermission {
    
    /**
     * 默认权限检查的处理程序设置，可以是函数名或是数组（array(类名,方法)的形式）
     */
    public $checker = array('m_Permission','check');
    
    /**
     * 默认提示无权限提示，可以是函数名或是数组（array(类名,方法)的形式）
     */
    public $prompt = array('spPermission','def_prompt');
    
    public function getRank() {
        return $_SESSION[$GLOBALS['G_SP']['sp_app_id']."_SpPermission"];
    }
    
    /**
     * 返回用户标识
     */
    public function getName() {
        return $_SESSION[$GLOBALS['G_SP']['sp_app_id']."_SpPermission"];
    }
    
    
    /**
     * 权限检查
     */
    public function check() {
        GLOBAL $__controller, $__action;
        $checker = $this->checker; $name = $this->get();

        if( is_array($checker) ){
            return spClass($checker[0])->{$checker[1]}($name, $__controller, $__action);
        }else{
            return call_user_func_array($checker, array($name, $__controller, $__action));
        }
    }
    
    /**
     * 设置等级
     */
    public function setRank($acl_rank) {
        $_SESSION[$GLOBALS['G_SP']['sp_app_id']."_SpPermission"] = $acl_rank;
    }
    
    /**
     * 设置用户标识
     */
    public function setName($acl_name) {
        $_SESSION[$GLOBALS['G_SP']['sp_app_id']."_SpPermission"] = $acl_name;
    }
    
    /**
     * 无权限提示跳转
     */
    public function prompt()
    {
        $prompt = $this->prompt;
        if( is_array($prompt) ){
            return spClass($prompt[0])->{$prompt[1]}();
        }else{
            return call_user_func_array($prompt,array());
        }
    }
    
    /**
     * 默认的无权限提示跳转
     */
    public function def_prompt()
    {
        $url = spUrl(); // 跳转到首页，在强制权限的情况下，请将该页面设置成可以进入。
        echo "<html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"><script>function sptips(){alert(\"Access Failed!\");location.href=\"{$url}\";}</script></head><body onload=\"sptips()\"></body></html>";
        exit;
    }
}

/**
 * 
 */
class m_Permission extends spModel {
	
	var $id = 'aclid';
    var $table = 'sp_acl';
    
    /**
     * 检查对应的权限
     *
     * 返回1是通过检查，0是不能通过检查（控制器及动作存在但用户标识没有记录）
     * 返回-1是无该权限控制（即该控制器及动作不存在于权限表中）
     * 
     * @param acl_name    用户标识：可以是组名或是用户名
     * @param controller    控制器名称
     * @param action    动作名称
     */
    public function check($acl_name = SPANONYMOUS, $controller, $action)
    {
        $rows = array('controller' => $controller, 'action' => $action );
        if( $acl = $this->findAll($rows) ){
            foreach($acl as $v){
                if($v["acl_name"] == SPANONYMOUS || $v["acl_name"] == $acl_name)return 1;
            }
            return 0;
        }else{
            return -1;
        }
    }
}

