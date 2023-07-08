<?php
/* Smarty version 3.1.31, created on 2023-06-09 23:53:45
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\books\bookIssueLogs.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64839f692b1882_13559003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a2c2196f0c53c22f2f3641f477cc208ffc38c4a' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\books\\bookIssueLogs.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/general/pagination.tpl' => 1,
  ),
),false)) {
function content_64839f692b1882_13559003 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
?>
<div class="table-responsive-sm">
    <table class="table table-striped">
        <thead class="table-vertical-header" style="height: 40px;">
            <tr class="text-center">
                <th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book Copy Id<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                <th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
User<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                <th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Request Date<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                <th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Issue Date<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                <th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Expiry Date<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                <th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Return Date<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                <th style="width: 140px;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Last Action<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                <th style="width: 180px;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Action Time<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['issueLogs']->value, 'log', false, NULL, 'log', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['log']->value) {
?>

                <tr class="text-center">
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['log']->value->getBookSN();?>

                    </td>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userEdit",array("userId"=>$_smarty_tpl->tpl_vars['log']->value->getUserId()));?>
"><?php echo $_smarty_tpl->tpl_vars['log']->value->getUserFullName();?>
</a>
                    </td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['log']->value->getRequestId() != null) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("requestEdit",array("requestId"=>$_smarty_tpl->tpl_vars['log']->value->getRequestId()));?>
"><?php echo $_smarty_tpl->tpl_vars['log']->value->getRequestDateTime();?>
</a>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['log']->value->getRequestDateTime();?>

                        <?php }?>
                    </td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['log']->value->getRequestId() != null) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("issueEdit",array("issueId"=>$_smarty_tpl->tpl_vars['log']->value->getIssueId()));?>
"> <?php echo $_smarty_tpl->tpl_vars['log']->value->getIssueDate();?>
</a>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['log']->value->getIssueDate();?>

                        <?php }?>
                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['log']->value->getExpiryDate();?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['log']->value->getReturnDate();?>

                    </td>
                    <td>
                        <span class="badge <?php if ($_smarty_tpl->tpl_vars['log']->value->getIssueDate() != null) {?>badge-success<?php } else { ?>badge-info<?php }?>"><?php if ($_smarty_tpl->tpl_vars['log']->value->getIssueDate() != null) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Issue<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Request<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?></span>
                        <?php if ($_smarty_tpl->tpl_vars['log']->value->isIssueDeleted()) {?><br><div class="badge badge-secondary"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Deleted<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div><?php }?>
                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['log']->value->getUpdateDateTime();?>

                    </td>
                </tr>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </tbody>
    </table>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:admin/general/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
