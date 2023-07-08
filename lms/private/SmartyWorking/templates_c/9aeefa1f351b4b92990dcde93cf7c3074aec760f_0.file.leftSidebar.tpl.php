<?php
/* Smarty version 3.1.31, created on 2023-06-09 23:21:24
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\general\leftSidebar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_648397d4580ee2_01046856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9aeefa1f351b4b92990dcde93cf7c3074aec760f' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\general\\leftSidebar.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/general/sidebarMenu.tpl' => 1,
  ),
),false)) {
function content_648397d4580ee2_01046856 (Smarty_Internal_Template $_smarty_tpl) {
?>
<aside class="left-sidebar">
    <div class="scrollable-sidebar">
        <?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
            <div class="user-profile">
                <div class="profile-img">
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->getPhoto() && strcmp($_smarty_tpl->tpl_vars['user']->value->getPhoto()->getWebPath(),$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noImageFilePath")) !== 0) {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->getPhoto()->getWebPath();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->getFirstName();?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->getLastName();?>
" style="border-radius: 0"/>
                    <?php } else { ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noUserImageFilePath");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->getFirstName();?>
  <?php echo $_smarty_tpl->tpl_vars['user']->value->getLastName();?>
"/>
                    <?php }?>
                </div>
                <div class="profile-text">
                    <p class="name m-0"><?php echo $_smarty_tpl->tpl_vars['user']->value->getFirstName();?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->getLastName();?>
</p>
                    <p class="designation"><?php echo $_smarty_tpl->tpl_vars['user']->value->getRole()->getName();?>
</p>
                </div>
            </div>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender('file:admin/general/sidebarMenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
</aside><?php }
}
