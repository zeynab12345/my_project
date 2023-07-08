<?php
/* Smarty version 3.1.31, created on 2023-06-12 12:41:43
  from "C:\xampp7.3\htdocs\lms\themes\default\custom\pages\contacts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6486f667346c47_36652953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eddd97fec51172350a61ac2a13bead75511968f7' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\themes\\default\\custom\\pages\\contacts.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6486f667346c47_36652953 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_replace')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\modifier.replace.php';
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13552651496486f666819441_62133510', 'metaTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17703445766486f666826c75_60113771', 'metaDescription');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14626536816486f666828378_35090993', 'metaKeywords');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14919756646486f666829d36_48296298', 'headerCss');
?>

<?php $_smarty_tpl->_assignInScope('pageURL', ((string)$_smarty_tpl->tpl_vars['SiteURL']->value).((string)$_SERVER['REQUEST_URI']));
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14909533606486f666baf153_52054246', 'socialNetworksMeta');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18586474146486f667318849_95024464', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15926489626486f667334946_12394114', 'footerJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10183694836486f667337345_94397453', 'customJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'public.tpl');
}
/* {block 'metaTitle'} */
class Block_13552651496486f666819441_62133510 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaTitle' => 
  array (
    0 => 'Block_13552651496486f666819441_62133510',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value->getMetaTitle()) {
echo $_smarty_tpl->tpl_vars['page']->value->getMetaTitle();
} else {
echo $_smarty_tpl->tpl_vars['page']->value->getTitle();
}
}
}
/* {/block 'metaTitle'} */
/* {block 'metaDescription'} */
class Block_17703445766486f666826c75_60113771 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaDescription' => 
  array (
    0 => 'Block_17703445766486f666826c75_60113771',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['page']->value->getMetaDescription();
}
}
/* {/block 'metaDescription'} */
/* {block 'metaKeywords'} */
class Block_14626536816486f666828378_35090993 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaKeywords' => 
  array (
    0 => 'Block_14626536816486f666828378_35090993',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['page']->value->getMetaKeywords();
}
}
/* {/block 'metaKeywords'} */
/* {block 'headerCss'} */
class Block_14919756646486f666829d36_48296298 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_14919756646486f666829d36_48296298',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'headerCss'} */
/* {block 'socialNetworksMeta'} */
class Block_14909533606486f666baf153_52054246 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'socialNetworksMeta' => 
  array (
    0 => 'Block_14909533606486f666baf153_52054246',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <meta property="og:title" content="<?php if ($_smarty_tpl->tpl_vars['page']->value->getMetaTitle()) {
echo $_smarty_tpl->tpl_vars['page']->value->getMetaTitle();
} else {
echo $_smarty_tpl->tpl_vars['page']->value->getTitle();
}?>"/>
    <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['SiteURL']->value;
if ($_smarty_tpl->tpl_vars['page']->value->getImage() != null) {
echo $_smarty_tpl->tpl_vars['page']->value->getImage()->getWebPath('');
} else {
echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noImageFilePath");
}?>"/>
    <meta property="og:description" content="<?php echo smarty_modifier_replace(smarty_modifier_truncate($_smarty_tpl->tpl_vars['page']->value->getMetaDescription(),200),'"','');?>
"/>
    <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['pageURL']->value;?>
"/>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php if ($_smarty_tpl->tpl_vars['page']->value->getMetaTitle()) {
echo $_smarty_tpl->tpl_vars['page']->value->getMetaTitle();
} else {
echo $_smarty_tpl->tpl_vars['page']->value->getTitle();
}?>">
    <meta name="twitter:description" content="<?php echo smarty_modifier_replace(smarty_modifier_truncate($_smarty_tpl->tpl_vars['page']->value->getMetaDescription(),200),'"','');?>
">
    <meta name="twitter:image:src" content="<?php echo $_smarty_tpl->tpl_vars['SiteURL']->value;
if ($_smarty_tpl->tpl_vars['page']->value->getImage() != null) {
echo $_smarty_tpl->tpl_vars['page']->value->getImage()->getWebPath('');
} else {
echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noImageFilePath");
}?>">
<?php
}
}
/* {/block 'socialNetworksMeta'} */
/* {block 'content'} */
class Block_18586474146486f667318849_95024464 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18586474146486f667318849_95024464',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="page contacts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1><?php echo $_smarty_tpl->tpl_vars['page']->value->getTitle();?>
</h1>
                </div>
                <div class="col-lg-12">
                    <?php if ($_smarty_tpl->tpl_vars['page']->value->getContent()) {?>
                        <div class="page-content">
                            <?php echo $_smarty_tpl->tpl_vars['page']->value->getContent();?>

                        </div>
                    <?php }?>
                    <form id="contact-form" method="post" class="validate mb-3 contact-form">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input class="form-control" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Email<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" type="email" name="email">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input class="form-control" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Full Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" type="text" name="name">
                            </div>
                            <div class="col-md-12 mb-3">
                                <input class="form-control" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Subject<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" type="text" name="subject">
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control mb-3" name="message" rows="3" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Message<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
"></textarea>
                                <button type="submit" class="btn btn-primary submit"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Send Message<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerJs'} */
class Block_15926489626486f667334946_12394114 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerJs' => 
  array (
    0 => 'Block_15926489626486f667334946_12394114',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/jquery.validate.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerJs'} */
/* {block 'customJs'} */
class Block_10183694836486f667337345_94397453 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customJs' => 
  array (
    0 => 'Block_10183694836486f667337345_94397453',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        var contactFormUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userMessageCreate",array());?>
';
        $(".validate").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                }
            }
        });
        $('.submit').on('click', function (e) {
            e.preventDefault();
            var form = $(this).closest('form');
            if (form.valid()) {
                $.ajax({
                    dataType: 'json',
                    method: 'POST',
                    data: form.serialize(),
                    url: contactFormUrl,
                    beforeSend: function () {
                        $(form).append('<div class="form-message"><i class="fa fa-spinner fa-spin"></i><span class="sr-only"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Loading...<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Sending, Please Wait..<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 </div>');
                    },
                    success: function (data) {
                        app.ajax_redirect(data);
                        if (data.error) {
                            $(form).find('.form-message').addClass('error').text('<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Failed to send your message. Please try later or contact the administrator<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("adminEmail");?>
');
                        } else {
                            $(form).find('.form-message').addClass('success').text('<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Your message was sent successfully. Thanks.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                            $(form).find('input, textarea').val('');
                        }
                    },
                    error: function (jqXHR, exception) {
                        $(form).find('.form-message').addClass('error').text('<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Failed to send your message. Please try later or contact the administrator<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("adminEmail");?>
');
                    },
                    complete: function () {
                        setTimeout(function () {
                            $(form).find('.form-message').fadeOut().remove();
                        }, 10000);
                    }
                });
            }
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'customJs'} */
}
