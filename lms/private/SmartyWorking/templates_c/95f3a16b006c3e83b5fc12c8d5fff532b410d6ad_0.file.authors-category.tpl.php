<?php
/* Smarty version 3.1.31, created on 2023-06-10 08:36:07
  from "C:\xampp7.3\htdocs\lms\themes\default\authors\authors-category.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_648419d76336d9_68598668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95f3a16b006c3e83b5fc12c8d5fff532b410d6ad' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\themes\\default\\authors\\authors-category.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:books/components/books-by-category-list.tpl' => 1,
  ),
),false)) {
function content_648419d76336d9_68598668 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_246480084648419d75ba993_32253361', 'metaTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_496273970648419d75cf698_37851485', 'metaDescription');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_376046170648419d75d1c67_89574476', 'metaKeywords');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1663853714648419d75d45c9_02929267', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1913743225648419d75d6933_16085170', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_220544304648419d76248c7_70393190', 'footerJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1727196429648419d76283b5_10320824', 'customJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'public.tpl');
}
/* {block 'metaTitle'} */
class Block_246480084648419d75ba993_32253361 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaTitle' => 
  array (
    0 => 'Block_246480084648419d75ba993_32253361',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['author']->value->getFirstName();?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value->getLastName();
}
}
/* {/block 'metaTitle'} */
/* {block 'metaDescription'} */
class Block_496273970648419d75cf698_37851485 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaDescription' => 
  array (
    0 => 'Block_496273970648419d75cf698_37851485',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaDescription'} */
/* {block 'metaKeywords'} */
class Block_376046170648419d75d1c67_89574476 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaKeywords' => 
  array (
    0 => 'Block_376046170648419d75d1c67_89574476',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaKeywords'} */
/* {block 'headerCss'} */
class Block_1663853714648419d75d45c9_02929267 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_1663853714648419d75d45c9_02929267',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_1913743225648419d75d6933_16085170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1913743225648419d75d6933_16085170',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="single-author">
        <div class="container">
            <div class="row author">
                <div class="col-lg-12">
                    <div class="author-photo m-auto">
                        <?php if ($_smarty_tpl->tpl_vars['author']->value->getPhoto() != null) {?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['author']->value->getPhoto()->getWebPath('medium');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['author']->value->getLastName();?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value->getFirstName();?>
" class="img-fluid">
                        <?php } else { ?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noBookImageFilePath");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['author']->value->getLastName();?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value->getFirstName();?>
" class="img-fluid">
                        <?php }?>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="author-info">
                        <h1><?php echo $_smarty_tpl->tpl_vars['author']->value->getFirstName();?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value->getLastName();?>
</h1>
                        <div class="description-author more">
                            <?php if ($_smarty_tpl->tpl_vars['author']->value->getDescription() != null) {?>
                                <?php echo $_smarty_tpl->tpl_vars['author']->value->getDescription();?>

                            <?php } else { ?>
                                <div class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Information about the author<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value->getFirstName();?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value->getLastName();?>
 <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
will soon be added to the site.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 books-listing">
                    <div class="books-list">
                        <?php $_smarty_tpl->_subTemplateRender('file:books/components/books-by-category-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
class Block_220544304648419d76248c7_70393190 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerJs' => 
  array (
    0 => 'Block_220544304648419d76248c7_70393190',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/readmore.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerJs'} */
/* {block 'customJs'} */
class Block_1727196429648419d76283b5_10320824 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customJs' => 
  array (
    0 => 'Block_1727196429648419d76283b5_10320824',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $('.description-author').readmore({
            speed: 75,
            moreLink: '<a href="#"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
read more ...<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>',
            lessLink: '<a href="#"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
read less<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>'
        });

        $(document).on('change', '#countPerPage', function (e) {
            $.ajax({
                type: "POST",
                dataType: 'json',
                data: $('#book-filter, #books-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order'),
                beforeSend: function () {
                    app.preloader.start('.books-list');
                },
                success: function (data) {
                    app.ajax_redirect(data);
                    if (data.error) {
                        app.notification('error', data.error);
                    } else {
                        $('.books-list').html(data.html);
                    }
                },
                complete: function () {
                    app.preloader.finish('.books-list');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $(document).on('change', '#books-sort', function (e) {
            $.ajax({
                type: "POST",
                dataType: 'json',
                data: $('#book-filter, #books-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order'),
                beforeSend: function () {
                    app.preloader.start('.books-list');
                },
                success: function (data) {
                    app.ajax_redirect(data);
                    if (data.error) {
                        app.notification('error', data.error);
                    } else {
                        $('.books-list').html(data.html);
                    }
                },
                complete: function () {
                    app.preloader.finish('.books-list');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $(document).on('click', '.ajax-page', function (e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                dataType: 'json',
                data: $('#book-filter, #books-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order'),
                url: $(this).attr('href'),
                beforeSend: function () {
                    app.preloader.start('.books-list');
                },
                success: function (data) {
                    app.ajax_redirect(data);
                    if (data.error) {
                        app.notification('error', data.error);
                    } else {
                        $('.books-list').html(data.html);
                    }
                },
                complete: function () {
                    app.preloader.finish('.books-list');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'customJs'} */
}
