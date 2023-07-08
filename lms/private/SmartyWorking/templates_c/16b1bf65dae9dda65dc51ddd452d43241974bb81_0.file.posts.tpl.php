<?php
/* Smarty version 3.1.31, created on 2023-06-10 14:31:23
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\public\posts\posts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64846d1b3712a7_45340455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16b1bf65dae9dda65dc51ddd452d43241974bb81' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\public\\posts\\posts.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/public/posts/post-list.tpl' => 1,
  ),
),false)) {
function content_64846d1b3712a7_45340455 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48124789664846d1b303436_00018086', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168032568664846d1b3116c7_35393925', 'toolbar');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54979704764846d1b326105_53235437', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130798496164846d1b329e57_26783410', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88310112764846d1b33e7d4_79056938', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196216078764846d1b3459f1_49862581', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_48124789664846d1b303436_00018086 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_48124789664846d1b303436_00018086',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Posts<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'toolbar'} */
class Block_168032568664846d1b3116c7_35393925 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'toolbar' => 
  array (
    0 => 'Block_168032568664846d1b3116c7_35393925',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("postCreate");?>
" class="btn btn-success btn-icon-fixed">
        <i class="fas fa-plus"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Post<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    </a>
<?php
}
}
/* {/block 'toolbar'} */
/* {block 'headerCss'} */
class Block_54979704764846d1b326105_53235437 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_54979704764846d1b326105_53235437',
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
class Block_130798496164846d1b329e57_26783410 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_130798496164846d1b329e57_26783410',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="card" id="postList">
                <?php $_smarty_tpl->_subTemplateRender("file:admin/public/posts/post-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerPageJs'} */
class Block_88310112764846d1b33e7d4_79056938 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_88310112764846d1b33e7d4_79056938',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/bootstrap-select/bootstrap-select.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerPageJs'} */
/* {block 'footerCustomJs'} */
class Block_196216078764846d1b3459f1_49862581 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_196216078764846d1b3459f1_49862581',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $(document).on('click', '.delete-post', function (e) {
                var url = $(this).attr('data-url');
                var row = $(this).closest('tr');
                $.ajax({
                    dataType: 'json',
                    type: 'POST',
                    url: url,
                    beforeSend: function () {
                        app.card.loading.start('#postList');
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
                        app.card.loading.finish('#postList');
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    }
                });
            });
            $(document).on('change', '#post-sort', function (e) {
                var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("postListView");?>
';
                $.ajax({
                    type: "POST",
                    url: url,
                    data: $('#post-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#post-sort').attr('data-order'),
                    dataType: 'json',
                    beforeSend: function () {
                        app.card.loading.start('#postList');
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                $('#postList').html(data.html);
                                app.bootstrap_select();
                                app.tooltip_popover();
                            }
                        }
                    },
                    complete: function () {
                        app.card.loading.finish('#postList');
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    }
                });
            });
            $(document).on('change', '#countPerPage', function (e) {
                var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("postListView");?>
';
                $.ajax({
                    type: "POST",
                    url: url,
                    data: $('#post-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#post-sort').attr('data-order'),
                    dataType: 'json',
                    beforeSend: function () {
                        app.card.loading.start('#postList');
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                $('#postList').html(data.html);
                                app.bootstrap_select();
                                app.tooltip_popover();
                            }
                        }
                    },
                    complete: function () {
                        app.card.loading.finish('#postList');
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    }
                });
            });
            $(document).on('click', '.ajax-page', function (e) {
                e.preventDefault();
                $.ajax({
                    dataType: 'json',
                    url: $(this).attr('href'),
                    beforeSend: function () {
                        app.card.loading.start($("#postList"));
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                $("#postList").html(data.html);
                            }
                        }
                    },
                    complete: function () {
                        app.card.loading.finish($("#postList"));
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    }
                });
            });
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerCustomJs'} */
}
