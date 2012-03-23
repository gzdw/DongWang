<?php /* Smarty version Smarty-3.0.8, created on 2012-02-02 03:07:27
         compiled from "E:\wamp\www\speedphp/template\znManage.html" */ ?>
<?php /*%%SmartyHeaderCode:130724f29fdefac8e08-86186728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92f38a8fe5ebf9f70029c3993ba4684de9f10dfa' => 
    array (
      0 => 'E:\\wamp\\www\\speedphp/template\\znManage.html',
      1 => 1328152046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130724f29fdefac8e08-86186728',
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
        body, ul, ol, li, div, img, dl, dd, dt, h1, h2, h3, h4, h5, h6, p, span { margin: 0; padding: 0; }
        section, article, header, footer, nav { display: block; }
        #wrapper { width: 960px; margin: 0 auto; }
        #nav { }
        </style>
        <script>
            var init = function () {
                
            };
            $(document).ready(init);
        </script>
    </head>
    
    <body>
        <div id="wrapper">
            <div id="nav">
                <ul>
                   <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'znPost','a'=>'index'),$_smarty_tpl);?>
" target="_blank">文章管理</a></li>
                   <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'znFile','a'=>'index'),$_smarty_tpl);?>
" target="_blank">文件管理</a></li>
                   <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'znSet','a'=>'index'),$_smarty_tpl);?>
" target="_blank">信息设置</a></li>
                   <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'znTemplate','a'=>'index'),$_smarty_tpl);?>
" target="_blank">模板管理</a></li>
               </ul>
            </div>
        </div>
    </body>
</html>