<?php
/* Smarty version 3.1.31, created on 2023-06-09 23:19:35
  from "C:\xampp7.3\htdocs\lms\themes\default\404.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64839767bc4b09_21705707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9213425330fc81b1a8dec669d587008d2bf86c7b' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\themes\\default\\404.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:errors.tpl' => 1,
  ),
),false)) {
function content_64839767bc4b09_21705707 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101826173464839767ba1a01_63306853', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'public.tpl');
}
/* {block 'content'} */
class Block_101826173464839767ba1a01_63306853 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_101826173464839767ba1a01_63306853',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="error-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-center">404</h1>
                    <div class="error-messages">
                        <p class="not-found text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
The page you are looking for was not found!<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</p>
                        <?php $_smarty_tpl->_subTemplateRender('file:errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <div class="text-center">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("publicIndex");?>
" class="btn btn-primary shadow"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Back to home<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
}
/* {/block 'content'} */
}
