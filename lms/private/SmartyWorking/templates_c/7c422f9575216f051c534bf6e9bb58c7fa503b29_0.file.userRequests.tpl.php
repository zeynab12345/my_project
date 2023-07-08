<?php
/* Smarty version 3.1.31, created on 2023-06-12 12:42:50
  from "C:\xampp7.3\htdocs\lms\themes\default\user\userRequests.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6486f6aabde030_64647345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c422f9575216f051c534bf6e9bb58c7fa503b29' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\themes\\default\\user\\userRequests.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/userRequest-list.tpl' => 1,
  ),
),false)) {
function content_6486f6aabde030_64647345 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19786289536486f6aab9ae43_48125114', 'metaTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7260280116486f6aabb4999_77000994', 'metaDescription');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10334206796486f6aabb6e08_03893497', 'metaKeywords');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2033861456486f6aabb9007_02397565', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8709632016486f6aabbb546_45850671', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14285374236486f6aabc3b89_29970863', 'footerJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21306317916486f6aabc5946_88581711', 'customJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'public.tpl');
}
/* {block 'metaTitle'} */
class Block_19786289536486f6aab9ae43_48125114 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaTitle' => 
  array (
    0 => 'Block_19786289536486f6aab9ae43_48125114',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Requested Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 | <?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("siteName");
}
}
/* {/block 'metaTitle'} */
/* {block 'metaDescription'} */
class Block_7260280116486f6aabb4999_77000994 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaDescription' => 
  array (
    0 => 'Block_7260280116486f6aabb4999_77000994',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaDescription'} */
/* {block 'metaKeywords'} */
class Block_10334206796486f6aabb6e08_03893497 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaKeywords' => 
  array (
    0 => 'Block_10334206796486f6aabb6e08_03893497',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaKeywords'} */
/* {block 'headerCss'} */
class Block_2033861456486f6aabb9007_02397565 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_2033861456486f6aabb9007_02397565',
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
class Block_8709632016486f6aabbb546_45850671 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8709632016486f6aabbb546_45850671',
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
My Requested Book<?php $_block_repeat=false;
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
                <div class="col-md-12" id="requests-card">
                    <?php $_smarty_tpl->_subTemplateRender('file:user/userRequest-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
class Block_14285374236486f6aabc3b89_29970863 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerJs' => 
  array (
    0 => 'Block_14285374236486f6aabc3b89_29970863',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/select2.full.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerJs'} */
/* {block 'customJs'} */
class Block_21306317916486f6aabc5946_88581711 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customJs' => 
  array (
    0 => 'Block_21306317916486f6aabc5946_88581711',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        var bookSearchUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookSearch",array());?>
';
        function bookSearch() {
            $('#bookId').select2({
                ajax: {
                    url: function () {
                        return bookSearchUrl;
                    },
                    dataType: 'json',
                    type: 'POST',
                    delay: 250,
                    data: function (params) {
                        return {
                            searchText: params.term
                        };
                    },
                    error: function (jqXHR, exception) {
                        if (jqXHR.statusText=='abort') {
                            return;
                        }
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    },
                    processResults: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                return {
                                    results: data.books
                                };
                            }
                        }
                    },
                    cache: true
                },
                escapeMarkup: function (markup) {
                    return markup;
                },
                minimumInputLength: 2,
                templateResult: formatBook,
                templateSelection: formatBookSelection
            });
        }
        bookSearch();
        function formatBook(book) {
            if (book.loading) return book.text;
            var i,lastIndex,markup = "<div class='select-book'>";
            markup += "<div class='select-book-cover'>";
            if (book.cover) {
                markup += '<img src="' + book.cover.webPath + '" class="img-fluid">';
            } else {
                markup += '<img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noBookImageFilePath");?>
" class="img-fluid">';
            }
            markup += "</div>";
            markup += "<div class='select-book-info'>";
            markup += "<div class='select-book-title'>" + book.title + "";
            if (book.publishingYear) {
                markup += " <span>(" + book.publishingYear + ")</span>";
            }
            markup += "</div>";
            if (book.publisher) {
                markup += "<div class='select-book-publisher'><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Publisher:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</strong> " + book.publisher.name + "</div>";
            }
            if (book.ISBN10) {
                markup += "<div class='select-book-isbn'><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN10:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</strong> " + book.ISBN10 + "</div>";
            } else if (book.ISBN13) {
                markup += "<div class='select-book-isbn'><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN13:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</strong> " + book.ISBN13 + "</div>";
            }
            if (book.genres && book.genres.length > 0) {
                markup += "<div class='select-book-genre'><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Genres:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</strong> ";
                lastIndex = book.genres.length - 1;
                for(i=0; i<book.genres.length; i++){
                    markup +=  book.genres[i].name;
                    if(lastIndex != i) {
                        markup +=  ", ";
                    }
                }
                markup += "</div>";
            }
            if (book.authors && book.authors.length > 0) {
                markup += "<div class='select-book-author'><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Authors:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</strong> ";
                lastIndex = book.authors.length - 1;
                for(i=0; i<book.authors.length; i++){
                    if(book.authors[i].firstName) {
                        var text = book.authors[i].firstName + ' ' + book.authors[i].lastName;
                    } else {
                        text = book.authors[i].lastName;
                    }
                    markup +=  text;
                    if(lastIndex != i) {
                        markup +=  ", ";
                    }
                }
                markup += "</div>";
            }
            markup += "</div></div>";
            return markup;
        }
        function formatBookSelection(book) {
            return book.title || book.text;
        }
        $(document).on('click', '#add-book', function (e) {
            e.preventDefault();
            var book = $("#bookId");
            var bookVal = book.val();
            var note = $("#note");
            var noteVal = note.val();
            if (!bookVal) {
                app.notification('error', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book is required<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                return false;
            }
            if (bookVal) {
                $('#notes').val(noteVal);
                $('#request-result').removeClass('d-none').slideDown();
                var data = $(book).select2('data');
                var bookId = data[0].id;
                var title = data[0].title;
                if (data[0].publisher){
                    var publisherName = data[0].publisher.name;
                }
                var publishingYear = data[0].publishingYear;
                var ISBN10 = data[0].ISBN10;
                var ISBN13 = data[0].ISBN13;

                var markup = "<tr>";
                markup += "<td>";
                markup += title;
                markup += "</td>";
                markup += "<td>";
                if (publishingYear) {
                    markup += publishingYear;
                }
                markup += "</td>";
                markup += "<td>";
                if (publisherName) {
                    markup += publisherName;
                }
                markup += "</td>";
                markup += "<td>";
                if (ISBN10) {
                    markup += ISBN10;
                } else if (ISBN13) {
                    markup += ISBN13;
                }
                markup += "</td>";
                markup += "<td class='text-center'>";
                markup += "<input type='hidden' name='bookIds[]' value=" + bookId + ">";
                markup += "<a href='#' class='btn btn-outline-info btn-sm no-border remove-book' title='<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Delete Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
'><i class='far fa-trash-alt'></i></a>";
                markup += "</td>";
                markup += "</tr>";
                $('#request-result tbody').append(markup);
                $('#bookId').empty().trigger('change');
            }
        });
        $(document).on('click', '#request-book', function (e) {
            e.preventDefault();
            var formData, form = $('#request-form');
            var bookVal = $("#bookId").val();
            if ($('#request-result tbody tr').length < 1) {
                if (!bookVal) {
                    app.notification('error', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book is required<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                    return false;
                }
                formData = $('#bookId, #note').serialize();
            } else {
                formData = $(form).serialize();
            }
            $.ajax({
                type: "POST",
                dataType: 'json',
                data: formData,
                url: $(form).attr('action'),
                beforeSend: function () {
                    app.preloader.start('#request-book-block');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            $('#bookId').empty().trigger('change');
                            $('#note').val('');
                            $('#request-result').addClass('d-none').find('tbody tr').remove();
                            var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userRequestListView");?>
';
                            $.ajax({
                                type: "POST",
                                url: url,
                                data: $('#books-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order'),
                                dataType: 'json',
                                beforeSend: function () {
                                    $('#request-book-block').collapse('hide');
                                    app.preloader.start('#requests-card');
                                },
                                success: function (data) {
                                    if (data.redirect) {
                                        window.location.href = data.redirect;
                                    } else {
                                        if (data.error) {
                                            app.notification('error', data.error);
                                        } else {
                                            $('#requests-card').html(data.html);
                                            bookSearch();
                                            app.bootstrap_tooltip();
                                        }
                                    }
                                },
                                complete: function () {
                                    app.preloader.finish('#requests-card');
                                },
                                error: function (jqXHR, exception) {
                                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                                }
                            });
                        }
                    }
                },
                complete: function () {
                    app.preloader.finish('#request-book-block');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $(document).on('click', '.remove-book', function (e) {
            e.preventDefault();
            $(this).closest('tr').remove();
            if ($('#request-result tbody tr').length < 1) {
                $('#request-result').addClass('d-none');
            }
        });
        $(document).on('click', '.delete-request', function (e) {
            var url = $(this).attr('data-url');
            var row = $(this).closest('tr');
            $.ajax({
                dataType: 'json',
                type: 'POST',
                url: url,
                beforeSend: function () {
                    app.preloader.start('#requests-card');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            app.notification('success', data.success);
                            $(row).remove();
                        }
                    }
                },
                complete: function () {
                    app.preloader.finish('#requests-card');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $(document).on('change', '#countPerPage', function (e) {
            var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userRequestListView");?>
';
            $.ajax({
                type: "POST",
                url: url,
                data: $('#books-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order'),
                dataType: 'json',
                beforeSend: function () {
                    app.preloader.start('#requests-card');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            $('#requests-card').html(data.html);
                            app.bootstrap_tooltip();
                            bookSearch();
                        }
                    }
                },
                complete: function () {
                    app.preloader.finish('#requests-card');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $(document).on('change', '#books-sort', function (e) {
            var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userRequestListView");?>
';
            $.ajax({
                type: "POST",
                url: url,
                data: $('#books-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order'),
                dataType: 'json',
                beforeSend: function () {
                    app.preloader.start('#requests-card');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            $('#requests-card').html(data.html);
                            app.bootstrap_tooltip();
                            bookSearch();
                        }
                    }
                },
                complete: function () {
                    app.preloader.finish('#requests-card');
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
                    app.preloader.start('#requests-card');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            $('#requests-card').html(data.html);
                            app.bootstrap_tooltip();
                            bookSearch();
                        }
                    }
                },
                complete: function () {
                    app.preloader.finish('#requests-card');
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
