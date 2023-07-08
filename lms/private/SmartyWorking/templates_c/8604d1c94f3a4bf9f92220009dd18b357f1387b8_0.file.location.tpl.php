<?php
/* Smarty version 3.1.31, created on 2023-06-09 23:28:11
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\locations\location.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6483996be0e531_07320471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8604d1c94f3a4bf9f92220009dd18b357f1387b8' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\locations\\location.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6483996be0e531_07320471 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16639467726483996bda6de3_77136552', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14703742006483996bdcedd5_83895017', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6142111626483996bdd4c68_54449296', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6500307856483996bdf6574_48191044', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8061039766483996be01f10_09232982', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_16639467726483996bda6de3_77136552 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_16639467726483996bda6de3_77136552',
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
Add Location<?php $_block_repeat=false;
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
Edit Location<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'title'} */
/* {block 'headerCss'} */
class Block_14703742006483996bdcedd5_83895017 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_14703742006483996bdcedd5_83895017',
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
class Block_6142111626483996bdd4c68_54449296 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6142111626483996bdd4c68_54449296',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="card" id="location-block">
                <div class="card-body">
                    <?php if ($_smarty_tpl->tpl_vars['action']->value == "create") {?>
                        <?php $_smarty_tpl->_assignInScope('route', $_smarty_tpl->tpl_vars['routes']->value->getRouteString("locationCreate"));
?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['location']->value)) {?>
                        <?php $_smarty_tpl->_assignInScope('route', $_smarty_tpl->tpl_vars['routes']->value->getRouteString("locationEdit",array("locationId"=>$_smarty_tpl->tpl_vars['location']->value->getId())));
?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "delete") {?>
                        <?php $_smarty_tpl->_assignInScope('route', '');
?>
                    <?php }?>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['route']->value;?>
" method="post" data-edit="<?php if ($_smarty_tpl->tpl_vars['action']->value == "create") {?>false<?php } else { ?>true<?php }?>" class="validate">
                        <div class="row">
                            <div class="col-md-6">
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
                                    <input type="text" class="form-control" autocomplete="off" name="name" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['location']->value != null) {
echo $_smarty_tpl->tpl_vars['location']->value->getName();
}?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="storeId" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Store<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                    <select class="form-control" name="storeId" id="stores">
                                        <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['location']->value !== null && $_smarty_tpl->tpl_vars['location']->value->getStore() != null) {?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['location']->value->getStoreId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['location']->value->getStore()->getName();?>
</option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row margin-top-20">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-secondary disabled pull-right save-location">
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
class Block_6500307856483996bdf6574_48191044 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_6500307856483996bdf6574_48191044',
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
class Block_8061039766483996be01f10_09232982 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_8061039766483996be01f10_09232982',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $('.validate input,.validate select,.validate textarea').tooltipster({
                trigger: 'custom',
                onlyOne: false,
                position: 'bottom',
                offsetY: -5,
                theme: 'tooltipster-kaa'
            });
            $('.validate').validate({
                errorPlacement: function (error, element) {
                    if (element != undefined) {
                        $(element).tooltipster('update', $(error).text());
                        $(element).tooltipster('show');
                    }
                },
                success: function (label, element) {
                    $(element).tooltipster('hide');
                },
                rules: {
                    storeId: {
                        required: true
                    }
                }
            });
            $(document).on('change', 'input,textarea,select', function () {
                $(this).closest('form').attr('data-changed', true);
                $('.save-location').removeClass('btn-outline-secondary  disabled').addClass('btn-outline-success');
            });
            var storeSearchUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("storeSearchPublic",array());?>
';
            $("#stores").select2({
                ajax: {
                    url: storeSearchUrl,
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
                minimumInputLength: 2
            });
            var locationEditUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("locationEdit",array());?>
';
            $('.save-location').on('click', function (e) {
                e.preventDefault();
                var form = $(this).closest('form');
                var dataEdit = form.attr('data-edit');
                var dataChanged = form.attr('data-changed');
                if (dataChanged == 'true') {
                    if ($(form).valid()) {
                        $.ajax({
                            dataType: 'json',
                            method: 'POST',
                            data: form.serialize(),
                            url: form.attr('action'),
                            beforeSend: function (data) {
                                app.card.loading.start('#location-block');
                            },
                            success: function (data) {
                                if (data.redirect) {
                                    window.location.href = data.redirect;
                                } else {
                                    if (data.error) {
                                        app.notification('error', data.error);
                                    } else {
                                        form.attr('action', locationEditUrl.replace("[genreId]", data.locationId)).attr('data-changed', false);
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
                                        $('.save-location').removeClass('btn-outline-success').addClass('btn-outline-secondary disabled');
                                        if (dataEdit == 'false') {
                                            $('.page-title h3').text('<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Edit Location<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                                            history.pushState(null, '', locationEditUrl.replace("[locationId]", data.locationId));
                                        }
                                        $(form).attr('data-edit', true);
                                    }
                                }
                            },
                            error: function (jqXHR, exception) {
                                app.notification('error', app.getErrorMessage(jqXHR, exception));
                            },
                            complete: function (data) {
                                app.card.loading.finish('#location-block');
                            }
                        });
                    } else {
                        app.notification('information', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Validation errors occurred. Please confirm the fields and submit it again.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                    }
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
