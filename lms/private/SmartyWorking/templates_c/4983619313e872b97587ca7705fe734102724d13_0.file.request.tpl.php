<?php
/* Smarty version 3.1.31, created on 2023-06-13 15:38:41
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\requests\request.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_648871619775a7_08088296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4983619313e872b97587ca7705fe734102724d13' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\requests\\request.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648871619775a7_08088296 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194222106064887160e8c553_20626502', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173126722064887161391c43_23861302', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13429627716488716143f187_68894454', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126956676648871616a41b6_86867821', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_300555319648871616a5ec2_17645788', 'footerJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_816130325648871616a6f60_63738582', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_194222106064887160e8c553_20626502 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_194222106064887160e8c553_20626502',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['action']->value == "create") {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Request<?php $_block_repeat=false;
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
Edit Request<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'title'} */
/* {block 'headerCss'} */
class Block_173126722064887161391c43_23861302 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_173126722064887161391c43_23861302',
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
class Block_13429627716488716143f187_68894454 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13429627716488716143f187_68894454',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="card" id="request-block">
                <div class="card-body">
                    <?php if ($_smarty_tpl->tpl_vars['action']->value == "create") {?>
                        <?php $_smarty_tpl->_assignInScope('route', $_smarty_tpl->tpl_vars['routes']->value->getRouteString("requestCreate"));
?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['request']->value)) {?>
                        <?php $_smarty_tpl->_assignInScope('route', $_smarty_tpl->tpl_vars['routes']->value->getRouteString("requestEdit",array("requestId"=>$_smarty_tpl->tpl_vars['request']->value->getId())));
?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "delete") {?>
                        <?php $_smarty_tpl->_assignInScope('route', '');
?>
                    <?php }?>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['route']->value;?>
" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="hidden" name="userId" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['request']->value->getUserId();
}?>">
                                    <label for="bookId" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                    <select name="bookId" id="bookId" class="form-control">
                                        <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['request']->value->getBook()) {?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['request']->value->getBook()->getId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['request']->value->getBook()->getTitle();?>
</option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Status<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                    <select name="status" id="status" class="form-control select-picker">
                                        <option value="Pending" <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['request']->value->getStatus() == 'Pending') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Pending<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
                                        <option value="Accepted" <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['request']->value->getStatus() == 'Accepted') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Accepted<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
                                        <option value="Rejected" <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['request']->value->getStatus() == 'Rejected') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Rejected<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
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
                                    <textarea name="notes" id="notes" cols="30" rows="5" class="form-control"><?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['request']->value->getNotes();
}?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-secondary disabled pull-right save-request">
                                        <span class="far fa-save"></span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Save<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerPageJs'} */
class Block_126956676648871616a41b6_86867821 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_126956676648871616a41b6_86867821',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
/* {block 'footerJs'} */
class Block_300555319648871616a5ec2_17645788 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerJs' => 
  array (
    0 => 'Block_300555319648871616a5ec2_17645788',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footerJs'} */
/* {block 'footerCustomJs'} */
class Block_816130325648871616a6f60_63738582 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_816130325648871616a6f60_63738582',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            var bookSearchUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookSearch",array());?>
';
            $('#bookId').select2({
                ajax: {
                    url: function () {
                        return bookSearchUrl;
                    },
                    dataType: 'json',
                    type: 'POST',
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
                        markup += book.authors[i].firstName + " " + book.authors[i].lastName;
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

            $(document).on('change', 'input,textarea,select', function () {
                $(this).closest('form').attr('data-changed', true);
                $('.save-request').removeClass('btn-outline-secondary disabled').addClass('btn-outline-success');
            });
            var requestEditUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("requestEdit",array());?>
';
            $('.save-request').on('click', function (e) {
                e.preventDefault();
                var form = $(this).closest('form');
                var dataChanged = form.attr('data-changed');
                if (dataChanged == 'true') {
                    $.ajax({
                        dataType: 'json',
                        method: 'POST',
                        data: form.serialize(),
                        url: form.attr('action'),
                        beforeSend: function (data) {
                            app.card.loading.start('#request-block');
                        },
                        success: function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    form.attr('action', requestEditUrl.replace("[requestId]", data.requestId)).attr('data-changed', false);
                                    app.notification('success', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Data has been saved successfully<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                                    $('.save-request').removeClass('btn-outline-success').addClass('btn-outline-secondary disabled');
                                }
                            }
                        },
                        error: function (jqXHR, exception) {
                            app.notification('error', app.getErrorMessage(jqXHR, exception));
                        },
                        complete: function (data) {
                            app.card.loading.finish('#request-block');
                        }
                    });
                } else {
                    app.notification('information', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
There are no changes<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
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
