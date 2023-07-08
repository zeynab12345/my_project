<?php
/* Smarty version 3.1.31, created on 2023-06-10 14:02:29
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\public\posts\post.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64846655975188_54048607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1062ab0a3a9da1882d1951252380dba0eeaa7aae' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\public\\posts\\post.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64846655975188_54048607 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\modifier.date_format.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_722855633648466558bffe7_05579330', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2012313725648466558d2a62_67917151', 'toolbar');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1379684820648466558dd490_73422477', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1420607088648466558df4c3_72319631', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71349000164846655950d42_95268040', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86567276164846655956df9_48802070', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_722855633648466558bffe7_05579330 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_722855633648466558bffe7_05579330',
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
Add Post<?php $_block_repeat=false;
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
Edit Post<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'title'} */
/* {block 'toolbar'} */
class Block_2012313725648466558d2a62_67917151 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'toolbar' => 
  array (
    0 => 'Block_2012313725648466558d2a62_67917151',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {?>
        <div class="heading-elements">
            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("postViewPublic",array("postUrl"=>$_smarty_tpl->tpl_vars['post']->value->getUrl()));?>
" class="btn btn-outline-info btn-icon-fixed" target="_blank">
                <span class="btn-icon"><i class="far fa-eye"></i></span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
View Post<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            </a>
        </div>
    <?php }
}
}
/* {/block 'toolbar'} */
/* {block 'headerCss'} */
class Block_1379684820648466558dd490_73422477 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_1379684820648466558dd490_73422477',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/css/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" media="screen">
    <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/summernote/summernote-bs4.css" rel="stylesheet"/>
<?php
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_1420607088648466558df4c3_72319631 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1420607088648466558df4c3_72319631',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['action']->value == "create") {?>
        <?php $_smarty_tpl->_assignInScope('route', $_smarty_tpl->tpl_vars['routes']->value->getRouteString("postCreate"));
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['post']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('route', $_smarty_tpl->tpl_vars['routes']->value->getRouteString("postEdit",array("postId"=>$_smarty_tpl->tpl_vars['post']->value->getId())));
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "delete") {?>
        <?php $_smarty_tpl->_assignInScope('route', '');
?>
    <?php }?>
    <form action="<?php echo $_smarty_tpl->tpl_vars['route']->value;?>
" method="post" class="row validate post-form" data-edit="<?php if ($_smarty_tpl->tpl_vars['action']->value == "create") {?>false<?php } else { ?>true<?php }?>">
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <div class="card-body">
                    <input type="hidden" name="id" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['post']->value)) {
echo $_smarty_tpl->tpl_vars['post']->value->getId();
}?>" class="postId">
                    <input type="hidden" name="imageId" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['post']->value)) {
echo $_smarty_tpl->tpl_vars['post']->value->getImageId();
}?>" class="imageId">
                    <div class="form-group">
                        <label for="title"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Title<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                        <input type="text" name="title" class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['post']->value)) {
echo $_smarty_tpl->tpl_vars['post']->value->getTitle();
}?>">
                    </div>
                    <div class="form-group">
                        <label for="secondTitle"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Second Title<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                        <input type="text" name="secondTitle" class="form-control input-sm mb10 mt20" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['post']->value)) {
echo $_smarty_tpl->tpl_vars['post']->value->getSecondTitle();
}?>">
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['post']->value) && $_smarty_tpl->tpl_vars['post']->value->getId() == 0) {?>
                        <input type="hidden" name="url" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['post']->value)) {
echo $_smarty_tpl->tpl_vars['post']->value->getUrl();
}?>">
                    <?php } else { ?>
                        <div class="form-group">
                            <label for="url"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
URL<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                            <input type="text" name="url" class="form-control input-sm mb10" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['post']->value)) {
echo $_smarty_tpl->tpl_vars['post']->value->getUrl();
}?>" id="urlPath">
                        </div>
                    <?php }?>
                    <a data-toggle="modal" href="#postGallery" class="btn btn-outline-info btn-icon-fixed mb-2" id="openGallery">
                        <i class="far fa-images mr-1"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Gallery<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    </a>
                    <div class="form-group">
                        <label for="content"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Content<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                        <textarea class="form-control" name="content" id="content-box"><?php if (isset($_smarty_tpl->tpl_vars['post']->value)) {
echo $_smarty_tpl->tpl_vars['post']->value->getContent();
}?></textarea>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="shortDescription"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Short Description<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                        <textarea name="shortDescription" maxlength="250" cols="30" rows="2" class="form-control"><?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['post']->value->getShortDescription();
}?></textarea>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="shortDescription"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Meta Title<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                        <input type="text" name="metaTitle" class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['post']->value->getMetaTitle();
}?>">
                    </div>
                    <div class="form-group">
                        <label for="shortDescription"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Meta Keywords<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                        <select name="metaKeySelect" id="meta-key" class="form-control" multiple>
                            <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {?>
                                <?php $_smarty_tpl->_assignInScope('tagList', explode(",",$_smarty_tpl->tpl_vars['post']->value->getMetaKeywords()));
?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tagList']->value, 'tag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['tag']->value != null) {?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</option>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            <?php }?>
                        </select>
                        <input type="hidden" name="metaKeywords" id="metaKeyList" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['post']->value->getMetaKeywords();
}?>">
                    </div>
                    <div class="form-group">
                        <label for="shortDescription"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Meta Description<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                        <textarea name="metaDescription" cols="30" rows="2" style="width:100% !important" class="form-control"><?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['post']->value->getMetaDescription();
}?></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="title"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Status<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                        <?php if (isset($_smarty_tpl->tpl_vars['postStatuses']->value)) {?>
                            <select name="status" class="form-control select-picker">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['postStatuses']->value, 'postStatusValue', false, 'postStatusKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['postStatusKey']->value => $_smarty_tpl->tpl_vars['postStatusValue']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['postStatusKey']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['post']->value) && $_smarty_tpl->tpl_vars['post']->value->getStatus() !== null && $_smarty_tpl->tpl_vars['post']->value->getStatus() === $_smarty_tpl->tpl_vars['postStatusValue']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['postStatusValue']->value;?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            </select>
                        <?php }?>
                    </div>
                    <div class="form-group">
                        <label for="title"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Published on<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                        <input class="form-control date-picker" name="publishDateTime" type="text" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['post']->value)) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value->getPublishDateTime(),$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("inputDateTimeFormat"));
}?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-secondary disabled btn-icon-fixed pull-right save-post">
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
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="categories[]"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Categories<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                        <?php if (isset($_smarty_tpl->tpl_vars['categories']->value)) {?>
                            <ul class="list-unstyled mb0">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                                    <li>
                                        <?php $_smarty_tpl->_assignInScope('isCategorySelected', false);
?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['post']->value) && $_smarty_tpl->tpl_vars['post']->value->getCategories() !== null) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value->getCategories(), 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
                                                <?php if ($_smarty_tpl->tpl_vars['cat']->value->getId() === $_smarty_tpl->tpl_vars['category']->value->getId()) {?>
                                                    <?php $_smarty_tpl->_assignInScope('isCategorySelected', true);
?>
                                                    <?php
break 1;?>
                                                <?php }?>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                        <?php }?>
                                        <div class="app-checkbox">
                                            <label><input type="checkbox" class="serviceFlag" id="<?php echo $_smarty_tpl->tpl_vars['category']->value->getId();?>
" name="categories[]" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->getId();?>
"<?php if ($_smarty_tpl->tpl_vars['isCategorySelected']->value) {?> checked<?php }?>> <?php echo $_smarty_tpl->tpl_vars['category']->value->getName();?>

                                            </label>
                                        </div>
                                    </li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            </ul>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div class="card" id="image-block">
                <div class="card-body">
                    <div class="drop-zone cover-drop-zone<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['post']->value->getImageId() != null) {?> cover-exist<?php }?>">
                        <label><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Drag & Drop your file or <span>Browse</span><?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                        <input type="file" accept="image/png, image/jpeg, image/gif" id="post-image" class="disabledIt" />
                        <button type="button" class="btn btn-info remove-post-image<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['post']->value->getImageId() == null || $_smarty_tpl->tpl_vars['action']->value == "create") {?> d-none<?php }?>" data-id="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['post']->value->getImageId();
}?>"><i class="far fa-trash-alt"></i></button>
                        <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['post']->value->getImage() != null) {?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['post']->value->getImage()->getWebPath('small');?>
" class="img-fluid">
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="modal fade" id="postGallery" tabindex="-1" role="dialog" aria-labelledby="postGalleryLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 80%;">
            <div class="modal-content card">
                <div class="modal-body" id="galleryBlock">
                </div>
                <div class="modal-footer gallery-image-upload">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <span class="btn btn-sm btn-outline-secondary btn-file">
                            <span class="fileinput-new"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Select file<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                            <span class="fileinput-exists"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Change<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                            <input type="file" name="file">
                        </span>
                        <span class="fileinput-filename"></span>
                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                    </div>
                    <a href="#" class="btn btn-sm btn-outline-secondary uploadGalleryImage">
                        <i class="fa fa-upload"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Upload<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    </a>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerPageJs'} */
class Block_71349000164846655950d42_95268040 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_71349000164846655950d42_95268040',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/select2/select2.full.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/jasnyupload/fileinput.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/jquery-validate/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/bootstrap-select/bootstrap-select.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/inputmask/jquery.inputmask.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/moment/moment.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"><?php echo '</script'; ?>
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
class Block_86567276164846655956df9_48802070 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_86567276164846655956df9_48802070',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $('.date-picker').datetimepicker({
                format: '<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("inputDateTimeFormatJS");?>
',
                keepOpen: true
            }).on('dp.change', function () {
                $(this).closest('form').attr('data-changed', true);
                $('.save-post').removeClass('btn-outline-secondary disabled').addClass('btn-outline-success');
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
                    title: {
                        required: true
                    }<?php if ($_smarty_tpl->tpl_vars['action']->value == "create" || ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['post']->value) && $_smarty_tpl->tpl_vars['post']->value->getId() != 0)) {?>,
                    url: {
                        required: true,
                        urlpath: true
                    }<?php }?>
                }
            });
            $('#urlPath').on('change', function (e) {
                var val = $(this).val();
                $(this).val(val.replace(/^\//, ''));
            });
            $('#meta-key').select2({
                multiple: true,
                tags: true,
                allowClear: true,
                language: {
                    noResults: function () {
                        return "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Please enter keywords<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
";
                    }
                }
            }).on('change.select2', function () {
                $("#metaKeyList").val($(this).val());
            });
            $(document).on('click', '.ajax-page', function (e) {
                e.preventDefault();
                $.ajax({
                    url: $(this).attr('href'),
                    dataType: 'json',
                    beforeSend: function () {
                        app.card.loading.start($("#galleryBlock").parents('.modal-content'));
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                $("#galleryBlock").html(data.html);
                            }
                        }
                    },
                    complete: function () {
                        app.card.loading.finish($("#galleryBlock").parents('.modal-content'));
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    }
                });
            });
            var imagesUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("imageListView",array());?>
';
            $('#openGallery').on('click', function (e) {
                e.preventDefault();
                $.ajax({
                    url: imagesUrl,
                    dataType: 'json',
                    beforeSend: function () {
                        app.card.loading.start($("#galleryBlock").parents('.modal-content'));
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                $("#galleryBlock").html(data.html);
                            }
                        }
                    },
                    complete: function () {
                        app.card.loading.finish($("#galleryBlock").parents('.modal-content'));
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    }
                });
            });

            $('#content-box').summernote().on('summernote.change', function () {
                $('.post-form').attr('data-changed', true);
                $('.save-post').removeClass('btn-outline-secondary disabled').addClass('btn-outline-success');
            });

            $(document).on('change keypress', 'input,textarea,select', function () {
                $(this).closest('form').attr('data-changed', true);
                $('.save-post').removeClass('btn-outline-secondary disabled').addClass('btn-outline-success');
            });
            var postEditUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("postEdit",array());?>
';
            $('.save-post').on('click', function (e) {
                e.preventDefault();
                var form = $(this).closest('form');
                var dataEdit = form.attr('data-edit');
                var dataChanged = form.attr('data-changed');
                if (dataChanged == 'true') {
                    if (form.valid()) {
                        $.ajax({
                            dataType: 'json',
                            method: 'POST',
                            data: form.serialize(),
                            url: form.attr('action'),
                            beforeSend: function () {
                                app.card.loading.start('.card');
                            },
                            success: function (data) {
                                if (data.redirect) {
                                    window.location.href = data.redirect;
                                } else {
                                    if (data.error) {
                                        app.notification('error', data.error);
                                    } else {
                                        form.attr('action', postEditUrl.replace("[postId]", data.postId)).attr('data-changed', false);
                                        $('.postId').val(data.postId);
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
                                        $('.save-post').removeClass('btn-outline-success').addClass('btn-outline-secondary disabled');
                                        if (dataEdit == 'false') {
                                            $('.page-title h3').text('<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Edit Post<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                                            history.pushState(null, '', postEditUrl.replace("[postId]", data.postId));
                                        }
                                        $(form).attr('data-edit', true);
                                    }
                                }
                            },
                            error: function (jqXHR, exception) {
                                app.notification('error', app.getErrorMessage(jqXHR, exception));
                            },
                            complete: function () {
                                app.card.loading.finish('.card');
                            }
                        });
                    } else {
                        app.notification('error', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Validation errors occurred. Please confirm the fields and submit it again.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
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

            var imageUploadUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("postImageUpload",array());?>
';
            var imageDeleteUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("imageDelete",array());?>
';
            $('#post-image').on('change', postImageUpload);
            function postImageUpload(event) {
                $('.page-form').attr('data-changed', true);
                var dropZone = $('.cover-drop-zone');
                function upload() {
                    var imageId = $('.imageId').val();
                    var imgData = new FormData();
                    imgData.set('file', file);
                    if (imageId) {
                        imgData.set('imageId', imageId);
                    }
                    $.ajax({
                        dataType: 'json',
                        method: 'POST',
                        processData: false,
                        contentType: false,
                        data: imgData,
                        url: imageUploadUrl,
                        beforeSend: function (data) {
                            app.card.loading.start('#image-block');
                        },
                        success: function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    $('.remove-post-image').attr('data-id', data.imageId);
                                    $('.imageId').val(data.imageId);
                                    app.notification('success', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Image successfully uploaded<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                                    $('.save-post').click();
                                }
                            }
                        },
                        error: function (jqXHR, exception) {
                            app.notification('error', app.getErrorMessage(jqXHR, exception));
                        },
                        complete: function (data) {
                            app.card.loading.finish('#image-block');
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
                            $('.remove-post-image').removeClass('d-none');
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
            $(document).on('click', '.remove-post-image', function () {
                $('.page-form').attr('data-changed', true);
                var imgId = $(this).attr('data-id');
                if (imgId != undefined && imgId != null && imgId > 0) {
                    $.ajax({
                        dataType: 'json',
                        method: 'POST',
                        url: imageDeleteUrl.replace("[imageId]", imgId),
                        beforeSend: function (data) {
                            app.card.loading.start('#image-block');
                        },
                        success: function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    $('.cover-drop-zone').removeClass('cover-exist').find('img').remove();
                                    $('.remove-post-image').addClass('d-none');
                                    $('.imageId').val('');
                                    app.notification('success', data.success);
                                    $('.save-post').click();
                                }
                            }
                        },
                        error: function (jqXHR, exception) {
                            app.notification('error', app.getErrorMessage(jqXHR, exception));
                        },
                        complete: function (data) {
                            app.card.loading.finish('#image-block');
                        }
                    });
                }
            });

            function dirname(path) {
                return path.replace(/\\/g, '/').replace(/\/[^\/]*$/, '');
            }

            function basename(path) {
                return path.replace(/\\/g, '/').replace(/.*\//, '');
            }

            $('.uploadGalleryImage').on('click', function (e) {
                e.preventDefault();
                var data, fileValue, file;
                var elem = $(this);
                var dataChanged = $('.gallery-image-upload .fileinput').attr('data-changed');
                var imageUploadElement = $('.gallery-image-upload');
                if (dataChanged == 'true') {
                    data = new FormData();
                    file = $(imageUploadElement).find('input:file');
                    fileValue = $(imageUploadElement).find('input:file').val();
                    if ($(file)[0].files[0] != null) {
                        data.append('file', $(file)[0].files[0], fileValue);
                    } else if ($(file).closest('.fileinput').hasClass('fileinput-new')) {
                        data.append('file', null);
                    } else {
                        data.append('file', '');
                    }
                    $.ajax({
                        dataType: 'json',
                        method: 'POST',
                        processData: false,
                        contentType: false,
                        data: data,
                        url: imageUploadUrl,
                        beforeSend: function () {
                            app.card.loading.start($("#galleryBlock").parents('.modal-content'));
                        },
                        success: function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    var row_template = $('.gallery-clone').clone();
                                    $(row_template).removeClass('gallery-clone').prependTo("#image-list");
                                    var path = dirname(data.url);
                                    var filename = basename(data.url);
                                    var smallImg = path + '/small/' + filename;
                                    var originalImg = data.url;
                                    $(row_template).find('.tile-image-title p').text(filename);
                                    $(row_template).find('.thumb-img').attr('src', smallImg);
                                    $(row_template).find('button').attr('data-id', data.imageId);
                                    $(row_template).find('.original-path').attr('data-clipboard-text', originalImg);
                                    $(elem).closest('.gallery-image-upload').find('.close').click();
                                }
                            }
                        },
                        error: function (jqXHR, exception) {
                            app.notification('error', app.getErrorMessage(jqXHR, exception));
                        },
                        complete: function () {
                            app.card.loading.finish($("#galleryBlock").parents('.modal-content'));
                        }
                    });
                } else {
                    app.notification('information', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Please Choose Image<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                }

            });
            (function () {
                function createNode(text) {
                    var node = document.createElement('pre');
                    node.style.width = '1px';
                    node.style.height = '1px';
                    node.style.position = 'fixed';
                    node.style.top = '5px';
                    node.textContent = text;
                    return node;
                }

                function copyNode(node) {
                    var selection = getSelection();
                    selection.removeAllRanges();

                    var range = document.createRange();
                    range.selectNodeContents(node);
                    selection.addRange(range);

                    document.execCommand('copy');
                    selection.removeAllRanges();
                }

                function copyText(text) {
                    var node = createNode(text);
                    document.body.appendChild(node);
                    copyNode(node);
                    document.body.removeChild(node);
                }

                function copyInput(node) {
                    node.select();
                    document.execCommand('copy');
                    getSelection().removeAllRanges();
                }

                function isFormInput(element) {
                    return element.nodeName === 'INPUT' || element.nodeName === 'TEXTAREA';
                }

                $(document).on('click', '.copy-path', function () {
                    var text;
                    if (text = this.getAttribute('data-clipboard-text')) {
                        copyText(text);
                    } else {
                        var container = this.closest('.js-copy-container');
                        var content = container.querySelector('.js-copy-target');
                        if (isFormInput(content)) {
                            if (content.type === 'hidden') {
                                copyText(content.value);
                            } else {
                                copyInput(content);
                            }
                        } else {
                            copyNode(content);
                        }
                    }
                    this.blur();
                });
            }).call(this);
            $(document).on('click', '.delete-img', function (e) {
                e.preventDefault();
                var imgId = $(this).attr('data-id');

                var elem = $(this).closest('.gallery-img');
                if (imgId != undefined && imgId != null) {
                    $.ajax({
                        dataType: 'json',
                        method: 'POST',
                        url: imageDeleteUrl.replace("[imageId]", imgId),
                        beforeSend: function () {
                            app.card.loading.start($("#galleryBlock").parents('.modal-content'));
                        },
                        success: function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    $(elem).remove();
                                }
                            }
                        },
                        error: function (jqXHR, exception) {
                            app.notification('error', app.getErrorMessage(jqXHR, exception));
                        },
                        complete: function () {
                            app.card.loading.finish($("#galleryBlock").parents('.modal-content'));
                        }
                    });
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
