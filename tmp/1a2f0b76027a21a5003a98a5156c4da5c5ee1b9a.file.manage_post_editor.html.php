<?php /* Smarty version Smarty-3.0.8, created on 2012-01-14 02:00:16
         compiled from "E:\wamp\www\speedphp/template\manage_post_editor.html" */ ?>
<?php /*%%SmartyHeaderCode:136844f10e1b03b2102-95034182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a2f0b76027a21a5003a98a5156c4da5c5ee1b9a' => 
    array (
      0 => 'E:\\wamp\\www\\speedphp/template\\manage_post_editor.html',
      1 => 1326506413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136844f10e1b03b2102-95034182',
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
        <script src="/speedphp/template/js/ueditor/editor_config.js"></script>
        <script src="/speedphp/template/js/ueditor/editor_all_min.js"></script>
        <link rel="stylesheet" href="/speedphp/template/js/ueditor/themes/default/ueditor.css"/>
    </head>
    
    <body>
        <div id="test" style="margin: 0 auto; width: 960px;">
            <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'znManage','a'=>'addPost'),$_smarty_tpl);?>
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
    </body>
</html>