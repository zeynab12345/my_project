<?php
/* Smarty version 3.1.31, created on 2023-06-09 23:52:35
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\issues\issues-list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64839f238cb9e1_08229148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc5a710930e84543f8482d9927a20268d27d306f' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\issues\\issues-list.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/general/pagination.tpl' => 1,
  ),
),false)) {
function content_64839f238cb9e1_08229148 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\modifier.date_format.php';
?>
<div class="card-header">
    <div class="heading-elements">
        <select name="sortColumn" id="books-sort" class="select-picker <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>pl-2<?php } else { ?>pr-2<?php }?> d-tc">
            <option value="Issues.issueDate" data-order="DESC"<?php if ($_SESSION['issueSortingOrder'] == 'DESC' && $_SESSION['issueSortingColumn'] == 'Issues.issueDate') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
            <option value="Issues.issueDate" data-order="ASC"<?php if ($_SESSION['issueSortingOrder'] == 'ASC' && $_SESSION['issueSortingColumn'] == 'Issues.issueDate') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
            <option value="Issues.expiryDate" data-order="DESC"<?php if ($_SESSION['issueSortingOrder'] == 'DESC' && $_SESSION['issueSortingColumn'] == 'Issues.expiryDate') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
            <option value="Issues.expiryDate" data-order="ASC"<?php if ($_SESSION['issueSortingOrder'] == 'ASC' && $_SESSION['issueSortingColumn'] == 'Issues.expiryDate') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
            <option value="Issues.returnDate" data-order="DESC"<?php if ($_SESSION['issueSortingOrder'] == 'DESC' && $_SESSION['issueSortingColumn'] == 'Issues.returnDate') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Return Date Descending<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
            <option value="Issues.returnDate" data-order="ASC"<?php if ($_SESSION['issueSortingOrder'] == 'ASC' && $_SESSION['issueSortingColumn'] == 'Issues.returnDate') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Return Date Ascending<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
        </select>
        <select name="perPage" id="countPerPage" class="select-picker d-tc">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOption("issuesPerPage")->getListValues(), 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if (($_SESSION['issuePerPage'] == null && strcmp($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOption("issuesPerPage")->getValue()) === 0) || strcmp($_smarty_tpl->tpl_vars['key']->value,$_SESSION['issuePerPage']) === 0) {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('count'=>$_smarty_tpl->tpl_vars['value']->value,1=>$_smarty_tpl->tpl_vars['value']->value,'plural'=>"%1 Books"));
$_block_repeat=true;
echo smarty_block_t(array('count'=>$_smarty_tpl->tpl_vars['value']->value,1=>$_smarty_tpl->tpl_vars['value']->value,'plural'=>"%1 Books"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
1 Issue<?php $_block_repeat=false;
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
Issue To<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
            <th class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
            <th class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
            <th class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Return Date<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
            <th class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Penalty<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
, <?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("priceCurrency");?>
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
            <th style="width: 180px;" class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
        <?php if (isset($_smarty_tpl->tpl_vars['issues']->value) && $_smarty_tpl->tpl_vars['issues']->value != null) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['issues']->value, 'issue', false, NULL, 'issue', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['issue']->value) {
?>
                <tr>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookEdit",array("bookId"=>$_smarty_tpl->tpl_vars['issue']->value->getBook()->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['issue']->value->getBook()->getTitle();?>
</a>
                        <?php if ($_smarty_tpl->tpl_vars['issue']->value->getBookCopy() != null) {?>
                        <div class="book-list-info">
                            <strong class="text-uppercase"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book ID<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
:</strong>
                            <?php echo $_smarty_tpl->tpl_vars['issue']->value->getBookCopy()->getBookSN();?>

                        </div>
                        <?php }?>
                    </td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['issue']->value->getUser()) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userEdit",array("userId"=>$_smarty_tpl->tpl_vars['issue']->value->getUser()->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['issue']->value->getUser()->getFirstName();?>
 <?php echo $_smarty_tpl->tpl_vars['issue']->value->getUser()->getLastName();?>
</a>
                        <?php }?>
                    </td>
                    <td class="text-center">
                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['issue']->value->getIssueDate(),$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("dateFormat"));?>

                    </td>
                    <td class="text-center">
                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['issue']->value->getExpiryDate(),$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("dateFormat"));?>

                    </td>
                    <td class="book-returned-date text-center">
                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['issue']->value->getReturnDate(),$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("dateFormat"));?>

                    </td>
                    <td class="text-center">
                        <?php echo $_smarty_tpl->tpl_vars['issue']->value->getPenalty();?>

                    </td>
                    <td class="book-status text-center">
                        <span class="badge <?php if ($_smarty_tpl->tpl_vars['issue']->value->isLost()) {?>badge-danger<?php } elseif ($_smarty_tpl->tpl_vars['issue']->value->getReturnDate()) {?>badge-success<?php }?>">
                             <?php if ($_smarty_tpl->tpl_vars['issue']->value->isLost()) {?>
                                 <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
lost<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                             <?php } elseif ($_smarty_tpl->tpl_vars['issue']->value->getReturnDate()) {?>
                                 <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
returned<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                             <?php }?>
                        </span>
                    </td>
                    <td class="text-center">
                        <?php if ($_smarty_tpl->tpl_vars['issue']->value->getReturnDate() == null) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookSetReturned",array("issueId"=>$_smarty_tpl->tpl_vars['issue']->value->getId()));?>
" class="btn btn-outline-info btn-sm no-border return-book" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
                        <?php }?>

                        <div class="dropdown d-inline" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Notify Delayed Members<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                            <button class="btn btn-outline-info btn-sm no-border" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-bell"></i>
                            </button>
                            <div class="dropdown-menu text-center dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-target="#userSendEmailModal" data-book="<?php echo $_smarty_tpl->tpl_vars['issue']->value->getBook()->getId();?>
" data-user="<?php if ($_smarty_tpl->tpl_vars['issue']->value->getUser()) {
echo $_smarty_tpl->tpl_vars['issue']->value->getUser()->getId();
}?>" data-toggle="modal"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Email<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                                <a class="dropdown-item" href="#" data-target="#userSendSMSModal" data-book="<?php echo $_smarty_tpl->tpl_vars['issue']->value->getBook()->getId();?>
" data-user="<?php if ($_smarty_tpl->tpl_vars['issue']->value->getUser()) {
echo $_smarty_tpl->tpl_vars['issue']->value->getUser()->getId();
}?>" data-toggle="modal"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
SMS<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </div>
                        </div>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("issueEdit",array("issueId"=>$_smarty_tpl->tpl_vars['issue']->value->getId()));?>
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

                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookSetLost",array("issueId"=>$_smarty_tpl->tpl_vars['issue']->value->getId()));?>
" class="btn btn-outline-info btn-sm no-border lost-book" data-lost="<?php if ($_smarty_tpl->tpl_vars['issue']->value->isLost()) {?>true<?php } else { ?>false<?php }?>" data-container="body" data-toggle="tooltip" title="<?php if ($_smarty_tpl->tpl_vars['issue']->value->isLost()) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book Not Lost<?php $_block_repeat=false;
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
Book Is Lost<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>"><i class="fa fa-times"></i></a>

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
                                    <button class="btn btn-outline-danger delete-issue" data-url="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("issueDelete",array("issueId"=>$_smarty_tpl->tpl_vars['issue']->value->getId()));?>
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
