<?php

/**
 * 网站前台控制模块
 **/
class znMain extends spController {
    // 首页
	function index(){
		$this->display('znMain.html');
        var_dump(spUrl('znMain', 'index'), spUrl('znMain', 'index', array('id'=>1)));
	}
    
    function __construct() {
        parent::__construct();
        //$this->sets = getGlobalSets();  // 添加模板变量
    }
    
}
