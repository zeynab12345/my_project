<?php
/* Smarty version 3.1.31, created on 2023-06-08 00:07:04
  from "C:\xampp7.3\htdocs\lms\themes\default\errors.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6480ff88525208_21676098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a95454f559aa182038ebe1c631c5de366458ce1e' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\themes\\default\\errors.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6480ff88525208_21676098 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_SESSION['messages']) && count($_SESSION['messages']) > 0) {?>
    <div class="row">
        <div class="col-sm-12">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['messages'], 'message');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
?>
                <div class="alert <?php if ($_smarty_tpl->tpl_vars['message']->value->getStatus() == 'INFO') {?>alert-success<?php } elseif (strcmp($_smarty_tpl->tpl_vars['message']->value->getStatus(),'WARNING') === 0) {?>alert-warning<?php } else { ?>alert-danger<?php }?> alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo $_smarty_tpl->tpl_vars['message']->value->getMessage();?>

                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </div>
    </div>
<?php }
}
}
