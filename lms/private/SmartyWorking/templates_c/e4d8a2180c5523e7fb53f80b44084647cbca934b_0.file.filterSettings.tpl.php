<?php
/* Smarty version 3.1.31, created on 2023-06-10 14:18:28
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\filterSettings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64846a14159ca6_88570893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4d8a2180c5523e7fb53f80b44084647cbca934b' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\filterSettings.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64846a14159ca6_88570893 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59994514464846a140e0c81_16734352', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96480137764846a140fef93_09640938', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165873540764846a14104b14_26817768', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85595094164846a14156ad6_63351916', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205669189364846a14158990_67195355', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_59994514464846a140e0c81_16734352 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_59994514464846a140e0c81_16734352',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book Filter Settings<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'headerCss'} */
class Block_96480137764846a140fef93_09640938 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_96480137764846a140fef93_09640938',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_165873540764846a14104b14_26817768 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_165873540764846a14104b14_26817768',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['isDemoMode']->value === true) {?>
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-info text-center">In the demo version you can't change filter custom book fields.</div>
            </div>
        </div>
    <?php }?>
    <div class="row">
        <div class="col-lg-12">
            
            <?php if (isset($_smarty_tpl->tpl_vars['customFields']->value) && $_smarty_tpl->tpl_vars['customFields']->value != null) {?>
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("filterSettings",array());?>
" method="post" class="row">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customFields']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                                <div class="col-lg-2 col-md-4 mb-3">
                                    <div class="form-group">
                                        <label class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['value']->value->getTitle();
$_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label><br>
                                        <label class="switch switch-sm">
                                            <input type="checkbox" name="filterableFields[]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value->getId();?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value->isFilterable()) {?> checked<?php }?>>
                                        </label>
                                    </div>
                                </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            <div class="col-lg-12">
                                <button class="btn btn-primary m-t-20 pull-right"<?php if ($_smarty_tpl->tpl_vars['isDemoMode']->value === true) {?> disabled<?php }?>>
                                    <span class="btn-icon"><i class="far fa-save"></i></span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Save<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerPageJs'} */
class Block_85595094164846a14156ad6_63351916 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_85595094164846a14156ad6_63351916',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footerPageJs'} */
/* {block 'footerCustomJs'} */
class Block_205669189364846a14158990_67195355 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_205669189364846a14158990_67195355',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footerCustomJs'} */
}
