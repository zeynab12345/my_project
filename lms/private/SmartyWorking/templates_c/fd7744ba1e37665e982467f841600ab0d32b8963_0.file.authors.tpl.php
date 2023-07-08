<?php
/* Smarty version 3.1.31, created on 2023-06-09 23:19:57
  from "C:\xampp7.3\htdocs\lms\themes\default\authors\authors.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6483977d226905_62787293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd7744ba1e37665e982467f841600ab0d32b8963' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\themes\\default\\authors\\authors.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:authors/authors-list.tpl' => 1,
  ),
),false)) {
function content_6483977d226905_62787293 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4624903726483977d207b35_91375540', 'metaTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10293115586483977d2106b0_08957036', 'metaDescription');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11574287836483977d2120c9_92015105', 'metaKeywords');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4197935586483977d2136e2_37204736', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19300958086483977d214668_38644458', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9560213536483977d21a089_38834207', 'footerJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6998579226483977d21af84_39879118', 'customJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'public.tpl');
}
/* {block 'metaTitle'} */
class Block_4624903726483977d207b35_91375540 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaTitle' => 
  array (
    0 => 'Block_4624903726483977d207b35_91375540',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Authors List<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'metaTitle'} */
/* {block 'metaDescription'} */
class Block_10293115586483977d2106b0_08957036 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaDescription' => 
  array (
    0 => 'Block_10293115586483977d2106b0_08957036',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaDescription'} */
/* {block 'metaKeywords'} */
class Block_11574287836483977d2120c9_92015105 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaKeywords' => 
  array (
    0 => 'Block_11574287836483977d2120c9_92015105',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaKeywords'} */
/* {block 'headerCss'} */
class Block_4197935586483977d2136e2_37204736 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_4197935586483977d2136e2_37204736',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_19300958086483977d214668_38644458 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19300958086483977d214668_38644458',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="authors-listing">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="authors-list">
                        <?php $_smarty_tpl->_subTemplateRender('file:authors/authors-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
class Block_9560213536483977d21a089_38834207 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerJs' => 
  array (
    0 => 'Block_9560213536483977d21a089_38834207',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footerJs'} */
/* {block 'customJs'} */
class Block_6998579226483977d21af84_39879118 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customJs' => 
  array (
    0 => 'Block_6998579226483977d21af84_39879118',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).on('change', '#countPerPage', function (e) {
            var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("authorsPublic");?>
';
            $.ajax({
                type: "POST",
                url: url,
                data: $('#book-filter, #books-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order'),
                beforeSend: function () {
                    app.preloader.start('.authors-list');
                },
                success: function (data) {
                    app.ajax_redirect(data);
                    if (data.error) {
                        app.notification('error', data.error);
                    } else {
                        $('.authors-list').html(data.html);
                    }
                },
                complete: function () {
                    app.preloader.finish('.authors-list');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $(document).on('change', '#books-sort', function (e) {
            var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("authorsPublic");?>
';
            $.ajax({
                type: "POST",
                url: url,
                data: $('#book-filter, #books-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order'),
                beforeSend: function () {
                    app.preloader.start('.authors-list');
                },
                success: function (data) {
                    app.ajax_redirect(data);
                    if (data.error) {
                        app.notification('error', data.error);
                    } else {
                        $('.authors-list').html(data.html);
                    }
                },
                complete: function () {
                    app.preloader.finish('.authors-list');
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
                    app.preloader.start('.authors-list');
                },
                success: function (data) {
                    app.ajax_redirect(data);
                    if (data.error) {
                        app.notification('error', data.error);
                    } else {
                        $('.authors-list').html(data.html);
                    }
                },
                complete: function () {
                    app.preloader.finish('.authors-list');
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
