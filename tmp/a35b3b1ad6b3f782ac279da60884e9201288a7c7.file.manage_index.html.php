<?php /* Smarty version Smarty-3.0.8, created on 2011-12-12 11:01:42
         compiled from "E:\wamp\www\speedphp/template/manage_index.html" */ ?>
<?php /*%%SmartyHeaderCode:293684ee5df164dfe44-34561846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a35b3b1ad6b3f782ac279da60884e9201288a7c7' => 
    array (
      0 => 'E:\\wamp\\www\\speedphp/template/manage_index.html',
      1 => 1323666509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '293684ee5df164dfe44-34561846',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html>
    <head>
        <title>Manage</title>
        <meta charset="utf-8" />
        <script src="template/js/UEditor/editor_config.js"></script>
        <script src="template/js/UEditor/editor_all_min.js"></script>
        <link rel="stylesheet" href="template/js/UEditor/themes/default/ueditor.css"/>
    </head>
    
    <body>
        <div id="test" style="margin: 0 auto; width: 960px;">
            <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'manage','a'=>'addPost'),$_smarty_tpl);?>
" method="post">
                <div>
                    <label for="post_title">标题</label>
                    <input type="text" name="post_title" id="post_title" />
                </div>
                <div>
                    <label for="post_author">作者</label>
                    <input type="text" name="post_author" id="post_author" />
                </div>
                <div>
                    <label for="post_date">日期</label>
                    <input type="date" name="post_date" id="post_date" value="<?php echo $_smarty_tpl->getVariable('now')->value;?>
" />
                </div>
                <div>
                    <label for="post_content" style="display: block;">正文内容(含HTML)</label>
                    <noscript>
                        <textarea name="post_content" id="ckeditor" style="width: 400px; height: 300px;"></textarea>
                    </noscript>
                    <div id="editor"></div>
                    <input type="submit" value="提交" />
                </div>
            </form>
            <script>
                var editor = new baidu.editor.ui.Editor({
                    initialContent: '', // 初始化的值
                    textarea:'post_content'  // 提交后台的数据 name
                });
                editor.render('editor');
            </script>
        </div>
        <div>
            <ul>
                <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('result')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
?>
                    <li style="float: left; width: 100%;">
                        <form method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'manage','a'=>'modifyPost'),$_smarty_tpl);?>
">
                            <input type="text" name="m_title" id="m_title" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_title'];?>
" style="float: left;;" />
                            <textarea style="float: left; width: 800px; height: auto;" name="m_content" id="m_content"><?php echo $_smarty_tpl->tpl_vars['post']->value['post_content'];?>
</textarea>
                            <input style="float: left;" type="submit" value="修改" />
                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" name="m_id" id="m_id" />
                        </form>                                        
                    </li>
                <?php }} ?>
            </ul>
        </div>
    </body>
</html>