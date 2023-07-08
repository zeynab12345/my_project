<?php
/* Smarty version 3.1.31, created on 2023-06-10 12:52:08
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\genres\genres.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_648455d862b696_60916452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbdcb5389e305d78ae80d73ef94ae12aedd0e18c' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\genres\\genres.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/genres/genre-list.tpl' => 1,
  ),
),false)) {
function content_648455d862b696_60916452 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14644830648455d80cdc47_13238927', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_874475947648455d82e19a9_90468534', 'toolbar');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_771782539648455d84dd2d2_01081592', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1684546408648455d8628462_35392981', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_14644830648455d80cdc47_13238927 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_14644830648455d80cdc47_13238927',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Genres<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'toolbar'} */
class Block_874475947648455d82e19a9_90468534 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'toolbar' => 
  array (
    0 => 'Block_874475947648455d82e19a9_90468534',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="heading-elements">
        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("genreCreate");?>
" class="btn btn-success">
            <span class="btn-icon"><i class="fas fa-plus"></i></span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Genre<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        </a>
    </div>
<?php
}
}
/* {/block 'toolbar'} */
/* {block 'content'} */
class Block_771782539648455d84dd2d2_01081592 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_771782539648455d84dd2d2_01081592',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="card" id="genreList">
                <?php $_smarty_tpl->_subTemplateRender("file:admin/genres/genre-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerCustomJs'} */
class Block_1684546408648455d8628462_35392981 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_1684546408648455d8628462_35392981',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $(document).on('click', '.delete-genre', function (e) {
                var url = $(this).attr('data-url');
                var row = $(this).closest('tr');
                $.ajax({
                    dataType: 'json',
                    type: 'POST',
                    url: url,
                    beforeSend: function () {
                        app.card.loading.start('#genreList');
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
                        app.card.loading.finish('#genreList');
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
                        app.card.loading.start($("#genreList"));
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                $("#genreList").html(data.html);
                            }
                        }
                    },
                    complete: function () {
                        app.card.loading.finish($("#genreList"));
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
