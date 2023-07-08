<?php
/* Smarty version 3.1.31, created on 2023-06-12 12:43:03
  from "C:\xampp7.3\htdocs\lms\themes\default\user\userBooks-list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6486f6b77dbe00_88421375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d3f4da853f75c34501fa1909fe4744dd3aeac70' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\themes\\default\\user\\userBooks-list.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:general/pagination.tpl' => 1,
  ),
),false)) {
function content_6486f6b77dbe00_88421375 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\modifier.date_format.php';
?>
<div class="heading-elements">
    <select name="sortColumn" id="books-sort" class="form-control custom-select p-r-10" autocomplete="off">
        <option value="Issues.issueDate" data-order="DESC"<?php if ($_SESSION['issuedBookSortingOrder'] == 'DESC' && $_SESSION['issuedBookSortingColumn'] == 'Issues.issueDate') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Issue Date Descending<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
        <option value="Issues.issueDate" data-order="ASC"<?php if ($_SESSION['issuedBookSortingOrder'] == 'ASC' && $_SESSION['issuedBookSortingColumn'] == 'Issues.issueDate') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Issue Date Ascending<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
        <option value="Issues.expiryDate" data-order="DESC"<?php if ($_SESSION['issuedBookSortingOrder'] == 'DESC' && $_SESSION['issuedBookSortingColumn'] == 'Issues.expiryDate') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Expiry Date Descending<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
        <option value="Issues.expiryDate" data-order="ASC"<?php if ($_SESSION['issuedBookSortingOrder'] == 'ASC' && $_SESSION['issuedBookSortingColumn'] == 'Issues.expiryDate') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Expiry Date Ascending<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
        <option value="Books.title" data-order="DESC"<?php if ($_SESSION['bookSortingOrder'] == 'DESC' && $_SESSION['bookSortingColumn'] == 'Books.title') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
        <option value="Books.title" data-order="ASC"<?php if ($_SESSION['bookSortingOrder'] == 'ASC' && $_SESSION['bookSortingColumn'] == 'Books.title') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
        <option value="Books.publishingYear" data-order="DESC"<?php if ($_SESSION['bookSortingOrder'] == 'DESC' && $_SESSION['bookSortingColumn'] == 'Books.publishingYear') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
        <option value="Books.publishingYear" data-order="ASC"<?php if ($_SESSION['bookSortingOrder'] == 'ASC' && $_SESSION['bookSortingColumn'] == 'Books.publishingYear') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
    <select name="perPage" id="countPerPage" class="form-control custom-select" autocomplete="off">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOption("booksPerPageAdmin")->getListValues(), 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if (($_SESSION['bookPerPage'] == null && strcmp($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOption("booksPerPageAdmin")->getValue()) === 0) || strcmp($_smarty_tpl->tpl_vars['key']->value,$_SESSION['bookPerPage']) === 0) {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('count'=>$_smarty_tpl->tpl_vars['value']->value,1=>$_smarty_tpl->tpl_vars['value']->value,'plural'=>"%1 Books"));
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
<div class="table-responsive-sm">
    <table class="table table-striped table-hover user-books">
        <thead>
            <tr>
                <th style="width: 80px;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
                <th></th>
                <th style="width: 140px;" class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
                <th style="width: 140px;" class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
                <th style="width: 160px;" class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Fine / Penalty<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 (<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("priceCurrency");?>
)</th>
                <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("enableBookIssueByUser")) {?><th style="width: 90px;" class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Actions<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th><?php }?>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($_smarty_tpl->tpl_vars['books']->value) && $_smarty_tpl->tpl_vars['books']->value != null) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book', false, NULL, 'book', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
?>
                    <tr <?php if ($_smarty_tpl->tpl_vars['book']->value->getIssue()->isLost()) {?>class="book-lost"<?php }?>>
                        <td class="book-cover">
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
                        </td>
                        <td>
                            <a href="<?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("bookUrlType")) {
echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookViewPublic",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));
} else {
echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookViewViaUrlPublic",array("bookUrl"=>$_smarty_tpl->tpl_vars['book']->value->getUrl()));
}?>"><?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
</a>
                            <?php if ($_smarty_tpl->tpl_vars['book']->value->getPublishingYear() != null) {?>
                                <span class="text-muted ml-1">(<?php echo $_smarty_tpl->tpl_vars['book']->value->getPublishingYear();?>
)</span>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['book']->value->getPublisher() != null) {?>
                                <div class="book-list-info">
                                    <strong class="text-uppercase"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Publisher<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
:</strong>
                                    <?php echo $_smarty_tpl->tpl_vars['book']->value->getPublisher()->getName();?>

                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['book']->value->getGenres() !== null && is_array($_smarty_tpl->tpl_vars['book']->value->getGenres()) && count($_smarty_tpl->tpl_vars['book']->value->getGenres()) > 0) {?>
                                <div class="book-list-info">
                                    <strong class="text-uppercase"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Genre<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
:</strong>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['book']->value->getGenres(), 'genre', false, NULL, 'genre', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_genre']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_genre']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_genre']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_genre']->value['total'];
?>
                                        <?php echo $_smarty_tpl->tpl_vars['genre']->value->getName();
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_genre']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_genre']->value['last'] : null)) {
} else { ?>,<?php }?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['book']->value->getAuthors() !== null && is_array($_smarty_tpl->tpl_vars['book']->value->getAuthors()) && count($_smarty_tpl->tpl_vars['book']->value->getAuthors()) > 0) {?>
                                <div class="book-list-info">
                                    <strong class="text-uppercase"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Author<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
:</strong>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['book']->value->getAuthors(), 'author', false, NULL, 'author', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['total'];
?>
                                        <?php echo $_smarty_tpl->tpl_vars['author']->value->getLastName();?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value->getFirstName();
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['last'] : null)) {
} else { ?>,<?php }?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['book']->value->getEBookId() != null) {?>
                                <div class="book-list-info">
                                    <strong class="text-uppercase"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
eBook<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
:</strong>
                                    <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("showDownloadLink")) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("electronicBookGet",array("electronicBookId"=>$_smarty_tpl->tpl_vars['book']->value->getEBookId()));?>
" class="ml-1"><i class="far fa-hdd"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Download<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                                    <?php }?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("electronicBookView",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));?>
" class="ml-1"><i class="fas fa-glasses"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Read<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                                </div>
                            <?php }?>
                        </td>
                        <td class="text-center">
                            <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['book']->value->getIssue()->getIssueDate(),$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("dateFormat"));?>

                        </td>
                        <td class="text-center">
                            <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['book']->value->getIssue()->getExpiryDate(),$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("dateFormat"));?>

                        </td>
                        <td class="text-center">
                            <?php echo $_smarty_tpl->tpl_vars['book']->value->getIssue()->getPenalty();?>

                        </td>
                        <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("enableBookIssueByUser")) {?>
                            <td class="text-center action-btn">
                                <?php if ($_smarty_tpl->tpl_vars['book']->value->getIssue()->isLost()) {?>
                                    <span class="badge badge-danger"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
lost<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                                <?php } else { ?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookSetReturnedPublic",array("issueId"=>$_smarty_tpl->tpl_vars['book']->value->getIssue()->getId()));?>
" class="btn btn-outline-info btn-sm no-border return-book" data-bookId="<?php echo $_smarty_tpl->tpl_vars['book']->value->getId();?>
" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Return Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
"><i class="fas fa-undo-alt"></i></a>
                                    <div class="dropdown d-inline" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book Is Lost<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                        <button class="btn btn-outline-info btn-sm no-border" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-times"></i>
                                        </button>
                                        <ul class="dropdown-menu delete-dropdown <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>dropdown-menu-left<?php } else { ?>dropdown-menu-right<?php }?>">
                                            <li class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Do you really lost this book?<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</li>
                                            <li class="divider"></li>
                                            <li class="text-center">
                                                <a class="btn btn-outline-danger book-is-lost" href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookSetLostPublic",array("issueId"=>$_smarty_tpl->tpl_vars['book']->value->getIssue()->getId()));?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book Is Lost<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                                            </li>
                                        </ul>
                                    </div>
                                <?php }?>
                            </td>
                        <?php }?>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <?php } else { ?>
                <tr>
                    <td colspan="5" class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
You don't have any books yet<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:general/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
