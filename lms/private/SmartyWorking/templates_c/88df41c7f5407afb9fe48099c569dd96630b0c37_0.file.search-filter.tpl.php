<?php
/* Smarty version 3.1.31, created on 2023-06-09 23:19:50
  from "C:\xampp7.3\htdocs\lms\themes\default\general\search-filter.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64839776b810a5_77293410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88df41c7f5407afb9fe48099c569dd96630b0c37' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\themes\\default\\general\\search-filter.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64839776b810a5_77293410 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\modifier.date_format.php';
?>
<div class="sidebar">
    <div class="book-filter">
        <h2 class="text-lg-center text-left"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book Filter<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h2>
        <button class="show-filter" data-toggle="collapse" data-target="#book-filter" aria-expanded="false" aria-controls="book-filter">
            <i class="ti-filter"></i></button>
        <form action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookFilterPublic");?>
" id="book-filter">
            <div class="row">
                <div class="col-md-12 mb-2">
                    <label><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Publisher<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                    <select name="publisherIds[]" id="publishers" multiple="multiple"></select>
                </div>
                <div class="col-md-12 mb-2">
                    <label><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Genres<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                    <select name="genreIds[]" id="genres" multiple="multiple"></select>
                </div>
                <div class="col-md-12 mb-2">
                    <label><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Authors<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                    <select name="authorIds[]" id="authors" multiple="multiple"></select>
                </div>

                <div class="col-md-12 mb-2">
                    <label><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Year<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                    <div class="row">
                        <div class="col-md-6">
                            <select name="startYear" class="custom-select">
                                <option value=""></option>
                                <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? smarty_modifier_date_format(time(),'%Y')+1 - (1960) : 1960-(smarty_modifier_date_format(time(),'%Y'))+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1960, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</option>
                                <?php }
}
?>

                            </select>
                        </div>
                        <div class="col-md-6">
                            <select name="endYear" class="custom-select">
                                <option value=""></option>
                                <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? smarty_modifier_date_format(time(),'%Y')+1 - (1960) : 1960-(smarty_modifier_date_format(time(),'%Y'))+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1960, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</option>
                                <?php }
}
?>

                            </select>
                        </div>
                    </div>
                </div>
                <?php if (isset($_smarty_tpl->tpl_vars['bindings']->value) && $_smarty_tpl->tpl_vars['bindings']->value !== null) {?>
                    <div class="col-md-12 mb-2">
                        <label><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Bindings<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                        <select name="bindings[]" id="bindings" multiple="multiple">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bindings']->value, 'binding', false, NULL, 'binding', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['binding']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['binding']->value->getName();?>
"><?php echo $_smarty_tpl->tpl_vars['binding']->value->getName();?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        </select>
                    </div>
                <?php }?>
                
                <?php if (isset($_smarty_tpl->tpl_vars['bookCustomFields']->value) && $_smarty_tpl->tpl_vars['bookCustomFields']->value !== null) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bookCustomFields']->value, 'customField', false, NULL, 'customField', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['customField']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['customField']->value->isFilterable()) {?>
                        <div class="col-md-12 mb-2">
                            <?php if ($_smarty_tpl->tpl_vars['customField']->value->getControl() == 'INPUT') {?>
                                <label><?php echo $_smarty_tpl->tpl_vars['customField']->value->getTitle();?>
</label>
                                <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['customField']->value->getName();?>
" class="form-control">
                            <?php } elseif ($_smarty_tpl->tpl_vars['customField']->value->getControl() == 'SELECT') {?>
                                <label><?php echo $_smarty_tpl->tpl_vars['customField']->value->getTitle();?>
</label>
                                <?php $_prefixVariable1=$_smarty_tpl->tpl_vars['customField']->value->getListValues();
if (isset($_prefixVariable1) && $_smarty_tpl->tpl_vars['customField']->value->getListValues() !== null) {?>
                                    <select name="<?php echo $_smarty_tpl->tpl_vars['customField']->value->getName();?>
" class="custom-select">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customField']->value->getListValues(), 'listValue', false, NULL, 'listValue', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['listValue']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['listValue']->value->getValue();?>
"><?php echo $_smarty_tpl->tpl_vars['listValue']->value->getValue();?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </select>
                                <?php }?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['customField']->value->getControl() == 'TEXTAREA') {?>
                                <label><?php echo $_smarty_tpl->tpl_vars['customField']->value->getTitle();?>
</label>
                                <textarea name="<?php echo $_smarty_tpl->tpl_vars['customField']->value->getName();?>
" cols="30" rows="3" class="form-control"></textarea>
                            <?php } elseif ($_smarty_tpl->tpl_vars['customField']->value->getControl() == 'CHECKBOX') {?>
                                <div class="custom-control custom-checkbox my-2">
                                    <input type="checkbox" class="custom-control-input" name="<?php echo $_smarty_tpl->tpl_vars['customField']->value->getName();?>
" id="custom-control-<?php echo $_smarty_tpl->tpl_vars['customField']->value->getId();?>
" value="1">
                                    <label class="custom-control-label" for="custom-control-<?php echo $_smarty_tpl->tpl_vars['customField']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['customField']->value->getTitle();?>
</label>
                                </div>
                            <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['customField']->value->getTitle();?>

                            <br>
                        <?php }?>
                        </div>
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                <?php }?>

                <div class="col-md-12 text-center">
                    <button class="btn btn-secondary btn-block mt-2" id="filterIt" type="submit"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Filter It!<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</button>
                </div>
            </div>
        </form>
    </div>
</div><?php }
}
