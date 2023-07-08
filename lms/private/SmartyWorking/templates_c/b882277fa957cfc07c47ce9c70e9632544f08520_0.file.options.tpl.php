<?php
/* Smarty version 3.1.31, created on 2023-06-09 23:22:54
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\options.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6483982e1941b6_19564499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b882277fa957cfc07c47ce9c70e9632544f08520' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\options.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6483982e1941b6_19564499 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11445995806483982e13b8a1_27951865', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11280309616483982e144836_24282015', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8070720456483982e149f60_23887024', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2203906626483982e18b0b1_03285805', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19524159466483982e18d090_90982663', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_11445995806483982e13b8a1_27951865 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11445995806483982e13b8a1_27951865',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Settings<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'headerCss'} */
class Block_11280309616483982e144836_24282015 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_11280309616483982e144836_24282015',
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
class Block_8070720456483982e149f60_23887024 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8070720456483982e149f60_23887024',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body p-0">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("optionListView");?>
" class="" id="options-form" method="post">
                        <ul class="nav nav-tabs customtab" role="tablist">
                            <?php if (isset($_smarty_tpl->tpl_vars['options']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options']->value, 'option', false, 'key', 'group', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_group']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_group']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_group']->value['index'];
?>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_group']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_group']->value['first'] : null)) {?>active<?php }?>" data-toggle="tab" href="#<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" role="tab">
                                            <?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionGroup(((string)$_smarty_tpl->tpl_vars['key']->value))->getTitle();?>

                                        </a>
                                    </li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            <?php }?>
                        </ul>
                        <div class="tab-content">
                            <?php if (isset($_smarty_tpl->tpl_vars['options']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options']->value, 'option', false, 'key', 'group', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_group']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_group']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_group']->value['index'];
?>
                                    <div class="tab-pane <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_group']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_group']->value['first'] : null)) {?>active<?php }?> p-20" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" role="tabpanel">
                                        <div class="row">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="<?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->getTitle();
$_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <?php if ($_smarty_tpl->tpl_vars['item']->value->getDescription() != null) {?>
                                                            <i class="icon-info" data-toggle="tooltip" data-html="true" data-placement="top" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->getDescription();
$_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
"></i><?php }?>
                                                        </label>

                                                        <?php if ($_smarty_tpl->tpl_vars['item']->value->getControl() == "button") {?>
                                                            <br>
                                                            <button class="btn btn-outline-primary" data-value="<?php echo $_smarty_tpl->tpl_vars['item']->value->getValue();?>
" id="<?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->getTitle();
$_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</button>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['item']->value->getControl() == "input") {?>
                                                            <input type="text" class="form-control" autocomplete="off" name="<?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->getValue();?>
">
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['item']->value->getControl() == "checkbox") {?>
                                                            <br>
                                                            <label class="switch switch-sm">
                                                                <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->getValue();?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value->getValue()) {?>checked<?php }?>>
                                                            </label>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['item']->value->getControl() == "select" && $_smarty_tpl->tpl_vars['item']->value->getListValues() != null) {?>
                                                            <select class="form-control select-picker" name="<?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
">
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value->getListValues(), 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if (strcmp($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['item']->value->getValue()) === 0) {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['value']->value;
$_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                                            </select>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['item']->value->getControl() == "file") {?>
                                                            <div class="card fileinput <?php if ($_smarty_tpl->tpl_vars['item']->value->getValue() != null) {?>fileinput-exists<?php } else { ?>fileinput-new<?php }?>" style="width: 100%;" data-provides="fileinput">
                                                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 100%; height: 200px;">
                                                                    <?php if ($_smarty_tpl->tpl_vars['item']->value->getValue() != null) {?>
                                                                        <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->getValue();?>
" alt="" class="img-fluid">
                                                                    <?php }?>
                                                                </div>
                                                                <div>
                                                                    <a href="#" class="btn btn-sm btn-outline-secondary mr-1 fileinput-exists delete-image" data-dismiss="fileinput"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Remove<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                                                                    <span class="btn btn-sm btn-outline-secondary mr-1 btn-file file-input">
                                                                    <span class="fileinput-new"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Select image<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                                                                        <span class="fileinput-exists"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Change<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                                                                        <input type="file" name="file" value="<?php if ($_smarty_tpl->tpl_vars['item']->value->getValue() != null) {
echo $_smarty_tpl->tpl_vars['item']->value->getValue();
}?>" class="disabledIt">
                                                                        <input class="file-path" name="<?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
" type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['item']->value->getValue() != null) {
echo $_smarty_tpl->tpl_vars['item']->value->getValue();
}?>" data-default="<?php echo $_smarty_tpl->tpl_vars['item']->value->getDefaultValue();?>
">
                                                                    </span>
                                                                    <a href="#" class="btn btn-sm btn-outline-secondary uploadImage fileinput-exists">
                                                                        <i class="fa fa-upload"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Upload<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                                                    </a>
                                                                </div>
                                                            </div>
                                                        <?php }?>
                                                    </div>
                                                </div>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                        </div>
                                    </div>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            <?php }?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success pull-right mb-3 mr-3">
                                <span class="btn-icon"><i class="far fa-save"></i></span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Save Options<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="logs" role="dialog" aria-labelledby="logsLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body console" id="console">
                    <div class="mCustomScrollBox" id="consoleMessages"></div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerPageJs'} */
class Block_2203906626483982e18b0b1_03285805 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_2203906626483982e18b0b1_03285805',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/jasnyupload/fileinput.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/jquery-validate/jquery.validate.js"><?php echo '</script'; ?>
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
class Block_19524159466483982e18d090_90982663 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_19524159466483982e18d090_90982663',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        var genSiteMapUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("sitemapGenerate",array());?>
';
        $('#generateSiteMap').on('click', function (e) {
            e.preventDefault();
            $('#logs').modal('show');
            $('consoleMessages').html('');
            var xhr = new XMLHttpRequest();
            xhr.addEventListener("progress", function (evt) {
                var lines = evt.currentTarget.response.split("\n");
                if (lines.length)
                    var progress = lines[lines.length - 1];
                else
                    var progress = 0;
                $(".console .mCSB_container").html(progress);
                $("#console").mCustomScrollbar("scrollTo",'bottom');
            }, false);
            xhr.open('POST', genSiteMapUrl, true);
            xhr.send();
        });
        $('#logs').on('show.bs.modal', function (e) {
            $("#console").mCustomScrollbar({
                axis: "y",
                autoHideScrollbar: true,
                scrollInertia: 0,
                advanced: {
                    autoScrollOnFocus: false,
                    updateOnContentResize: true,
                    autoUpdateTimeout: 60
                }
            });
        });

        var fileUploadUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("siteViewOptionFileUpload",array());?>
';
        var fileDeleteUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("siteViewOptionFileDelete",array());?>
';
        $('.uploadImage').on('click', function (e) {
            e.preventDefault();
            var imageData;
            var container = $(this).closest('.fileinput');
            imageData = new FormData();
            var image = $(container).find('input:file');
            var imageValue = $(container).find('input:file').val();
            var filePath = $(container).find('.file-path');
            var filePathValue = $(filePath).val();
            var optionName = $(filePath).attr('name');
            imageData.append('file', $(image)[0].files[0], imageValue);
            if (optionName) {
                if(filePathValue) {
                    imageData.append('path', filePathValue);
                }
                imageData.append('optionName', optionName);
            }
            $.ajax({
                dataType: 'json',
                method: 'POST',
                processData: false,
                contentType: false,
                data: imageData,
                url: fileUploadUrl,
                beforeSend: function (data) {
                    app.card.loading.start(container);
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            $(filePath).val(data.path);
                        }
                    }
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                },
                complete: function (data) {
                    app.card.loading.finish(container);
                }
            });

        });
        $('#options-form').submit(function (e) {
            $('.file-path').each(function (index, element) {
                var filePathValue = $(element).val();
                var filePathDefaultValue = $(element).attr('data-default');

                function isEmpty(str) {
                    return (!str || 0 === str.length);
                }

                if (isEmpty(filePathValue)) {
                    $(element).val(filePathDefaultValue);
                }
            });
            return true;
        });
        $(document).on('clear.bs.fileinput', '.fileinput', function () {
            var filePath = $(this).find('.file-path');
            var filePathValue = filePath.val();
            var filePathDefaultValue = filePath.attr('data-default');
            if (filePathValue !== filePathDefaultValue) {
                if (filePathValue != undefined && filePathValue != null) {
                    $.ajax({
                        dataType: 'json',
                        method: 'POST',
                        data: {
                            path: filePathValue
                        },
                        url: fileDeleteUrl,
                        success: function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    $(filePath).val('');
                                }
                            }
                        },
                        error: function (jqXHR, exception) {
                            app.notification('error', app.getErrorMessage(jqXHR, exception));
                        }
                    });
                } else {
                    $(filePath).val('');
                }
            }
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerCustomJs'} */
}
