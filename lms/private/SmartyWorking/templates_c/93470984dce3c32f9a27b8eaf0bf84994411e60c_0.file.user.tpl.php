<?php
/* Smarty version 3.1.31, created on 2023-06-10 13:17:54
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\users\user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64845be248fa08_80245687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93470984dce3c32f9a27b8eaf0bf84994411e60c' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\users\\user.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/users/userBooks-list.tpl' => 1,
    'file:admin/users/bookIssueLogs-list.tpl' => 1,
  ),
),false)) {
function content_64845be248fa08_80245687 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198446630564845be22697b2_65933530', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73956082664845be2291ce0_20486312', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79371780764845be229a611_09346097', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153432797764845be2410f47_53224988', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32482591464845be2417626_19580970', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_198446630564845be22697b2_65933530 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_198446630564845be22697b2_65933530',
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
Add User<?php $_block_repeat=false;
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
Edit User<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'title'} */
/* {block 'headerCss'} */
class Block_73956082664845be2291ce0_20486312 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_73956082664845be2291ce0_20486312',
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
class Block_79371780764845be229a611_09346097 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_79371780764845be229a611_09346097',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['isDemoMode']->value === true && $_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['editedUser']->value->getId() <= 3) {?>
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-info text-center">In the demo version you cant change builtin users.</div>
            </div>
        </div>
    <?php }?>

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
            <a class="nav-link" data-toggle="tab" href="#issuedBooks" role="tab">
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Issued Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            </a>
        </li>
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
    </ul>
    <div class="tab-content">
        <div class="tab-pane card p-20 active" id="general" role="tabpanel" aria-labelledby="general-tab">
            <div class="row">
                <div class="col-lg-8 col-xlg-9 col-md-7">
                    <?php if ($_smarty_tpl->tpl_vars['action']->value == "create") {?>
                        <?php $_smarty_tpl->_assignInScope('route', $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userCreate"));
?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['editedUser']->value)) {?>
                        <?php $_smarty_tpl->_assignInScope('route', $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userEdit",array("userId"=>$_smarty_tpl->tpl_vars['editedUser']->value->getId())));
?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "delete") {?>
                        <?php $_smarty_tpl->_assignInScope('route', '');
?>
                    <?php }?>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['route']->value;?>
" method="post" class="card form-horizontal validate user-form" data-edit="<?php if ($_smarty_tpl->tpl_vars['action']->value == "create") {?>false<?php } else { ?>true<?php }?>">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value->getRole() != null && $_smarty_tpl->tpl_vars['user']->value->getRole()->getPriority() >= 255) {?>
                                        <div class="pull-right">
                                            <?php if ($_smarty_tpl->tpl_vars['isDemoMode']->value === true && $_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['editedUser']->value->getId() <= 3) {?>
                                                <input type="hidden" name="isActive" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['editedUser']->value->isActive()) {?>1<?php } else { ?>0<?php }?>">
                                            <?php } else { ?>
                                                <label class="switch switch-sm" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Account Status (Active/Inactive)<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                                    <input type="checkbox" name="isActive" value="1"<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['editedUser']->value->isActive()) {?> checked<?php }?>>
                                                </label>
                                            <?php }?>
                                            <input type="hidden" name="userId" class="userId" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['editedUser']->value)) {
echo $_smarty_tpl->tpl_vars['editedUser']->value->getId();
}?>">
                                            <input type="hidden" name="photoId" class="photoId" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['editedUser']->value->getPhotoId();
}?>">
                                        </div>
                                    <?php } else { ?>
                                        <input type="hidden" name="isActive" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['editedUser']->value->isActive()) {?>1<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "create") {?>1<?php } else { ?>0<?php }?>">
                                        <input type="hidden" name="userId" class="userId" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['editedUser']->value)) {
echo $_smarty_tpl->tpl_vars['editedUser']->value->getId();
}?>">
                                        <input type="hidden" name="photoId" class="photoId" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['editedUser']->value->getPhotoId();
}?>">
                                    <?php }?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="<?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value->getRole() != null && $_smarty_tpl->tpl_vars['user']->value->getRole()->getPriority() >= 255) {?>col-lg-6<?php } else { ?>col-lg-12<?php }?>">
                                    <div class="form-group">
                                        <label class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Email<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                            <?php if ($_smarty_tpl->tpl_vars['action']->value == "create") {?>
                                                <i class="fa fa-info-circle text-warning" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
required<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
"></i>
                                            <?php }?>
                                        </label>
                                        <input type="text" class="form-control" autocomplete="off" data-email="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['editedUser']->value->getEmail();
}?>" id="email" name="email" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Login<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['editedUser']->value->getEmail();
}?>">
                                    </div>
                                </div>
                                <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value->getRole() != null && $_smarty_tpl->tpl_vars['user']->value->getRole()->getPriority() >= 255) {?>
                                    <div class="col-lg-6">
                                        <?php if (isset($_smarty_tpl->tpl_vars['roles']->value)) {?>
                                            <div class="form-group">
                                                <label for="roleId"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
User Role<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                                <select name="roleId" id="roleId" class="form-control">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'role', false, NULL, 'role', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['role']->value->getId();?>
" <?php if (isset($_smarty_tpl->tpl_vars['editedUser']->value) && $_smarty_tpl->tpl_vars['editedUser']->value->getRole() !== null && $_smarty_tpl->tpl_vars['editedUser']->value->getRole()->getId() == $_smarty_tpl->tpl_vars['role']->value->getId()) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['role']->value->getName();?>
</option>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                                </select>
                                            </div>
                                        <?php }?>
                                    </div>
                                <?php } else { ?>
                                    <input type="hidden" name="roleId" value="<?php if (isset($_smarty_tpl->tpl_vars['editedUser']->value) && $_smarty_tpl->tpl_vars['editedUser']->value->getRole() !== null) {
echo $_smarty_tpl->tpl_vars['editedUser']->value->getRole()->getId();
} else { ?>3<?php }?>" readonly>
                                <?php }?>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label"><?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
New Password<?php $_block_repeat=false;
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
Password<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>
                                            <?php if ($_smarty_tpl->tpl_vars['action']->value == "create") {?>
                                                <i class="fa fa-info-circle text-warning" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
required<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
"></i>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {?>
                                                <i class="fa fa-exclamation-circle" data-toggle="tooltip" data-trigger="hover" data-original-title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
If you do not want to change your password, leave blank.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
"></i>
                                            <?php }?>
                                        </label>
                                        <input type="password" class="form-control" autocomplete="off" name="password" id="mainPassword">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label"><?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Confirm New Password<?php $_block_repeat=false;
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
Confirm Password<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>
                                            <?php if ($_smarty_tpl->tpl_vars['action']->value == "create") {?>
                                                <i class="fa fa-info-circle text-warning" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
required<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
"></i>
                                            <?php }?>
                                        </label>
                                        <input type="password" class="form-control confirmPassword" autocomplete="off" name="confirmPassword">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="firstName" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
First Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                        <input type="text" class="form-control" autocomplete="off" name="firstName" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['editedUser']->value->getFirstName();
}?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="middleName" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Middle Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                        <input type="text" class="form-control" autocomplete="off" name="middleName" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['editedUser']->value->getMiddleName();
}?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lastName" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Last Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                        <input type="text" class="form-control" autocomplete="off" name="lastName" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['editedUser']->value->getLastName();
}?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="gender" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Gender<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                        <select name="gender" class="form-control select-picker">
                                            <option value="Male"<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['editedUser']->value->getGender() == 'Male') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Male<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
                                            <option value="Female"<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['editedUser']->value->getGender() == 'Female') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Female<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="phone" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Phone<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                        <input type="text" class="form-control" autocomplete="off" name="phone" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['editedUser']->value->getPhone();
}?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="address" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Address<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                        <input type="text" class="form-control" autocomplete="off" name="address" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['editedUser']->value->getAddress();
}?>">
                                    </div>
                                </div>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['isDemoMode']->value === true && $_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['editedUser']->value->getId() <= 3) {?>
                            <?php } else { ?>
                                <div class="row mt-3">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-outline-secondary disabled btn-icon-fixed pull-right save-user"<?php if ($_smarty_tpl->tpl_vars['isDemoMode']->value === true && $_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['editedUser']->value->getId() <= 3) {?> disabled<?php }?>>
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
                            <?php }?>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-xlg-3 col-md-5">
                    <div class="card" id="photo-block">
                        <div class="card-body p-0">
                            <div class="drop-zone cover-drop-zone<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['editedUser']->value->getPhotoId() != null) {?> cover-exist<?php }?>">
                                <label><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Drag & Drop your photo or <span>Browse</span><?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                <input type="file" accept="image/png, image/jpeg, image/gif" id="user-photo" class="disabledIt" />
                                <button type="button" class="btn btn-info remove-user-photo<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['editedUser']->value->getPhotoId() == null || $_smarty_tpl->tpl_vars['action']->value == "create") {?> d-none<?php }?>" data-id="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['editedUser']->value->getPhotoId();
}?>"><i class="far fa-trash-alt"></i></button>
                                <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['editedUser']->value->getPhoto() != null) {?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['editedUser']->value->getPhoto()->getWebPath();?>
" class="img-fluid">
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane card" id="issuedBooks" role="tabpanel" aria-labelledby="issuedBooks-tab">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" id="userBooks">
                        <?php $_smarty_tpl->_subTemplateRender("file:admin/users/userBooks-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane card" id="logs" role="tabpanel" aria-labelledby="logs-tab">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" id="bookIssueLogs">
                        <?php $_smarty_tpl->_subTemplateRender("file:admin/users/bookIssueLogs-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pages'=>$_smarty_tpl->tpl_vars['issuePages']->value), 0, false);
?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="userSendSMSModal" tabindex="-1" role="dialog" aria-labelledby="userSendSMSModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title m-auto"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Send Notification<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h5>
                </div>
                <div class="modal-body">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("smsSend",array());?>
" class="card p-3 mb-0">
                        <div class="form-group">
                            <label for="subject"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Sender<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                            <input type="hidden" name="bookId" id="smsBookId">
                            <input type="text" class="form-control" id="messageSender" name="sender">
                        </div>
                        <div class="form-group">
                            <label for="smsContent"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Message<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                <a class="text-muted" data-toggle="collapse" href="#shortcode-block-sms" aria-expanded="false" aria-controls="shortcode-block-sms"><i class="fa fa-info-circle"></i></a></label>
                            <textarea class="form-control" id="smsContent" name="content"></textarea>
                        </div>
                        <div class="alert alert-default text-center collapse" id="shortcode-block-sms">
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ShortCodes For Use<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
: <br><code>[USER_FIRST_NAME]</code>, <code>[USER_LAST_NAME]</code>, <code>[BOOK]</code>, <code>[BOOKS]</code>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-outline-primary" id="sendSMSToDelayedUser" data-url="">
                                <span class="btn-icon"><i class="far fa-paper-plane"></i></span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Send SMS<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="userSendEmailModal" tabindex="-1" role="dialog" aria-labelledby="userSendEmailModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title m-auto"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Send Notification<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h5>
                </div>
                <div class="modal-body">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userSendEmail",array());?>
" class="card p-3 mb-0">
                        <div class="form-group">
                            <label for="subject"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Subject<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                            <input type="hidden" name="bookId" id="emailBookId">
                            <input type="text" class="form-control" id="messageSubject" name="subject">
                        </div>
                        <div class="form-group">
                            <label for="emailContent"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Message<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                <a class="text-muted" data-toggle="collapse" href="#shortcode-block-email" aria-expanded="false" aria-controls="shortcode-block-email"><i class="fa fa-info-circle"></i></a></label>
                            <textarea class="form-control" id="emailContent" name="content"></textarea>
                        </div>
                        <div class="alert alert-default text-center collapse" id="shortcode-block-email">
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ShortCodes For Use<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
: <br><code>[USER_FIRST_NAME]</code>, <code>[USER_LAST_NAME]</code>,
                            <code>[BOOK]</code>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-outline-primary" id="sendEmailToDelayedUser" data-url="">
                                <span class="btn-icon"><i class="far fa-paper-plane"></i></span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Send Email<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerPageJs'} */
class Block_153432797764845be2410f47_53224988 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_153432797764845be2410f47_53224988',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/jquery-validate/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/select2/select2.full.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/bootstrap-select/bootstrap-select.js"><?php echo '</script'; ?>
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
class Block_32482591464845be2417626_19580970 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_32482591464845be2417626_19580970',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $("#roleId").select2({
                maximumSelectionLength: 6
            });
            $('.validate input,.validate select,.validate textarea').tooltipster({
                trigger: 'custom',
                onlyOne: false,
                position: 'bottom',
                offsetY: -5,
                theme: 'tooltipster-kaa'
            });
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
                ignore: null,
                messages: {
                    email: {
                        remote: jQuery.validator.format("<strong>{0}</strong> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
is already exist. Please use another email<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
.")
                    }
                },
                rules: {
                    <?php if ((isset($_smarty_tpl->tpl_vars['editedUser']->value) && !$_smarty_tpl->tpl_vars['editedUser']->value->isLdapUser()) || $_smarty_tpl->tpl_vars['action']->value == "create") {?>
                    email: {
                        required: true,
                        email: true,
                        remote: {
                            param: {
                                delay: 500,
                                url: '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userEmailCheck",array());?>
',
                                type: "post",
                                data: {
                                    email: function () {
                                        return $("#email").val();
                                    }
                                },
                                error: function (jqXHR, exception) {
                                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                                }
                            },
                            depends: function (element) {
                                return ($(element).val() !== $("#email").attr('data-email'));
                            }
                        }
                    },
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['action']->value == "create") {?>password: "required",<?php }?>
                    confirmPassword: {
                        equalTo: "#mainPassword"
                    }
                }
            });
            $(document).on('change', 'input,textarea,select', function () {
                $(this).closest('form').attr('data-changed', true);
                $('.save-user').removeClass('btn-outline-secondary disabled').addClass('btn-outline-success');
            });
            var photoUploadUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userPhotoUpload",array());?>
';
            var imageDeleteUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("imageDelete",array());?>
';
            <?php if ($_smarty_tpl->tpl_vars['isDemoMode']->value === true && $_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['editedUser']->value->getId() <= 3) {?>
            $('#user-photo').on('change', app.notification('information', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
In the demo version you cant change builtin users.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
'));
            <?php } else { ?>
            $('#user-photo').on('change', userPhotoUpload);
            <?php }?>
            function userPhotoUpload(event) {
                $('.user-form').attr('data-changed', true);
                var dropZone = $('.cover-drop-zone');
                function upload() {
                    var photoId = $('.photoId').val();
                    var imgData = new FormData();
                    imgData.set('file', file);
                    if (photoId) {
                        imgData.set('photoId', photoId);
                    }
                    $.ajax({
                        dataType: 'json',
                        method: 'POST',
                        processData: false,
                        contentType: false,
                        data: imgData,
                        url: photoUploadUrl,
                        beforeSend: function (data) {
                            app.card.loading.start('#photo-block');
                        },
                        success: function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    $('.remove-user-photo').attr('data-id', data.imageId);
                                    $('.photoId').val(data.imageId);
                                    app.notification('success', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Photo successfully uploaded<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                                    $('.save-user').click();
                                }
                            }
                        },
                        error: function (jqXHR, exception) {
                            app.notification('error', app.getErrorMessage(jqXHR, exception));
                        },
                        complete: function (data) {
                            app.card.loading.finish('#photo-block');
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
                            $('.remove-user-photo').removeClass('d-none');
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
            $(document).on('click', '.remove-user-photo', function () {
                $('.user-form').attr('data-changed', true);
                var imgId = $(this).attr('data-id');
                if (imgId != undefined && imgId != null && imgId > 0) {
                    $.ajax({
                        dataType: 'json',
                        method: 'POST',
                        url: imageDeleteUrl.replace("[imageId]", imgId),
                        beforeSend: function (data) {
                            app.card.loading.start('#photo-block');
                        },
                        success: function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    $('.cover-drop-zone').removeClass('cover-exist').find('img').remove();
                                    $('.remove-user-photo').addClass('d-none');
                                    $('.photoId').val('');
                                    app.notification('success', data.success);
                                    $('.save-user').click();
                                }
                            }
                        },
                        error: function (jqXHR, exception) {
                            app.notification('error', app.getErrorMessage(jqXHR, exception));
                        },
                        complete: function (data) {
                            app.card.loading.finish('#photo-block');
                        }
                    });
                }
            });
            <?php if ($_smarty_tpl->tpl_vars['isDemoMode']->value === true && $_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['editedUser']->value->getId() <= 3) {?>
            $('.save-user').on('click', function (e) {
                e.preventDefault();
                app.notification('information', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
In the demo version you cant change builtin users.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
            });
            <?php } else { ?>
            var userEditUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userEdit",array());?>
';
            $('.save-user').on('click', function (e) {
                e.preventDefault();
                var form = $(this).closest('form');
                var dataEdit = form.attr('data-edit');
                var dataChanged = form.attr('data-changed');
                if (dataChanged == 'true') {
                    if ($(form).valid()) {
                        $('.confirmPassword').attr('disabled', true);
                        $.ajax({
                            dataType: 'json',
                            method: 'POST',
                            data: form.serialize(),
                            url: form.attr('action'),
                            beforeSend: function (data) {
                                app.card.loading.start('.card');
                            },
                            success: function (data) {
                                if (data.redirect) {
                                    window.location.href = data.redirect;
                                } else {
                                    if (data.error) {
                                        app.notification('error', data.error);
                                    } else {
                                        form.attr('action', userEditUrl.replace("[userId]", data.userId)).attr('data-changed', false).find('.userId').val(data.userId);
                                        $('.save-user').removeClass('btn-outline-success').addClass('btn-outline-secondary disabled');
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
                                        if (dataEdit == 'false') {
                                            $('.page-title h3').text('<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Edit User<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                                            history.pushState(null, '', userEditUrl.replace("[userId]", data.userId));
                                        }
                                        $(form).attr('data-edit', true);
                                    }
                                }
                            },
                            error: function (jqXHR, exception) {
                                app.notification('error', app.getErrorMessage(jqXHR, exception));
                            },
                            complete: function (data) {
                                $('.confirmPassword').attr('disabled', false);
                                app.card.loading.finish('.card');
                            }
                        });
                    }
                } else {
                    app.notification('information', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
There are no changes<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                }
            });
            <?php }?>
            $(document).on('click', '#issuedBooks .ajax-page', function (e) {
                e.preventDefault();
                $.ajax({
                    dataType: 'json',
                    url: $(this).attr('href'),
                    beforeSend: function () {
                        app.card.loading.start($("#userBooks"));
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                $("#userBooks").html(data.html);
                            }
                        }
                    },
                    complete: function () {
                        app.card.loading.finish($("#userBooks"));
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    }
                });
            });
            $(document).on('click', '#logs .ajax-page', function (e) {
                e.preventDefault();
                $.ajax({
                    dataType: 'json',
                    url: $(this).attr('href'),
                    beforeSend: function () {
                        app.card.loading.start($("#bookIssueLogs"));
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                $("#bookIssueLogs").html(data.html);
                            }
                        }
                    },
                    complete: function () {
                        app.card.loading.finish($("#bookIssueLogs"));
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    }
                });
            });

            var userSendEmailURL = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userSendEmail",array());?>
';
            var userSMSSendURL = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("smsSend",array());?>
';
            $('#userSendSMSModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var userId = button.data('user');
                var bookId = button.data('book');
                var modal = $(this);
                $('#smsBookId').val(bookId);
                $('#sendSMSToDelayedUser').attr('data-url', userSMSSendURL.replace('[userId]', userId));
                $.ajax({
                    type: "GET",
                    dataType: 'json',
                    url: userSMSSendURL.replace('[userId]', userId),
                    beforeSend: function () {
                        app.card.loading.start($(modal).find('.card'));
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                $('#messageSender').val(data.sender);
                                $('#smsContent').val(data.smsTemplate);
                            }
                        }
                    },
                    complete: function () {
                        app.card.loading.finish($(modal).find('.card'));
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    }
                });
            });
            $('#userSendEmailModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var userId = button.data('user');
                var bookId = button.data('book');
                var modal = $(this);
                $('#emailBookId').val(bookId);
                $('#sendEmailToDelayedUser').attr('data-url', userSendEmailURL.replace('[userId]', userId));
                $.ajax({
                    type: "GET",
                    dataType: 'json',
                    url: userSendEmailURL.replace('[userId]', userId),
                    beforeSend: function () {
                        app.card.loading.start($(modal).find('.card'));
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                $('#emailContent').val(data.dynamicEmailTemplate).summernote({
                                    toolbar: [
                                        ['style', ['bold', 'italic', 'underline', 'clear']],
                                        ['font', ['strikethrough']],
                                        ['fontsize', ['fontsize']],
                                        ['color', ['color']],
                                        ['para', ['ul', 'ol', 'paragraph']],
                                        ['height', ['height']],
                                        ['misc', ['codeview']]
                                    ]
                                });
                            }
                        }
                    },
                    complete: function () {
                        app.card.loading.finish($(modal).find('.card'));
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    }
                });
            });
            $('#sendSMSToDelayedUser').on('click', function (e) {
                e.preventDefault();
                var form = $(this).closest('form');
                var url = $(this).attr('data-url');
                $.ajax({
                    type: "POST",
                    url: url,
                    data: $(form).serialize(),
                    dataType: 'json',
                    beforeSend: function () {
                        app.card.loading.start($(form));
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                app.notification('success', data.success);
                                $('#userSendSMSModal').modal('hide');
                                $('.tooltip.show').remove();
                            }
                        }
                    },
                    complete: function () {
                        app.card.loading.finish($(form));
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    }
                });
            });
            $('#sendEmailToDelayedUser').on('click', function (e) {
                e.preventDefault();
                var form = $(this).closest('form');
                var url = $(this).attr('data-url');
                $.ajax({
                    type: "POST",
                    url: url,
                    data: $(form).serialize(),
                    dataType: 'json',
                    beforeSend: function () {
                        app.card.loading.start($(form));
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                app.notification('success', data.success);
                                $('#emailContent').summernote('destroy');
                                $('#userSendEmailModal').modal('hide');
                                $('.tooltip.show').remove();
                            }
                        }
                    },
                    complete: function () {
                        app.card.loading.finish($(form));
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    }
                });
            });

            $(document).on('click', '.lost-book', function (e) {
                e.preventDefault();
                var className, url, $this = $(this);
                var bookLost = $this.attr('data-lost');
                if (bookLost == 'true') {
                    url = $this.attr('href').replace("[isLost]", 'false');
                } else {
                    url = $this.attr('href').replace("[isLost]", 'true');
                }
                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    url: url,
                    beforeSend: function () {
                        app.card.loading.start('#userBooks');
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                if (bookLost == 'true') {
                                    $($this).tooltip('hide');
                                    $($this).closest('tr').remove();
                                } else {
                                    $($this).tooltip('hide');
                                    $($this).closest('tr').remove();
                                }
                            }
                        }
                    },
                    complete: function () {
                        app.card.loading.finish('#userBooks');
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    }
                });
            });
            $(document).on('click', '.return-book', function (e) {
                e.preventDefault();
                var $this = $(this);
                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    url: $this.attr('href'),
                    beforeSend: function () {
                        app.card.loading.start('#userBooks');
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                app.notification('success', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book successfully returned<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                                $($this).tooltip('hide');
                                $($this).closest('tr').remove();
                            }
                        }
                    },
                    complete: function () {
                        app.card.loading.finish('#userBooks');
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    }
                });
            });
            $(document).on('click', '.delete-issue', function (e) {
                var url = $(this).attr('data-url');
                var row = $(this).closest('tr');
                $.ajax({
                    dataType: 'json',
                    type: 'POST',
                    url: url,
                    beforeSend: function () {
                        app.card.loading.start('#userBooks');
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
                        app.card.loading.finish('#userBooks');
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    }
                });
            });
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerCustomJs'} */
}
