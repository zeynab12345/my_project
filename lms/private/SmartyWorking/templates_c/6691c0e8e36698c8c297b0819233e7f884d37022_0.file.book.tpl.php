<?php
/* Smarty version 3.1.31, created on 2023-06-09 23:32:51
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\books\book.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64839a83296793_66357795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6691c0e8e36698c8c297b0819233e7f884d37022' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\books\\book.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/books/book-hidden-fields-controls.tpl' => 1,
    'file:admin/books/book-hidden-custom-fields-controls.tpl' => 1,
    'file:admin/books/book-fields-controls.tpl' => 2,
    'file:admin/books/book-custom-fields-controls.tpl' => 2,
    'file:admin/books/bookIssueLogs.tpl' => 1,
  ),
),false)) {
function content_64839a83296793_66357795 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
if (!is_callable('smarty_function_unset')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\function.unset.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80949822764839a83152fd2_54521016', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188172166364839a83163438_03986411', 'toolbar');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126561843964839a8316efa0_55377613', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98538151264839a83170b16_34194384', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79815565464839a8323f4f8_54834778', 'footerPageJs');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202900698264839a83242842_52127398', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_80949822764839a83152fd2_54521016 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_80949822764839a83152fd2_54521016',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['action']->value == "create") {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Book<?php $_block_repeat=false;
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
Edit Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'title'} */
/* {block 'toolbar'} */
class Block_188172166364839a83163438_03986411 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'toolbar' => 
  array (
    0 => 'Block_188172166364839a83163438_03986411',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['book']->value)) {?>
        <div class="heading-elements">
            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookClone",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));?>
" class="btn btn-outline-info btn-sm btn-icon-fixed clone-this-book">
                <span class="btn-icon"><i class="far fa-clone"></i></span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Clone<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            </a>
        </div>
    <?php }
}
}
/* {/block 'toolbar'} */
/* {block 'headerCss'} */
class Block_126561843964839a8316efa0_55377613 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_126561843964839a8316efa0_55377613',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/css/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/summernote/summernote-bs4.css" rel="stylesheet"/>
<?php
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_98538151264839a83170b16_34194384 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_98538151264839a83170b16_34194384',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['action']->value == "create") {?>
        <?php $_smarty_tpl->_assignInScope('route', $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookCreate"));
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['book']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('route', $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookEdit",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId())));
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "delete") {?>
        <?php $_smarty_tpl->_assignInScope('route', '');
?>
    <?php }?>
    <div class="modal fade" id="book-search-by-isbn-modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body card result-books-by-isbn mb-0">
                    <div id="result-books-by-isbn"></div>
                </div>
            </div>
        </div>
    </div>
    <?php if (isset($_smarty_tpl->tpl_vars['bookLayoutSettings']->value) && $_smarty_tpl->tpl_vars['bookLayoutSettings']->value->getLayoutContainers() != null) {?>
        <?php $_smarty_tpl->_assignInScope('tempBookVisibleFieldList', $_smarty_tpl->tpl_vars['bookVisibleFieldList']->value);
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bookLayoutSettings']->value->getLayoutContainers(), 'container', false, NULL, 'container', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['container']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['container']->value->getElements() != null) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['container']->value->getElements(), 'element', false, NULL, 'element', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
?>
                    <?php echo smarty_function_unset(array('array'=>'tempBookVisibleFieldList','index'=>$_smarty_tpl->tpl_vars['element']->value->getName()),$_smarty_tpl);?>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    <?php }?>
    
    <form action="<?php echo $_smarty_tpl->tpl_vars['route']->value;?>
" method="post" class="book-form validate" data-edit="<?php if ($_smarty_tpl->tpl_vars['action']->value == "create") {?>false<?php } else { ?>true<?php }?>">
        <ul class="nav nav-tabs special-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#general" role="tab">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
General<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#images" role="tab">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Images<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#seo" role="tab">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
SEO<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#copies" role="tab">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Copies<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                </a>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("enableBookLogs")) {?>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#logs" role="tab">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Logs<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                </a>
            </li>
            <?php }?>
        </ul>
        <div class="tab-content">
            <div class="tab-pane card p-20 active" id="general" role="tabpanel" aria-labelledby="general-tab">
                <?php if (isset($_smarty_tpl->tpl_vars['bookLayoutSettings']->value) && $_smarty_tpl->tpl_vars['bookLayoutSettings']->value->getLayoutContainers() != null) {?>
                    <?php if ($_smarty_tpl->tpl_vars['tempBookVisibleFieldList']->value != null) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tempBookVisibleFieldList']->value, 'title', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['title']->value) {
?>
                            <?php $_smarty_tpl->_assignInScope('bookClass', "KAASoft\Database\Entity\General\Book");
?>
                            <?php $_prefixVariable1 = $_smarty_tpl->tpl_vars['bookClass']->value;
$_smarty_tpl->_assignInScope('customField', $_prefixVariable1::getCustomField($_smarty_tpl->tpl_vars['key']->value));
?>
                            <?php if ($_smarty_tpl->tpl_vars['customField']->value == null) {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:admin/books/book-hidden-fields-controls.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('control'=>$_smarty_tpl->tpl_vars['key']->value), 0, true);
?>

                            <?php } else { ?>
                                <?php $_smarty_tpl->_subTemplateRender('file:admin/books/book-hidden-custom-fields-controls.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('control'=>$_smarty_tpl->tpl_vars['customField']->value->getControl(),'title'=>$_smarty_tpl->tpl_vars['customField']->value->getTitle(),'name'=>$_smarty_tpl->tpl_vars['customField']->value->getName(),'listValues'=>$_smarty_tpl->tpl_vars['customField']->value->getListValues()), 0, true);
?>

                            <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    <?php }?>
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <?php $_smarty_tpl->_assignInScope('row', -1);
?>
                            <?php if ($_smarty_tpl->tpl_vars['bookLayoutSettings']->value->getContainer('content')->getElements() != null) {?>
                                <?php $_smarty_tpl->_assignInScope('elements', $_smarty_tpl->tpl_vars['bookLayoutSettings']->value->getContainer('content')->getElements());
?>
                                <?php $_smarty_tpl->_assignInScope('elementsCount', count($_smarty_tpl->tpl_vars['elements']->value));
?>
                                <?php
$_smarty_tpl->tpl_vars['index'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['index']->step = 1;$_smarty_tpl->tpl_vars['index']->total = (int) ceil(($_smarty_tpl->tpl_vars['index']->step > 0 ? $_smarty_tpl->tpl_vars['elementsCount']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['elementsCount']->value-1)+1)/abs($_smarty_tpl->tpl_vars['index']->step));
if ($_smarty_tpl->tpl_vars['index']->total > 0) {
for ($_smarty_tpl->tpl_vars['index']->value = 0, $_smarty_tpl->tpl_vars['index']->iteration = 1;$_smarty_tpl->tpl_vars['index']->iteration <= $_smarty_tpl->tpl_vars['index']->total;$_smarty_tpl->tpl_vars['index']->value += $_smarty_tpl->tpl_vars['index']->step, $_smarty_tpl->tpl_vars['index']->iteration++) {
$_smarty_tpl->tpl_vars['index']->first = $_smarty_tpl->tpl_vars['index']->iteration == 1;$_smarty_tpl->tpl_vars['index']->last = $_smarty_tpl->tpl_vars['index']->iteration == $_smarty_tpl->tpl_vars['index']->total;?>
                                    <?php $_smarty_tpl->_assignInScope('element', $_smarty_tpl->tpl_vars['elements']->value[$_smarty_tpl->tpl_vars['index']->value]);
?>

                                    <?php if ($_smarty_tpl->tpl_vars['element']->value->getY() != $_smarty_tpl->tpl_vars['row']->value) {?>
                                        <?php $_smarty_tpl->_assignInScope('row', $_smarty_tpl->tpl_vars['element']->value->getY());
?>
                                        <div class="row">
                                    <?php }?>

                                    <div class="col-lg-<?php echo $_smarty_tpl->tpl_vars['element']->value->getWidth();?>
">
                                        <?php $_smarty_tpl->_assignInScope('bookClass', "KAASoft\Database\Entity\General\Book");
?>
                                        <?php $_prefixVariable2 = $_smarty_tpl->tpl_vars['bookClass']->value;
$_smarty_tpl->_assignInScope('customField', $_prefixVariable2::getCustomField($_smarty_tpl->tpl_vars['element']->value->getName()));
?>
                                        <?php if ($_smarty_tpl->tpl_vars['customField']->value == null) {?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:admin/books/book-fields-controls.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('control'=>$_smarty_tpl->tpl_vars['element']->value->getName()), 0, true);
?>

                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:admin/books/book-custom-fields-controls.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('control'=>$_smarty_tpl->tpl_vars['customField']->value->getControl(),'title'=>$_smarty_tpl->tpl_vars['customField']->value->getTitle(),'name'=>$_smarty_tpl->tpl_vars['customField']->value->getName(),'listValues'=>$_smarty_tpl->tpl_vars['customField']->value->getListValues()), 0, true);
?>

                                        <?php }?>
                                    </div>

                                    <?php if ((isset($_smarty_tpl->tpl_vars['elements']->value[$_smarty_tpl->tpl_vars['index']->value+1]) && $_smarty_tpl->tpl_vars['elements']->value[$_smarty_tpl->tpl_vars['index']->value+1]->getY() != $_smarty_tpl->tpl_vars['row']->value) || $_smarty_tpl->tpl_vars['index']->value+1 == $_smarty_tpl->tpl_vars['elementsCount']->value) {?>
                                        </div>
                                    <?php }?>

                                <?php }
}
?>

                            <?php }?>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <?php if ($_smarty_tpl->tpl_vars['bookLayoutSettings']->value->getContainer('sidebar')->getElements() != null) {?>
                                <?php $_smarty_tpl->_assignInScope('elements', $_smarty_tpl->tpl_vars['bookLayoutSettings']->value->getContainer('sidebar')->getElements());
?>
                                <?php $_smarty_tpl->_assignInScope('elementsCount', count($_smarty_tpl->tpl_vars['elements']->value));
?>
                                <?php
$_smarty_tpl->tpl_vars['index'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['index']->step = 1;$_smarty_tpl->tpl_vars['index']->total = (int) ceil(($_smarty_tpl->tpl_vars['index']->step > 0 ? $_smarty_tpl->tpl_vars['elementsCount']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['elementsCount']->value-1)+1)/abs($_smarty_tpl->tpl_vars['index']->step));
if ($_smarty_tpl->tpl_vars['index']->total > 0) {
for ($_smarty_tpl->tpl_vars['index']->value = 0, $_smarty_tpl->tpl_vars['index']->iteration = 1;$_smarty_tpl->tpl_vars['index']->iteration <= $_smarty_tpl->tpl_vars['index']->total;$_smarty_tpl->tpl_vars['index']->value += $_smarty_tpl->tpl_vars['index']->step, $_smarty_tpl->tpl_vars['index']->iteration++) {
$_smarty_tpl->tpl_vars['index']->first = $_smarty_tpl->tpl_vars['index']->iteration == 1;$_smarty_tpl->tpl_vars['index']->last = $_smarty_tpl->tpl_vars['index']->iteration == $_smarty_tpl->tpl_vars['index']->total;?>
                                    <?php $_smarty_tpl->_assignInScope('element', $_smarty_tpl->tpl_vars['elements']->value[$_smarty_tpl->tpl_vars['index']->value]);
?>

                                    <?php if ($_smarty_tpl->tpl_vars['element']->value->getY() != $_smarty_tpl->tpl_vars['row']->value) {?>
                                        <?php $_smarty_tpl->_assignInScope('row', $_smarty_tpl->tpl_vars['element']->value->getY());
?>
                                        <div class="row">
                                    <?php }?>

                                    <div class="col-lg-<?php echo $_smarty_tpl->tpl_vars['element']->value->getWidth()*3;?>
">
                                        <?php $_smarty_tpl->_assignInScope('bookClass', "KAASoft\Database\Entity\General\Book");
?>
                                        <?php $_prefixVariable3 = $_smarty_tpl->tpl_vars['bookClass']->value;
$_smarty_tpl->_assignInScope('customField', $_prefixVariable3::getCustomField($_smarty_tpl->tpl_vars['element']->value->getName()));
?>
                                        <?php if ($_smarty_tpl->tpl_vars['customField']->value == null) {?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:admin/books/book-fields-controls.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('control'=>$_smarty_tpl->tpl_vars['element']->value->getName()), 0, true);
?>

                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:admin/books/book-custom-fields-controls.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('control'=>$_smarty_tpl->tpl_vars['customField']->value->getControl(),'title'=>$_smarty_tpl->tpl_vars['customField']->value->getTitle(),'name'=>$_smarty_tpl->tpl_vars['customField']->value->getName(),'listValues'=>$_smarty_tpl->tpl_vars['customField']->value->getListValues()), 0, true);
?>

                                        <?php }?>
                                    </div>

                                    <?php if ((isset($_smarty_tpl->tpl_vars['elements']->value[$_smarty_tpl->tpl_vars['index']->value+1]) && $_smarty_tpl->tpl_vars['elements']->value[$_smarty_tpl->tpl_vars['index']->value+1]->getY() != $_smarty_tpl->tpl_vars['row']->value) || $_smarty_tpl->tpl_vars['index']->value+1 == $_smarty_tpl->tpl_vars['elementsCount']->value) {?>
                                        </div>
                                    <?php }?>

                                <?php }
}
?>

                            <?php }?>
                        </div>
                    </div>
                <?php }?>

                <div class="row mt-3">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-secondary disabled pull-right save-book">
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
                    </div>
                </div>
            </div>

            <div class="tab-pane card" id="images" role="tabpanel" aria-labelledby="images-tab">
                <div class="drop-zone">
                    <label><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Drag & Drop your files or <span>Browse</span><?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>

                    <input type="file" accept="image/png, image/jpeg, image/gif" id="book-images" class="disabledIt" multiple />
                </div>
                <div class="book-image-list row" id="book-image-list" data-count="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['book']->value->getImages() != null) {
echo count($_smarty_tpl->tpl_vars['book']->value->getImages());
} else { ?>0<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['book']->value->getImages() != null) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['book']->value->getImages(), 'image', false, NULL, 'image', array (
));
$_smarty_tpl->tpl_vars['image']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->index++;
$__foreach_image_3_saved = $_smarty_tpl->tpl_vars['image'];
?>
                            <div class="card book-image col-lg-3 text-center" id="book-img-<?php echo $_smarty_tpl->tpl_vars['image']->index;?>
">
                                <button type="button" class="btn btn-info remove-book-image" data-id="<?php echo $_smarty_tpl->tpl_vars['image']->value->getId();?>
"><i class="far fa-trash-alt"></i></button>
                                <div class="book-img-wrapper">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->getWebPath();?>
" class="img-fluid">
                                </div>
                                <input type="hidden" name="imageIds[]" value="<?php echo $_smarty_tpl->tpl_vars['image']->value->getId();?>
">
                            </div>
                        <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_3_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    <?php }?>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-secondary disabled pull-right m-3 save-book">
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
                    </div>
                </div>
            </div>
            <div class="tab-pane card p-20" id="seo" role="tabpanel" aria-labelledby="seo-tab">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="metaTitle"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Meta Title<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                            <input type="text" name="metaTitle" class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['book']->value->getMetaTitle();
}?>">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="metaKeywords"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Meta Keywords<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                            <select name="metaKeySelect" id="meta-key" class="form-control" multiple>
                                <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {?>
                                    <?php $_smarty_tpl->_assignInScope('tagList', explode(",",$_smarty_tpl->tpl_vars['book']->value->getMetaKeywords()));
?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tagList']->value, 'tag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?>
                                        <?php if ($_smarty_tpl->tpl_vars['tag']->value != null) {?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</option>
                                        <?php }?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                <?php }?>
                            </select>
                            <input type="hidden" name="metaKeywords" id="metaKeyList" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['book']->value->getMetaKeywords();
}?>">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="metaDescription"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Meta Description<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                            <textarea name="metaDescription" cols="30" rows="2" style="width:100% !important" class="form-control"><?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['book']->value->getMetaDescription();
}?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-secondary disabled pull-right save-book">
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
                    </div>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("enableBookLogs")) {?>
            <div class="tab-pane card" id="logs" role="tabpanel" aria-labelledby="logs-tab">
                <div class="row">
                    <div class="col-sm-12" id="issueLogList">
                        <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['book']->value->getLogs() != null) {?>
                            <?php $_smarty_tpl->_subTemplateRender("file:admin/books/bookIssueLogs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('issueLogs'=>$_smarty_tpl->tpl_vars['book']->value->getLogs()), 0, false);
?>

                        <?php } else { ?>
                            <div class="card-body text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
This book has never been requested or issued.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>
                        <?php }?>
                    </div>
                </div>
            </div>
            <?php }?>
            <div class="tab-pane card" id="copies" role="tabpanel" aria-labelledby="copies-tab">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="copiesList">
                            <div class="table-responsive-sm">
                                <table class="table table-hover table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book Copy ID<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                        <th style="width: 250px;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book Status<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                        <th style="width: 155px;" class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Issue Status<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                        <th style="width: 70px;"></th>
                                    </tr>
                                    </thead>
                                    <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {?>
                                    <?php $_smarty_tpl->_assignInScope('bookCopies', $_smarty_tpl->tpl_vars['book']->value->getBookCopies());
?>
                                    <?php $_smarty_tpl->_assignInScope('bookCopiesCount', count($_smarty_tpl->tpl_vars['bookCopies']->value));
?>
                                    <?php }?>
                                    <tbody class="repeat-container book-copies-container" data-row-length="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['bookCopiesCount']->value != null && $_smarty_tpl->tpl_vars['bookCopiesCount']->value > 0) {
echo $_smarty_tpl->tpl_vars['bookCopiesCount']->value;
} else { ?>0<?php }?>">
                                    <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['bookCopies']->value) && $_smarty_tpl->tpl_vars['bookCopies']->value != null && $_smarty_tpl->tpl_vars['bookCopiesCount']->value > 0) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bookCopies']->value, 'copy', false, NULL, 'copy', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['copy']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_copy']->value['index']++;
?>
                                            <tr class="book-copy" data-id="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_copy']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_copy']->value['index'] : null);?>
">
                                                <td>
                                                    <input name="bookCopies[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_copy']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_copy']->value['index'] : null);?>
][id]" class="copy-id"  id="book-copy-id-<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_copy']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_copy']->value['index'] : null);?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['copy']->value->getId();?>
"/>
                                                    <input class="form-control copy-sn" data-sn="<?php echo $_smarty_tpl->tpl_vars['copy']->value->getBookSN();?>
" type="text" name="bookCopies[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_copy']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_copy']->value['index'] : null);?>
][bookSN]" value="<?php echo $_smarty_tpl->tpl_vars['copy']->value->getBookSN();?>
">
                                                </td>
                                                <td>
                                                    <?php if (isset($_smarty_tpl->tpl_vars['bookStatuses']->value) && $_smarty_tpl->tpl_vars['bookStatuses']->value !== null) {?>
                                                        <select name="bookCopies[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_copy']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_copy']->value['index'] : null);?>
][status]" class="form-control custom-select">
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bookStatuses']->value, 'status', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['status']->value) {
?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['copy']->value->getStatus() == $_smarty_tpl->tpl_vars['key']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['status']->value;?>
</option>
                                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                                        </select>
                                                    <?php }?>
                                                </td>
                                                <td class="text-center">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['issueStatuses']->value, 'status', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['status']->value) {
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['copy']->value->getIssueStatus() == $_smarty_tpl->tpl_vars['key']->value) {?>
                                                            <span class="badge <?php if ($_smarty_tpl->tpl_vars['copy']->value->getIssueStatus() == 'LOST') {?>badge-danger<?php } elseif ($_smarty_tpl->tpl_vars['copy']->value->getIssueStatus() == 'ISSUED') {?>badge-warning<?php } else { ?>badge-success<?php }?>">
                                                                <?php echo $_smarty_tpl->tpl_vars['status']->value;?>

                                                            </span>
                                                        <?php }?>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                                </td>
                                                <td class="text-center">
                                                    <div class="dropdown" data-trigger="hover" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
                                                        <button class="btn btn-outline-info no-border" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                                                <button class="btn btn-outline-danger delete-table-row" data-delete="<?php ob_start();
echo $_smarty_tpl->tpl_vars['copy']->value->getId();
$_prefixVariable4=ob_get_clean();
echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookCopyDelete",array('bookCopyId'=>$_prefixVariable4));?>
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
                                    <tr class="copy-template book-copy" data-id="tempId">
                                        <td>
                                            <input name="bookCopies[tempId][id]" class="copy-id" id="book-copy-id-tempId" type="hidden" value="" disabled>
                                            <input name="bookCopies[tempId][bookSN]" data-sn=""  class="form-control copy-sn" type="text" disabled>
                                        </td>
                                        <td>
                                            <?php if (isset($_smarty_tpl->tpl_vars['bookStatuses']->value) && $_smarty_tpl->tpl_vars['bookStatuses']->value !== null) {?>
                                                <select name="bookCopies[tempId][status]" class="form-control custom-select" disabled>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bookStatuses']->value, 'status', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['status']->value) {
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['status']->value;?>
</option>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                                </select>
                                            <?php }?>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge badge-success"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Available<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="dropdown" data-trigger="hover" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
                                                <button class="btn btn-outline-info no-border" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                                        <button class="btn btn-outline-danger delete-table-row">
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
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-outline-success no-border add-copy" data-container=".book-copies-container" data-trigger="hover" data-toggle="tooltip" data-title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Book Copy<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <button type="submit" class="btn mb-3 mr-3 btn-outline-secondary disabled pull-right save-book">
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
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerPageJs'} */
class Block_79815565464839a8323f4f8_54834778 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_79815565464839a8323f4f8_54834778',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/select2/select2.full.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/jasnyupload/fileinput.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/jquery-validate/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/bootstrap-select/bootstrap-select.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/inputmask/jquery.inputmask.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/summernote/summernote-bs4.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerPageJs'} */
/* {block 'footerCustomJs'} */
class Block_202900698264839a83242842_52127398 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_202900698264839a83242842_52127398',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $('.add-copy').on('click', function (e) {
                e.preventDefault();
                var container = $(this).attr('data-container');
                console.log(container);
                console.log($(container).find('.copy-template'));
                var template = $(container).find('.copy-template');
                var newRow = template.clone();
                var rowLength = $(container).attr('data-row-length');
                var count = parseInt(rowLength) + 1;
                $('input,textarea,select', newRow).each(function () {
                    $.each(this.attributes, function (index, element) {
                        this.value = this.value.replace('tempId', count);
                    });
                });
                newRow.removeClass('copy-template').attr('data-id', count);
                newRow.find('input,textarea,select').removeAttr('disabled');
                newRow.appendTo(container);
                tooltipsterInit();
                bookCopyValidation(newRow.find(".copy-sn"));


                $(container).attr('data-row-length',count);
                app.tooltip_popover();
                return false;
            });

            $(document).on('click', '.delete-table-row', function (e) {
                e.preventDefault();
                var url = $(this).attr('data-delete');
                var row = $(this).closest('tr');
                if (url) {
                    $.ajax({
                        dataType: 'json',
                        method: 'POST',
                        url: $(this).attr('data-delete'),
                        beforeSend: function () {
                            app.card.loading.start($("#copies"));
                        },
                        success: function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    row.remove();
                                    app.notification('success', data.success);
                                }
                            }
                        },
                        error: function (jqXHR, exception) {
                            app.notification('error', app.getErrorMessage(jqXHR, exception));
                        },
                        complete: function () {
                            app.card.loading.finish($("#copies"));
                        }
                    });
                } else {
                    row.remove();
                    $('.tooltip.show').remove();
                }
            });


            var bookGoogleSearchByIsbnPublicUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookGoogleSearchByIsbnPublic",array());?>
';
            var bookByGoogleDataGetUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookByGoogleDataGet",array());?>
';
            $(document).on('click', '.select-book-by-isbn', function (e) {
                e.preventDefault();
                var googleBookId = $(this).attr('data-id');
                $.ajax({
                    dataType: 'json',
                    method: 'POST',
                    url: bookByGoogleDataGetUrl.replace('[googleBookId]', googleBookId),
                    beforeSend: function (data) {
                        app.card.loading.start('.result-books-by-isbn');
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                app.notification('success', data.success);
                                app.notification('success', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Please don\'t forget to save the book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');

                                $('#book-search-by-isbn-modal').modal('hide');
                                if(data.book.title) {
                                    $('.book-field-title').val(data.book.title);
                                }
                                if(data.book.publishingYear) {
                                    $('.book-field-publishing-year').val(data.book.publishingYear);
                                }
                                if(data.book.ISBN10) {
                                    $('.book-field-isbn10').val(data.book.ISBN10);
                                }
                                if(data.book.ISBN13) {
                                    $('.book-field-isbn13').val(data.book.ISBN13);
                                }
                                if(data.book.pages) {
                                    $('.book-field-pages').val(data.book.pages);
                                }
                                if(data.book.description) {
                                    $('#content-box').summernote('code', data.book.description);
                                }
                                if(data.book.language){
                                    $('.book-field-lang').val(data.book.language);
                                }
                                if(data.book.publisher) {
                                    var publisher = new Option(data.book.publisher.name, data.book.publisher.id, true, true);
                                    $('#publisherId').val(null).append(publisher).trigger('change');
                                }
                                if(data.book.authors) {
                                    $('#authors').val(null);
                                    for (var i = 0; i < data.book.authors.length; i++) {
                                        var item = data.book.authors[i];
                                        var insertData = {
                                            id: item.id,
                                            text: item.lastName
                                        };
                                        var author = new Option(insertData.text, insertData.id, false, true);
                                        $('#authors').append(author).trigger('change');
                                    }
                                }
                                if(data.book.coverId && data.cover){
                                    $('.coverId').val(data.book.coverId);
                                    var coverDropzone = $('.cover-drop-zone');
                                    if($(coverDropzone).hasClass('cover-exist')) {
                                        $(coverDropzone).find('img').remove();
                                        $(coverDropzone).append('<img src="' + data.cover.webPath + '" class="img-fluid">');
                                    } else {
                                        $(coverDropzone).addClass('cover-exist').find('.remove-book-cover').removeClass('d-none');
                                        $(coverDropzone).append('<img src="' + data.cover.webPath + '" class="img-fluid">');
                                    }
                                }
                            }
                        }
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    },
                    complete: function (data) {
                        app.card.loading.finish('.result-books-by-isbn');
                    }
                });
            });
            $('.search-by-isbn').on('click', function (e) {
                e.preventDefault();
                var container = $('#result-books-by-isbn');
                if($('.isbn-code-13').val()) {
                $.ajax({
                    dataType: 'json',
                    method: 'POST',
                    data: 'searchText=' + $('.isbn-code-13').val(),
                    url: bookGoogleSearchByIsbnPublicUrl,
                    beforeSend: function (data) {
                        $('#book-search-by-isbn-modal').modal('show');
                        app.card.loading.start('.result-books-by-isbn');
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                var books = $.parseJSON(data.books);
                                $(container).mCustomScrollbar('destroy');
                                $(container).html('');
                                if(books.items) {
                                    for (var i = 0; i < books.items.length; i++) {
                                        var item = books.items[i];
                                        $('#result-books-by-isbn').append(formatBook(item));
                                    }
                                } else {
                                    app.notification('information', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Nothing found (Make sure Google API setting is correct)<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                                    $('#book-search-by-isbn-modal').modal('hide');
                                }
                                $(container).mCustomScrollbar({
                                    setHeight: '100%',
                                    axis: "y",
                                    autoHideScrollbar: true,
                                    scrollInertia: 200,
                                    advanced: {
                                        autoScrollOnFocus: false
                                    }
                                });
                            }
                        }
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    },
                    complete: function (data) {
                        app.card.loading.finish('.result-books-by-isbn');
                    }
                });
                } else {
                    app.notification('information', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN is required.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                }
            });
            function formatBook(book) {
                if (book.loading) return book.text;
                var markup = "<div class='select-book row'>";
                markup += "<div class='select-book-cover col-lg-3'>";
                if (book.volumeInfo.imageLinks && book.volumeInfo.imageLinks.smallThumbnail) {
                    markup += "<img class='img-fluid' src='" + book.volumeInfo.imageLinks.smallThumbnail + "' />";
                } else {
                    markup += "<img class='img-fluid' src='<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noImagePath");?>
' />";
                }
                markup += "</div>";
                markup += "<div class='select-book-info col-lg-9'>";
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
                markup += "</div>";
                markup += "<div class='select-book-link col-lg-12'><a href='#' data-id='" + book.id + "' class='btn btn-info btn-block select-book-by-isbn'><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Select Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a></div>";
                markup += "</div>";
                return markup;
            }

            $('.drop-zone').on('dragover', function() {
                $(this).addClass('hover');
            });
            $('.drop-zone').on('dragleave', function() {
                $(this).removeClass('hover');
            });
            var coverUploadUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("coverUpload",array());?>
';
            var imageUploadUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookImageUpload",array());?>
';
            var imageDeleteUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("imageDelete",array());?>
';
            var eBookUploadUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("electronicBookUpload",array());?>
';
            var eBookGetUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("electronicBookGet",array());?>
';
            var eBookDeleteUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("electronicBookDelete",array());?>
';

            $('#book-images').on('change', bookImagesUpload);
            function bookImagesUpload(event) {
                if (window.File && window.FileReader && window.FileList && window.Blob) {
                    var files = event.target.files;
                    var hiddenImageIdInput;
                    var bookListElement = $('.book-image-list');

                    function upload() {
                        var imgElem = '#book-img-' + index;
                        var imgData = new FormData();
                        imgData.set('file', file);
                        queue.push($.ajax({
                            dataType: 'json',
                            method: 'POST',
                            processData: false,
                            contentType: false,
                            data: imgData,
                            url: imageUploadUrl,
                            beforeSend: function (data) {
                                app.card.loading.start($(imgElem));
                            },
                            success: function (data) {
                                if (data.redirect) {
                                    window.location.href = data.redirect;
                                } else {
                                    if (data.error) {
                                        app.notification('error', data.error);
                                    } else {
                                        hiddenImageIdInput = '<input type="hidden" name="imageIds[]" value="'+data.imageId+'">';
                                        $(imgElem).find('.remove-book-image').attr('data-id', data.imageId);
                                        $(imgElem).append(hiddenImageIdInput);
                                        app.notification('success', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Image successfully uploaded<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                                    }
                                }
                            },
                            error: function (jqXHR, exception) {
                                app.notification('error', app.getErrorMessage(jqXHR, exception));
                            },
                            complete: function (data) {
                                app.card.loading.finish($(imgElem));
                            }
                        }));
                    }
                    var index = parseInt($(bookListElement).attr('data-count'));
                    for (var i = 0, queue = []; files[i]; i++) {
                        var file = files[i];
                        if ((/^image\/(gif|png|jpeg)$/i).test(file.type)) {
                            var reader = new FileReader();
                            reader.onload = (function(index) {
                                return function(e) {
                                    var tpl = '<div class="card book-image col-lg-3 text-center" id="book-img-' + index + '">' +
                                            '<button type="button" class="btn btn-info remove-book-image"><i class="far fa-trash-alt"></i></button>' +
                                            '<div class="book-img-wrapper"><img class="img-fluid" src="' + e.target.result + '"></div>' +
                                            '<div class="card-loading-layer"><div class="app-spinner loading loading-primary"></div></div>'+
                                            '</div>';
                                    $(bookListElement).append(tpl);
                                };
                            })(index);
                            reader.readAsDataURL(file);
                            upload(index);
                            index++;
                            $(bookListElement).attr('data-count', index);
                        } else {
                            app.notification('error', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Uploaded file is not a valid image. Only JPG, PNG and GIF files are allowed.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                        }
                    }
                } else {
                    app.notification('error', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
The File APIs are not fully supported in this browser.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                }
                $.when.apply($, queue).then(function () {
                    console.log(queue);
                    console.log(queue.length);
                    $('.drop-zone').removeClass('hover');
                    if(queue.length > 0) {
                        $('.book-form').attr('data-changed', true);
                        saveBook();
                    }
                });
            }
            $(document).on('click', '.remove-book-image', function () {
                $('.book-form').attr('data-changed', true);
                var elem = $(this).closest('.card');
                var imgId = $(this).attr('data-id');
                var imgCount = $('.book-image-list').attr('data-count');
                if (imgId != undefined && imgId != null && imgId > 0) {
                    $.ajax({
                        dataType: 'json',
                        method: 'POST',
                        url: imageDeleteUrl.replace("[imageId]", imgId),
                        beforeSend: function (data) {
                            app.card.loading.start(elem);
                        },
                        success: function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    $(elem).remove();
                                    $('.book-image-list').attr('data-count', imgCount - 1);
                                    saveBook();
                                }
                            }
                        },
                        error: function (jqXHR, exception) {
                            app.notification('error', app.getErrorMessage(jqXHR, exception));
                        },
                        complete: function (data) {
                            app.card.loading.finish(elem);
                        }
                    });
                }
            });

            $('#book-cover').on('change', bookCoverUpload);
            function bookCoverUpload(event) {
                var dropZone = $('.cover-drop-zone');
                function upload() {
                    var coverId = $('.coverId').val();
                    var imgData = new FormData();
                    imgData.set('file', file);
                    if (coverId) {
                        imgData.set('coverId', coverId);
                    }
                    $.ajax({
                        dataType: 'json',
                        method: 'POST',
                        processData: false,
                        contentType: false,
                        data: imgData,
                        url: coverUploadUrl,
                        beforeSend: function (data) {
                            app.card.loading.start('#cover-block');
                        },
                        success: function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    $('.remove-book-cover').attr('data-id', data.imageId);
                                    $('.coverId').val(data.imageId);
                                    app.notification('success', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Cover successfully uploaded<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                                    saveBook();
                                }
                            }
                        },
                        error: function (jqXHR, exception) {
                            app.notification('error', app.getErrorMessage(jqXHR, exception));
                        },
                        complete: function (data) {
                            app.card.loading.finish('#cover-block');
                        }
                    });
                }
                if (window.File && window.FileReader && window.FileList && window.Blob) {
                    var file = event.target.files[0];
                    if ((/^image\/(gif|png|jpeg)$/i).test(file.type)) {
                        var reader = new FileReader();
                        reader.readAsDataURL(file);
                        reader.onload = function (e) {
                            var img = '<img src="' + e.target.result + '" class="img-fluid">';
                            $(dropZone).find('img').remove();
                            $(dropZone).addClass('cover-exist').append(img);
                            $('.remove-book-cover').removeClass('d-none');
                            upload();
                        };
                    } else {
                        app.notification('error', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Uploaded file is not a valid image. Only JPG, PNG and GIF files are allowed.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                    }
                } else {
                    app.notification('error', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
The File APIs are not fully supported in this browser.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                }
            }
            $(document).on('click', '.remove-book-cover', function () {
                $('.book-form').attr('data-changed', true);
                var imgId = $(this).attr('data-id');
                if (imgId != undefined && imgId != null && imgId > 0) {
                    $.ajax({
                        dataType: 'json',
                        method: 'POST',
                        url: imageDeleteUrl.replace("[imageId]", imgId),
                        beforeSend: function (data) {
                            app.card.loading.start('#cover-block');
                        },
                        success: function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    $('.cover-drop-zone').removeClass('cover-exist').find('img').remove();
                                    $('.remove-book-cover').addClass('d-none');
                                    $('.coverId').val('');
                                    app.notification('success', data.success);
                                    saveBook();
                                }
                            }
                        },
                        error: function (jqXHR, exception) {
                            app.notification('error', app.getErrorMessage(jqXHR, exception));
                        },
                        complete: function (data) {
                            app.card.loading.finish('#cover-block');
                        }
                    });
                }
            });

            function basename(path) {
                return path.replace(/\\/g,'/').replace( /.*\//, '' );
            }
            $('#book-eBook').on('change', bookEBookUpload);
            function bookEBookUpload(event) {
                function upload() {
                    var eBookId = $('.eBookId').val();
                    var eBookData = new FormData();
                    eBookData.set('file', file);
                    if (eBookId) {
                        eBookData.set('eBookId', eBookId);
                    }
                    $.ajax({
                        dataType: 'json',
                        method: 'POST',
                        processData: false,
                        contentType: false,
                        data: eBookData,
                        url: eBookUploadUrl,
                        beforeSend: function (data) {
                            app.card.loading.start('#eBook-block');
                        },
                        success: function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    $('.remove-book-eBook').attr('data-id', data.eBookId).removeClass('d-none');
                                    $('.eBookId').val(data.eBookId);
                                    $('.download-eBook').removeClass('d-none').attr('href', eBookGetUrl.replace('[electronicBookId]', data.eBookId));
                                    $('.eBook-drop-zone .filename').text(basename(data.path));
                                    $('.eBook-drop-zone').addClass('eBook-exist');
                                    app.notification('success', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
eBook successfully uploaded<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                                    saveBook();
                                }
                            }
                        },
                        error: function (jqXHR, exception) {
                            app.notification('error', app.getErrorMessage(jqXHR, exception));
                        },
                        complete: function (data) {
                            app.card.loading.finish('#eBook-block');
                        }
                    });
                }
                if (window.File && window.FileReader && window.FileList && window.Blob) {
                    var file = event.target.files[0];
                    upload();
                } else {
                    app.notification('error', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
The File APIs are not fully supported in this browser.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                }
            }
            $(document).on('click', '.remove-book-eBook', function () {
                $('.book-form').attr('data-changed', true);
                var eBookId = $(this).attr('data-id');
                if (eBookId != undefined && eBookId != null && eBookId > 0) {
                    $.ajax({
                        dataType: 'json',
                        method: 'POST',
                        url: eBookDeleteUrl.replace("[electronicBookId]", eBookId),
                        beforeSend: function (data) {
                            app.card.loading.start('#eBook-block');
                        },
                        success: function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    $('.eBook-drop-zone').removeClass('eBook-exist').find('.filename').text('');
                                    $('.remove-book-eBook').addClass('d-none');
                                    $('.eBookId').val('');
                                    $('.download-eBook').addClass('d-none');
                                    app.notification('success', data.success);
                                    saveBook();
                                }
                            }
                        },
                        error: function (jqXHR, exception) {
                            app.notification('error', app.getErrorMessage(jqXHR, exception));
                        },
                        complete: function (data) {
                            app.card.loading.finish('#eBook-block');
                        }
                    });
                }
            });

            <?php if (!$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("bookUrlType")) {?>
            $('.gen-url').on('click', function (e) {
                e.preventDefault();
                var bookTitle = $('#book-title').val();
                $('#urlPath').val(app.generateSlug(bookTitle));
            });
            <?php }?>

            $('#content-box').summernote().on('summernote.change', function () {
                $('.book-form').attr('data-changed', true);
                $('.save-book').removeClass('btn-outline-secondary disabled').addClass('btn-outline-success');
            });
            $('.year-picker').datepicker({
                format: "yyyy",
                startView: 2,
                minViewMode: 2,
                maxViewMode: 2,
                keepOpen: true
            });
            $('.isbn-code-10, .isbn-code-13').on('change', function () {
                onlyDigits($(this));
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
                minimumInputLength: 2
            });
            var tagSearchUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("tagSearchPublic",array());?>
';
            $("#tags").select2({
                ajax: {
                    url: tagSearchUrl,
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
                minimumInputLength: 2
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
                minimumInputLength: 2
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
                minimumInputLength: 2
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
                                        if (item.firstName && item.lastName) {
                                            var text = item.firstName + ' ' + item.lastName;
                                        } else if (item.firstName) {
                                            text = item.firstName;
                                        } else if (item.lastName) {
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
                minimumInputLength: 2
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
                minimumInputLength: 2
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
                minimumInputLength: 2
            });
            $(document).on('click', '.ajax-page', function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: $(this).attr('href'),
                    beforeSend: function () {
                        app.card.loading.start('#logs');
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                $("#issueLogList").html(data.html);
                            }
                        }
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    },
                    complete: function () {
                        app.card.loading.finish('#logs');
                    }
                });
            });
            function tooltipsterInit() {
                $('.validate input:not(disabled),.validate select:not(disabled),.validate textarea:not(disabled)').tooltipster({
                    trigger: 'custom',
                    onlyOne: false,
                    position: 'bottom',
                    offsetY: -5,
                    theme: 'tooltipster-kaa'
                });
            }
            tooltipsterInit();
            $('.validate').validate({
                errorPlacement: function (error, element) {
                    if (element != undefined) {
                        $(element).tooltipster('update', $(error).text());
                        $(element).tooltipster('show');
                    }
                },
                success: function (label, element) {
                    $(element).tooltipster('hide');
                },
                messages: {
                    url: {
                        remote: jQuery.validator.format("<strong>{0}</strong> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
is already exist. Please use another URL<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
.")
                    }
                },
                rules: {
                    title: {
                        required: true
                    },
                    pages: {
                        number: true
                    },
                    price: {
                        number: true
                    },
                    publishingYear: {
                        number: true
                    },
                    ISBN10: {
                        digits: true,
                        maxlength: 10,
                        minlength: 10
                    },
                    ISBN13: {
                        digits: true,
                        maxlength: 13,
                        minlength: 13
                    }<?php if (!$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("bookUrlType")) {?>,
                    url: {
                        urlpath: true,
                        remote: {
                            param: {
                                delay: 500,
                                url: '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookUrlCheck",array());?>
',
                                type: "post",
                                data: {
                                    email: function () {
                                        return $("#urlPath").val();
                                    }
                                },
                                error: function (jqXHR, exception) {
                                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                                }
                            },
                            depends: function (element) {
                                return ($(element).val() !== $("#urlPath").attr('data-url'));
                            }
                        }
                    }
                    <?php }?>
                }
            });

            function bookCopyValidation(elem) {
                $(elem).rules("add", {
                    required:true,
                    remote: {
                        param: function(element) {
                            return {
                                delay: 500,
                                url: '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookSNCheck",array());?>
',
                                type: "post",
                                data: {
                                    bookSN: function () {
                                        return $(element).val();
                                    }
                                },
                                error: function (jqXHR, exception) {
                                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                                }
                            }
                        },
                        depends: function (element) {
                            return ($(element).val() !== $(element).attr('data-sn'));
                        }
                    },
                    messages: {
                        remote: jQuery.validator.format("<strong>{0}</strong> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
is already exist. Please use another Book Id<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
.")
                    }
                });
            }
            $('.copy-sn').each(function (index, element) {
                bookCopyValidation(element);
            });

            $('#meta-key').select2({
                multiple: true,
                tags: true,
                allowClear: true,
                language: {
                    noResults: function () {
                        return "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Please enter keywords<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
";
                    }
                }
            }).on('change.select2', function () {
                $("#metaKeyList").val($(this).val());
            });
            $(document).on('change', 'input,textarea,select', function () {
                $(this).closest('form').attr('data-changed', true);
                $('.save-book').removeClass('btn-outline-secondary disabled').addClass('btn-outline-success');
            });

            function onlyDigits(e) {
                var value = $(e).val().replace(/\D/g, '');
                return $(e).val(value);
            }

            var bookEditUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookEdit",array());?>
';
            var bookCopyDeleteUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookCopyDelete",array());?>
';
            var cloneBookUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookClone",array());?>
';
            $('.save-book').on('click', function (e) {
                e.preventDefault();
                saveBook();
            });
            function saveBook() {
                var form = $('.book-form');
                var dataEdit = form.attr('data-edit');
                var dataChanged = form.attr('data-changed');
                if (dataChanged == 'true') {
                    if ($(form).valid()) {
                        $.ajax({
                            dataType: 'json',
                            method: 'POST',
                            data: form.serialize(),
                            url: form.attr('action'),
                            beforeSend: function (data) {
                                app.card.loading.start('.tab-pane');
                            },
                            success: function (data) {
                                if (data.redirect) {
                                    window.location.href = data.redirect;
                                } else {
                                    if (data.error) {
                                        app.notification('error', data.error);
                                    } else {
                                        if(data.bookCopyIds && Object.keys(data.bookCopyIds).length > 0) {
                                            for (var key in data.bookCopyIds) {
                                                $('#book-copy-id-'+key).val(data.bookCopyIds[key]);
                                                $('#book-copy-id-'+key).closest('tr').find('.delete-table-row').attr('data-delete',bookCopyDeleteUrl.replace("[bookCopyId]", data.bookCopyIds[key]));
                                            }
                                        }
                                        form.attr('action', bookEditUrl.replace("[bookId]", data.bookId)).attr('data-changed', false);
                                        $('.clone-this-book').attr('href', cloneBookUrl.replace("[bookId]", data.bookId));
                                        app.notification('success', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Data has been saved successfully<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                                        $('.save-book').removeClass('btn-outline-success').addClass('btn-outline-secondary disabled');
                                        if (dataEdit == 'false') {
                                            $('.page-title h3').text('<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Edit Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                                            history.pushState(null, '', bookEditUrl.replace("[bookId]", data.bookId));
                                        }
                                        $('.book-form').attr('data-edit', true);
                                    }
                                }
                            },
                            error: function (jqXHR, exception) {
                                app.notification('error', app.getErrorMessage(jqXHR, exception));
                            },
                            complete: function (data) {
                                app.card.loading.finish('.tab-pane');
                            }
                        });
                    } else {
                        app.notification('information', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Validation errors occurred. Please confirm the fields and submit it again.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                    }
                } else {
                    app.notification('information', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Nothing to save.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                }
            }
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerCustomJs'} */
}
