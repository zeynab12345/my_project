<?php
/* Smarty version 3.1.31, created on 2023-06-09 23:23:40
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\publishers\publisher.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6483985ca82449_14775850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '061d5e5a2da8d75d2a8443b9310e17dfe02ead8c' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\publishers\\publisher.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6483985ca82449_14775850 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9084013446483985ca47b38_06466255', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16301179476483985ca602c2_92688595', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13222466936483985ca7cc06_63875051', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_9084013446483985ca47b38_06466255 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_9084013446483985ca47b38_06466255',
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
Add Publisher<?php $_block_repeat=false;
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
Edit Publisher<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_16301179476483985ca602c2_92688595 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16301179476483985ca602c2_92688595',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="card" id="publisher-block">
                <div class="card-body">
                    <?php if ($_smarty_tpl->tpl_vars['action']->value == "create") {?>
                        <?php $_smarty_tpl->_assignInScope('route', $_smarty_tpl->tpl_vars['routes']->value->getRouteString("publisherCreate"));
?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['publisher']->value)) {?>
                        <?php $_smarty_tpl->_assignInScope('route', $_smarty_tpl->tpl_vars['routes']->value->getRouteString("publisherEdit",array("publisherId"=>$_smarty_tpl->tpl_vars['publisher']->value->getId())));
?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "delete") {?>
                        <?php $_smarty_tpl->_assignInScope('route', '');
?>
                    <?php }?>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['route']->value;?>
" method="post" data-edit="<?php if ($_smarty_tpl->tpl_vars['action']->value == "create") {?>false<?php } else { ?>true<?php }?>">
                        <div class="block-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Title<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                        <input type="text" class="form-control" autocomplete="off" name="name" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['publisher']->value->getName();
}?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row margin-top-20">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-secondary disabled pull-right save-publisher">
                                            <span class="btn-icon"><i class="far fa-save"></i></span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
/* {block 'footerCustomJs'} */
class Block_13222466936483985ca7cc06_63875051 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_13222466936483985ca7cc06_63875051',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $(document).on('change', 'input,textarea,select', function () {
                $(this).closest('form').attr('data-changed', true);
                $('.save-publisher').removeClass('btn-outline-secondary disabled').addClass('btn-outline-success');
            });
            var publisherEditUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("publisherEdit",array());?>
';
            $('.save-publisher').on('click', function (e) {
                e.preventDefault();
                var form = $(this).closest('form');
                var dataEdit = form.attr('data-edit');
                var dataChanged = form.attr('data-changed');
                if (dataChanged == 'true') {
                    $.ajax({
                        dataType: 'json',
                        method: 'POST',
                        data: form.serialize(),
                        url: form.attr('action'),
                        beforeSend: function (data) {
                            app.card.loading.start('#publisher-block');
                        },
                        success: function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    form.attr('action', publisherEditUrl.replace("[publisherId]", data.publisherId)).attr('data-changed', false);
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
                                    $('.save-publisher').removeClass('btn-outline-success').addClass('btn-outline-secondary disabled');
                                    if (dataEdit == 'false') {
                                        $('.page-title h3').text('<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Edit Publisher<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                                        history.pushState(null, '', publisherEditUrl.replace("[publisherId]", data.publisherId));
                                    }
                                    $(form).attr('data-edit', true);
                                }
                            }
                        },
                        error: function (jqXHR, exception) {
                            app.notification('error', app.getErrorMessage(jqXHR, exception));
                        },
                        complete: function (data) {
                            app.card.loading.finish('#publisher-block');
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
