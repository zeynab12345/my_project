<?php
/* Smarty version 3.1.31, created on 2023-06-10 13:50:20
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\users\user-list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6484637c303728_66952997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64f43ed6e687ba969415a057141200f3d009ee18' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\users\\user-list.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/general/pagination.tpl' => 1,
  ),
),false)) {
function content_6484637c303728_66952997 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
?>
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
Email<?php $_block_repeat=false;
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
User Name<?php $_block_repeat=false;
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
User Role<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                <div class="dropdown d-inline-block pull-right">
                    <a href="#" class="text-dark" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-filter"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" style="min-width: 260px">
                        <form class="px-3 py-3 text-center">
                            <div class="form-group">
                                <label for="genres" class="control-label text-sm"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Role<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                <select class="form-control" name="roleId" id="roleId" ></select>
                            </div>
                            <button type="submit" class="btn btn-primary" id="role-filter">
                                <span class="btn-icon"><i class="fas fa-check"></i></span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Filter<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            </button>
                        </form>
                    </div>
                </div>
            </th>
            <th style="width: 140px;" class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Registration Type<?php $_block_repeat=false;
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
Status<?php $_block_repeat=false;
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
        <?php $_smarty_tpl->_assignInScope('currentUser', $_smarty_tpl->tpl_vars['user']->value);
?>
        <?php if (isset($_smarty_tpl->tpl_vars['users']->value) && $_smarty_tpl->tpl_vars['users']->value != null) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user', false, NULL, 'user', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                <tr>
                    <td>
                        <?php if (isset($_smarty_tpl->tpl_vars['currentUser']->value) && $_smarty_tpl->tpl_vars['currentUser']->value->getRole() != null && $_smarty_tpl->tpl_vars['currentUser']->value->getRole()->getPriority() < 255) {?>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->getRole() !== null && $_smarty_tpl->tpl_vars['user']->value->getRole()->getId() == 1) {?>
                                <?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>

                            <?php } else { ?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userEdit",array("userId"=>$_smarty_tpl->tpl_vars['user']->value->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
</a>
                            <?php }?>
                        <?php } else { ?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userEdit",array("userId"=>$_smarty_tpl->tpl_vars['user']->value->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
</a>
                        <?php }?>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->getFirstName();?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->getLastName();?>
</td>
                    <td><?php if ($_smarty_tpl->tpl_vars['user']->value->getRole() !== null) {?><a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("roleUserListView",array("roleId"=>$_smarty_tpl->tpl_vars['user']->value->getRole()->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->getRole()->getName();?>
</a><?php }?></td>
                    <td class="text-center">
                        <span class="badge <?php if ($_smarty_tpl->tpl_vars['user']->value->getProvider() == 'facebook') {?>badge-facebook<?php } elseif ($_smarty_tpl->tpl_vars['user']->value->getProvider() == 'google') {?>badge-google<?php } elseif ($_smarty_tpl->tpl_vars['user']->value->getProvider() == 'twitter') {?>badge-twitter<?php } else { ?>badge-default<?php }?>">
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->getProvider() != null) {?>
                                <?php echo $_smarty_tpl->tpl_vars['user']->value->getProvider();?>

                            <?php } else { ?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Email<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            <?php }?>
                        </span>
                    </td>
                    <td class="text-center">
                        <span class="badge <?php if ($_smarty_tpl->tpl_vars['user']->value->isActive() == '1') {?>badge-success<?php } else { ?>badge-danger<?php }?>">
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->isActive() == '1') {?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Active<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            <?php } else { ?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Inactive<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            <?php }?>
                        </span>
                    </td>
                    <td class="text-center">
                        <?php if (isset($_smarty_tpl->tpl_vars['currentUser']->value) && $_smarty_tpl->tpl_vars['currentUser']->value->getRole() != null && $_smarty_tpl->tpl_vars['currentUser']->value->getRole()->getPriority() <= 200) {?>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->getRole() !== null && $_smarty_tpl->tpl_vars['user']->value->getRole()->getId() != 1) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userEdit",array("userId"=>$_smarty_tpl->tpl_vars['user']->value->getId()));?>
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
                            <?php }?>
                        <?php } else { ?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userEdit",array("userId"=>$_smarty_tpl->tpl_vars['user']->value->getId()));?>
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
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->getRole() !== null && $_smarty_tpl->tpl_vars['user']->value->getId() != 1 && $_smarty_tpl->tpl_vars['currentUser']->value->getRole()->getPriority() >= 255) {?>
                        <?php if (($_smarty_tpl->tpl_vars['isDemoMode']->value === true && $_smarty_tpl->tpl_vars['user']->value->getId() > 3) || $_smarty_tpl->tpl_vars['isDemoMode']->value === false) {?>
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
                                        <button class="btn btn-outline-danger delete-user" data-url="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userDelete",array("userId"=>$_smarty_tpl->tpl_vars['user']->value->getId()));?>
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
                        <?php }?>
                        <?php }?>
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
