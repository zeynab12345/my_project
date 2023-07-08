<?php
/* Smarty version 3.1.31, created on 2023-06-09 23:48:11
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\locations\location-list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64839e1b932425_01288371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f27f4574f7ccf05add5667eb2a6f3f9c27b60abf' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\locations\\location-list.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/general/pagination.tpl' => 1,
  ),
),false)) {
function content_64839e1b932425_01288371 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
?>
<div class="table-responsive-sm">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Title<?php $_block_repeat=false;
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
Store<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                <th style="width: 95px;" class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Actions<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($_smarty_tpl->tpl_vars['locations']->value) && $_smarty_tpl->tpl_vars['locations']->value != null) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['locations']->value, 'location', false, NULL, 'location', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['location']->value) {
?>
                    <tr>
                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("locationEdit",array("locationId"=>$_smarty_tpl->tpl_vars['location']->value->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['location']->value->getName();?>
</a>
                        </td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['location']->value->getStore() != null) {
echo $_smarty_tpl->tpl_vars['location']->value->getStore()->getName();
}?>
                        </td>
                        <td class="text-center">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("locationEdit",array("locationId"=>$_smarty_tpl->tpl_vars['location']->value->getId()));?>
" class="btn btn-outline-info btn-sm no-border<?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?> ml-1<?php } else { ?> mr-1<?php }?>" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Edit<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
"><i class="fas fa-pencil-alt"></i></a>
                            <div class="dropdown d-inline" data-trigger="hover" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Delete<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                <button class="btn btn-outline-info btn-sm no-border" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                                <ul class="dropdown-menu delete-dropdown dropdown-menu-right">
                                    <li class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Do you really want to delete?<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</li>
                                    <li class="divider"></li>
                                    <li class="text-center">
                                        <button class="btn btn-outline-danger delete-location" data-url="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("locationDelete",array("locationId"=>$_smarty_tpl->tpl_vars['location']->value->getId()));?>
">
                                            <span class="btn-icon"><i class="far fa-trash-alt"></i></span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Delete<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <?php }?>
        </tbody>
    </table>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['pages']->value)) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:admin/general/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
}
