<?php
/* Smarty version 3.1.31, created on 2023-06-09 23:53:15
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\requests\requests-list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64839f4b90a971_78946471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c36f63ff183fdb2621b8a9dbcc8c6b75418e5eb1' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\requests\\requests-list.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/general/pagination.tpl' => 1,
  ),
),false)) {
function content_64839f4b90a971_78946471 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
?>
<div class="card-header">
    <div class="heading-elements">
        <select name="sortColumn" id="books-sort" class="select-picker <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>pl-2<?php } else { ?>pr-2<?php }?> d-tc">
            <option value="Requests.creationDate" data-order="DESC"<?php if ($_SESSION['requestSortingOrder'] == 'DESC' && $_SESSION['requestSortingColumn'] == 'Requests.creationDate') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Request Date Descending<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
            <option value="Requests.creationDate" data-order="ASC"<?php if ($_SESSION['requestSortingOrder'] == 'ASC' && $_SESSION['requestSortingColumn'] == 'Requests.creationDate') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Request Date Ascending<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
        </select>
        <select name="perPage" id="countPerPage" class="select-picker d-tc">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOption("requestsPerPage")->getListValues(), 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if (($_SESSION['requestPerPage'] == null && strcmp($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOption("requestsPerPage")->getValue()) === 0) || strcmp($_smarty_tpl->tpl_vars['key']->value,$_SESSION['requestPerPage']) === 0) {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('count'=>$_smarty_tpl->tpl_vars['value']->value,1=>$_smarty_tpl->tpl_vars['value']->value,'plural'=>"%1 Requests"));
$_block_repeat=true;
echo smarty_block_t(array('count'=>$_smarty_tpl->tpl_vars['value']->value,1=>$_smarty_tpl->tpl_vars['value']->value,'plural'=>"%1 Requests"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
1 Request<?php $_block_repeat=false;
echo smarty_block_t(array('count'=>$_smarty_tpl->tpl_vars['value']->value,1=>$_smarty_tpl->tpl_vars['value']->value,'plural'=>"%1 Requests"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
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
Book<?php $_block_repeat=false;
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
Request From<?php $_block_repeat=false;
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
Creation Date<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
            <th style="width: 110px;" class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Status<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
            <th style="width: 200px;" class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
        <?php if (isset($_smarty_tpl->tpl_vars['requests']->value) && $_smarty_tpl->tpl_vars['requests']->value != null) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['requests']->value, 'request', false, NULL, 'request', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['request']->value) {
?>
                <tr>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookEdit",array("bookId"=>$_smarty_tpl->tpl_vars['request']->value->getBook()->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['request']->value->getBook()->getTitle();?>
</a>
                        <?php if ($_smarty_tpl->tpl_vars['request']->value->getNotes()) {?>
                            <div class="book-list-info">
                                <strong class="text-uppercase"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Notes<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
:</strong>
                                <?php echo $_smarty_tpl->tpl_vars['request']->value->getNotes();?>

                            </div>
                        <?php }?>
                        
                    </td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['request']->value->getUser()) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userEdit",array("userId"=>$_smarty_tpl->tpl_vars['request']->value->getUser()->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['request']->value->getUser()->getFirstName();?>
 <?php echo $_smarty_tpl->tpl_vars['request']->value->getUser()->getLastName();?>
</a>
                        <?php }?>
                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['request']->value->getCreationDate();?>

                    </td>
                    <td class="request-status text-center">
                        <span class="badge <?php if ($_smarty_tpl->tpl_vars['request']->value->getStatus() == 'Pending') {?>badge-warning<?php } elseif ($_smarty_tpl->tpl_vars['request']->value->getStatus() == 'Accepted') {?>badge-success<?php } elseif ($_smarty_tpl->tpl_vars['request']->value->getStatus() == 'Rejected') {?>badge-danger<?php }?>">
                            <?php if ($_smarty_tpl->tpl_vars['request']->value->getStatus() == 'Pending') {?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Pending<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['request']->value->getStatus() == 'Accepted') {?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Accepted<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['request']->value->getStatus() == 'Rejected') {?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Rejected<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            <?php }?>
                        </span>
                    </td>
                    <td class="text-center">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("requestSetStatus",array("requestId"=>$_smarty_tpl->tpl_vars['request']->value->getId(),"status"=>"Accepted"));?>
" class="btn btn-outline-info btn-sm no-border<?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?> ml-1<?php } else { ?> mr-1<?php }?> accepted-book" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Accepted<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
"><i class="fa fa-check"></i></a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("requestSetStatus",array("requestId"=>$_smarty_tpl->tpl_vars['request']->value->getId(),"status"=>"Rejected"));?>
" class="btn btn-outline-info btn-sm no-border<?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?> ml-1<?php } else { ?> mr-1<?php }?> rejected-book" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Rejected<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
"><i class="fa fa-times"></i></a>
                        <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("enableBookIssue") && $_smarty_tpl->tpl_vars['request']->value->getBook() != null && !$_smarty_tpl->tpl_vars['request']->value->getIssue()) {?>
                            <div class="dropdown d-inline" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Issue Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                <button class="btn btn-outline-info btn-sm no-border" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-book"></i>
                                </button>
                                <div class="dropdown-menu book-copy-dropdown dropdown-menu-right">
                                    <div class="request-issue-book-block card text-center m-0">
                                        <div class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Please select Book Copy<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>
                                        <div class="divider"></div>
                                        <div class="form-group">
                                            <?php if ($_smarty_tpl->tpl_vars['request']->value->getBook()->getBookCopies() != null && count($_smarty_tpl->tpl_vars['request']->value->getBook()->getBookCopies()) > 0) {?>
                                                <select name="bookCopyId" class="form-control select2-picker">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['request']->value->getBook()->getBookCopies(), 'bookCopy', false, NULL, 'bookCopy', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bookCopy']->value) {
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['bookCopy']->value->getIssueStatus() != 'ISSUED' && $_smarty_tpl->tpl_vars['bookCopy']->value->getIssueStatus() != 'LOST') {?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['bookCopy']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['bookCopy']->value->getBookSN();?>
</option>
                                                        <?php }?>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                                </select>
                                            <?php }?>
                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-outline-info issue-book" data-url="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("requestedBookIssue",array("requestId"=>$_smarty_tpl->tpl_vars['request']->value->getId()));?>
">
                                                <span class="btn-icon"><i class="fas fa-book"></i></span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Issue Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("requestEdit",array("requestId"=>$_smarty_tpl->tpl_vars['request']->value->getId()));?>
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
                                    <button class="btn btn-outline-danger delete-request" data-url="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("requestDelete",array("requestId"=>$_smarty_tpl->tpl_vars['request']->value->getId()));?>
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
