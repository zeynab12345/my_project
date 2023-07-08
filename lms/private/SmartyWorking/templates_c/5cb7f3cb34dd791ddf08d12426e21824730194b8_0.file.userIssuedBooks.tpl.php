<?php
/* Smarty version 3.1.31, created on 2023-06-12 12:43:11
  from "C:\xampp7.3\htdocs\lms\themes\default\user\userIssuedBooks.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6486f6bf9b9fc0_07405147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cb7f3cb34dd791ddf08d12426e21824730194b8' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\themes\\default\\user\\userIssuedBooks.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/userIssuedBooks-list.tpl' => 1,
  ),
),false)) {
function content_6486f6bf9b9fc0_07405147 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16861854596486f6bf98ced8_61931723', 'metaTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16894750536486f6bf9a37d0_72653325', 'metaDescription');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2651529756486f6bf9a46d7_60423402', 'metaKeywords');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3219099366486f6bf9a5795_97250122', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7743471416486f6bf9a65d1_49393253', 'toolbar');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11853864806486f6bf9a7808_36647541', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9689809176486f6bf9a8e29_12918847', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2451144076486f6bf9b13b5_40575860', 'footerJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7113968626486f6bf9b3265_82826238', 'customJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'public.tpl');
}
/* {block 'metaTitle'} */
class Block_16861854596486f6bf98ced8_61931723 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaTitle' => 
  array (
    0 => 'Block_16861854596486f6bf98ced8_61931723',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Issued Books History<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 | <?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("siteName");
}
}
/* {/block 'metaTitle'} */
/* {block 'metaDescription'} */
class Block_16894750536486f6bf9a37d0_72653325 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaDescription' => 
  array (
    0 => 'Block_16894750536486f6bf9a37d0_72653325',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaDescription'} */
/* {block 'metaKeywords'} */
class Block_2651529756486f6bf9a46d7_60423402 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaKeywords' => 
  array (
    0 => 'Block_2651529756486f6bf9a46d7_60423402',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaKeywords'} */
/* {block 'headerCss'} */
class Block_3219099366486f6bf9a5795_97250122 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_3219099366486f6bf9a5795_97250122',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'headerCss'} */
/* {block 'toolbar'} */
class Block_7743471416486f6bf9a65d1_49393253 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'toolbar' => 
  array (
    0 => 'Block_7743471416486f6bf9a65d1_49393253',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'toolbar'} */
/* {block 'headerCss'} */
class Block_11853864806486f6bf9a7808_36647541 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_11853864806486f6bf9a7808_36647541',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/css/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet"/>
<?php
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_9689809176486f6bf9a8e29_12918847 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9689809176486f6bf9a8e29_12918847',
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
Issued Books History<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="user-books">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="issues-card">
                    <?php $_smarty_tpl->_subTemplateRender('file:user/userIssuedBooks-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                </div>
            </div>
        </div>
    </section>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerJs'} */
class Block_2451144076486f6bf9b13b5_40575860 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerJs' => 
  array (
    0 => 'Block_2451144076486f6bf9b13b5_40575860',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footerJs'} */
/* {block 'customJs'} */
class Block_7113968626486f6bf9b3265_82826238 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customJs' => 
  array (
    0 => 'Block_7113968626486f6bf9b3265_82826238',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).on('change', '#countPerPage', function (e) {
            var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userIssuedBooksView");?>
';
            $.ajax({
                type: "POST",
                url: url,
                data: $('#books-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order'),
                dataType: 'json',
                beforeSend: function () {
                    app.preloader.start('#issues-card');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            $('#issues-card').html(data.html);
                            app.bootstrap_select();
                            app.tooltip_popover();
                        }
                    }
                },
                complete: function () {
                    app.preloader.finish('#issues-card');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $(document).on('change', '#books-sort', function (e) {
            var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userIssuedBooksView");?>
';
            $.ajax({
                type: "POST",
                url: url,
                data: $('#books-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order'),
                dataType: 'json',
                beforeSend: function () {
                    app.preloader.start('#issues-card');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            $('#issues-card').html(data.html);
                            app.bootstrap_select();
                            app.tooltip_popover();
                        }
                    }
                },
                complete: function () {
                    app.preloader.finish('#issues-card');
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
                data: $('#books-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order'),
                dataType: 'json',
                url: $(this).attr('href'),
                beforeSend: function () {
                    app.preloader.start('#issues-card');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            $('#issues-card').html(data.html);
                            app.bootstrap_select();
                            app.tooltip_popover();
                        }
                    }
                },
                complete: function () {
                    app.preloader.finish('#issues-card');
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
