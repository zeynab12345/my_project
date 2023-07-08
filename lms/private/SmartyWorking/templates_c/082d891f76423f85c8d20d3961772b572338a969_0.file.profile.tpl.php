<?php
/* Smarty version 3.1.31, created on 2023-06-12 12:45:49
  from "C:\xampp7.3\htdocs\lms\themes\default\user\profile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6486f75db203f7_99610023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '082d891f76423f85c8d20d3961772b572338a969' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\themes\\default\\user\\profile.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6486f75db203f7_99610023 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3747387316486f75da896e2_55044131', 'metaTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17805499236486f75da99a13_81304239', 'metaDescription');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12911719806486f75da9b3e3_83609237', 'metaKeywords');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18118325096486f75da9d125_66257664', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6083877116486f75da9e871_95506419', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10150538166486f75db032f1_44232284', 'footerJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19048712046486f75db05d33_20918900', 'customJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'public.tpl');
}
/* {block 'metaTitle'} */
class Block_3747387316486f75da896e2_55044131 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaTitle' => 
  array (
    0 => 'Block_3747387316486f75da896e2_55044131',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profile | <?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("siteName");
}
}
/* {/block 'metaTitle'} */
/* {block 'metaDescription'} */
class Block_17805499236486f75da99a13_81304239 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaDescription' => 
  array (
    0 => 'Block_17805499236486f75da99a13_81304239',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaDescription'} */
/* {block 'metaKeywords'} */
class Block_12911719806486f75da9b3e3_83609237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaKeywords' => 
  array (
    0 => 'Block_12911719806486f75da9b3e3_83609237',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaKeywords'} */
/* {block 'headerCss'} */
class Block_18118325096486f75da9d125_66257664 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_18118325096486f75da9d125_66257664',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_6083877116486f75da9e871_95506419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6083877116486f75da9e871_95506419',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title text-center">
                        <h1><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
My Profile<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="profile">
        <div class="container">
            <div class="row position-relative profile-content">
                
                <div class="col-lg-9 col-md-7 order-column-2">
                    <form method="post" novalidate class="validate user-form" action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userProfile");?>
">
                        <input type="hidden" name="photoId" class="photoId" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['editedUser']->value->getPhotoId();
}?>">
                        <h2><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Personal Information<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h2>
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
                                    <select name="gender" class="form-control custom-select">
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
                            <div class="col-lg-8">
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
                        <div class="row">
                            <div class="col-lg-6">
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
                            <div class="col-lg-6">
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
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['editedUser']->value->getSocialId() == null) {?>
                        <h2><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Change Password<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h2>
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
}?>
                                        <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {?>
                                            <i class="ti-info" data-toggle="tooltip" data-trigger="hover" data-original-title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
}?></label>
                                    <input type="password" class="form-control confirmPassword" autocomplete="off" name="confirmPassword">
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        <div class="row mt-3">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary shadow save-user">
                                        <i class="fa fa-floppy-o"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Save Changes<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-md-5 order-column-1">
                    <h2><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Photo<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h2>

                    <div class="drop-zone photo-drop-zone<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['editedUser']->value->getPhotoId() != null) {?> photo-exist<?php }?>">
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
                        <button type="button" class="btn btn-info remove-photo<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['editedUser']->value->getPhotoId() == null || $_smarty_tpl->tpl_vars['action']->value == "create") {?> d-none<?php }?>" data-id="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
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
    </section>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerJs'} */
class Block_10150538166486f75db032f1_44232284 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerJs' => 
  array (
    0 => 'Block_10150538166486f75db032f1_44232284',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/jquery.validate.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerJs'} */
/* {block 'customJs'} */
class Block_19048712046486f75db05d33_20918900 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customJs' => 
  array (
    0 => 'Block_19048712046486f75db05d33_20918900',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $('.drop-zone').on('dragover', function() {
                $(this).addClass('hover');
            });
            $('.drop-zone').on('dragleave', function() {
                $(this).removeClass('hover');
            });
            var photoUploadUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userPhotoUpload",array());?>
';
            var photoDeleteUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("imageDeletePublic",array());?>
';
            $('#user-photo').on('change', userPhotoUpload);
            function userPhotoUpload(event) {
                var dropZone = $('.photo-drop-zone');
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
                            app.preloader.start('.photo-drop-zone');
                        },
                        success: function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    $('.remove-photo').attr('data-id', data.imageId);
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
                                    saveUser();
                                }
                            }
                        },
                        error: function (jqXHR, exception) {
                            app.notification('error', app.getErrorMessage(jqXHR, exception));
                        },
                        complete: function (data) {
                            app.preloader.finish('.photo-drop-zone');
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
                            $(dropZone).addClass('photo-exist').append(img);
                            $('.remove-photo').removeClass('d-none');
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

            $(document).on('click', '.remove-photo', function () {
                var imgId = $(this).attr('data-id');
                if (imgId != undefined && imgId != null && imgId > 0) {
                    $.ajax({
                        dataType: 'json',
                        method: 'POST',
                        url: photoDeleteUrl.replace("[imageId]", imgId),
                        beforeSend: function (data) {
                            app.preloader.start('.photo-drop-zone');
                        },
                        success: function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    $('.photo-drop-zone').removeClass('photo-exist').find('img').remove();
                                    $('.remove-photo').addClass('d-none');
                                    $('.photoId').val('');
                                    app.notification('success', data.success);
                                    saveUser();
                                }
                            }
                        },
                        error: function (jqXHR, exception) {
                            app.notification('error', app.getErrorMessage(jqXHR, exception));
                        },
                        complete: function (data) {
                            app.preloader.finish('.photo-drop-zone');
                        }
                    });
                }
            });

            $('.validate').validate({
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
                    firstName: {
                        required: true
                    },
                    lastName: {
                        required: true
                    },
                    confirmPassword: {
                        equalTo: "#mainPassword"
                    }
                }
            });
            function saveUser() {
                var form = $('.user-form');
                if ($(form).valid()) {
                    $('.confirmPassword').attr('disabled', true);
                    $.ajax({
                        dataType: 'json',
                        method: 'POST',
                        data: form.serialize(),
                        url: form.attr('action'),
                        beforeSend: function (data) {
                            app.preloader.start('.profile-content');
                        },
                        success: function (data) {
                            app.ajax_redirect(data);
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
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
                            }
                        },
                        error: function (jqXHR, exception) {
                            app.notification('error', app.getErrorMessage(jqXHR, exception));
                        },
                        complete: function (data) {
                            $('.confirmPassword').attr('disabled', false);
                            app.preloader.finish('.profile-content');
                        }
                    });
                }
            }
            $('.save-user').on('click', function (e) {
                e.preventDefault();
                saveUser();
            });
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'customJs'} */
}
