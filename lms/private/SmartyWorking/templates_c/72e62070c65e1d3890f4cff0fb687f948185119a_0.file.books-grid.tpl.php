<?php
/* Smarty version 3.1.31, created on 2023-06-09 23:19:49
  from "C:\xampp7.3\htdocs\lms\themes\default\books\books-grid.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64839775eed4c2_94311691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72e62070c65e1d3890f4cff0fb687f948185119a' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\themes\\default\\books\\books-grid.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:books/components/books-view-type-grid.tpl' => 1,
    'file:general/search-filter.tpl' => 1,
  ),
),false)) {
function content_64839775eed4c2_94311691 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63708261464839775eb8496_78236117', 'metaTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97186629464839775ec0492_67465531', 'metaDescription');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207940575464839775ec1359_62161001', 'metaKeywords');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85672371264839775ec2483_30103186', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164619481264839775ec7402_56314750', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21541316664839775eccaf3_22533546', 'footerJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168963939064839775ece0c5_67259547', 'customJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'public.tpl');
}
/* {block 'metaTitle'} */
class Block_63708261464839775eb8496_78236117 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaTitle' => 
  array (
    0 => 'Block_63708261464839775eb8496_78236117',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Books List<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'metaTitle'} */
/* {block 'metaDescription'} */
class Block_97186629464839775ec0492_67465531 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaDescription' => 
  array (
    0 => 'Block_97186629464839775ec0492_67465531',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaDescription'} */
/* {block 'metaKeywords'} */
class Block_207940575464839775ec1359_62161001 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaKeywords' => 
  array (
    0 => 'Block_207940575464839775ec1359_62161001',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaKeywords'} */
/* {block 'headerCss'} */
class Block_85672371264839775ec2483_30103186 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_85672371264839775ec2483_30103186',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/select2.min.css">
<?php
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_164619481264839775ec7402_56314750 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_164619481264839775ec7402_56314750',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="books-listing">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-sm-12 col-xs-12 order-2 order-lg-1" id="book-list">
                    <?php $_smarty_tpl->_subTemplateRender('file:books/components/books-view-type-grid.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                </div>
                <div class="col-lg-3 col-sm-12 col-xs-12 order-lg-2 order-1">
                    <?php $_smarty_tpl->_subTemplateRender('file:general/search-filter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
class Block_21541316664839775eccaf3_22533546 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerJs' => 
  array (
    0 => 'Block_21541316664839775eccaf3_22533546',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/select2.full.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerJs'} */
/* {block 'customJs'} */
class Block_168963939064839775ece0c5_67259547 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customJs' => 
  array (
    0 => 'Block_168963939064839775ece0c5_67259547',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).on('click', '.view-type', function (e) {
            e.preventDefault();
            var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("booksPublic");?>
';
            $.ajax({
                type: "POST",
                url: url,
                data: $('#book-filter, #books-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order') + '&bookViewType=' + $(this).attr('data-type'),
                beforeSend: function () {
                    app.preloader.start('#book-list');
                },
                success: function (data) {
                    app.ajax_redirect(data);
                    if (data.error) {
                        app.notification('error', data.error);
                    } else {
                        $('#book-list').html(data.html);
                    }
                },
                complete: function () {
                    app.preloader.finish('#book-list');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $(document).on('change', '#countPerPage', function (e) {
            var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("booksPublic");?>
';
            $.ajax({
                type: "POST",
                url: url,
                data: $('#book-filter, #books-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order'),
                beforeSend: function () {
                    app.preloader.start('#book-list');
                },
                success: function (data) {
                    app.ajax_redirect(data);
                    if (data.error) {
                        app.notification('error', data.error);
                    } else {
                        $('#book-list').html(data.html);
                    }
                },
                complete: function () {
                    app.preloader.finish('#book-list');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $(document).on('change', '#books-sort', function (e) {
            var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("booksPublic");?>
';
            $.ajax({
                type: "POST",
                url: url,
                data: $('#book-filter, #books-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order'),
                beforeSend: function () {
                    app.preloader.start('#book-list');
                },
                success: function (data) {
                    app.ajax_redirect(data);
                    if (data.error) {
                        app.notification('error', data.error);
                    } else {
                        $('#book-list').html(data.html);
                    }
                },
                complete: function () {
                    app.preloader.finish('#book-list');
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
                    app.preloader.start('#book-list');
                },
                success: function (data) {
                    app.ajax_redirect(data);
                    if (data.error) {
                        app.notification('error', data.error);
                    } else {
                        $('#book-list').html(data.html);
                        $("html, body").animate({
                            scrollTop: $('#book-list').offset().top+"px"
                        });
                    }
                },
                complete: function () {
                    app.preloader.finish('#book-list');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        var publisherSearchUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("publisherSearchPublic",array());?>
';
        $("#publishers").select2({
            ajax: {
                url: publisherSearchUrl,
                dataType: 'json',
                type: 'POST',
                data: function (params) {
                    return {
                        searchText: params.term
                    };
                },
                processResults: function (data, params) {
                    app.ajax_redirect(data);
                    if (data.error) {
                        app.notification('error', data.error);
                    } else {
                        return {
                            results: $.map(data, function (item) {
                                return {
                                    text: item.name,
                                    id: item.id
                                }
                            })
                        };
                    }
                },
                cache: false
            },
            minimumInputLength: 2,
            maximumSelectionLength: 6
        });
        var genreSearchUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("genreSearchPublic",array());?>
';
        $("#genres").select2({
            ajax: {
                url: genreSearchUrl,
                dataType: 'json',
                type: 'POST',
                data: function (params) {
                    return {
                        searchText: params.term
                    };
                },
                processResults: function (data, params) {
                    app.ajax_redirect(data);
                    if (data.error) {
                        app.notification('error', data.error);
                    } else {
                        return {
                            results: $.map(data, function (item) {
                                return {
                                    text: item.name,
                                    id: item.id
                                }
                            })
                        };
                    }
                },
                cache: false
            },
            minimumInputLength: 2,
            maximumSelectionLength: 6
        });
        var authorSearchUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("authorSearchPublic",array());?>
';
        $("#authors").select2({
            ajax: {
                url: authorSearchUrl,
                dataType: 'json',
                type: 'POST',
                data: function (params) {
                    return {
                        searchText: params.term
                    };
                },
                processResults: function (data, params) {
                    app.ajax_redirect(data);
                    if (data.error) {
                        app.notification('error', data.error);
                    } else {
                        return {
                            results: $.map(data, function (item) {
                                if (item.firstName && item.lastName) {
                                    var text = item.firstName + ' ' + item.lastName;
                                } else if (item.firstName) {
                                    text = item.firstName;
                                } else if (item.lastName) {
                                    text = item.lastName;
                                }
                                return {
                                    text: text,
                                    id: item.id
                                }
                            })
                        };
                    }
                },
                cache: false
            },
            minimumInputLength: 2,
            maximumSelectionLength: 6
        });
        $("#bindings").select2({
            maximumSelectionLength: 6
        });
        $('#filterIt').on('click', function (e) {
            e.preventDefault();
            var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("booksPublic");?>
';
            var form = $('#book-filter');
            $.ajax({
                dataType: 'json',
                method: 'POST',
                data: $('#book-filter, #books-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order'),
                url: url,
                beforeSend: function (data) {
                    app.preloader.start('#book-list');
                },
                success: function (data) {
                    app.ajax_redirect(data);
                    if (data.error) {
                        app.notification('error', data.error);
                    } else {
                        $('#book-list').html(data.html);
                    }
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                },
                complete: function (data) {
                    app.preloader.finish('#book-list');
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
