<?php
/* Smarty version 3.1.31, created on 2023-06-12 12:42:51
  from "C:\xampp7.3\htdocs\lms\themes\default\user\userRequest-list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6486f6ab594373_83187339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df67734719db0ee98c2802f8fab00a55c88cba27' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\themes\\default\\user\\userRequest-list.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:general/pagination.tpl' => 1,
  ),
),false)) {
function content_6486f6ab594373_83187339 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
?>
<div class="heading-elements">
    <a class="request-book-collapse" data-toggle="collapse" href="#request-book-block" aria-expanded="false" aria-controls="collapseExample">
        <i class="ti-book"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
    <select name="sortColumn" id="books-sort" class="form-control custom-select <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>p-l-10<?php } else { ?>p-r-10<?php }?>">
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
    <select name="perPage" id="countPerPage" class="form-control custom-select">
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

<div class="row">
    <div class="col-md-12">
        <div class="collapse position-relative" id="request-book-block">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="bookId" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                            <div class="input-group">
                                <select name="bookIds[]" id="bookId" class="form-control"></select>
                                <div class="input-group-append">
                                    <a href="#" class="btn" id="add-book" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Another Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
"><i class="fas fa-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 align-items-center">
                            <div class="form-group">
                                <label for="note" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Notes<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                <textarea name="notes" id="note" cols="30" rows="2" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <form action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("requestCreate");?>
" id="request-form">
                <?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
                    <input type="hidden" name="userId" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
">
                <?php }?>
                <input type="hidden" name="notes" id="notes">
                <table class="table table-hover d-none" id="request-result">
                    <thead>
                        <tr>
                            <th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                            <th style="width: 150px;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Publisher<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                            <th style="width: 150px;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Publishing Year<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                            <th style="width: 150px;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN10/13<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                            <th style="width: 65px;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Delete<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#" class="btn btn-info pull-right mr-2 mb-3" id="request-book"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Request<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="table-responsive-sm request-book-listing">
    <table class="table table-striped table-hover">
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
                <th style="width: 140px;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
                <th style="width: 90px;" class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
                            <a href="<?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("bookUrlType")) {
echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookViewPublic",array("bookId"=>$_smarty_tpl->tpl_vars['request']->value->getBook()->getId()));
} else {
echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookViewViaUrlPublic",array("bookUrl"=>$_smarty_tpl->tpl_vars['request']->value->getBook()->getUrl()));
}?>"><?php echo $_smarty_tpl->tpl_vars['request']->value->getBook()->getTitle();?>
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
                            <?php if ($_smarty_tpl->tpl_vars['request']->value->getStatus() == 'Pending') {?>
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
                                    <ul class="dropdown-menu delete-dropdown <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>dropdown-menu-left<?php } else { ?>dropdown-menu-right<?php }?>">
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
                                                <i class="far fa-trash-alt mr-1"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
                            <?php }?>
                        </td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <?php } else { ?>
                <tr>
                    <td colspan="4" class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
You don't have any requests yet<?php $_block_repeat=false;
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
