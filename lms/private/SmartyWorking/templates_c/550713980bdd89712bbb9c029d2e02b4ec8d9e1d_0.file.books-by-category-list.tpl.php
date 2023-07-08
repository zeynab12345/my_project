<?php
/* Smarty version 3.1.31, created on 2023-06-10 08:36:08
  from "C:\xampp7.3\htdocs\lms\themes\default\books\components\books-by-category-list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_648419d82bee71_32908799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '550713980bdd89712bbb9c029d2e02b4ec8d9e1d' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\themes\\default\\books\\components\\books-by-category-list.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:books/components/rating.tpl' => 1,
    'file:general/pagination.tpl' => 1,
  ),
),false)) {
function content_648419d82bee71_32908799 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
if (!is_callable('smarty_modifier_truncate')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\modifier.truncate.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
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
echo $_smarty_tpl->tpl_vars['totalBooks']->value;?>
 <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
books</span> in total<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    </div>
    <div class="col-lg-4 pr-0">
        <select name="sortColumn" id="books-sort" class="custom-select">
            <option value="Books.creationDateTime" data-order="DESC"<?php if ($_SESSION['bookSortingOrderPublic'] == 'DESC' && $_SESSION['bookSortingColumnPublic'] == 'Books.creationDateTime') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Date Descending<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
            <option value="Books.creationDateTime" data-order="ASC"<?php if ($_SESSION['bookSortingOrderPublic'] == 'ASC' && $_SESSION['bookSortingColumnPublic'] == 'Books.creationDateTime') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Date Ascending<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
            <option value="Books.title" data-order="DESC"<?php if ($_SESSION['bookSortingOrderPublic'] == 'DESC' && $_SESSION['bookSortingColumnPublic'] == 'Books.title') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Title Descending<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
            <option value="Books.title" data-order="ASC"<?php if ($_SESSION['bookSortingOrderPublic'] == 'ASC' && $_SESSION['bookSortingColumnPublic'] == 'Books.title') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Title Ascending<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
            <option value="Books.publishingYear" data-order="DESC"<?php if ($_SESSION['bookSortingOrderPublic'] == 'DESC' && $_SESSION['bookSortingColumnPublic'] == 'Books.publishingYear') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Year Descending<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
            <option value="Books.publishingYear" data-order="ASC"<?php if ($_SESSION['bookSortingOrderPublic'] == 'ASC' && $_SESSION['bookSortingColumnPublic'] == 'Books.publishingYear') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Year Ascending<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
        </select>
    </div>
</div>
<div class="row book-grid">
    <?php if (isset($_smarty_tpl->tpl_vars['books']->value) && $_smarty_tpl->tpl_vars['books']->value != null) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book', false, NULL, 'book', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
?>
            <div class="col-sm-12 col-md-6 col-lg-4 book-3-row">
                <div class="row book" itemscope itemtype="http://schema.org/Book">
                    <?php if ($_smarty_tpl->tpl_vars['book']->value->getISBN13() != null) {?>
                        <meta itemprop="isbn" content="<?php echo $_smarty_tpl->tpl_vars['book']->value->getISBN13();?>
" />
                    <?php } elseif ($_smarty_tpl->tpl_vars['book']->value->getISBN10() != null) {?>
                        <meta itemprop="isbn" content="<?php echo $_smarty_tpl->tpl_vars['book']->value->getISBN10();?>
" />
                    <?php }?>
                    <meta itemprop="name" content="<?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
" />
                    <?php if ($_smarty_tpl->tpl_vars['book']->value->getPublishingYear() != null) {?>
                        <meta itemprop="datePublished" content="<?php echo $_smarty_tpl->tpl_vars['book']->value->getPublishingYear();?>
"/>
                    <?php }?>
                    <div class="book-cover col-lg-3 col-3">
                        <?php if ($_smarty_tpl->tpl_vars['book']->value->getCover()) {?>
                            <a href="<?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("bookUrlType")) {
echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookViewPublic",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));
} else {
echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookViewViaUrlPublic",array("bookUrl"=>$_smarty_tpl->tpl_vars['book']->value->getUrl()));
}?>"><img src="<?php echo $_smarty_tpl->tpl_vars['book']->value->getCover()->getWebPath('small');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
" class="img-fluid"></a>
                        <?php } else { ?>
                            <a href="<?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("bookUrlType")) {
echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookViewPublic",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));
} else {
echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookViewViaUrlPublic",array("bookUrl"=>$_smarty_tpl->tpl_vars['book']->value->getUrl()));
}?>"><img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noBookImageFilePath");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
" class="img-fluid"></a>
                        <?php }?>
                    </div>
                    <div class="book-info col-lg-9 col-9">
                        <div class="book-title">
                            <a href="<?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("bookUrlType")) {
echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookViewPublic",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));
} else {
echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookViewViaUrlPublic",array("bookUrl"=>$_smarty_tpl->tpl_vars['book']->value->getUrl()));
}?>"><?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
</a>
                        </div>
                        <div class="book-attr">
                            <?php if ($_smarty_tpl->tpl_vars['book']->value->getPublishingYear() != null) {?><span class="book-publishing-year"><?php echo $_smarty_tpl->tpl_vars['book']->value->getPublishingYear();
if ($_smarty_tpl->tpl_vars['book']->value->getAuthors() !== null) {?>, <?php }?></span><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['book']->value->getAuthors() !== null && is_array($_smarty_tpl->tpl_vars['book']->value->getAuthors()) && count($_smarty_tpl->tpl_vars['book']->value->getAuthors()) > 0) {?>
                                <?php $_smarty_tpl->_assignInScope('authors', $_smarty_tpl->tpl_vars['book']->value->getAuthors());
?><span class="book-author" itemprop="author"><?php echo $_smarty_tpl->tpl_vars['authors']->value[0]->getLastName();
echo $_smarty_tpl->tpl_vars['authors']->value[0]->getFirstName();?>
</span>
                            <?php }?>
                        </div>
                        <div class="book-rating">
                            <?php $_smarty_tpl->_subTemplateRender('file:books/components/rating.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->tpl_vars['book']->value->getRating(),'readOnly'=>true), 0, true);
?>

                            
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['book']->value->getDescription()) {?>
                            <div class="book-short-description"><?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['book']->value->getDescription())),90);?>
</div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("enableBookRequest")) {?>
                            <div class="book-settings">
                                <div class="dropdown">
                                    <a href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-options-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>dropdown-menu-left<?php } else { ?>dropdown-menu-right<?php }?>">
                                        <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("enableBookIssueByUser")) {?>
                                            <a class="dropdown-item issue-book" data-id="<?php echo $_smarty_tpl->tpl_vars['book']->value->getId();?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("issueCreatePublic");?>
" href="#"><i class="ti-book"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Issue Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                                        <?php } else { ?>
                                            <a class="dropdown-item request-book" data-id="<?php echo $_smarty_tpl->tpl_vars['book']->value->getId();?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("requestCreate");?>
" href="#"><i class="ti-book"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Request Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
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
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1907826034648419d82ade23_59760477', 'perPageFilter');
}
/* {block 'perPageFilter'} */
class Block_1907826034648419d82ade23_59760477 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'perPageFilter' => 
  array (
    0 => 'Block_1907826034648419d82ade23_59760477',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="top-filter row">
        <div class="col-lg-8 text">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Books per page:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        </div>
        <div class="col-lg-4 pr-0">
            <select name="perPage" id="countPerPage" class="custom-select">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOption("booksPerPagePublic")->getListValues(), 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if (($_SESSION['bookPerPagePublic'] == null && strcmp($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOption("booksPerPagePublic")->getValue()) === 0) || strcmp($_smarty_tpl->tpl_vars['key']->value,$_SESSION['bookPerPagePublic']) === 0) {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('count'=>$_smarty_tpl->tpl_vars['value']->value,1=>$_smarty_tpl->tpl_vars['value']->value,'plural'=>"%1 Books"));
$_block_repeat=true;
echo smarty_block_t(array('count'=>$_smarty_tpl->tpl_vars['value']->value,1=>$_smarty_tpl->tpl_vars['value']->value,'plural'=>"%1 Books"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
1 Book<?php $_block_repeat=false;
echo smarty_block_t(array('count'=>$_smarty_tpl->tpl_vars['value']->value,1=>$_smarty_tpl->tpl_vars['value']->value,'plural'=>"%1 Books"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
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
<?php
}
}
/* {/block 'perPageFilter'} */
}
