<?php /* Smarty version Smarty-3.0.8, created on 2012-01-10 15:15:52
         compiled from "E:\wamp\www\speedphp/template\user_index.html" */ ?>
<?php /*%%SmartyHeaderCode:19004f0c56283eeec2-07136630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cf0eeb58d89644cc9bcf12d233d16f19d681c0c' => 
    array (
      0 => 'E:\\wamp\\www\\speedphp/template\\user_index.html',
      1 => 1326208513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19004f0c56283eeec2-07136630',
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
                <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'znUser','a'=>'submit'),$_smarty_tpl);?>
" method="post">
                    <p>
                        <label for="user">用户名</label>
                        <input type="text" name="user" id="user" />
                    </p>
                    <p>
                        <label for="password">密码</label>
                        <input type="password" name="password" id="password" />
                    </p>
                    <p>
                        <label for="verify">验证码</label>
                        <input type="text" name="verify" id="verify" />
                    </p>
                    <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'znUser','a'=>'verify'),$_smarty_tpl);?>
" alt="" />
                    <input type="submit" value="submit" />
                </form>
            </div>
        </div>
    </body>
</html>