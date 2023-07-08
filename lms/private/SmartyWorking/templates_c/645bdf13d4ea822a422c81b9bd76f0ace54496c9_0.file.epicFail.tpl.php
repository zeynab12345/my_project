<?php
/* Smarty version 3.1.31, created on 2023-06-10 15:28:56
  from "C:\xampp7.3\htdocs\lms\themes\default\epicFail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64847a9832faa8_32056463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '645bdf13d4ea822a422c81b9bd76f0ace54496c9' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\themes\\default\\epicFail.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64847a9832faa8_32056463 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
?>
<!DOCTYPE html>
<html lang="en" class="">
    <head>
        <meta charset="UTF-8">
        <title><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Epic Fail<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</title>
        <link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("favIconFilePath");?>
"/>
        <meta name=viewport content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/bootstrap.min.css">

        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/plugins.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/style.css">
    </head>
    <body>
        <section class="error-page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Epic Fail<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h1>
                        <div class="error-messages">
                            <?php if (isset($_SESSION['messages']) && count($_SESSION['messages']) > 0) {?>
                                <div class="alert alert-dismissable alert-danger">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['messages'], 'message');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
?>
                                        <?php echo $_smarty_tpl->tpl_vars['message']->value->getMessage();?>

                                        <br/>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html><?php }
}
