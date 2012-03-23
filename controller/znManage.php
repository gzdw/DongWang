<?php 
class znManage extends spController {
    
    // 首页
    function index() {
        
        $this->now = date('Y-m-d');
        $posts = spClass('m_post');
        $result = $posts->findAll();
        $this->result = $result;
        $this->display('znManage.html');
    }
    
    function __construct() {
        parent::__construct();
        aclMaxCheck() || exit('<h1>你没有权限进入...跳转回首页</h1>');  // 权限检查
        $this->sets = getGlobalSets();  // 添加模板变量
    }
    
    /**
     * ajax 请求 
     * var request = new XMLHttpRequest ();
     * request.open('post', 'http://localhost/speedphp');
     * request.setRequestHeader('request_type', 'ajax');
     * request.send(null);
     **/
    /*
    function ajax() {
        // 区分 ajax请求
        if (isset($_SERVER['HTTP_REQUEST_TYPE']) && $_SERVER['HTTP_REQUEST_TYPE'] == 'ajax') {
                
        } else {
            
        }
    */
}