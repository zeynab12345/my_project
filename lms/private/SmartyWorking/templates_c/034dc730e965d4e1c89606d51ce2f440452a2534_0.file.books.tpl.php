<?php
/* Smarty version 3.1.31, created on 2023-06-09 23:53:38
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\books\books.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64839f62b7be89_95450141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '034dc730e965d4e1c89606d51ce2f440452a2534' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\books\\books.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/books/books-list.tpl' => 1,
  ),
),false)) {
function content_64839f62b7be89_95450141 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148658789064839f62ae0691_81016311', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104921692864839f62aec685_13258105', 'toolbar');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146573777264839f62affb94_66650557', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150457077464839f62b027c2_27297921', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78512114264839f62b42202_65434530', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9261164764839f62b47650_11661554', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_148658789064839f62ae0691_81016311 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_148658789064839f62ae0691_81016311',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'toolbar'} */
class Block_104921692864839f62aec685_13258105 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'toolbar' => 
  array (
    0 => 'Block_104921692864839f62aec685_13258105',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="btn-group">
        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookCreate");?>
" class="btn btn-success">
            <span class="btn-icon"><i class="fas fa-plus"></i></span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        </a>
        <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookCreate");?>
" class="dropdown-item "><i class="far fa-hand-paper mr-1"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Manually<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
            <a class="dropdown-item" data-toggle="collapse" href="#add-book-block" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-magic mr-1" aria-hidden="true"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Google Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
        </div>
    </div>
<?php
}
}
/* {/block 'toolbar'} */
/* {block 'headerCss'} */
class Block_146573777264839f62affb94_66650557 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_146573777264839f62affb94_66650557',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/css/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet"/>
<?php
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_150457077464839f62b027c2_27297921 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_150457077464839f62b027c2_27297921',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="modal fade" id="bulkEditBooks" role="dialog" aria-labelledby="bulkEditBooksLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Edit Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bulk-edit card">
                    <?php if ($_smarty_tpl->tpl_vars['isDemoMode']->value === true) {?>
                        <div class="alert alert-info text-center">In the demo version you can't bulk book edit.</div>
                    <?php }?>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="seriesId" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Series<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                            <div class="input-group input-select">
                                <select name="seriesId" id="seriesId" class="form-control"></select>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary first-btn delete-data" type="button" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Clear Value<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                        <i class="fas fa-times"></i>
                                    </button>
                                    <button class="btn btn-outline-secondary edit-data" type="button" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Confirm Value<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                        <i class="fa fa-check"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="publisherId" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
                            <div class="input-group input-select">
                                <select name="publisherId" id="publisherId" class="form-control"></select>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary first-btn delete-data" type="button" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Clear Value<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                        <i class="fas fa-times"></i></button>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary edit-data" type="button" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Confirm Value<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                        <i class="fa fa-check"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="authors[]" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
                            <div class="input-group input-select">
                                <select class="form-control" name="authors[]" id="authors" multiple="multiple"></select>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary first-btn delete-data" type="button" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Clear Value<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                        <i class="fas fa-times"></i></button>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary edit-data" type="button" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Confirm Value<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                        <i class="fa fa-check"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="genres[]" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
                            <div class="input-group input-select">
                                <select class="form-control" name="genres[]" id="genres" multiple="multiple"></select>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary first-btn delete-data" type="button" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Clear Value<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                        <i class="fas fa-times"></i></button>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary edit-data" type="button" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Confirm Value<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                        <i class="fa fa-check"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="publishingYear" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Published Year<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                            <div class="input-group">
                                <input type="text" class="form-control year-picker" autocomplete="off" name="publishingYear">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary edit-data" type="button" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Confirm Value<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                        <i class="fa fa-check"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="pages" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Pages<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                            <div class="input-group">
                                <input type="text" class="form-control" autocomplete="off" name="pages">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary edit-data" type="button" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Confirm Value<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                        <i class="fa fa-check"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="type" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Type<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                            <div class="input-group input-select">
                                <select name="type" class="form-control select-picker">
                                    <option value="Standard"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Standard<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
                                    <option value="Digital"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Digital<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
                                </select>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary edit-data" type="button" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Confirm Value<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                        <i class="fa fa-check"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="physicalForm" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Physical Form<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                            <div class="input-group input-select">
                                <select name="physicalForm" class="form-control select-picker">
                                    <option value="Book"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
                                    <option value="Manuscript"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Manuscript<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
                                    <option value="Journal"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Journal<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
                                    <option value="CD/DVD"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
CD/DVD<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
                                    <option value="Other"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Other<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
                                </select>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary edit-data" type="button" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Confirm Value<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                        <i class="fa fa-check"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="size" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Size<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                            <div class="input-group input-select">
                                <select name="size" class="form-control select-picker">
                                    <option value="Medium"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Medium<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
                                    <option value="Large"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Large<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
                                    <option value="Huge"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Huge<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
                                    <option value="Small"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Small<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
                                    <option value="Tiny"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Tiny<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
                                </select>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary edit-data" type="button" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Confirm Value<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                        <i class="fa fa-check"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="binding" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Binding<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                            <div class="input-group input-select">
                                <select name="binding" id="bindingId" class="form-control select-picker">
                                    <option value="Softcover"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Softcover<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
                                    <option value="Hardcover"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Hardcover<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
                                </select>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary edit-data" type="button" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Confirm Value<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                        <i class="fa fa-check"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="stores[]" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Store<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                            <div class="input-group input-select">
                                <select class="form-control" name="stores[]" id="stores" multiple="multiple"></select>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary first-btn delete-data" type="button" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Clear Value<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                        <i class="fas fa-times"></i></button>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary edit-data" type="button" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Confirm Value<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                        <i class="fa fa-check"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="locations[]" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Location<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                            <div class="input-group input-select">
                                <select class="form-control" name="locations[]" id="locations" multiple="multiple"></select>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary first-btn delete-data" type="button" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Clear Value<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                        <i class="fas fa-times"></i></button>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary edit-data" type="button" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Confirm Value<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                        <i class="fa fa-check"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="price" class="control-label mr-1"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Price<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                            <span>(<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("priceCurrency");?>
)</span>
                            <div class="input-group">
                                <input type="text" class="form-control" autocomplete="off" name="price">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary edit-data" type="button" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Confirm Value<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                        <i class="fa fa-check"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="language" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Language<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                            <div class="input-group">
                                <input type="text" class="form-control" autocomplete="off" name="language">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary edit-data" type="button" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Confirm Value<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                        <i class="fa fa-check"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="bulk-edit" <?php if ($_smarty_tpl->tpl_vars['isDemoMode']->value === true) {?>disabled<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Save Changes<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="collapse" id="add-book-block">
                <div class="card">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                <th style="width: 65px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <select name="bookId" id="bookId" class="form-control"></select>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success" id="add-book" data-container="body" data-placement="left" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Book With Google Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
"><i class="fas fa-plus" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="google-result text-center"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card" id="books-block">
                <?php $_smarty_tpl->_subTemplateRender('file:admin/books/books-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerPageJs'} */
class Block_78512114264839f62b42202_65434530 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_78512114264839f62b42202_65434530',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/bootstrap-select/bootstrap-select.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/select2/select2.full.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/moment/moment.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerPageJs'} */
/* {block 'footerCustomJs'} */
class Block_9261164764839f62b47650_11661554 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_9261164764839f62b47650_11661554',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        var bookBulkBarCodeGenerateUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookBulkBarCodeGenerate",array());?>
';
        $(document).on('click', '#gen-barcode', function (e) {
            e.preventDefault();
            if ($('.books-id:checked').length > 0) {
                var form = document.createElement("form");
                form.setAttribute("method", "post");
                form.setAttribute("action", bookBulkBarCodeGenerateUrl);
                $(".books-id:checked").each(function (index, el) {
                    var hiddenField = document.createElement("input");
                    hiddenField.setAttribute("type", "hidden");
                    hiddenField.setAttribute("name", $(el).attr('name'));
                    hiddenField.setAttribute("value", $(el).val());
                    form.appendChild(hiddenField);
                });
                document.body.appendChild(form);
                form.submit();
            }
        });
        $.fn.modal.Constructor.prototype._enforceFocus = function () {
        };
        $('.edit-data').on('click', function (e) {
            e.preventDefault();
            if ($(this).closest('.input-group').attr('data-changed') !== 'true') {
                $(this).addClass('change-data');
                $(this).closest('.input-group').attr('data-changed', true);
            } else {
                $(this).removeClass('change-data');
                $(this).closest('.input-group').attr('data-changed', false);
            }
        });
        $('.delete-data').on('click', function (e) {
            e.preventDefault();
            $(this).closest('.input-group').find('select').empty().append('<option value="0" selected><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Clear<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>').val("0").trigger('change.select2');
        });
        var bulkEditBooksUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookBulkEdit",array());?>
';
        $('#bulk-edit').on('click', function (e) {
            e.preventDefault();
            var ids = $('.books-id:checked').serialize();
            if ($('.books-id:checked').length > 0) {
                if ($('.bulk-edit .input-group[data-changed="true"]').length > 0) {
                    var data = $('.bulk-edit .input-group[data-changed="true"]').find('select, textarea, input').serialize();
                    $.ajax({
                        dataType: 'json',
                        type: 'POST',
                        url: bulkEditBooksUrl,
                        data: data + '&' + ids,
                        beforeSend: function () {
                            app.card.loading.start('.bulk-edit');
                        },
                        success: function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    app.notification('success', data.success);
                                    $('.bulk-edit').find('select, textarea, input').val("");
                                    $('.bulk-edit .input-group').removeAttr('data-changed').find('.edit-data').removeClass('change-data');
                                    $('.bulk-edit').find('select').empty().trigger('change');
                                    //$('.books-id:checked').prop('checked', false);
                                }
                            }
                        },
                        complete: function () {
                            app.card.loading.finish('.bulk-edit');
                        },
                        error: function (jqXHR, exception) {
                            app.notification('error', app.getErrorMessage(jqXHR, exception));
                        }
                    });
                }
            }
        });
        $('.year-picker').datepicker({
            format: "yyyy",
            startView: 2,
            minViewMode: 2,
            maxViewMode: 2,
            keepOpen: true
        });
        var genreSearchUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("genreSearchPublic",array());?>
';
        $("#genres").select2({
            ajax: {
                url: genreSearchUrl,
                dataType: 'json',
                type: 'POST',
                data: function (params) {
                    return {
                        searchText: params.term
                    };
                },
                processResults: function (data, params) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            return {
                                results: $.map(data, function (item) {
                                    return {
                                        text: item.name,
                                        id: item.id,
                                        term: params.term
                                    }
                                })
                            };
                        }
                    }
                },
                cache: false
            },
            templateResult: function (item) {
                if (item.loading) {
                    return item.text;
                }
                return app.markMatch(item.text, item.term);
            },
            minimumInputLength: 2,
            allowClear: true,
            placeholder: " "
        });
        var storeSearchUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("storeSearchPublic",array());?>
';
        $("#stores").select2({
            ajax: {
                url: storeSearchUrl,
                dataType: 'json',
                type: 'POST',
                data: function (params) {
                    return {
                        searchText: params.term
                    };
                },
                processResults: function (data, params) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            return {
                                results: $.map(data, function (item) {
                                    return {
                                        text: item.name,
                                        id: item.id,
                                        term: params.term
                                    }
                                })
                            };
                        }
                    }
                },
                cache: false
            },
            templateResult: function (item) {
                if (item.loading) {
                    return item.text;
                }
                return app.markMatch(item.text, item.term);
            },
            minimumInputLength: 2,
            allowClear: true,
            placeholder: " "
        });
        var locationSearchUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("locationSearchPublic",array());?>
';
        $("#locations").select2({
            ajax: {
                url: locationSearchUrl,
                dataType: 'json',
                type: 'POST',
                data: function (params) {
                    var datas = $("#stores").serialize() + '&searchText=' + params.term;
                    return datas;
                },
                processResults: function (data, params) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            return {
                                results: $.map(data, function (item) {
                                    return {
                                        text: item.name + ' (' + item.store.name + ')',
                                        id: item.id,
                                        term: params.term
                                    }
                                })
                            };
                        }
                    }
                },
                cache: false
            },
            templateResult: function (item) {
                if (item.loading) {
                    return item.text;
                }
                return app.markMatch(item.text, item.term);
            },
            minimumInputLength: 2,
            allowClear: true,
            placeholder: " "
        });
        var authorSearchUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("authorSearchPublic",array());?>
';
        $("#authors").select2({
            ajax: {
                url: authorSearchUrl,
                dataType: 'json',
                type: 'POST',
                data: function (params) {
                    return {
                        searchText: params.term
                    };
                },
                processResults: function (data, params) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            return {
                                results: $.map(data, function (item) {
                                    if (item.firstName) {
                                        var text = item.firstName + ' ' + item.lastName;
                                    } else {
                                        text = item.lastName;
                                    }
                                    return {
                                        text: text,
                                        id: item.id,
                                        term: params.term
                                    }
                                })
                            };
                        }
                    }
                },
                cache: false
            },
            templateResult: function (item) {
                if (item.loading) {
                    return item.text;
                }
                return app.markMatch(item.text, item.term);
            },
            minimumInputLength: 2,
            allowClear: true,
            placeholder: " "
        });
        var publisherSearchUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("publisherSearchPublic",array());?>
';
        $('#publisherId').select2({
            ajax: {
                url: function () {
                    return publisherSearchUrl;
                },
                dataType: 'json',
                type: 'POST',
                data: function (params) {
                    return {
                        searchText: params.term
                    };
                },
                processResults: function (data, params) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            return {
                                results: $.map(data, function (item) {
                                    return {
                                        text: item.name,
                                        id: item.id,
                                        term: params.term
                                    }
                                })
                            };
                        }
                    }
                },
                cache: true
            },
            templateResult: function (item) {
                if (item.loading) {
                    return item.text;
                }
                return app.markMatch(item.text, item.term);
            },
            minimumInputLength: 2,
            allowClear: true,
            placeholder: " "
        });
        var seriesSearchUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("seriesSearchPublic",array());?>
';
        $('#seriesId').select2({
            ajax: {
                url: function () {
                    return seriesSearchUrl;
                },
                dataType: 'json',
                type: 'POST',
                data: function (params) {
                    return {
                        searchText: params.term
                    };
                },
                processResults: function (data, params) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            return {
                                results: $.map(data, function (item) {
                                    return {
                                        text: item.name,
                                        id: item.id,
                                        term: params.term
                                    }
                                })
                            };
                        }
                    }
                },
                cache: true
            },
            templateResult: function (item) {
                if (item.loading) {
                    return item.text;
                }
                return app.markMatch(item.text, item.term);
            },
            minimumInputLength: 2,
            allowClear: true,
            placeholder: " "
        });
        var booksDeleteUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookBulkDelete",array());?>
';
        $(document).on('click', '.delete-books', function (e) {
            e.preventDefault();
            var ids = $('.books-id:checked').serialize();
            if ($('.books-id:checked').length > 0) {
                $.ajax({
                    dataType: 'json',
                    type: 'POST',
                    url: booksDeleteUrl,
                    data: ids,
                    beforeSend: function () {
                        app.card.loading.start('#books-block');
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                app.notification('success', data.success);
                                $('.books-id:checked').closest('tr').remove();
                                $('.header-cell').show();
                                $('.header-bulk-actions').addClass('d-none').hide();
                            }
                        }
                    },
                    complete: function () {
                        app.card.loading.finish('#books-block');
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    }
                });
            }
        });
        $(document).on('click', '#select-all-books', function (e) {
            $('.books-id').not(this).not(':disabled').prop('checked', this.checked);
            if ($('.books-id:checked').length > 0) {
                $('.header-cell').hide();
                $('.header-bulk-actions').removeClass('d-none').show();
            } else {
                $('.header-cell').show();
                $('.header-bulk-actions').addClass('d-none').hide();
            }
        });
        $(document).on('change', '.books-id', function (e) {
            if ($(this).is(':checked')) {
                $('.header-cell').hide();
                $('.header-bulk-actions').removeClass('d-none').show();
            } else {
                if (!$('.books-id:checked').length > 0) {
                    $('.header-cell').show();
                    $('.header-bulk-actions').addClass('d-none').hide();
                }
            }
        });
        var bookSearchUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookGoogleSearchPublic",array());?>
';
        $('#bookId').select2({
            ajax: {
                url: function () {
                    return bookSearchUrl;
                },
                delay: 500,
                dataType: 'json',
                type: 'POST',
                data: function (params) {
                    return {
                        searchText: params.term
                    };
                },
                error: function (jqXHR, exception) {
                    if (jqXHR.statusText == 'abort') {
                        return;
                    }
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                },
                processResults: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            var books = $.parseJSON(data.books);
                            return {
                                results: books.items
                            };
                        }
                    }
                },
                cache: true
            },
            escapeMarkup: function (markup) {
                return markup;
            },
            minimumInputLength: 2,
            templateResult: formatBook,
            templateSelection: formatBookSelection
        });
        function formatBook(book) {
            if (book.loading) return book.text;
            var markup = "<div class='select-book'>";
            markup += "<div class='select-book-cover'>";
            if (book.volumeInfo.imageLinks && book.volumeInfo.imageLinks.smallThumbnail) {
                markup += "<img src='" + book.volumeInfo.imageLinks.smallThumbnail + "' />";
            } else {
                markup += "<img src='<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noImagePath");?>
' />";
            }
            markup += "</div>";
            markup += "<div class='select-book-info'>";
            markup += "<div class='select-book-title'>" + book.volumeInfo.title + "";
            if (book.volumeInfo.publishedDate) {
                markup += " <span>(" + book.volumeInfo.publishedDate + ")</span>";
            }
            markup += "</div>";
            if (book.volumeInfo.publisher) {
                markup += "<div class='select-book-publisher'><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Publisher:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</strong> " + book.volumeInfo.publisher + "</div>";
            }
            var isbnLength = $(book.volumeInfo.industryIdentifiers).length;
            if (isbnLength > 0) {
                for (var i = 0; i < isbnLength; i++) {
                    if (book.volumeInfo.industryIdentifiers[i].type == "ISBN_13") {
                        markup += "<div class='select-book-isbn'><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN13:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</strong> " + book.volumeInfo.industryIdentifiers[i].identifier + "</div>";
                    }
                    if (book.volumeInfo.industryIdentifiers[i].type == "ISBN_10") {
                        markup += "<div class='select-book-isbn'><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN10:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</strong> " + book.volumeInfo.industryIdentifiers[i].identifier + "</div>";
                    }
                }
            }
            var authorsLength = $(book.volumeInfo.authors).length;
            if (authorsLength > 0) {
                markup += "<div class='select-book-author'><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Authors:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</strong> ";
                var lastIndex = authorsLength - 1;
                for (i = 0; i < authorsLength; i++) {
                    markup += book.volumeInfo.authors[i];
                    if (lastIndex != i) {
                        markup += ", ";
                    }
                }
                markup += "</div>";
            }

            markup += "</div></div>";
            return markup;
        }
        function formatBookSelection(book) {
            return book.volumeInfo.title || book.text;
        }
        $(document).on('click', '#filter-books', function (e) {
            e.preventDefault();
            var searchText = $(this).closest('.input-group').find('input').val();
            var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookListView");?>
';
            if (searchText) {
                $.ajax({
                    dataType: 'json',
                    type: 'POST',
                    url: url,
                    data: $('#searchText').serialize(),
                    beforeSend: function () {
                        app.card.loading.start('#books-block');
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                $('#books-block').html(data.html);
                                app.bootstrap_select();
                                app.tooltip_popover();
                                app.checkbox_radio();
                            }
                        }
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    },
                    complete: function () {
                        app.card.loading.finish('#books-block');
                    }
                });
            }
        });
        $(document).on('click', '#add-book', function (e) {
            e.preventDefault();
            var bookEditUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookEdit",array());?>
',
                    url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookByGoogleDataCreate",array());?>
',
                    id = $('#bookId').val();
            if (id) {
                $.ajax({
                    dataType: 'json',
                    type: 'POST',
                    url: url.replace("[googleBookId]", id),
                    beforeSend: function () {
                        app.card.loading.start('#add-book-block .card');
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                app.notification('success', data.success);
                                var markup = "<a href='" + bookEditUrl.replace("[bookId]", data.bookId) + "' target='_blank' class='btn btn-outline-info'><i class='fa fa-eye' aria-hidden='true'></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
View Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>";
                                $('.google-result').html(markup);
                            }
                        }
                    },
                    complete: function () {
                        app.card.loading.finish('#add-book-block .card');
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    }
                });
            } else {
                app.notification('error', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book is required<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                return false;
            }
        });
        $(document).on('click', '.delete-book', function (e) {
            var url = $(this).attr('data-url');
            var row = $(this).closest('tr');
            $.ajax({
                dataType: 'json',
                type: 'POST',
                url: url,
                beforeSend: function () {
                    app.card.loading.start('#books-block');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            app.notification('success', data.success);
                            $(row).remove();
                        }
                    }
                },
                complete: function () {
                    app.card.loading.finish('#books-block');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $(document).on('change', '#countPerPage', function (e) {
            var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookListView");?>
';
            $.ajax({
                type: "POST",
                url: url,
                data: $('#books-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order'),
                dataType: 'json',
                beforeSend: function () {
                    app.card.loading.start('#books-block');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            $('#books-block').html(data.html);
                            app.bootstrap_select();
                            app.tooltip_popover();
                            app.checkbox_radio();
                        }
                    }
                },
                complete: function () {
                    app.card.loading.finish('#books-block');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $(document).on('change', '#books-sort', function (e) {
            var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookListView");?>
';
            $.ajax({
                type: "POST",
                url: url,
                data: $('#books-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order'),
                dataType: 'json',
                beforeSend: function () {
                    app.card.loading.start('#books-block');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            $('#books-block').html(data.html);
                            app.bootstrap_select();
                            app.tooltip_popover();
                            app.checkbox_radio();
                        }
                    }
                },
                complete: function () {
                    app.card.loading.finish('#books-block');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $(document).on('click', '.ajax-page', function (e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                data: $('#books-sort, #countPerPage, #searchText').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order'),
                dataType: 'json',
                url: $(this).attr('href'),
                beforeSend: function () {
                    app.card.loading.start('#books-block');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            $('#books-block').html(data.html);
                            app.bootstrap_select();
                            app.tooltip_popover();
                            app.checkbox_radio();
                        }
                    }
                },
                complete: function () {
                    app.card.loading.finish('#books-block');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerCustomJs'} */
}
