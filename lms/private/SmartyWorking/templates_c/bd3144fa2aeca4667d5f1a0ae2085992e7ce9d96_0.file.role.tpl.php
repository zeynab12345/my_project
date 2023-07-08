<?php
/* Smarty version 3.1.31, created on 2023-07-07 18:32:57
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\roles\role.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64a83e392cccc2_24919550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd3144fa2aeca4667d5f1a0ae2085992e7ce9d96' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\roles\\role.tpl',
      1 => 1584518506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a83e392cccc2_24919550 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160704871464a83e38f12e68_94413915', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175028105664a83e38f22762_47678673', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159158216164a83e38f231a9_47407830', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111489015964a83e392ca450_41971051', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133634879864a83e392cb6d1_73956516', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_160704871464a83e38f12e68_94413915 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_160704871464a83e38f12e68_94413915',
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
Add Role<?php $_block_repeat=false;
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
Edit Role<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'title'} */
/* {block 'headerCss'} */
class Block_175028105664a83e38f22762_47678673 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_175028105664a83e38f22762_47678673',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_159158216164a83e38f231a9_47407830 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_159158216164a83e38f231a9_47407830',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['isDemoMode']->value === true) {?>
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-info text-center">In the demo version you cannot create/change role.</div>
            </div>
        </div>
    <?php }?>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <?php if ($_smarty_tpl->tpl_vars['action']->value == "create") {?>
                    <?php $_smarty_tpl->_assignInScope('route', $_smarty_tpl->tpl_vars['routes']->value->getRouteString("roleCreate"));
?>
                <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['role']->value)) {?>
                    <?php $_smarty_tpl->_assignInScope('route', $_smarty_tpl->tpl_vars['routes']->value->getRouteString("roleEdit",array("roleId"=>$_smarty_tpl->tpl_vars['role']->value->getId())));
?>
                <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "delete") {?>
                    <?php $_smarty_tpl->_assignInScope('route', '');
?>
                <?php }?>
                <form action="<?php echo $_smarty_tpl->tpl_vars['route']->value;?>
" method="post" class="validate">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for="name" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Role Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                    <input type="text" class="form-control" autocomplete="off" name="name" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['role']->value->getName();
}?>" required>
                                    <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {?><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['role']->value->getId();?>
"><?php }?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="issueDayLimit" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Priority<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                    <input type="text" class="form-control" autocomplete="off" name="priority" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['role']->value->getPriority();
}?>">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="issueDayLimit" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Issue Day Limit<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                    <input type="text" class="form-control" autocomplete="off" name="issueDayLimit" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['role']->value->getIssueDayLimit();
}?>">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="issueBookLimit" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Issue Book Limit<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                    <input type="text" class="form-control" autocomplete="off" name="issueBookLimit" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['role']->value->getIssueBookLimit();
}?>">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="finePerDay" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Fine Per Day<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                    <input type="text" class="form-control" autocomplete="off" name="finePerDay" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['role']->value->getFinePerDay();
}?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped role-permissions">
                                <thead>
                                    <tr>
                                        <th width="40">
                                            <label class="switch switch-sm">
                                                <input type="checkbox" id="checkAll">
                                            </label>
                                        </th>
                                        <th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Route Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (isset($_smarty_tpl->tpl_vars['permissions']->value) && $_smarty_tpl->tpl_vars['permissions']->value != null) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['permissions']->value, 'permission', false, NULL, 'permission', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['permission']->value) {
?>
                                            <tr data-action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("createPermission");?>
" data-edit-row="true" data-changed="false" <?php if ($_smarty_tpl->tpl_vars['permission']->value->isPublic()) {?>class="bg-success text-white"<?php }?>>
                                                <td>
                                                    <label class="switch switch-sm">
                                                        <input type="checkbox" name="permissions[]" value="<?php echo $_smarty_tpl->tpl_vars['permission']->value->getId();?>
"<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && ($_smarty_tpl->tpl_vars['permission']->value->isRolePermission() || $_smarty_tpl->tpl_vars['permission']->value->isPublic())) {?> checked<?php }
if ($_smarty_tpl->tpl_vars['permission']->value->isPublic()) {?> disabled<?php }?>>
                                                    </label>
                                                </td>
                                                <td>
                                                    <?php echo $_smarty_tpl->tpl_vars['permission']->value->getRouteTitle();?>

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
                        <div class="col-sm-12 m-t-20">
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-success pull-right mr-3 mb-3" <?php if ($_smarty_tpl->tpl_vars['isDemoMode']->value === true) {?>disabled<?php }?>>
                                    <i class="far fa-save mr-1"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
                </form>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerPageJs'} */
class Block_111489015964a83e392ca450_41971051 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_111489015964a83e392ca450_41971051',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/jquery-validate/jquery.validate.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerPageJs'} */
/* {block 'footerCustomJs'} */
class Block_133634879864a83e392cb6d1_73956516 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_133634879864a83e392cb6d1_73956516',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $("#checkAll").click(function () {
                $('table input:checkbox').not(this).not(':disabled').prop('checked', this.checked);
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
                rules: {
                    name: {
                        required: true
                    },
                    priority: {
                        required: true,
                        digits: true,
                        min: 1,
                        max: 255
                    },
                    issueDayLimit: {
                        number: true
                    },
                    issueBookLimit: {
                        number: true
                    },
                    finePerDay: {
                        number: true
                    }
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
