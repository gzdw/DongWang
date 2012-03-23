<?php /* Smarty version Smarty-3.0.8, created on 2012-01-23 02:15:00
         compiled from "E:\wamp\www\speedphp/template\manage_index.html" */ ?>
<?php /*%%SmartyHeaderCode:228744f1cc2a43a3026-88392353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d496b6b7016f97751d0c134660bbb2fb446bb40' => 
    array (
      0 => 'E:\\wamp\\www\\speedphp/template\\manage_index.html',
      1 => 1327284855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '228744f1cc2a43a3026-88392353',
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
        <script src="/speedphp/template/js/jquery-1.7.1.min.js"></script>
        <style>
        body { margin: 0; padding: 0; width: 100%; }
        #wrapper { position: relative; height: 800px; }    
        #nav { float: left; display: block; width: 150px; height: 100%; }
        #main_content_wrap { display: block; margin-left: 150px;   height: 100%; overflow: hidden; }
        #main_content { display: block; width: 100%; border: none; height: 100%; }
        </style>
        <script>
            $(document).ready(function () {
                $('#nav a').click(function (e) {
                    $('#main_content').attr('src', $(this)[0].href);
                    e.stopPropagation();
                    return false;
                });
                $('#ajaxTest').click(function (e) {
                    $.post('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'znManage','a'=>'ajaxTest'),$_smarty_tpl);?>
', 'test=1', function (data) {
                        //alert(data);
                        $('#wrapper').prepend('<div id="testData">' + data +'</div>');
                        $('#testData').hide().fadeIn(500);
                    });
                })
            });
        </script>
    </head>
    
    <body>
        <div id="wrapper">
            <div id="nav">
                <ul>
                    <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'znManage','a'=>'editPost'),$_smarty_tpl);?>
">添加文章</a></li>
                    <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'znManage','a'=>'listPost'),$_smarty_tpl);?>
">罗列文章</a></li>
                    <li id="ajaxTest"><button>request</button></li>
                </ul>
            </div>
            <div id="main_content_wrap">
                <iframe id="main_content" src=""></iframe>
            </div>
            <!--
            <div id="test">
                <form method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'znManage','a'=>'modifyPost'),$_smarty_tpl);?>
">
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('result')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
?>
                        <li style="float: left; width: 100%;">
                            <input type="text" name="m_title" id="m_title" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_title'];?>
" style="float: left;;" />
                            <textarea style="float: left; width: 800px; height: auto;" name="m_content" id="m_content"><?php echo $_smarty_tpl->tpl_vars['post']->value['post_content'];?>
</textarea>
                            <input style="float: left;" type="submit" value="修改" />
                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" name="m_id" id="m_id" />
                        </li>
                    <?php }} ?>
                </ul>
                </form>
            </div>
            -->
        </div>
    </body>
</html>