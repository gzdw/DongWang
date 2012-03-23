<?php

/**
 * 网站全局设计模块
 **/
class znSet extends spController {
    
    // 首页
    function index() {
        $sets = spClass('m_set')->findAll();
        $this->sets = $sets;
        $this->display('znSet.html');
    }
    
    // 保存
    function save() {
        $args = $this->spArgs();
        if ($args) {
            $db = spClass('m_set');
            $fields = $db->fields;
            // 迭达更新所有字段
            foreach ($args as $key => $val) {
                if ($key != "a" && $key != 'c') {
                    $db->updateField(array($fields['vname'] => $key), $fields['val'], $val) || exit;
                }
            }
            $this->jump(spUrl('znSet'));
        }
    }
    
    function __construct() {
        parent::__construct();
        aclMaxCheck() || exit('<h1>你没有权限进入...跳转回首页</h1>');  // 权限检查
    }
}