<?php /* Smarty version Smarty-3.0.8, created on 2011-12-12 10:59:44
         compiled from "E:\wamp\www\speedphp/template/user_index.html" */ ?>
<?php /*%%SmartyHeaderCode:260954ee5dea05bebe7-14326144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e79521cda2844f761181478eaf21aa77dc308c4f' => 
    array (
      0 => 'E:\\wamp\\www\\speedphp/template/user_index.html',
      1 => 1323602194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '260954ee5dea05bebe7-14326144',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>登陆</title>
        <meta charset="utf-8" />
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
                    <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'verify'),$_smarty_tpl);?>
" alt="" />
                </form>
            </div>
        </div>
    </body>
</html>