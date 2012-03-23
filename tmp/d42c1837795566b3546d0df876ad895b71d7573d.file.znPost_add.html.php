<?php /* Smarty version Smarty-3.0.8, created on 2012-02-25 15:21:16
         compiled from "E:\wamp\www\speedphp/template\znPost_add.html" */ ?>
<?php /*%%SmartyHeaderCode:301424f48fc6c9815d4-59909609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd42c1837795566b3546d0df876ad895b71d7573d' => 
    array (
      0 => 'E:\\wamp\\www\\speedphp/template\\znPost_add.html',
      1 => 1330183268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301424f48fc6c9815d4-59909609',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html>
    <head>
        <title>Post</title>
        <meta charset="utf-8" />
        <script src="/speedphp/template/js/ueditor/editor_config.js"></script>
        <script src="/speedphp/template/js/ueditor/editor_all_min.js"></script>
        <link rel="stylesheet" href="/speedphp/template/js/ueditor/themes/default/ueditor.css"/>
        <script src="/speedphp/template/js/jquery-1.7.1.min.js"></script>
    </head>
    
    <body>
        <div id="test" style="margin: 0 auto; width: 960px;">
            <form id="form_posts" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'znPost','a'=>'addPost'),$_smarty_tpl);?>
" method="post">
                <div>
                    <label for="post_title">标题</label>
                    <input type="text" name="post_title" id="post_title" value="" />
                </div>
                <div>
                    <label for="post_author">作者</label>
                    <input type="text" name="post_author" id="post_author" value="" />
                </div>
                <div>
                    <label for="post_date">日期</label>
                    <input type="date" name="post_date" id="post_date" value="" />
                </div>
                <div>
                
                    <select id="gid_option">
                        <?php  $_smarty_tpl->tpl_vars['arr_item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('gid')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['arr_item']->key => $_smarty_tpl->tpl_vars['arr_item']->value){
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['arr_item']->value['group_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['arr_item']->value['typename'];?>
</option>
                        <?php }} ?>
                    </select>
                    <input id="group_id" name="group_id" type="hidden" value="1" />
                    <script>
                        (function ($) {
                            $('#gid_option').change(function (){
                                $('#group_id').val($(this).val());
                            });
                        })(jQuery)
                    </script>
                </div>
                <div>
                    <label for="post_excerpt">摘录</label>
                    <textarea name="post_excerpt" id="post_excerpt" style="width: 400px; height: 20px;"></textarea>
                </div>
                <div>
                    <label for="post_content" style="display: block;">正文内容(含HTML)</label>
                    <script type="text/plain" id="editor"></script>
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
            <script>
                function addEvent (elem, type, fn) {
                    if (elem.addEventListener) {
                        elem.addEventListener(type, fn, false);
                    } else if (elem.attachEvent) {
                        elem.attachEvent('on'+type, fn);
                    } else {
                        elem['on'+type] = fn;
                    }
                }
                
                var doc = document;
                var $ = function (id) { return doc.getElementById(id); }
                addEvent($('form_posts'), 'submit', function (e) {
                    e = e || window.event;
                    if(!($('post_title').value && $('post_content').value)) {
                        alert('内容或标题不能为空');
                        e.preventDefault();
                        return false;
                    }
                });
            </script>
        </div>
    </body>
</html>