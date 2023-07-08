<?php
/* Smarty version 3.1.31, created on 2023-06-09 23:19:57
  from "C:\xampp7.3\htdocs\lms\themes\default\authors\authors-list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6483977d4233b0_15696770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0efcf78fb87a6f4b3802f660c325f3602203ba22' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\themes\\default\\authors\\authors-list.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:general/pagination.tpl' => 1,
  ),
),false)) {
function content_6483977d4233b0_15696770 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
?>
<div class="top-filter row">
    <div class="col-lg-8 text">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Found <span><?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo $_smarty_tpl->tpl_vars['totalAuthors']->value;?>
 <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
authors</span> in total<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    </div>
    <div class="col-lg-4 pr-0 pl-0">
        <select name="sortColumn" id="books-sort" class="custom-select">
            <option value="Authors.lastName" data-order="DESC"<?php if ($_SESSION['authorSortingOrderPublic'] == 'DESC' && $_SESSION['authorSortingColumnPublic'] == 'Authors.lastName') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Name Descending<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
            <option value="Authors.lastName" data-order="ASC"<?php if ($_SESSION['authorSortingOrderPublic'] == 'ASC' && $_SESSION['authorSortingColumnPublic'] == 'Authors.lastName') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Name Ascending<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
        </select>
    </div>
</div>
<div class="row">
    <?php if (isset($_smarty_tpl->tpl_vars['authors']->value) && $_smarty_tpl->tpl_vars['authors']->value != null) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['authors']->value, 'author', false, NULL, 'author', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
?>
            <div class="col-sm-4 col-md-3 col-lg-2 col-6">
                <div class="author">
                    <?php if ($_smarty_tpl->tpl_vars['author']->value->getPhoto() != null) {?>
                        <div class="author-photo">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("authorBooksPublic",array("authorId"=>$_smarty_tpl->tpl_vars['author']->value->getId()));?>
" class="text-center"><img src="<?php echo $_smarty_tpl->tpl_vars['author']->value->getPhoto()->getWebPath('medium');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['author']->value->getLastName();?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value->getFirstName();?>
"></a>
                        </div>
                    <?php } else { ?>
                        <div class="author-photo">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("authorBooksPublic",array("authorId"=>$_smarty_tpl->tpl_vars['author']->value->getId()));?>
" class="text-center"><img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noBookImageFilePath");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['author']->value->getLastName();?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value->getFirstName();?>
"></a>
                        </div>
                    <?php }?>
                    <div class="author-info">
                        <h4 class="author-name">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("authorBooksPublic",array("authorId"=>$_smarty_tpl->tpl_vars['author']->value->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['author']->value->getLastName();?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value->getFirstName();?>
</a>
                        </h4>
                        <span class="author-books"><?php echo $_smarty_tpl->tpl_vars['author']->value->getBookCount();?>
 <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                    </div>
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    <?php }?>
</div>
<div class="books-per-page d-flex">
    <?php $_smarty_tpl->_subTemplateRender("file:general/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<div class="top-filter row">
    <div class="col-lg-8 text">
        <p class="m-0"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Authors per page:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</p>
    </div>
    <div class="col-lg-4 pr-0 pl-0">
        <select name="perPage" id="countPerPage" class="custom-select">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOption("authorsPerPagePublic")->getListValues(), 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if (($_SESSION['authorPerPagePublic'] == null && strcmp($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOption("authorsPerPagePublic")->getValue()) === 0) || strcmp($_smarty_tpl->tpl_vars['key']->value,$_SESSION['authorPerPagePublic']) === 0) {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('count'=>$_smarty_tpl->tpl_vars['value']->value,1=>$_smarty_tpl->tpl_vars['value']->value,'plural'=>"%1 Authors"));
$_block_repeat=true;
echo smarty_block_t(array('count'=>$_smarty_tpl->tpl_vars['value']->value,1=>$_smarty_tpl->tpl_vars['value']->value,'plural'=>"%1 Authors"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
1 Author<?php $_block_repeat=false;
echo smarty_block_t(array('count'=>$_smarty_tpl->tpl_vars['value']->value,1=>$_smarty_tpl->tpl_vars['value']->value,'plural'=>"%1 Authors"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </select>
    </div>
</div><?php }
}
