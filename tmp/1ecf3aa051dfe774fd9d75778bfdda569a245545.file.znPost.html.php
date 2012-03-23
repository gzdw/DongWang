<?php /* Smarty version Smarty-3.0.8, created on 2012-02-06 08:50:14
         compiled from "E:\wamp\www\speedphp/template\znPost.html" */ ?>
<?php /*%%SmartyHeaderCode:74544f2f94467fec00-06170869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ecf3aa051dfe774fd9d75778bfdda569a245545' => 
    array (
      0 => 'E:\\wamp\\www\\speedphp/template\\znPost.html',
      1 => 1328518113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74544f2f94467fec00-06170869',
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
        <script src="/speedphp/template/js/jquery-1.7.1.min.js"></script>
        <script>
            var init = function () {
                $('#form_posts a').bind('click', function (event) {
                    $('#form_posts input:hidden').val($(this).attr('data-id'));
                    $('#form_posts').submit();
                    
                    event.preventDefault();
                    return false;
                });
            };
            $(document).ready(init);
        </script>
    </head>
    
    <body>
        <div id="wrapper">
            <ul>
                <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'znPost','a'=>'add'),$_smarty_tpl);?>
" target="_blank">添加新文章</a></li>
            </ul>
            <br />
            <ul>
                <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'znPost','a'=>'group'),$_smarty_tpl);?>
">栏目</a></li>
            </ul>
            <form id="form_posts" method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'znPost','a'=>'edit'),$_smarty_tpl);?>
">
            <?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('group')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['arr']->key;
?>
            <ul> 
                <li><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</li>
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['arr_item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['arr_item']->key => $_smarty_tpl->tpl_vars['arr_item']->value){
?>
                    <li>
                        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'znPost','a'=>'edit'),$_smarty_tpl);?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['arr_item']->value['post_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['arr_item']->value['post_title'];?>
</a>
                    </li>
                    <?php }} ?>
                    <input type="hidden" name="post_id" id="post_id" value="-1" />
                </ul>
            </ul>
            <?php }} ?>
            </form>
        </div>
    </body>
</html>