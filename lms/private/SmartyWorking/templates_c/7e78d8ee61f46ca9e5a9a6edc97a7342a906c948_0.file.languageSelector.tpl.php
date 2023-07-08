<?php
/* Smarty version 3.1.31, created on 2023-06-09 23:21:24
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\general\languageSelector.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_648397d44a52f2_04463565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e78d8ee61f46ca9e5a9a6edc97a7342a906c948' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\general\\languageSelector.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648397d44a52f2_04463565 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['languages']->value)) {?>
    <a class="nav-link dropdown-toggle text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="icon-globe"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right animated bounceIn">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['language']->value->isActive()) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("languageChange",array("languageCode"=>$_smarty_tpl->tpl_vars['language']->value->getCode()));?>
" class="dropdown-item <?php if (strcmp($_smarty_tpl->tpl_vars['language']->value->getCode(),$_smarty_tpl->tpl_vars['activeLanguage']->value->getCode()) === 0) {?>active<?php }?>"><i class="flag flag-<?php echo $_smarty_tpl->tpl_vars['language']->value->getShortCode();?>
"></i><?php echo $_smarty_tpl->tpl_vars['language']->value->getName();?>
</a>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </div>
<?php }
}
}
