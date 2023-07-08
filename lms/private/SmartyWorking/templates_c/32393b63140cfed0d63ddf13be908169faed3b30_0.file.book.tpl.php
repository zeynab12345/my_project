<?php
/* Smarty version 3.1.31, created on 2023-06-09 23:50:09
  from "C:\xampp7.3\htdocs\lms\themes\default\books\book.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64839e917a3b26_81901679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32393b63140cfed0d63ddf13be908169faed3b30' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\themes\\default\\books\\book.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:books/components/rating.tpl' => 2,
  ),
),false)) {
function content_64839e917a3b26_81901679 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\modifier.replace.php';
if (!is_callable('smarty_modifier_truncate')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\modifier.date_format.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144261636864839e91646eb2_41131929', 'metaTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13709331364839e91651b38_69834495', 'metaDescription');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39226450964839e9165a334_18866121', 'metaKeywords');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134229242464839e9165c1a6_43484208', 'headerCss');
?>

<?php $_smarty_tpl->_assignInScope('pageURL', ((string)$_smarty_tpl->tpl_vars['SiteURL']->value).((string)$_SERVER['REQUEST_URI']));
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121231358264839e91668483_29217978', 'headerPrefix');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16930661864839e91669998_56149235', 'socialNetworksMeta');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209892726664839e9168e5b7_50273198', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157144643664839e9178cb01_75113341', 'footerJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169172845564839e9178f075_30076641', 'customJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'public.tpl');
}
/* {block 'metaTitle'} */
class Block_144261636864839e91646eb2_41131929 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaTitle' => 
  array (
    0 => 'Block_144261636864839e91646eb2_41131929',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['book']->value->getMetaTitle() !== null) {
echo $_smarty_tpl->tpl_vars['book']->value->getMetaTitle();
} else {
echo $_smarty_tpl->tpl_vars['book']->value->getTitle();
}
}
}
/* {/block 'metaTitle'} */
/* {block 'metaDescription'} */
class Block_13709331364839e91651b38_69834495 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaDescription' => 
  array (
    0 => 'Block_13709331364839e91651b38_69834495',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['book']->value->getMetaDescription(),'"','');
}
}
/* {/block 'metaDescription'} */
/* {block 'metaKeywords'} */
class Block_39226450964839e9165a334_18866121 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaKeywords' => 
  array (
    0 => 'Block_39226450964839e9165a334_18866121',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['book']->value->getMetaKeywords();
}
}
/* {/block 'metaKeywords'} */
/* {block 'headerCss'} */
class Block_134229242464839e9165c1a6_43484208 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_134229242464839e9165c1a6_43484208',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/photoswipe.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/photoswipe-skin.css">
<?php
}
}
/* {/block 'headerCss'} */
/* {block 'headerPrefix'} */
class Block_121231358264839e91668483_29217978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerPrefix' => 
  array (
    0 => 'Block_121231358264839e91668483_29217978',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# books: http://ogp.me/ns/books#"<?php
}
}
/* {/block 'headerPrefix'} */
/* {block 'socialNetworksMeta'} */
class Block_16930661864839e91669998_56149235 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'socialNetworksMeta' => 
  array (
    0 => 'Block_16930661864839e91669998_56149235',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['book']->value != null) {?>
        <meta property="og:type" content="books.book"/>
        <meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
"/>
        <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['SiteURL']->value;
if ($_smarty_tpl->tpl_vars['book']->value->getCover() != null) {
echo $_smarty_tpl->tpl_vars['book']->value->getCover()->getWebPath('');
} else {
echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noBookImageFilePath");
}?>"/>
        <meta property="og:description" content="<?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['book']->value->getDescription())),255);?>
"/>
        <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['pageURL']->value;?>
"/>
        <?php if ($_smarty_tpl->tpl_vars['book']->value->getAuthors() !== null && is_array($_smarty_tpl->tpl_vars['book']->value->getAuthors()) && count($_smarty_tpl->tpl_vars['book']->value->getAuthors()) > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['book']->value->getAuthors(), 'author', false, NULL, 'author', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['total'];
?>
                <meta property="book:author" content="<?php echo $_smarty_tpl->tpl_vars['author']->value->getLastName();?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value->getFirstName();?>
">
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['book']->value->getISBN13() != null) {?>
            <meta property="book:isbn" content="<?php echo $_smarty_tpl->tpl_vars['book']->value->getISBN13();?>
">
        <?php } elseif ($_smarty_tpl->tpl_vars['book']->value->getISBN10() != null) {?>
            <meta property="book:isbn" content="<?php echo $_smarty_tpl->tpl_vars['book']->value->getISBN10();?>
">
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['book']->value->getPublishingYear() != null) {?>
            <meta property="book:release_date" content="<?php echo $_smarty_tpl->tpl_vars['book']->value->getPublishingYear();?>
">
        <?php }?>
    <?php }
}
}
/* {/block 'socialNetworksMeta'} */
/* {block 'content'} */
class Block_209892726664839e9168e5b7_50273198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_209892726664839e9168e5b7_50273198',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="single-book" data-book="<?php echo $_smarty_tpl->tpl_vars['book']->value->getId();?>
" itemscope itemtype="http://schema.org/Book">
        <meta itemprop="url" content="<?php echo $_SERVER['REQUEST_URI'];?>
"/>
        <?php if ($_smarty_tpl->tpl_vars['book']->value->getAuthors() !== null && is_array($_smarty_tpl->tpl_vars['book']->value->getAuthors()) && count($_smarty_tpl->tpl_vars['book']->value->getAuthors()) > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['book']->value->getAuthors(), 'author', false, NULL, 'author', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['total'];
?>
                <meta itemprop="author" content="<?php echo $_smarty_tpl->tpl_vars['author']->value->getLastName();?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value->getFirstName();?>
"/>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['book']->value->getPublisher() != null) {?>
            <meta itemprop="publisher" content="<?php echo $_smarty_tpl->tpl_vars['book']->value->getPublisher()->getName();?>
"/>
        <?php }?>

        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sticky-left-column">
                        <div class="book-cover">
                            <?php if ($_smarty_tpl->tpl_vars['book']->value->getCover() != null) {?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['book']->value->getCover()->getWebPath('');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
" class="img-fluid" itemprop="image">
                            <?php } else { ?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noBookImageFilePath");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
" class="img-fluid" itemprop="image">
                            <?php }?>
                            <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value->getRole() != null && $_smarty_tpl->tpl_vars['user']->value->getRole()->getPriority() >= 200) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookEdit",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));?>
" class="edit-book" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Edit Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
"><i class="ti-pencil" aria-hidden="true"></i></a>
                            <?php }?>
                        </div>
                        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="pswp__bg"></div>
                            <div class="pswp__scroll-wrap">
                                <div class="pswp__container">
                                    <div class="pswp__item"></div>
                                    <div class="pswp__item"></div>
                                    <div class="pswp__item"></div>
                                </div>
                                <div class="pswp__ui pswp__ui--hidden">
                                    <div class="pswp__top-bar">
                                        <div class="pswp__counter"></div>
                                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                        <button class="pswp__button pswp__button--share" title="Share"></button>
                                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                                        <div class="pswp__preloader">
                                            <div class="pswp__preloader__icn">
                                                <div class="pswp__preloader__cut">
                                                    <div class="pswp__preloader__donut"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                        <div class="pswp__share-tooltip"></div>
                                    </div>
                                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                                    </button>
                                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                                    </button>
                                    <div class="pswp__caption">
                                        <div class="pswp__caption__center"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['bookFieldSettings']->value->getBookFieldOptions('images')->isVisible() && $_smarty_tpl->tpl_vars['book']->value->getImages() != null) {?>
                            <div class="book-image-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['book']->value->getImages(), 'image', false, NULL, 'image', array (
));
$_smarty_tpl->tpl_vars['image']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->index++;
$__foreach_image_2_saved = $_smarty_tpl->tpl_vars['image'];
?>
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['image']->value->getWebPath();?>
" itemprop="contentUrl" data-size="<?php echo $_smarty_tpl->tpl_vars['image']->value->getWidth();?>
x<?php echo $_smarty_tpl->tpl_vars['image']->value->getHeight();?>
">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->getWebPath('small');?>
" itemprop="thumbnail" alt="<?php echo $_smarty_tpl->tpl_vars['image']->index;?>
" />
                                        </a>
                                    </figure>
                                <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_2_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            </div>
                        <?php }?>

                        <?php if (isset($_SERVER['REQUEST_URI']) && $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("showShareLinks")) {?>
                            <div class="social-btns">
                                <a class="btn facebook" href="https://www.facebook.com/share.php?u=<?php echo $_smarty_tpl->tpl_vars['pageURL']->value;?>
&title=<?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
" target="blank"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn twitter" href="https://twitter.com/intent/tweet?status=<?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
+<?php echo $_smarty_tpl->tpl_vars['pageURL']->value;?>
" target="blank"><i class="fab fa-twitter"></i></a>
                                <a class="btn google" href="https://plus.google.com/share?url=<?php echo $_smarty_tpl->tpl_vars['pageURL']->value;?>
" target="blank"><i class="fab fa-google"></i></a>
                                <a class="btn vk" href="http://vk.com/share.php?url=<?php echo $_smarty_tpl->tpl_vars['pageURL']->value;?>
" target="blank"><i class="fab fa-vk"></i></a>
                                <a class="btn pinterest" href="http://pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->tpl_vars['pageURL']->value;?>
&description=<?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
" target="blank"><i class="fab fa-pinterest"></i></a>
                                <a class="btn email" href="mailto:?subject=<?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();
if ($_smarty_tpl->tpl_vars['book']->value->getDescription()) {?>&amp;body=<?php echo preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['book']->value->getDescription()));
}?>" target="blank"><i class="fas fa-at"></i></a>
                            </div>
                        <?php }?>

                        <div class="book-links row justify-content-center">
                            

                            <?php if ($_smarty_tpl->tpl_vars['book']->value->getEBookId() != null) {?>
                                <?php if (($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("showDownloadLinkToRegisteredOnly") && isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value != null) || $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("showDownloadLink")) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("electronicBookGet",array("electronicBookId"=>$_smarty_tpl->tpl_vars['book']->value->getEBookId()));?>
" class="col-lg-4 col-sm-4 download-link">
                                        <i class="far fa-hdd ml-1" aria-hidden="true"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Download<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                    </a>
                                <?php }?>
                                <?php if (($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("showReadLinkToRegisteredOnly") && isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value != null) || $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("showReadLink")) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("electronicBookView",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));?>
" class="col-lg-4 col-sm-4 read-link">
                                        <i class="fas fa-glasses"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Read<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                    </a>
                                <?php }?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("enableBookRequest")) {?>
                                <a class="<?php if ($_smarty_tpl->tpl_vars['book']->value->getEBookId() != null && $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("showDownloadLink") || $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("showReadLink") || (($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("showReadLinkToRegisteredOnly") || $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("showDownloadLinkToRegisteredOnly")) && isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value != null)) {?>col-lg-4 col-sm-4<?php } else { ?>col-lg-12<?php }?> <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("enableBookIssueByUser")) {?>issue-link<?php } else { ?>request-link<?php }?>" id="<?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("enableBookIssueByUser")) {?>issue-book<?php } else { ?>request-book<?php }?>" href="#"><i class="ti-book<?php if ($_smarty_tpl->tpl_vars['book']->value->getEBookId() != null && $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("showDownloadLink") || $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("showReadLink") || (($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("showReadLinkToRegisteredOnly") || $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("showDownloadLinkToRegisteredOnly")) && isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value != null)) {
} else { ?> inline<?php }?>"></i> <?php if ($_smarty_tpl->tpl_vars['book']->value->getEBookId() != null && $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("showDownloadLink") || $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("showReadLink") || (($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("showReadLinkToRegisteredOnly") || $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("showDownloadLinkToRegisteredOnly")) && isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value != null)) {
if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("enableBookIssueByUser")) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Issue Book<?php $_block_repeat=false;
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
Request Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
} else { ?> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book <?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?></a>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <h1 itemprop="name"><?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();
if ($_smarty_tpl->tpl_vars['bookFieldSettings']->value->getBookFieldOptions('subtitle')->isVisible() && $_smarty_tpl->tpl_vars['book']->value->getSubTitle() != null) {?> <?php echo $_smarty_tpl->tpl_vars['book']->value->getSubTitle();
}?></h1>
                    <?php if ($_smarty_tpl->tpl_vars['bookFieldSettings']->value->getBookFieldOptions('publishingYear')->isVisible() && $_smarty_tpl->tpl_vars['book']->value->getPublishingYear() != null) {?>
                        <div class="book-year" itemprop="datePublished"><?php echo $_smarty_tpl->tpl_vars['book']->value->getPublishingYear();?>
</div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['bookFieldSettings']->value->getBookFieldOptions('rating')->isVisible()) {?>
                    <div class="book-rating general" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                        <?php $_smarty_tpl->_subTemplateRender('file:books/components/rating.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->tpl_vars['book']->value->getRating()), 0, false);
?>

                        <div class="whole-rating">
                            <span class="average"><?php echo number_format($_smarty_tpl->tpl_vars['book']->value->getRating(),2,".",",");?>
 <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Avg rating<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span><span class="separator">—</span><span><?php echo $_smarty_tpl->tpl_vars['book']->value->getBookRatingVotesNumber();?>
</span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Votes<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        </div>
                        <meta itemprop="ratingValue" content="<?php echo number_format($_smarty_tpl->tpl_vars['book']->value->getRating(),2,".",",");?>
"/>
                        <meta itemprop="ratingCount" content="<?php echo $_smarty_tpl->tpl_vars['book']->value->getBookRatingVotesNumber();?>
"/>
                    </div>
                    <?php }?>
                    <table class="table book-meta">
                        <tbody>
                            <?php if ($_smarty_tpl->tpl_vars['bookFieldSettings']->value->getBookFieldOptions('series')->isVisible() && $_smarty_tpl->tpl_vars['book']->value->getSeries() != null) {?>
                                <tr>
                                    <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Series:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("seriesBooksPublic",array("seriesId"=>$_smarty_tpl->tpl_vars['book']->value->getSeries()->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['book']->value->getSeries()->getName();?>
</a>
                                    </td>
                                </tr>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['bookFieldSettings']->value->getBookFieldOptions('publisher')->isVisible() && $_smarty_tpl->tpl_vars['book']->value->getPublisher() != null) {?>
                                <tr>
                                    <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Publisher:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("publisherBooksPublic",array("publisherId"=>$_smarty_tpl->tpl_vars['book']->value->getPublisher()->getId()));?>
" itemprop="publisher"><?php echo $_smarty_tpl->tpl_vars['book']->value->getPublisher()->getName();?>
</a>
                                    </td>
                                </tr>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['bookFieldSettings']->value->getBookFieldOptions('genre')->isVisible() && $_smarty_tpl->tpl_vars['book']->value->getGenres() !== null && is_array($_smarty_tpl->tpl_vars['book']->value->getGenres()) && count($_smarty_tpl->tpl_vars['book']->value->getGenres()) > 0) {?>
                                <tr>
                                    <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Genres:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                                    <td>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['book']->value->getGenres(), 'genre', false, NULL, 'genre', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_genre']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_genre']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_genre']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_genre']->value['total'];
?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("genreBooksPublic",array("genreId"=>$_smarty_tpl->tpl_vars['genre']->value->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['genre']->value->getName();?>
</a><?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_genre']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_genre']->value['last'] : null)) {
} else { ?>,<?php }?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </td>
                                </tr>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['bookFieldSettings']->value->getBookFieldOptions('author')->isVisible() && $_smarty_tpl->tpl_vars['book']->value->getAuthors() !== null && is_array($_smarty_tpl->tpl_vars['book']->value->getAuthors()) && count($_smarty_tpl->tpl_vars['book']->value->getAuthors()) > 0) {?>
                                <tr>
                                    <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Authors:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                                    <td>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['book']->value->getAuthors(), 'author', false, NULL, 'author', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['total'];
?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("authorBooksPublic",array("authorId"=>$_smarty_tpl->tpl_vars['author']->value->getId()));?>
" itemprop="author"><?php echo $_smarty_tpl->tpl_vars['author']->value->getLastName();?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value->getFirstName();?>
</a><?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['last'] : null)) {
} else { ?>,<?php }?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </td>
                                </tr>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['bookFieldSettings']->value->getBookFieldOptions('pages')->isVisible() && $_smarty_tpl->tpl_vars['book']->value->getPages() != null) {?>
                                <tr>
                                    <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Pages:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                                    <td>
                                        <span itemprop="numberOfPages"><?php echo $_smarty_tpl->tpl_vars['book']->value->getPages();?>
 <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
pages<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                                    </td>
                                </tr>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['bookFieldSettings']->value->getBookFieldOptions('binding')->isVisible() && $_smarty_tpl->tpl_vars['book']->value->getBinding() !== null) {?>
                                <tr>
                                    <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Binding:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['book']->value->getBinding();?>

                                    </td>
                                </tr>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['bookFieldSettings']->value->getBookFieldOptions('ISBN10')->isVisible() && $_smarty_tpl->tpl_vars['book']->value->getISBN10() != null) {?>
                                <tr>
                                    <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN10:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['book']->value->getISBN10();?>
</td>
                                </tr>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['bookFieldSettings']->value->getBookFieldOptions('ISBN13')->isVisible() && $_smarty_tpl->tpl_vars['book']->value->getISBN13() != null) {?>
                                <tr>
                                    <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN13:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                                    <td>
                                        <span itemprop="isbn"><?php echo $_smarty_tpl->tpl_vars['book']->value->getISBN13();?>
</span>
                                    </td>
                                </tr>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['bookFieldSettings']->value->getBookFieldOptions('tag')->isVisible() && $_smarty_tpl->tpl_vars['book']->value->getTags() !== null && is_array($_smarty_tpl->tpl_vars['book']->value->getTags()) && count($_smarty_tpl->tpl_vars['book']->value->getTags()) > 0) {?>
                                <tr>
                                    <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Tags:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                                    <td>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['book']->value->getTags(), 'tag', false, NULL, 'tag', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_tag']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_tag']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_tag']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_tag']->value['total'];
?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("tagBooksPublic",array("tagId"=>$_smarty_tpl->tpl_vars['tag']->value->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value->getName();?>
</a><?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_tag']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_tag']->value['last'] : null)) {
} else { ?>,<?php }?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </td>
                                </tr>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['bookFieldSettings']->value->getBookFieldOptions('edition')->isVisible() && $_smarty_tpl->tpl_vars['book']->value->getEdition() !== null) {?>
                                <tr>
                                    <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Edition:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['book']->value->getEdition();?>

                                    </td>
                                </tr>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['bookFieldSettings']->value->getBookFieldOptions('language')->isVisible() && $_smarty_tpl->tpl_vars['book']->value->getLanguage() !== null) {?>
                                <tr>
                                    <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Language:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['book']->value->getLanguage();?>

                                    </td>
                                </tr>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['bookFieldSettings']->value->getBookFieldOptions('physicalForm')->isVisible() && $_smarty_tpl->tpl_vars['book']->value->getPhysicalForm() !== null) {?>
                                <tr>
                                    <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Physical Form:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['book']->value->getPhysicalForm();?>

                                    </td>
                                </tr>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['bookFieldSettings']->value->getBookFieldOptions('size')->isVisible() && $_smarty_tpl->tpl_vars['book']->value->getSize() !== null) {?>
                                <tr>
                                    <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Size:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['book']->value->getSize();?>

                                    </td>
                                </tr>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['bookFieldSettings']->value->getBookFieldOptions('type')->isVisible() && $_smarty_tpl->tpl_vars['book']->value->getType() !== null) {?>
                                <tr>
                                    <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Type:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['book']->value->getType();?>

                                    </td>
                                </tr>
                            <?php }?>
                            <?php $_smarty_tpl->_assignInScope('bookClass', "KAASoft\Database\Entity\General\Book");
?>
                            <?php $_prefixVariable1 = $_smarty_tpl->tpl_vars['bookClass']->value;
$_smarty_tpl->_assignInScope('customFields', $_prefixVariable1::getCustomFields());
?>
                            <?php if ($_smarty_tpl->tpl_vars['customFields']->value != null) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customFields']->value, 'customField', false, NULL, 'customField', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['customField']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['bookFieldSettings']->value->getBookFieldOptions($_smarty_tpl->tpl_vars['customField']->value->getName())->isVisible() && $_smarty_tpl->tpl_vars['book']->value->getCustomFieldValue($_smarty_tpl->tpl_vars['customField']->value->getName()) !== null) {?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['customField']->value->getTitle();?>
:</td>
                                            <td>
                                                <?php echo $_smarty_tpl->tpl_vars['book']->value->getCustomFieldValue($_smarty_tpl->tpl_vars['customField']->value->getName());?>

                                            </td>
                                        </tr>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            <?php }?>
                        </tbody>
                    </table>
                    <?php if ($_smarty_tpl->tpl_vars['bookFieldSettings']->value->getBookFieldOptions('description')->isVisible() && $_smarty_tpl->tpl_vars['book']->value->getDescription()) {?>
                        <div class="book-description" itemprop="description">
                            <?php echo $_smarty_tpl->tpl_vars['book']->value->getDescription();?>

                        </div>
                    <?php }?>

                    <?php if (strcmp($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("reviewCreator"),"Nobody") != 0 || ($_smarty_tpl->tpl_vars['book']->value->getReviews() != null && count($_smarty_tpl->tpl_vars['book']->value->getReviews()) > 0)) {?>
                        <div class="row mt-5 mb-3">
                            <div class="col-lg-6 col-6">
                                <?php if (($_smarty_tpl->tpl_vars['book']->value->getReviews() != null && count($_smarty_tpl->tpl_vars['book']->value->getReviews()) > 0) || ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("reviewCreator") == "Everybody" || ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("reviewCreator") == "User" && isset($_smarty_tpl->tpl_vars['user']->value)))) {?>
                                    <h2><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Reviews<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h2>
                                <?php }?>
                            </div>
                            <div class="col-lg-6 col-6 text-right">
                                <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("reviewCreator") == "Everybody" || ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("reviewCreator") == "User" && isset($_smarty_tpl->tpl_vars['user']->value))) {?>
                                    <button class="btn btn-primary btn-rounded shadow add-review-collapse" data-toggle="collapse" data-target="#addReview" aria-expanded="false" aria-controls="addReview"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Write a review<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</button>
                                <?php }?>
                            </div>
                        </div>
                    <?php }?>
                    
                    <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("reviewCreator") == "Everybody" || ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("reviewCreator") == "User" && isset($_smarty_tpl->tpl_vars['user']->value))) {?>
                        <form class="add-review validate-review collapse" id="addReview">
                            <div class="row">
                                <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['bookFieldSettings']->value->getBookFieldOptions('rating')->isVisible()) {?>
                                    <div class="col-lg-12 mb-3 <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>text-right<?php }?>">
                                        <div class="rate-book">
                                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Rate this book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                        </div>
                                        <?php if (isset($_smarty_tpl->tpl_vars['userBookRating']->value)) {?>
                                            <div class="book-rating user-rating">
                                                <?php
$_smarty_tpl->tpl_vars['ratingIndex'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['ratingIndex']->step = 1;$_smarty_tpl->tpl_vars['ratingIndex']->total = (int) ceil(($_smarty_tpl->tpl_vars['ratingIndex']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['ratingIndex']->step));
if ($_smarty_tpl->tpl_vars['ratingIndex']->total > 0) {
for ($_smarty_tpl->tpl_vars['ratingIndex']->value = 1, $_smarty_tpl->tpl_vars['ratingIndex']->iteration = 1;$_smarty_tpl->tpl_vars['ratingIndex']->iteration <= $_smarty_tpl->tpl_vars['ratingIndex']->total;$_smarty_tpl->tpl_vars['ratingIndex']->value += $_smarty_tpl->tpl_vars['ratingIndex']->step, $_smarty_tpl->tpl_vars['ratingIndex']->iteration++) {
$_smarty_tpl->tpl_vars['ratingIndex']->first = $_smarty_tpl->tpl_vars['ratingIndex']->iteration == 1;$_smarty_tpl->tpl_vars['ratingIndex']->last = $_smarty_tpl->tpl_vars['ratingIndex']->iteration == $_smarty_tpl->tpl_vars['ratingIndex']->total;?>
                                                    <i class="fas fa-star<?php if ($_smarty_tpl->tpl_vars['userBookRating']->value == $_smarty_tpl->tpl_vars['ratingIndex']->value) {?> active<?php }?>" data-value="<?php echo $_smarty_tpl->tpl_vars['ratingIndex']->value;?>
"></i>
                                                <?php }
}
?>

                                                <div class="save-rating"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
saving<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
...</div>
                                            </div>
                                            <div class="user-mark"> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Your mark is <?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                                <strong class="font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['userBookRating']->value;?>
</strong>.
                                            </div>
                                        <?php } else { ?>
                                            <div class="book-rating user-rating">
                                                <i class="far fa-star" data-value="1"></i>
                                                <i class="far fa-star" data-value="2"></i>
                                                <i class="far fa-star" data-value="3"></i>
                                                <i class="far fa-star" data-value="4"></i>
                                                <i class="far fa-star" data-value="5"></i>
                                                <div class="save-rating"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
saving<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
...</div>
                                            </div>
                                            <div class="user-mark off"> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Your mark is <?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                                <strong class="font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['userBookRating']->value;?>
</strong>.
                                            </div>
                                        <?php }?>
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("reviewCreator") == "Everybody" && !isset($_smarty_tpl->tpl_vars['user']->value)) {?>
                                    <div class="col-lg-12">
                                        <div class="notes"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Required fields are marked *. Your email address will not be published.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="name" class="form-control" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 *" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="email" class="form-control" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Email<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 *" type="text">
                                        </div>
                                    </div>
                                <?php }?>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="hidden" name="bookId" value="<?php echo $_smarty_tpl->tpl_vars['book']->value->getId();?>
">
                                        <textarea name="text" cols="30" rows="5" class="form-control" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Review<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button class="btn btn-primary shadow submit-review"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Submit<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</button>
                                </div>
                            </div>
                        </form>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['book']->value->getReviews() != null) {?>
                        <div class="reviews">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['book']->value->getReviews(), 'review', false, NULL, 'review', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
?>
                                <div class="review">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <strong class="review-user">
                                                <?php if ($_smarty_tpl->tpl_vars['review']->value->getUserId() != null && $_smarty_tpl->tpl_vars['review']->value->getUser() != null) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['review']->value->getUser()->getFirstName();?>
 <?php echo $_smarty_tpl->tpl_vars['review']->value->getUser()->getLastName();?>

                                                <?php } else { ?>
                                                    <?php echo $_smarty_tpl->tpl_vars['review']->value->getName();?>

                                                <?php }?>
                                            </strong>
                                            <span class="review-meta"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['review']->value->getCreationDateTime(),$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("dateFormat"));?>
</span>
                                        </div>
                                        <div class="col-lg-6">
                                            <?php if ($_smarty_tpl->tpl_vars['review']->value->getBookRating() != null) {?>
                                                <div class="review-rating">
                                                    <?php $_smarty_tpl->_subTemplateRender('file:books/components/rating.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->tpl_vars['review']->value->getBookRating(),'readOnly'=>true), 0, true);
?>

                                                </div>
                                            <?php }?>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="review-content">
                                                <?php echo $_smarty_tpl->tpl_vars['review']->value->getText();?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        </div>
                    <?php }?>
                </div>
            </div>
        </div>

    </section>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerJs'} */
class Block_157144643664839e9178cb01_75113341 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerJs' => 
  array (
    0 => 'Block_157144643664839e9178cb01_75113341',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/readmore.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/photoswipe.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/photoswipe-ui-default.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerJs'} */
/* {block 'customJs'} */
class Block_169172845564839e9178f075_30076641 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customJs' => 
  array (
    0 => 'Block_169172845564839e9178f075_30076641',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        var $pswp = $('.pswp')[0];
        var image = [];

        $('.book-image-gallery').each( function() {
            var $gallery = $(this), getItems = function() {
                var items = [];
                $gallery.find('a').each(function() {
                    var $href   = $(this).attr('href'),
                            $size   = $(this).data('size').split('x'),
                            $width  = $size[0],
                            $height = $size[1];

                    var item = {
                        src : $href,
                        w   : $width,
                        h   : $height
                    };

                    items.push(item);
                });
                return items;
            };

            var items = getItems();

            $.each(items, function(index, value) {
                image[index]     = new Image();
                image[index].src = value['src'];
            });

            $gallery.on('click', 'figure', function(event) {
                event.preventDefault();

                var $index = $(this).index();
                var options = {
                    index: $index,
                    bgOpacity: 0.95,
                    showHideOpacity: true,
                    history: false,
                    shareEl: false,
                    zoomEl: true,
                    closeOnScroll: false
                };

                var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
                lightBox.init();
            });
        });

        if ($(".book-image-gallery").length > 0) {
            $(".book-image-gallery").mCustomScrollbar({
                axis: "x",
                autoExpandScrollbar:true,
                autoHideScrollbar: true,
                scrollInertia: 200,
                advanced:{
                    autoExpandHorizontalScroll:true
                }
            });
        }
        <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("enableBookIssueByUser")) {?>
        $('#issue-book').on('click', function (e) {
            e.preventDefault();
            var btnIcon = $(this).find('i');
            $.ajax({
                type: "POST",
                dataType: 'json',
                data: 'bookId=<?php echo $_smarty_tpl->tpl_vars['book']->value->getId();?>
',
                url: '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("issueCreatePublic");?>
',
                beforeSend: function () {
                    $(btnIcon).removeClass('ti-book').addClass('fas fa-spinner fa-spin');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else if (data.warning) {
                            app.notification('warning', data.warning);
                            $('#login-box').modal('show');
                        } else {
                            app.notification('success', data.success);
                        }
                    }
                },
                complete: function () {
                    $(btnIcon).removeClass('fas fa-spinner fa-spin').addClass('ti-book');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        <?php } else { ?>
        $('#request-book').on('click', function (e) {
            e.preventDefault();
            var btnIcon = $(this).find('i');
            $.ajax({
                type: "POST",
                dataType: 'json',
                data: 'bookIds[]=<?php echo $_smarty_tpl->tpl_vars['book']->value->getId();?>
',
                url: '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("requestCreate");?>
',
                beforeSend: function () {
                    $(btnIcon).removeClass('ti-book').addClass('fas fa-spinner fa-spin');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else if (data.warning) {
                            app.notification('warning', data.warning);
                            $('#login-box').modal('show');
                        } else {
                            app.notification('success', data.success);
                        }
                    }
                },
                complete: function () {
                    $(btnIcon).removeClass('fas fa-spinner fa-spin').addClass('ti-book');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        <?php }?>

        $(".user-rating i").hover(function () {
            var container = $(this).parent();
            var $this = $(this);
            $this.nextAll('i').removeClass('fas').addClass("far");
            $this.prevUntil("div").removeClass("far").addClass('fas');
            $this.removeClass("far").addClass('fas');
        });
        $(".user-rating i").mouseout(function () {
            var container = $(this).parent();
            var select = $(container).find('.active');
            select.nextAll('i').removeClass('fas').addClass('far');
            select.prevUntil("div").removeClass('far').addClass('fas');
            select.removeClass('far').addClass('fas');
            if (container.find('i.active').length == 0) {
                container.find('i').removeClass('fas').addClass('far');
            }
        });
        $(".user-rating i").click(function () {
            $(this).addClass('active').siblings().removeClass('active');
            $(this).removeClass('far').addClass('fas');
            $(this).prevUntil("").removeClass('far').addClass('fas');
            $(this).nextAll('i').removeClass('fas').addClass('far');

            var starValue = $(this).data('value');
            var stars = $(this).parent().children('i');
            var text = $(this).parent().find('.save-rating');
            var bookId = $('.single-book').data('book');
            var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookRatingSet");?>
';
            url = url.replace('[bookId]', bookId).replace('[rating]', starValue);

            if (bookId = !null) {
                $.ajax({
                    dataType: 'json',
                    method: 'POST',
                    url: url,
                    beforeSend: function () {
                        $(stars).hide();
                        $(text).addClass('on');
                    },
                    success: function (data) {
                        if (data.redirect) {
                            app.ajax_redirect(data.redirect);
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                $('.user-mark').removeClass('off');
                                $('.user-mark strong').text(starValue);
                                //calculatedRating
                            }
                        }
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', data.error);
                    },
                    complete: function () {
                        $(stars).show();
                        $(text).removeClass('on');
                    }
                });
            }


        });
        <?php if (strcmp($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("reviewCreator"),"Nobody") != 0) {?>
        $(".validate-review").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                name: {
                    required: true
                }
            }
        });
        var reviewCreatePublicUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("reviewCreatePublic");?>
';
        $('.submit-review').on('click', function (e) {
            e.preventDefault();
            var form = $(this).closest('.add-review');
            if (form.valid()) {
                $.ajax({
                    dataType: 'json',
                    method: 'POST',
                    data: $(form).serialize(),
                    url: reviewCreatePublicUrl,
                    beforeSend: function (data) {
                        $(form).after('<div class="form-message"><i class="fa fa-spinner fa-spin"></i><span class="sr-only"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
                        if (data.redirect) {
                            app.ajax_redirect(data.redirect);
                        } else {
                            if (data.error) {
                                $('.form-message').addClass('error').text(data.error);
                            } else {
                                $('.form-message').addClass('success').text(data.success);
                                $(form).find('input, textarea').val('');
                            }
                        }
                    },
                    error: function (jqXHR, exception) {
                        $('.form-message').addClass('error').text('<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
                    complete: function (data) {
                        $('#addReview').collapse('hide');
                        setTimeout(function () {
                            $('.form-message').fadeOut().remove();
                        }, 5000);
                    }
                });
            }
        });
        <?php }?>
        $(window).resize(function () {
            var windowWidth = $(window).width();
            if (windowWidth > 992) {
                stick();
            }
            else {
                unstick();
            }
        });
        function stick() {
            $(".sticky-left-column").sticky({
                topSpacing: 100,
                bottomSpacing: 100,
                zIndex: 999
            });
        }

        function unstick() {
            $(".sticky-left-column").unstick();
        }
        var windowWidth = $(window).width();
        if (windowWidth > 992) {
            stick();
        }
        $('.review-content').readmore({
            speed: 75,
            moreLink: '<a href="#" class="read-more"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
read more<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>',
            lessLink: false
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'customJs'} */
}
