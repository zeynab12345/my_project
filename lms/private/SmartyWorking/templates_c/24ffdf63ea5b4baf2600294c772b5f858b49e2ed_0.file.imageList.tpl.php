<?php
/* Smarty version 3.1.31, created on 2023-06-10 14:02:45
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\public\images\imageList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_648466654b9514_97947305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24ffdf63ea5b4baf2600294c772b5f858b49e2ed' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\public\\images\\imageList.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/general/pagination.tpl' => 1,
  ),
),false)) {
function content_648466654b9514_97947305 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
?>
<div class="row mb-3" id="image-list">
    <?php if (isset($_smarty_tpl->tpl_vars['images']->value) && $_smarty_tpl->tpl_vars['images']->value != null) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
            <div class="col-sm-4 col-md-3 col-lg-2 text-center gallery-img">
                <div class="tile-basic">
                    <div class="tile-image">
                        <?php if ($_smarty_tpl->tpl_vars['image']->value != null) {?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->getWebPath('small');?>
" alt="" class="small-img img-fluid">
                        <?php } else { ?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noBookImageFilePath");?>
" alt="" class="small-img img-fluid">
                        <?php }?>
                        <div class="tile-image-title">
                            <p><?php if ($_smarty_tpl->tpl_vars['image']->value != null) {
echo basename($_smarty_tpl->tpl_vars['image']->value->getWebPath());
}?></p>
                        </div>
                        <div class="tile-image-hover">
                            <button type="button" class="btn btn-danger delete-img gallery-img-delete" data-id="<?php echo $_smarty_tpl->tpl_vars['image']->value->getId();?>
">
                                <i class="far fa-trash-alt"></i>
                            </button>
                            <div class="tile-image-container-vertical text-center">
                                <button type="button" class="btn btn-info btn-sm btn-icon-fixed copy-path original-path" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['image']->value->getWebPath();?>
">
                                    <i class="far fa-copy" aria-hidden="true"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Copy Image URL<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    <?php }?>
    <div class="col-sm-4 col-md-3 col-lg-2 text-center gallery-img gallery-clone">
        <div class="tile-basic">
            <div class="tile-image">
                <img src="" alt="" class="thumb-img">
                <div class="tile-image-title">
                    <p></p>
                </div>
                <div class="tile-image-hover">
                    <button type="button" class="btn btn-danger delete-img gallery-img-delete" data-id="">
                        <i class="far fa-trash-alt"></i>
                    </button>
                    <div class="tile-image-container-vertical text-center">
                        <button type="button" class="btn btn-info btn-sm btn-icon-fixed copy-path original-path" data-clipboard-text="">
                            <span class="far fa-copy" aria-hidden="true"></span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Copy Image URL<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:admin/general/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
