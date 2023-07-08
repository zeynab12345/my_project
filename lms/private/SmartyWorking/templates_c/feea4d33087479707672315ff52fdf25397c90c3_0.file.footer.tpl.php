<?php
/* Smarty version 3.1.31, created on 2023-06-09 23:19:37
  from "C:\xampp7.3\htdocs\lms\themes\default\general\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6483976910c358_53354299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'feea4d33087479707672315ff52fdf25397c90c3' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\themes\\default\\general\\footer.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6483976910c358_53354299 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p><?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("footerCredits");?>
</p>
            </div>
        </div>
    </div>
</footer>
<button class="back-to-top" id="back-to-top" role="button"><i class="ti-angle-up"></i></button><?php }
}
