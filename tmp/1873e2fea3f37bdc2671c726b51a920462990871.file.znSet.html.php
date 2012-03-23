<?php /* Smarty version Smarty-3.0.8, created on 2012-02-06 03:54:36
         compiled from "E:\wamp\www\speedphp/template\znSet.html" */ ?>
<?php /*%%SmartyHeaderCode:197884f2f4efc890621-51411860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1873e2fea3f37bdc2671c726b51a920462990871' => 
    array (
      0 => 'E:\\wamp\\www\\speedphp/template\\znSet.html',
      1 => 1328500457,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197884f2f4efc890621-51411860',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>znSet</title>
    </head>
    <body>
        <div id="wrapper">
            <form method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'znSet','a'=>'save'),$_smarty_tpl);?>
">
                <fieldset>
                    <legend>网站信息设置</legend>
                    <?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('sets')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value){
?>
                    <div>
                        <label for="<?php echo $_smarty_tpl->tpl_vars['arr']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['arr']->value['name'];?>
</label>
                        <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['arr']->value['varname'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['value'];?>
" />
                    </div>
                    <?php }} ?>
                    <input type="submit" value="保存" />
                </fieldset>
            </form>
        </div>
    </body>
</html>