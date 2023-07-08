<?php
/* Smarty version 3.1.31, created on 2023-06-10 14:08:00
  from "C:\xampp7.3\htdocs\lms\themes\default\blog\post.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_648467a0be2734_23361305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e401a5351091bd9242f70bcd1033dd53589ecc0d' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\themes\\default\\blog\\post.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648467a0be2734_23361305 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\modifier.replace.php';
if (!is_callable('smarty_modifier_truncate')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\modifier.date_format.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_489850506648467a0b7ad07_36908423', 'metaTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1478533117648467a0b849f2_53022036', 'metaDescription');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1695024543648467a0b8c099_58171596', 'metaKeywords');
?>

<?php $_smarty_tpl->_assignInScope('pageURL', ((string)$_smarty_tpl->tpl_vars['SiteURL']->value).((string)$_SERVER['REQUEST_URI']));
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_407231998648467a0b97968_57794750', 'socialNetworksMeta');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125929057648467a0ba9f13_87241101', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1934775034648467a0bdf583_36621817', 'footerJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1406945984648467a0be10d0_01430844', 'namecustomJs');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'public.tpl');
}
/* {block 'metaTitle'} */
class Block_489850506648467a0b7ad07_36908423 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaTitle' => 
  array (
    0 => 'Block_489850506648467a0b7ad07_36908423',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['post']->value->getMetaTitle() !== null) {
echo $_smarty_tpl->tpl_vars['post']->value->getMetaTitle();
} else {
echo $_smarty_tpl->tpl_vars['post']->value->getTitle();
}
}
}
/* {/block 'metaTitle'} */
/* {block 'metaDescription'} */
class Block_1478533117648467a0b849f2_53022036 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaDescription' => 
  array (
    0 => 'Block_1478533117648467a0b849f2_53022036',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['post']->value->getMetaDescription(),'"','');
}
}
/* {/block 'metaDescription'} */
/* {block 'metaKeywords'} */
class Block_1695024543648467a0b8c099_58171596 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaKeywords' => 
  array (
    0 => 'Block_1695024543648467a0b8c099_58171596',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['post']->value->getMetaKeywords();
}
}
/* {/block 'metaKeywords'} */
/* {block 'socialNetworksMeta'} */
class Block_407231998648467a0b97968_57794750 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'socialNetworksMeta' => 
  array (
    0 => 'Block_407231998648467a0b97968_57794750',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <meta property="og:title" content="<?php if ($_smarty_tpl->tpl_vars['post']->value->getMetaTitle() !== null) {
echo $_smarty_tpl->tpl_vars['post']->value->getMetaTitle();
} else {
echo $_smarty_tpl->tpl_vars['post']->value->getTitle();
}?>"/>
    <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['SiteURL']->value;
if ($_smarty_tpl->tpl_vars['post']->value->getImage() != null) {
echo $_smarty_tpl->tpl_vars['post']->value->getImage()->getWebPath('');
} else {
echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noImageFilePath");
}?>"/>
    <meta property="og:description" content="<?php echo smarty_modifier_replace(smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value->getMetaDescription(),200),'"','');?>
"/>
    <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['pageURL']->value;?>
"/>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php if ($_smarty_tpl->tpl_vars['post']->value->getMetaTitle()) {
echo $_smarty_tpl->tpl_vars['post']->value->getMetaTitle();
} else {
echo $_smarty_tpl->tpl_vars['post']->value->getTitle();
}?>">
    <meta name="twitter:description" content="<?php echo smarty_modifier_replace(smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value->getMetaDescription(),200),'"','');?>
">
    <meta name="twitter:image:src" content="<?php echo $_smarty_tpl->tpl_vars['SiteURL']->value;
if ($_smarty_tpl->tpl_vars['post']->value->getImage() != null) {
echo $_smarty_tpl->tpl_vars['post']->value->getImage()->getWebPath('');
} else {
echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noImageFilePath");
}?>">
<?php
}
}
/* {/block 'socialNetworksMeta'} */
/* {block 'content'} */
class Block_125929057648467a0ba9f13_87241101 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_125929057648467a0ba9f13_87241101',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="single-post">
        <?php if ($_smarty_tpl->tpl_vars['post']->value->getImage() != null) {?>
            <div class="post-img text-center" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['post']->value->getImage()->getWebPath('');?>
');"></div>
        <?php }?>
        <?php echo '<script'; ?>
 type="application/ld+json">
            {
              "@context": "http://schema.org",
              "@type": "Article",
              "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "<?php echo $_smarty_tpl->tpl_vars['pageURL']->value;?>
"
              },
              "headline": "<?php echo $_smarty_tpl->tpl_vars['post']->value->getTitle();?>
",
              <?php if ($_smarty_tpl->tpl_vars['post']->value->getImage() != null) {?>
              "image": [
                "<?php echo $_smarty_tpl->tpl_vars['SiteURL']->value;
echo $_smarty_tpl->tpl_vars['post']->value->getImage()->getWebPath('');?>
"
               ],
               <?php }?>
              "datePublished": "<?php echo $_smarty_tpl->tpl_vars['post']->value->getPublishDateTime();?>
",
              "dateModified": "<?php echo $_smarty_tpl->tpl_vars['post']->value->getPublishDateTime();?>
",
              <?php if ($_smarty_tpl->tpl_vars['post']->value->getUser() != null) {?>
              "author": {
                "@type": "Person",
                "name": "<?php echo $_smarty_tpl->tpl_vars['post']->value->getUser()->getFirstName();?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value->getUser()->getLastName();?>
"
              },
              <?php }?>
               "publisher": {
                "@type": "Organization",
                "name": "<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("siteName");?>
",
                "logo": {
                  "@type": "ImageObject",
                  "url": "<?php echo $_smarty_tpl->tpl_vars['SiteURL']->value;
echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("logoFilePath");?>
"
                }
              },
              "description": "<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['post']->value->getMetaDescription(),'"','');?>
"
            }


        <?php echo '</script'; ?>
>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="post-content">
                        <h1><?php echo $_smarty_tpl->tpl_vars['post']->value->getTitle();?>
</h1>
                        <div class="post-meta text-center mt-1">
                            <?php if ($_smarty_tpl->tpl_vars['post']->value->getUser() != null) {?><span class="user">
                                <i class="icon-user"></i>
                                <?php echo $_smarty_tpl->tpl_vars['post']->value->getUser()->getFirstName();?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value->getUser()->getLastName();?>
</span><?php }?>
                            <span class="categories">
                                <?php if (count($_smarty_tpl->tpl_vars['post']->value->getCategories()) > 0) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value->getCategories(), 'category', false, NULL, 'categories', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['total'];
?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("postListByCategoryViewPublic",array("categoryUrl"=>$_smarty_tpl->tpl_vars['category']->value->getUrl()));?>
">
                                    <i class="fa fa-tag" aria-hidden="true"></i>
                                    <?php echo $_smarty_tpl->tpl_vars['category']->value->getName();?>

                                    </a><?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['last'] : null) !== true) {?>, <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
                            </span>
                            <span class="time"><i class="icon-clock"></i> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value->getPublishDateTime(),$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("dateFormat"));?>
</span>
                        </div>
                        <?php if (isset($_SERVER['REQUEST_URI'])) {?>
                            <div class="social-btns mt-3">
                                <a class="btn facebook" href="https://www.facebook.com/share.php?u=<?php echo $_smarty_tpl->tpl_vars['pageURL']->value;?>
&title=<?php echo $_smarty_tpl->tpl_vars['post']->value->getTitle();?>
" target="blank"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn twitter" href="https://twitter.com/intent/tweet?status=<?php echo $_smarty_tpl->tpl_vars['post']->value->getTitle();?>
+<?php echo $_smarty_tpl->tpl_vars['pageURL']->value;?>
" target="blank"><i class="fab fa-twitter"></i></a>
                                <a class="btn google" href="https://plus.google.com/share?url=<?php echo $_smarty_tpl->tpl_vars['pageURL']->value;?>
" target="blank"><i class="fab fa-google"></i></a>
                                <a class="btn vk" href="http://vk.com/share.php?url=<?php echo $_smarty_tpl->tpl_vars['pageURL']->value;?>
" target="blank"><i class="fab fa-vk"></i></a>
                                <a class="btn pinterest" href="http://pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->tpl_vars['pageURL']->value;?>
&description=<?php echo $_smarty_tpl->tpl_vars['post']->value->getTitle();?>
" target="blank"><i class="fab fa-pinterest"></i></a>
                                <a class="btn email" href="mailto:?subject=<?php echo $_smarty_tpl->tpl_vars['post']->value->getTitle();
if ($_smarty_tpl->tpl_vars['post']->value->getContent()) {?>&amp;body=<?php echo preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['post']->value->getContent()));
}?>" target="blank"><i class="fas fa-at"></i></a>
                            </div>
                        <?php }?>
                        <div class="post-text">
                            <?php if ($_smarty_tpl->tpl_vars['post']->value->getContent()) {?>
                                <?php echo $_smarty_tpl->tpl_vars['post']->value->getContent();?>

                            <?php }?>
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
/* {block 'footerJs'} */
class Block_1934775034648467a0bdf583_36621817 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerJs' => 
  array (
    0 => 'Block_1934775034648467a0bdf583_36621817',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'footerJs'} */
/* {block 'namecustomJs'} */
class Block_1406945984648467a0be10d0_01430844 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'namecustomJs' => 
  array (
    0 => 'Block_1406945984648467a0be10d0_01430844',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'namecustomJs'} */
}
