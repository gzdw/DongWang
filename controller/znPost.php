<?php

/**
 * 文章管理模块
 **/
class znPost extends spController {
    
    // 首页
    function index() {
        $this->group = $this->group();
        $this->display('znPost.html');
    }
    
    // 分组罗列文章
    function group() {
        $db_group = spClass('m_post_group');
        $type = $db_group->findAll();
        $db_post = spClass('m_post');
        $arr = array();
        for($i = 0; $i < count($type); $i++) {
            $arr[$type[$i][$db_group->fields['type']]] = $db_post->findAll(array($db_group->pk => $type[$i][$db_group->pk]));
        }
        return $arr;
    }
    
    
    // 增加文章界面
    function add() {
        $this->gid = spClass('m_post_group')->findAll();
        $this->display('znPost_add.html');
    }
    
    // 编辑文章
    function edit() {
        $id = $this->spArgs('post_id');
        if ($id && $id != -1) {
            $this->result = spClass('m_post')->find(array('post_id' => $id));
            $this->display('znPost_edit.html');
        }
    }
    
    // 保存文章内容
    function save() {
        $args = $this->spArgs();
        $db_post = spClass('m_post');
        $fields = $db_post->fields;
        $arr = array( 
            $fields['content'] => $args[$fields['content']],
            $fields['date'] => $args[$fields['date']],
            $fields['status'] => $args[$fields['date']] || date('Y-m-d'),
            $fields['author'] => $args[$fields['author']],
            $fields['excerpt'] => $args[$fields['excerpt']],
            $fields['title'] => $args[$fields['title']],
        );
        $db_post->update(array($db_post->pk => $args[$db_post->pk]), $arr) && $this->jump(spUrl('znPost'));
    }
    
    // 添加文章
    function addPost() {
        $args = $this->spArgs();
        $db_post = spClass('m_post');
        $fields = $db_post->fields;
        // 检验日期
        if (!(dateCheck($args[$fields['date']], '-') 
              && ereg("^[0-9]{4}-[0-9]{2}-[0-9]{2}$", $args[$fields['date']])))  {
            $args[$fields['date']] = date('Y-m-d');       
        }
 
        $arr = array( 
            $fields['content'] => $args[$fields['content']],
            $fields['date'] => $args[$fields['date']],
            $fields['date'] => $args[$fields['date']],
            $fields['author'] => $args[$fields['author']] || '',
            $fields['excerpt'] => $args[$fields['excerpt']],
            $fields['title'] => $args[$fields['title']],
            $fields['gid'] => $args[$fields['gid']],
        );
        $db_post->create($arr) && $this->jump(spUrl('znPost'));
    }
    
    
    // 删除文章
    function delete() {
        $ids = $this->spArgs('post_id');
        $arr = array();
        if (!is_array($arr)) {
            spClass('m_post')->delete(array('post_id' => $ids)) && $this->jump(spUrl('znPost'));
        } else {
            for($i = 0; $i < count($ids); $i++) {
                $arr[]['post_id'] = $ids[$i]; 
            }
        }
    }
    
    function __construct() {
        parent::__construct();
        $this->sets = getGlobalSets();  // 添加模板变量
    }
    
}
