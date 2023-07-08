<?php
/* Smarty version 3.1.31, created on 2023-06-12 12:43:03
  from "C:\xampp7.3\htdocs\lms\themes\default\user\userBooks.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6486f6b738db82_17768031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2e4498db6bc6d59bea8a060f5e609b44814a578' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\themes\\default\\user\\userBooks.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/userBooks-list.tpl' => 1,
  ),
),false)) {
function content_6486f6b738db82_17768031 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16344142156486f6b735f7c2_42648357', 'metaTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11106865236486f6b7371338_22528408', 'metaDescription');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15294197736486f6b7372a66_01338252', 'metaKeywords');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21111731146486f6b7373e57_97534960', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17341506176486f6b7374cf2_32671043', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1630276326486f6b737b242_27112009', 'footerJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5776747976486f6b737c2c5_53467919', 'customJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'public.tpl');
}
/* {block 'metaTitle'} */
class Block_16344142156486f6b735f7c2_42648357 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaTitle' => 
  array (
    0 => 'Block_16344142156486f6b735f7c2_42648357',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
My Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 | <?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("siteName");
}
}
/* {/block 'metaTitle'} */
/* {block 'metaDescription'} */
class Block_11106865236486f6b7371338_22528408 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaDescription' => 
  array (
    0 => 'Block_11106865236486f6b7371338_22528408',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaDescription'} */
/* {block 'metaKeywords'} */
class Block_15294197736486f6b7372a66_01338252 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaKeywords' => 
  array (
    0 => 'Block_15294197736486f6b7372a66_01338252',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaKeywords'} */
/* {block 'headerCss'} */
class Block_21111731146486f6b7373e57_97534960 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_21111731146486f6b7373e57_97534960',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_17341506176486f6b7374cf2_32671043 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17341506176486f6b7374cf2_32671043',
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
My Books<?php $_block_repeat=false;
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
                <div class="col-md-12" id="books-block">
                    <?php $_smarty_tpl->_subTemplateRender('file:user/userBooks-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
class Block_1630276326486f6b737b242_27112009 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerJs' => 
  array (
    0 => 'Block_1630276326486f6b737b242_27112009',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footerJs'} */
/* {block 'customJs'} */
class Block_5776747976486f6b737c2c5_53467919 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customJs' => 
  array (
    0 => 'Block_5776747976486f6b737c2c5_53467919',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("enableBookIssueByUser")) {?>
        $(document).on('click', '.book-is-lost', function (e) {
            e.preventDefault();
            var $this = $(this);
            var url = $this.attr('href').replace("[isLost]", 'true');
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: url,
                beforeSend: function () {
                    app.preloader.start('#books-block');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            $this.closest('tr').addClass('book-lost');
                            $this.closest('tr').find('.action-btn a,.action-btn .dropdown').remove();
                            $this.closest('tr').find('.action-btn').appendTo('<span class="badge badge-danger"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
lost<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>');
                        }
                    }
                },
                complete: function () {
                    app.preloader.finish('#books-block');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $(document).on('click', '.return-book', function (e) {
            e.preventDefault();
            var $this = $(this);
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: $this.attr('href'),
                beforeSend: function () {
                    app.preloader.start('#books-block');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            app.notification('success', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book successfully returned<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                            $this.tooltip('hide').remove();
                            $.ajax({
                                type: "POST",
                                url: '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userBooksView");?>
',
                                data: $('#books-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order'),
                                dataType: 'json',
                                beforeSend: function () {
                                    app.preloader.start('#books-block');
                                },
                                success: function (data) {
                                    if (data.redirect) {
                                        window.location.href = data.redirect;
                                    } else {
                                        if (data.error) {
                                            app.notification('error', data.error);
                                        } else {
                                            $this.tooltip('hide').remove();
                                            $('#books-block').html(data.html);
                                        }
                                    }
                                },
                                complete: function () {
                                    app.preloader.finish('#books-block');
                                },
                                error: function (jqXHR, exception) {
                                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                                }
                            });
                        }
                    }
                },
                complete: function () {
                    app.preloader.finish('#books-block');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        <?php }?>
        $(document).on('change', '#countPerPage', function (e) {
            var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userBooksView");?>
';
            $.ajax({
                type: "POST",
                url: url,
                data: $('#books-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order'),
                dataType: 'json',
                beforeSend: function () {
                    app.preloader.start('#books-block');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            $('#books-block').html(data.html);
                        }
                    }
                },
                complete: function () {
                    app.preloader.finish('#books-block');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $(document).on('change', '#books-sort', function (e) {
            var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userBooksView");?>
';
            $.ajax({
                type: "POST",
                url: url,
                data: $('#books-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order'),
                dataType: 'json',
                beforeSend: function () {
                    app.preloader.start('#books-block');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            $('#books-block').html(data.html);
                        }
                    }
                },
                complete: function () {
                    app.preloader.finish('#books-block');
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
                    app.preloader.start('#books-block');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            $('#books-block').html(data.html);
                        }
                    }
                },
                complete: function () {
                    app.preloader.finish('#books-block');
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
