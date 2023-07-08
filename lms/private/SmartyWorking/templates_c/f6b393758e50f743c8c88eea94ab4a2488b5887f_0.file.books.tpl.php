<?php
/* Smarty version 3.1.31, created on 2023-06-09 23:53:23
  from "C:\xampp7.3\htdocs\lms\themes\default\notifications\books.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64839f53bdf467_37536766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6b393758e50f743c8c88eea94ab4a2488b5887f' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\themes\\default\\notifications\\books.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64839f53bdf467_37536766 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table width="100%" cellpadding="0" cellspacing="0" class="table-bordered" border="1">
    <thead>
        <tr>
            <th>Book</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
?>
            <tr>
                <td>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['SiteURL']->value;
if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("bookUrlType")) {
echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookViewPublic",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));
} else {
echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookViewViaUrlPublic",array("bookUrl"=>$_smarty_tpl->tpl_vars['book']->value->getUrl()));
}?>"><?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
</a>
                </td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </tbody>
</table><?php }
}
