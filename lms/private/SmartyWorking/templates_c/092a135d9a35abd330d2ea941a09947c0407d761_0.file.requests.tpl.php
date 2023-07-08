<?php
/* Smarty version 3.1.31, created on 2023-06-09 23:53:15
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\requests\requests.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64839f4b12a2a6_60828376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '092a135d9a35abd330d2ea941a09947c0407d761' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\requests\\requests.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/requests/requests-list.tpl' => 1,
  ),
),false)) {
function content_64839f4b12a2a6_60828376 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142261752764839f4b0e9785_78515375', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140711250464839f4b0f1546_85560030', 'toolbar');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80012665364839f4b0f3317_40343366', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103249170764839f4b0f8026_77502707', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59093216464839f4b10ec87_65067077', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9003401964839f4b110c65_52299759', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_142261752764839f4b0e9785_78515375 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_142261752764839f4b0e9785_78515375',
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
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'toolbar'} */
class Block_140711250464839f4b0f1546_85560030 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'toolbar' => 
  array (
    0 => 'Block_140711250464839f4b0f1546_85560030',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="heading-elements">
        <a class="btn btn-success btn-icon-fixed" data-toggle="collapse" href="#request-book-block" aria-expanded="false" aria-controls="collapseExample">
            <span class="btn-icon"><i class="fas fa-plus"></i></span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Request Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        </a>
    </div>
<?php
}
}
/* {/block 'toolbar'} */
/* {block 'headerCss'} */
class Block_80012665364839f4b0f3317_40343366 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_80012665364839f4b0f3317_40343366',
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
class Block_103249170764839f4b0f8026_77502707 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_103249170764839f4b0f8026_77502707',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="collapse" id="request-book-block">
                <div class="card">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 50%;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                <th style="width: 50%;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Notes<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                <th style="width: 65px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <select name="bookIds[]" id="bookId" class="form-control"></select>
                                </td>
                                <td>
                                    <textarea name="notes" id="note" cols="30" rows="2" class="form-control"></textarea>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-outline-success no-border" id="add-book" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Another Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
"><i class="fas fa-plus" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("requestCreate");?>
" id="request-form">
                        <?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
                            <input type="hidden" name="userId" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
">
                        <?php }?>
                        <input type="hidden" name="notes" id="notes">
                        <table class="table table-hover d-none" id="request-result">
                            <thead>
                                <tr>
                                    <th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                    <th style="width: 150px;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Publisher<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                    <th style="width: 150px;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Publishing Year<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                    <th style="width: 150px;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN10/13<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                    <th style="width: 65px;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Delete<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="#" class="btn btn-success pull-right <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>ml-2<?php } else { ?>mr-2<?php }?> mb-3" id="request-book"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Request<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card" id="requests-card">
                <?php $_smarty_tpl->_subTemplateRender('file:admin/requests/requests-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerPageJs'} */
class Block_59093216464839f4b10ec87_65067077 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_59093216464839f4b10ec87_65067077',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/jquery-validate/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/select2/select2.full.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/bootstrap-select/bootstrap-select.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerPageJs'} */
/* {block 'footerCustomJs'} */
class Block_9003401964839f4b110c65_52299759 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_9003401964839f4b110c65_52299759',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).on('click', '.request-issue-book-block', function (e) {
            e.stopPropagation();
        });
        var bookSearchUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookSearch",array());?>
';
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
                    if (jqXHR.statusText == 'abort') {
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
        function formatBook(book) {
            if (book.loading) return book.text;
            var i, lastIndex, markup = "<div class='select-book'>";
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
            if (book.genres.length > 0) {
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
                for (i = 0; i < book.genres.length; i++) {
                    markup += book.genres[i].name;
                    if (lastIndex != i) {
                        markup += ", ";
                    }
                }
                markup += "</div>";
            }
            if (book.authors.length > 0) {
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
                for (i = 0; i < book.authors.length; i++) {
                    if (book.authors[i].firstName) {
                        var text = book.authors[i].firstName + ' ' + book.authors[i].lastName;
                    } else {
                        text = book.authors[i].lastName;
                    }
                    markup += text;
                    if (lastIndex != i) {
                        markup += ", ";
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
        $('#add-book').on('click', function (e) {
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
                if (data[0].publisher) {
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
                if (publisherName) {
                    markup += publisherName;
                }
                markup += "</td>";
                markup += "<td>";
                if (publishingYear) {
                    markup += publishingYear;
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
                markup += "<a href='#' class='btn btn-default remove-book' title='<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Delete Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
'><i class='fa fa-remove'></i></a>";
                markup += "</td>";
                markup += "</tr>";
                $('#request-result tbody').append(markup);
                $('#bookId').empty().trigger('change');
            }
        });
        $('#request-book').on('click', function (e) {
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
                    app.card.loading.start('#request-book-block .card');
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
                            var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("requestListView");?>
';
                            $.ajax({
                                type: "POST",
                                url: url,
                                data: $('#books-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order'),
                                dataType: 'json',
                                beforeSend: function () {
                                    app.card.loading.start('#requests-card');
                                },
                                success: function (data) {
                                    if (data.redirect) {
                                        window.location.href = data.redirect;
                                    } else {
                                        if (data.error) {
                                            app.notification('error', data.error);
                                        } else {
                                            $('#requests-card').html(data.html);
                                            app.bootstrap_select();
                                            app.tooltip_popover();
                                        }
                                    }
                                },
                                complete: function () {
                                    app.card.loading.finish('#requests-card');
                                },
                                error: function (jqXHR, exception) {
                                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                                }
                            });
                        }
                    }
                },
                complete: function () {
                    app.card.loading.finish('#request-book-block .card');
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
        $(document).on('click', '.accepted-book', function (e) {
            e.preventDefault();
            var $this = $(this);
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: $this.attr('href'),
                beforeSend: function () {
                    app.card.loading.start('#requests-card');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            $this.closest('tr').find('.request-status .badge').removeClass().addClass('badge badge-success').text('<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Accepted<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                        }
                    }
                },
                complete: function () {
                    app.card.loading.finish('#requests-card');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $(document).on('click', '.rejected-book', function (e) {
            e.preventDefault();
            var $this = $(this);
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: $this.attr('href'),
                beforeSend: function () {
                    app.card.loading.start('#requests-card');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            $this.closest('tr').find('.request-status .badge').removeClass().addClass('badge badge-danger').text('<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Rejected<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                        }
                    }
                },
                complete: function () {
                    app.card.loading.finish('#requests-card');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $(document).on('click', '.issue-book', function (e) {
            e.preventDefault();
            var $this = $(this);
            var btn = $(this).closest('.dropdown');
            var data = $this.closest('.request-issue-book-block').find('select').serialize();
            $.ajax({
                type: "POST",
                dataType: 'json',
                data: data,
                url: $this.attr('data-url'),
                beforeSend: function () {
                    app.card.loading.start($this.closest('.card'));
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
Book is successfully issued.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                            $this.closest('tr').find('.request-status .badge').removeClass().addClass('badge badge-success').text('<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Accepted<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                            btn.remove();
                            $('.tooltip.show').remove();
                        }
                    }
                },
                complete: function () {
                    app.card.loading.finish($this.closest('.card'));
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $(document).on('click', '.delete-request', function (e) {
            var url = $(this).attr('data-url');
            var row = $(this).closest('tr');
            $.ajax({
                dataType: 'json',
                type: 'POST',
                url: url,
                beforeSend: function () {
                    app.card.loading.start('#requests-card');
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
                    app.card.loading.finish('#requests-card');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $(document).on('change', '#countPerPage', function (e) {
            var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("requestListView");?>
';
            $.ajax({
                type: "POST",
                url: url,
                data: $('#books-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order'),
                dataType: 'json',
                beforeSend: function () {
                    app.card.loading.start('#requests-card');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            $('#requests-card').html(data.html);
                            app.bootstrap_select();
                            app.tooltip_popover();
                        }
                    }
                },
                complete: function () {
                    app.card.loading.finish('#requests-card');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $(document).on('change', '#books-sort', function (e) {
            var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("requestListView");?>
';
            $.ajax({
                type: "POST",
                url: url,
                data: $('#books-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order'),
                dataType: 'json',
                beforeSend: function () {
                    app.card.loading.start('#requests-card');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            $('#requests-card').html(data.html);
                            app.bootstrap_select();
                            app.tooltip_popover();
                        }
                    }
                },
                complete: function () {
                    app.card.loading.finish('#requests-card');
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
                    app.card.loading.start('#requests-card');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            $('#requests-card').html(data.html);
                            app.bootstrap_select();
                            app.tooltip_popover();
                        }
                    }
                },
                complete: function () {
                    app.card.loading.finish('#requests-card');
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
/* {/block 'footerCustomJs'} */
}
