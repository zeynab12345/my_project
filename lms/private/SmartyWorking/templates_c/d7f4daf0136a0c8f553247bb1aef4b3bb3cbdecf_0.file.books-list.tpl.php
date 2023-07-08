<?php
/* Smarty version 3.1.31, created on 2023-06-09 23:53:40
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\books\books-list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64839f64107b09_94273330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7f4daf0136a0c8f553247bb1aef4b3bb3cbdecf' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\books\\books-list.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/general/pagination.tpl' => 1,
  ),
),false)) {
function content_64839f64107b09_94273330 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
?>
<div class="card-header">
    <div class="row">
        <div class="col-lg-6 pb-1">
            <div class="input-group">
                <input type="text" name="searchText" class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['searchText']->value != null) {
echo $_smarty_tpl->tpl_vars['searchText']->value;
}?>" id="searchText" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Title, ISBN, Author, Publisher, Genre<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                <span class="input-group-btn">
                    <button class="btn btn-default" id="filter-books" type="button"><i class="fa fa-filter"></i></button>
                </span>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="heading-elements">
                <select name="sortColumn" id="books-sort" class="select-picker pr-2 d-tc" autocomplete="off">
                    <option value="Books.creationDateTime" data-order="DESC"<?php if ($_SESSION['bookSortingOrder'] == 'DESC' && $_SESSION['bookSortingColumn'] == 'Books.creationDateTime') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
                    <option value="Books.creationDateTime" data-order="ASC"<?php if ($_SESSION['bookSortingOrder'] == 'ASC' && $_SESSION['bookSortingColumn'] == 'Books.creationDateTime') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
                <select name="perPage" id="countPerPage" class="select-picker d-tc" autocomplete="off">
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
        </div>
    </div>
</div>
<div class="table-responsive-sm">
    <table class="table table-striped table-bordered">
        <thead class="table-vertical-header" style="height: 56px;">
            <tr>
                <th style="width: 40px;">
                    <div class="app-checkbox small-size m-0 inline" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Select All<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                        <label class="pl-0">
                            <input type="checkbox" name="ids[]" class="books_ids" id="select-all-books">
                        </label>
                    </div>
                </th>
                <th class="d-none header-bulk-actions">
                    <div class="btn-group" role="group">
                        <button class="btn btn-danger btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-trash-alt mr-1"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Delete Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        </button>
                        <ul class="dropdown-menu delete-dropdown text-regular">
                            <?php if ($_smarty_tpl->tpl_vars['isDemoMode']->value === true) {?>
                                <li class="text-center text-info">In the demo version you can't bulk book delete.</li>
                                <li class="divider"></li>
                            <?php }?>
                            <li><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
                            <li>
                                <button class="btn btn-outline-danger delete-books" <?php if ($_smarty_tpl->tpl_vars['isDemoMode']->value === true) {?>disabled<?php }?>>
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
                        <button class="btn btn-primary btn-sm" id="gen-barcode"><i class="fas fa-magic mr-1"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Generate Barcode<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</button>
                        <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#bulkEditBooks"><i class="fas fa-pencil-alt mr-1"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Edit Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</button>
                    </div>
                </th>
                <th class="header-cell"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
                <th style="width: 130px;" class="text-center"><span class="header-cell"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Store<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span></th>
                <th style="width: 150px;" class="text-center"><span class="header-cell"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN (10/13)<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span></th>
                <th style="width: 140px;" class="text-center"><span class="header-cell"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Quantity<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span></th>
                <th style="width: 120px;" class="text-center"><span class="header-cell"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Issued<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span></th>
                <th style="width: 130px;" class="text-center"><span class="header-cell"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Actions<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span></th>
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
                    <tr>
                        <td>
                            <div class="app-checkbox small-size">
                                <label class="pl-0">
                                    <input type="checkbox" name="bookIds[]" class="books-id" value="<?php echo $_smarty_tpl->tpl_vars['book']->value->getId();?>
">
                                </label>
                            </div>
                        </td>
                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookEdit",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
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
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("electronicBookViewAdmin",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));?>
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
                            <?php if ($_smarty_tpl->tpl_vars['book']->value !== null && $_smarty_tpl->tpl_vars['book']->value->getStores() !== null && is_array($_smarty_tpl->tpl_vars['book']->value->getStores())) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['book']->value->getStores(), 'store', false, NULL, 'store', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_store']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_store']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_store']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_store']->value['total'];
?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("storeBooksView",array("storeId"=>$_smarty_tpl->tpl_vars['store']->value->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['store']->value->getName();?>
</a><?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_store']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_store']->value['last'] : null)) {
} else { ?>,<?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            <?php }?>
                        </td>
                        <td class="text-center">
                            <?php if ($_smarty_tpl->tpl_vars['book']->value->getISBN13() != null) {?>
                                <?php echo $_smarty_tpl->tpl_vars['book']->value->getISBN13();?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['book']->value->getISBN10();?>

                            <?php }?>
                        </td>
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['book']->value->getQuantity();?>
</td>
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['book']->value->getIssuedQuantity();?>
</td>
                        <td class="text-center">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookEdit",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));?>
" class="btn btn-outline-info btn-sm no-border <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>ml-1<?php } else { ?>mr-1<?php }?>" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookClone",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));?>
" class="btn btn-outline-info btn-sm no-border <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>ml-1<?php } else { ?>mr-1<?php }?>" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Clone<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
"><i class="far fa-clone"></i></a>
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
                                        <button class="btn btn-outline-danger delete-book" data-url="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookDelete",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));?>
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
<?php $_smarty_tpl->_subTemplateRender("file:admin/general/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
