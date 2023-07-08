<?php
/* Smarty version 3.1.31, created on 2023-06-09 23:19:35
  from "C:\xampp7.3\htdocs\lms\themes\default\public.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64839767eb3004_26758876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c60e7da60f311028239a4e8888cc47ec44dad079' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\themes\\default\\public.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:general/header.tpl' => 1,
    'file:general/footer.tpl' => 1,
    'file:auth/login.tpl' => 1,
  ),
),false)) {
function content_64839767eb3004_26758876 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("publicForRegisteredUsersOnly") && isset($_smarty_tpl->tpl_vars['user']->value)) || !$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("publicForRegisteredUsersOnly") || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'userRegistration') {?>
    <!DOCTYPE html>
    <html lang="en" class="" dir="<?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>rtl<?php } else { ?>ltr<?php }?>">
    <head <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202971221164839767e91a19_74931554', 'headerPrefix');
?>
>
        <meta charset="UTF-8">
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154497893664839767e94772_16926661', 'metaTitle');
?>
</title>
        <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127976854264839767e95871_29070658', 'metaDescription');
?>
">
        <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165600119464839767e96745_17583170', 'metaKeywords');
?>
">
        <link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("favIconFilePath");?>
"/>
        <meta name=viewport content="width=device-width, initial-scale=1">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104676071064839767e98b56_32836954', 'socialNetworksMeta');
?>

        <?php $_smarty_tpl->_assignInScope('colorSchemas', $_smarty_tpl->tpl_vars['theme']->value->getColorSchemas());
?>
        <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/bootstrap.rtl.min.css">
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/plugins.css">
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/style.rtl.css">
        <?php } else { ?>
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/bootstrap.min.css">
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/plugins.css">
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/style.css">
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['theme']->value->getActiveColorSchema() == 'dark') {?>
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/themes/dark.css">
        <?php }?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101199810864839767ea5a03_30688590', 'headerCss');
?>

    </head>
    <body>
    <?php $_smarty_tpl->_subTemplateRender('file:general/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31766089964839767ea8709_01480027', 'content');
?>

    <?php $_smarty_tpl->_subTemplateRender('file:general/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129954771064839767eaaf90_40145368', 'footerJs');
?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/plugins.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/custom.js"><?php echo '</script'; ?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119381400964839767eaf710_22568988', 'customJs');
?>

    </body>
    </html>
<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender('file:auth/login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
/* {block 'headerPrefix'} */
class Block_202971221164839767e91a19_74931554 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerPrefix' => 
  array (
    0 => 'Block_202971221164839767e91a19_74931554',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'headerPrefix'} */
/* {block 'metaTitle'} */
class Block_154497893664839767e94772_16926661 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaTitle' => 
  array (
    0 => 'Block_154497893664839767e94772_16926661',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Library CMS<?php
}
}
/* {/block 'metaTitle'} */
/* {block 'metaDescription'} */
class Block_127976854264839767e95871_29070658 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaDescription' => 
  array (
    0 => 'Block_127976854264839767e95871_29070658',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaDescription'} */
/* {block 'metaKeywords'} */
class Block_165600119464839767e96745_17583170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaKeywords' => 
  array (
    0 => 'Block_165600119464839767e96745_17583170',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaKeywords'} */
/* {block 'socialNetworksMeta'} */
class Block_104676071064839767e98b56_32836954 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'socialNetworksMeta' => 
  array (
    0 => 'Block_104676071064839767e98b56_32836954',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'socialNetworksMeta'} */
/* {block 'headerCss'} */
class Block_101199810864839767ea5a03_30688590 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_101199810864839767ea5a03_30688590',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_31766089964839767ea8709_01480027 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_31766089964839767ea8709_01480027',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'footerJs'} */
class Block_129954771064839767eaaf90_40145368 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerJs' => 
  array (
    0 => 'Block_129954771064839767eaaf90_40145368',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/popper.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php
}
}
/* {/block 'footerJs'} */
/* {block 'customJs'} */
class Block_119381400964839767eaf710_22568988 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customJs' => 
  array (
    0 => 'Block_119381400964839767eaf710_22568988',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'customJs'} */
}
