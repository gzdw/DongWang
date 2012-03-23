<?php /* Smarty version Smarty-3.0.8, created on 2012-02-02 03:05:29
         compiled from "E:\wamp\www\speedphp/template\znPost_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:316994f29fd79a7e4e2-59518644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4f9a584db17ac028cfb23571fc33c1083a6bbe0' => 
    array (
      0 => 'E:\\wamp\\www\\speedphp/template\\znPost_edit.html',
      1 => 1328151825,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '316994f29fd79a7e4e2-59518644',
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
    </head>
    
    <body>
        <div id="test" style="margin: 0 auto; width: 960px;">
            <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'znPost','a'=>'save'),$_smarty_tpl);?>
" method="post">
                <div>
                    <label for="post_title">标题</label>
                    <input type="text" name="post_title" id="post_title" value="<?php echo $_smarty_tpl->getVariable('result')->value['post_title'];?>
" />
                </div>
                <div>
                    <label for="post_author">作者</label>
                    <input type="text" name="post_author" id="post_author" value="<?php echo $_smarty_tpl->getVariable('result')->value['post_author'];?>
" />
                </div>
                <div>
                    <label for="post_date">日期</label>
                    <input type="date" name="post_date" id="post_date" value="<?php echo $_smarty_tpl->getVariable('result')->value['post_date'];?>
" />
                </div>
                <div>
                    <label for="post_excerpt">摘录</label>
                    <textarea name="post_excerpt" id="post_excerpt" style="width: 400px; height: 20px;"><?php echo $_smarty_tpl->getVariable('result')->value['post_excerpt'];?>
</textarea>
                </div>
                <div>
                    <label for="post_content" style="display: block;">正文内容(含HTML)</label>
                    <script type="text/plain" id="editor"><?php echo $_smarty_tpl->getVariable('result')->value['post_content'];?>
</script>
                    <input type="hidden" name="post_id" id="post_id" value="<?php echo $_smarty_tpl->getVariable('result')->value['post_id'];?>
" />
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