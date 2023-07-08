<?php
/* Smarty version 3.1.31, created on 2023-06-10 08:34:01
  from "C:\xampp7.3\htdocs\lms\private\Templates\auth\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64841959db1ed3_98939305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0ad8e8f6f6d7e88a36bb5e03cea0cd1a92393eb' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\auth\\login.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/errors.tpl' => 1,
    'file:auth/login_form.tpl' => 1,
  ),
),false)) {
function content_64841959db1ed3_98939305 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
?>
<!DOCTYPE html>
<html lang="en" style="height: 100%;">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="KAASoft">
        <meta name="robots" content="noindex,nofollow">
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/css/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/css/plugins.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/css/style.css" rel="stylesheet">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("favIconFilePath");?>
">
    </head>
    <body class="login-page card-no-border">
        <section id="wrapper">
            <div class="login-register">
                <div class="login-box card">
                    <div class="card-body">
                        <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("adminColorSchema") == 'Dark') {?><img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("lightLogoFilePath");?>
" class="d-flex ml-auto mr-auto mb-4 mt-2" alt="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Login<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
"/><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("logoFilePath");?>
" class="d-flex ml-auto mr-auto mb-4 mt-2" alt="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Login<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
"/><?php }?>
                        <?php $_smarty_tpl->_subTemplateRender('file:admin/errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:auth/login_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    </div>
                </div>
            </div>
        </section>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/jquery/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/bootstrap/popper.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/main.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
