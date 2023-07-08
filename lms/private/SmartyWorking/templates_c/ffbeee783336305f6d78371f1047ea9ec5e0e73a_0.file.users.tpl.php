<?php
/* Smarty version 3.1.31, created on 2023-06-10 13:50:20
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\users\users.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6484637c045b41_56394784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffbeee783336305f6d78371f1047ea9ec5e0e73a' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\users\\users.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/users/user-list.tpl' => 1,
  ),
),false)) {
function content_6484637c045b41_56394784 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15487653826484637c020621_81615710', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18933433546484637c032248_57963746', 'toolbar');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14469134406484637c037726_21670794', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1174732926484637c03c678_86028900', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10709003986484637c03dce5_72880886', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_15487653826484637c020621_81615710 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_15487653826484637c020621_81615710',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Users<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if (isset($_smarty_tpl->tpl_vars['userRole']->value)) {?>: <?php echo $_smarty_tpl->tpl_vars['userRole']->value->getName();
}
}
}
/* {/block 'title'} */
/* {block 'toolbar'} */
class Block_18933433546484637c032248_57963746 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'toolbar' => 
  array (
    0 => 'Block_18933433546484637c032248_57963746',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="heading-elements">
        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userCreate");?>
" class="btn btn-success btn-icon-fixed" target="_blank">
            <span class="btn-icon"><i class="fas fa-plus"></i></span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add User<?php $_block_repeat=false;
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
class Block_14469134406484637c037726_21670794 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14469134406484637c037726_21670794',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-12">
            <div class="card" id="userList">
                <?php $_smarty_tpl->_subTemplateRender("file:admin/users/user-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerPageJs'} */
class Block_1174732926484637c03c678_86028900 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_1174732926484637c03c678_86028900',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/select2/select2.full.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerPageJs'} */
/* {block 'footerCustomJs'} */
class Block_10709003986484637c03dce5_72880886 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_10709003986484637c03dce5_72880886',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $(document).on('click', '#role-filter', function (e) {
                e.preventDefault();
                var roleId = $('#roleId').val();
                var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("roleUserListView",array());?>
';
                if (roleId) {
                    $.ajax({
                        dataType: 'json',
                        //data: form.serialize(),
                        type: 'POST',
                        url: url.replace('[roleId]', roleId),
                        beforeSend: function () {
                            app.card.loading.start($("#userList"));
                        },
                        success: function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    $("#userList").html(data.html);
                                    searchRole();
                                }
                            }
                        },
                        complete: function () {
                            app.card.loading.finish($("#userList"));
                        },
                        error: function (jqXHR, exception) {
                            app.notification('error', app.getErrorMessage(jqXHR, exception));
                        }
                    });
                } else {
                    app.notification('warning', 'Please Select Role');
                }
            });
            function searchRole() {
                var roleSearchUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("roleSearch",array());?>
';
                $("#roleId").select2({
                    ajax: {
                        url: roleSearchUrl,
                        dataType: 'json',
                        type: 'POST',
                        data: function (params) {
                            return {
                                searchText: params.term
                            };
                        },
                        processResults: function (data, params) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    return {
                                        results: $.map(data, function (item) {
                                            return {
                                                text: item.name,
                                                id: item.id,
                                                term: params.term
                                            }
                                        })
                                    };
                                }
                            }
                        },
                        cache: false
                    },
                    templateResult: function (item) {
                        if (item.loading) {
                            return item.text;
                        }
                        return app.markMatch(item.text, item.term);
                    },
                    width: '260px',
                    minimumInputLength: 2
                });
            }
            searchRole();

            $(document).on('click', '.delete-user', function (e) {
                var url = $(this).attr('data-url');
                var row = $(this).closest('tr');
                $.ajax({
                    dataType: 'json',
                    type: 'POST',
                    url: url,
                    beforeSend: function () {
                        app.card.loading.start('#userList');
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
                        app.card.loading.finish('#userList');
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
                        app.card.loading.start($("#userList"));
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                $("#userList").html(data.html);
                            }
                        }
                    },
                    complete: function () {
                        app.card.loading.finish($("#userList"));
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
