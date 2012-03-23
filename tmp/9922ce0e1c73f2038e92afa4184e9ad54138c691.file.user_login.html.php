<?php /* Smarty version Smarty-3.0.8, created on 2011-11-26 08:09:36
         compiled from "E:\wamp\www\speedphp/template\user_login.html" */ ?>
<?php /*%%SmartyHeaderCode:255114ed09ec0ab9889-91790460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9922ce0e1c73f2038e92afa4184e9ad54138c691' => 
    array (
      0 => 'E:\\wamp\\www\\speedphp/template\\user_login.html',
      1 => 1322294953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255114ed09ec0ab9889-91790460',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>登陆</title>
    </head>
    <body>
        <div id="container">
            <div id="login">
                <?php if ($_smarty_tpl->getVariable('error')->value==''){?> <?php }else{ ?> <?php echo $_smarty_tpl->getVariable('error')->value;?>
 <?php }?> 
                <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'submit'),$_smarty_tpl);?>
" method="post">
                    <input type="text" name="user" id="user" />
                    <input type="password" name="password" id="password" />
                    <input type="submit" value="submit" />
                </form>
            </div>
        </div>
    </body>
</html>