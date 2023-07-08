<?php
/* Smarty version 3.1.31, created on 2023-06-09 23:32:53
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\books\book-fields-controls.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64839a85077630_03342948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5eae71349bd5a2d74bc8b799c4a1d251a892475c' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\books\\book-fields-controls.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64839a85077630_03342948 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
switch ($_smarty_tpl->tpl_vars['control']->value){
case "title":?>
    <div class="form-group">
        <label for="name" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
        <input type="text" class="form-control book-field-title" id="book-title" autocomplete="off" name="title" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['book']->value->getTitle();
}?>">
        <input type="hidden" name="rating" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['book']->value->getRating();
}?>">
    </div>
<?php break;
case "subtitle":?>
    <div class="form-group">
        <label for="originalName" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Subtitle<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
        <input type="text" class="form-control" autocomplete="off" name="subtitle" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['book']->value->getSubtitle();
}?>">
    </div>
<?php break;?>

<?php case "url":?>
    <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("bookUrlType")) {?>
        <input type="hidden" name="url" autocomplete="off" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['book']->value->getUrl();
}?>" id="urlPath">
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
            <div class="input-group mb-3">
                <input type="text" name="url" class="form-control" data-url="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['book']->value->getUrl();
}?>" autocomplete="off" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['book']->value->getUrl();
}?>" id="urlPath">
                <div class="input-group-append">
                    <button class="btn btn-outline-default gen-url" type="button"><i class="icon-magic-wand"></i></button>
                </div>
            </div>
        </div>
    <?php }
break;?>

<?php case "ISBN10":?>
    <div class="form-group">
        <label for="ISBN10" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN 10<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
        <input type="text" class="form-control isbn-code-10 book-field-isbn10" autocomplete="off" name="ISBN10" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['book']->value->getISBN10();
}?>">
    </div>
<?php break;
case "ISBN13":?>
    <div class="form-group">
        <label for="ISBN13" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN 13<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
        <div class="input-group mb-3">
            <input type="text" class="form-control isbn-code-13 book-field-isbn13" autocomplete="off" name="ISBN13" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['book']->value->getISBN13();
}?>">
            <?php if ($_smarty_tpl->tpl_vars['hasGoogleAPI']->value) {?>
                <div class="input-group-append">
                    <button class="btn btn-outline-default search-by-isbn" type="button"><i class="ti-search"></i></button>
                </div>
            <?php }?>
        </div>
    </div>
<?php break;
case "series":?>
    <div class="form-group">
        <label for="seriesId" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Series<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
        <select name="seriesId" id="seriesId" class="form-control">
            <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['book']->value->getSeries() != null) {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['book']->value->getSeries()->getId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['book']->value->getSeries()->getName();?>
</option>
            <?php }?>
        </select>
    </div>
<?php break;
case "publisher":?>
    <div class="form-group">
        <label for="publisherId" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Publisher<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
        <select name="publisherId" id="publisherId" class="form-control">
            <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['book']->value->getPublisher() != null) {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['book']->value->getPublisher()->getId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['book']->value->getPublisher()->getName();?>
</option>
            <?php }?>
        </select>
    </div>
<?php break;
case "author":?>
    <div class="form-group">
        <label for="authors[]" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Authors<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
        <select class="form-control" name="authors[]" id="authors" multiple="multiple">
            <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['book']->value->getAuthors() !== null && is_array($_smarty_tpl->tpl_vars['book']->value->getAuthors())) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['book']->value->getAuthors(), 'author', false, NULL, 'author', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['author']->value->getId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['author']->value->getLastName();?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value->getFirstName();?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <?php }?>
        </select>
    </div>
<?php break;
case "genre":?>
    <div class="form-group">
        <label for="genres" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Genres<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
        <select class="form-control" name="genres[]" id="genres" multiple="multiple">
            <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['book']->value->getGenres() !== null && is_array($_smarty_tpl->tpl_vars['book']->value->getGenres())) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['book']->value->getGenres(), 'genre', false, NULL, 'genre', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['genre']->value->getId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['genre']->value->getName();?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <?php }?>
        </select>
    </div>
<?php break;
case "tag":?>
    <div class="form-group">
        <label for="tags" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Tags<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
        <select class="form-control" name="tags[]" id="tags" multiple="multiple">
            <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['book']->value->getTags() !== null && is_array($_smarty_tpl->tpl_vars['book']->value->getTags())) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['book']->value->getTags(), 'tag', false, NULL, 'tag', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['tag']->value->getId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['tag']->value->getName();?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <?php }?>
        </select>
    </div>
<?php break;
case "edition":?>
    <div class="form-group">
        <label for="edition" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Edition<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
        <input type="text" class="form-control" autocomplete="off" name="edition" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['book']->value->getEdition();
}?>">
    </div>
<?php break;
case "publishingYear":?>
    <div class="form-group">
        <label for="publishingYear" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Published Year<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
        <input type="text" class="form-control year-picker book-field-publishing-year" autocomplete="off" name="publishingYear" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['book']->value->getPublishingYear();
}?>">
    </div>
<?php break;
case "pages":?>
    <div class="form-group">
        <label for="pages" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Pages<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
        <input type="text" class="form-control book-field-pages" autocomplete="off" name="pages" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['book']->value->getPages();
}?>">
    </div>
<?php break;
case "type":?>
    <div class="form-group">
        <label for="type" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Type<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
        <?php if (isset($_smarty_tpl->tpl_vars['bookTypes']->value) && $_smarty_tpl->tpl_vars['bookTypes']->value !== null) {?>
            <select name="type" class="form-control select-picker">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bookTypes']->value, 'type', false, NULL, 'type', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value->getName();?>
"<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['book']->value->getType() == $_smarty_tpl->tpl_vars['type']->value->getName()) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['type']->value->getName();?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </select>
        <?php }?>
    </div>
<?php break;
case "physicalForm":?>
    <div class="form-group">
        <label for="physicalForm" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Physical Form<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
        <?php if (isset($_smarty_tpl->tpl_vars['physicalForms']->value) && $_smarty_tpl->tpl_vars['physicalForms']->value !== null) {?>
            <select name="physicalForm" class="form-control select-picker">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['physicalForms']->value, 'form', false, NULL, 'form', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['form']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['form']->value->getName();?>
"<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['book']->value->getPhysicalForm() == $_smarty_tpl->tpl_vars['form']->value->getName()) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['form']->value->getName();?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </select>
        <?php }?>
    </div>
<?php break;
case "size":?>
    <div class="form-group">
        <label for="size" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Size<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
        <?php if (isset($_smarty_tpl->tpl_vars['bookSizes']->value) && $_smarty_tpl->tpl_vars['bookSizes']->value !== null) {?>
            <select name="size" class="form-control select-picker">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bookSizes']->value, 'size', false, NULL, 'size', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['size']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['size']->value->getName();?>
"<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['book']->value->getSize() == $_smarty_tpl->tpl_vars['size']->value->getName()) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['size']->value->getName();?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </select>
        <?php }?>
    </div>
<?php break;
case "binding":?>
    <div class="form-group">
        <label for="binding" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Binding<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
        <?php if (isset($_smarty_tpl->tpl_vars['bindings']->value) && $_smarty_tpl->tpl_vars['bindings']->value !== null) {?>
            <select name="binding" id="bindingId" class="form-control select-picker">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bindings']->value, 'binding', false, NULL, 'binding', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['binding']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['binding']->value->getName();?>
"<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['book']->value->getBinding() == $_smarty_tpl->tpl_vars['binding']->value->getName()) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['binding']->value->getName();?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </select>
        <?php }?>
    </div>
<?php break;
case "store":?>
    <div class="form-group">
        <label for="stores" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Store<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
        <select class="form-control" name="stores[]" id="stores" multiple="multiple">
            <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['book']->value->getStores() !== null && is_array($_smarty_tpl->tpl_vars['book']->value->getStores())) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['book']->value->getStores(), 'store', false, NULL, 'store', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['store']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['store']->value->getId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['store']->value->getName();?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <?php }?>
        </select>
    </div>
<?php break;
case "location":?>
    <div class="form-group">
        <label for="locations" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Location<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
        <select class="form-control" name="locations[]" id="locations" multiple="multiple">
            <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['book']->value->getLocations() !== null && is_array($_smarty_tpl->tpl_vars['book']->value->getLocations())) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['book']->value->getLocations(), 'location', false, NULL, 'location', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['location']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['location']->value->getId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['location']->value->getName();?>
 [<?php echo $_smarty_tpl->tpl_vars['location']->value->getStore()->getName();?>
]</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <?php }?>
        </select>
    </div>
<?php break;?>

<?php case "price":?>
    <div class="form-group">
        <label for="price" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Price<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 </label>
        <span>(<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("priceCurrency");?>
)</span>
        <input type="text" class="form-control" autocomplete="off" name="price" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['book']->value->getPrice();
}?>">
    </div>
<?php break;
case "language":?>
    <div class="form-group">
        <label for="language" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Language<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
        <input type="text" class="form-control book-field-lang" autocomplete="off" name="language" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['book']->value->getLanguage();
}?>">
    </div>
<?php break;
case "description":?>
    <div class="form-group">
        <label for="description" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Description<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
        <textarea type="text" class="form-control" autocomplete="off" name="description" id="content-box"><?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['book']->value->getDescription();
}?></textarea>
    </div>
<?php break;
case "notes":?>
    <div class="form-group">
        <label for="notes" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Notes<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
        <textarea class="form-control" autocomplete="off" name="notes"><?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['book']->value->getNotes();
}?></textarea>
    </div>
<?php break;
case "cover":?>
    <input type="hidden" name="coverId" class="coverId" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['book']->value->getCoverId();
}?>">
    <div class="card" id="cover-block">
        <div class="card-body pb-0">
            <div class="drop-zone cover-drop-zone<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['book']->value->getCoverId() != null) {?> cover-exist<?php }?>">
                <label><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Drag & Drop your cover or <span>Browse</span><?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                <input type="file" accept="image/png, image/jpeg, image/gif" id="book-cover" class="disabledIt" />
                <button type="button" class="btn btn-info remove-book-cover<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['book']->value->getCoverId() == null || $_smarty_tpl->tpl_vars['action']->value == "create") {?> d-none<?php }?>" data-id="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['book']->value->getCoverId();
}?>"><i class="far fa-trash-alt"></i></button>
                <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['book']->value->getCover() != null) {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['book']->value->getCover()->getWebPath();?>
" class="img-fluid">
                <?php }?>
            </div>
        </div>
    </div>
<?php break;
case "eBook":?>
    <input type="hidden" name="eBookId" class="eBookId" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['book']->value->getEBookId();
}?>">
    <div class="card" id="eBook-block">
        <div class="card-body pt-0">
            <div class="drop-zone eBook-drop-zone<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['book']->value->getEBookId() != null) {?> eBook-exist<?php }?>">
                <label><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Drag & Drop your eBook or <span>Browse</span><?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                <span class="filename"><?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['book']->value->getEBook() != null) {
echo basename($_smarty_tpl->tpl_vars['book']->value->getEBook()->getWebPath());
}?></span>
                <input type="file" id="book-eBook" class="disabledIt" />
                <button type="button" class="btn btn-info remove-book-eBook<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['book']->value->getEBookId() == null || $_smarty_tpl->tpl_vars['action']->value == "create") {?> d-none<?php }?>" data-id="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['book']->value->getEBookId();
}?>"><i class="far fa-trash-alt"></i></button>
                <a href="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['book']->value->getEBookId() != null) {
echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("electronicBookGet",array("electronicBookId"=>$_smarty_tpl->tpl_vars['book']->value->getEBookId()));
}?>" class="btn btn-info download-eBook<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['book']->value->getEBookId() == null || $_smarty_tpl->tpl_vars['action']->value == "create") {?> d-none<?php }?>"><i class="ti-download"></i></a>
            </div>
        </div>
    </div>
<?php break;
default:?>
    // Default case is supported.
<?php }
}
}
