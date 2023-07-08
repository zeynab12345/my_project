<?php
/* Smarty version 3.1.31, created on 2023-06-09 23:22:01
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\authors\authors-list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_648397f99915c7_63765699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0252d9200044f85918710b34058884561819dad2' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\authors\\authors-list.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/general/pagination.tpl' => 1,
  ),
),false)) {
function content_648397f99915c7_63765699 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
?>
<div class="card-header">
    <div class="heading-elements">
        <select name="sortColumn" id="books-sort" class="select-picker pr-2 d-tc">
            <option value="Authors.lastName" data-order="DESC"<?php if ($_SESSION['authorSortingOrder'] == 'DESC' && $_SESSION['authorSortingColumn'] == 'Authors.lastName') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
            <option value="Authors.lastName" data-order="ASC"<?php if ($_SESSION['authorSortingOrder'] == 'ASC' && $_SESSION['authorSortingColumn'] == 'Authors.lastName') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
        <select name="perPage" id="countPerPage" class="select-picker d-tc">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOption("authorsPerPage")->getListValues(), 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if (($_SESSION['authorPerPage'] == null && strcmp($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOption("authorsPerPage")->getValue()) === 0) || strcmp($_smarty_tpl->tpl_vars['key']->value,$_SESSION['authorPerPage']) === 0) {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('count'=>$_smarty_tpl->tpl_vars['value']->value,1=>$_smarty_tpl->tpl_vars['value']->value,'plural'=>"%1 Authors"));
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
</div>
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
Last Name<?php $_block_repeat=false;
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
Middle Name<?php $_block_repeat=false;
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
First Name<?php $_block_repeat=false;
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
            <?php if (isset($_smarty_tpl->tpl_vars['authors']->value) && $_smarty_tpl->tpl_vars['authors']->value != null) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['authors']->value, 'author', false, NULL, 'author', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
?>
                    <tr>
                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("authorEdit",array("authorId"=>$_smarty_tpl->tpl_vars['author']->value->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['author']->value->getLastName();?>
</a>
                        </td>
                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("authorEdit",array("authorId"=>$_smarty_tpl->tpl_vars['author']->value->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['author']->value->getMiddleName();?>
</a>
                        </td>
                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("authorEdit",array("authorId"=>$_smarty_tpl->tpl_vars['author']->value->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['author']->value->getFirstName();?>
</a>
                        </td>
                        <td class="text-center">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("authorEdit",array("authorId"=>$_smarty_tpl->tpl_vars['author']->value->getId()));?>
" class="btn btn-outline-info btn-sm no-border" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
                            <div class="dropdown pull-right" data-trigger="hover" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
                                        <button class="btn btn-outline-danger delete-author" data-url="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("authorDelete",array("authorId"=>$_smarty_tpl->tpl_vars['author']->value->getId()));?>
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
