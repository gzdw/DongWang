<?php /* Smarty version Smarty-3.0.8, created on 2011-12-12 11:11:36
         compiled from "E:\wamp\www\speedphp/template/manage_post_editor.html" */ ?>
<?php /*%%SmartyHeaderCode:88494ee5e168e7ee57-66389091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '728a5f8feccfbf73a3a2fb819259401fb7b7c52a' => 
    array (
      0 => 'E:\\wamp\\www\\speedphp/template/manage_post_editor.html',
      1 => 1323688294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88494ee5e168e7ee57-66389091',
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
    </body>
</html>