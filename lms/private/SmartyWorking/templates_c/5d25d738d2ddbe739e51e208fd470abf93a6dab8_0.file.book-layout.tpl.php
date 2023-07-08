<?php
/* Smarty version 3.1.31, created on 2023-06-10 13:15:41
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\books\book-layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64845b5de0e0b8_43496142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d25d738d2ddbe739e51e208fd470abf93a6dab8' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\books\\book-layout.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64845b5de0e0b8_43496142 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
if (!is_callable('smarty_function_unset')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\function.unset.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52292877464845b5dac41a7_88648353', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200006911564845b5dad8150_34271971', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209130184364845b5dae6517_97686123', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194299608964845b5ddf3271_31662393', 'footerPageJs');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10782519064845b5ddf8e08_73787391', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_52292877464845b5dac41a7_88648353 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_52292877464845b5dac41a7_88648353',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book Layout<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'headerCss'} */
class Block_200006911564845b5dad8150_34271971 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_200006911564845b5dad8150_34271971',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/jquery/jquery-ui.min.css" rel="stylesheet"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/gridstack/gridstack.css" rel="stylesheet"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/gridstack/gridstack-extra.min.css" rel="stylesheet"/>
<?php
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_209130184364845b5dae6517_97686123 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_209130184364845b5dae6517_97686123',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['isDemoMode']->value === true) {?>
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-info text-center">In the demo version you can't change book layout.</div>
            </div>
        </div>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['bookLayoutSettings']->value) && $_smarty_tpl->tpl_vars['bookLayoutSettings']->value->getLayoutContainers() != null) {?>
        <?php $_smarty_tpl->_assignInScope('tempBookVisibleFieldList', $_smarty_tpl->tpl_vars['bookVisibleFieldList']->value);
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bookLayoutSettings']->value->getLayoutContainers(), 'container', false, NULL, 'container', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['container']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['container']->value->getElements() != null) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['container']->value->getElements(), 'element', false, NULL, 'element', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
?>
                    <?php echo smarty_function_unset(array('array'=>'tempBookVisibleFieldList','index'=>$_smarty_tpl->tpl_vars['element']->value->getName()),$_smarty_tpl);?>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    <?php }?>
    <div class="card p-l-10 p-t-30 p-b-10 p-r-10">
        <div class="book-layout-additional-elements">
            <span class="title"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Not Used Elements<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tempBookVisibleFieldList']->value, 'title', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['title']->value) {
?>
                <div class="grid-stack-item" data-gs-min-width="2" data-gs-max-height="1" data-gs-x="0" data-gs-y="0" data-gs-width="4" data-gs-height="1" data-gs-title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" data-gs-name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                    <div class="grid-stack-item-content form-element">
                        <div class="form-element-header"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>
                        <button class="form-element-remove"><i class="ti-trash"></i></button>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </div>
    </div>
    <?php if (isset($_smarty_tpl->tpl_vars['bookLayoutSettings']->value) && $_smarty_tpl->tpl_vars['bookLayoutSettings']->value->getLayoutContainers() != null) {?>
        <div class="book-layout">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="grid-stack grid-stack-12 content-block">
                            <?php if ($_smarty_tpl->tpl_vars['bookLayoutSettings']->value->getContainer('content')->getElements() != null) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bookLayoutSettings']->value->getContainer('content')->getElements(), 'element', false, NULL, 'element', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
?>
                                    <div class="grid-stack-item" data-gs-min-width="3" data-gs-max-height="1" data-gs-x="<?php echo $_smarty_tpl->tpl_vars['element']->value->getX();?>
" data-gs-y="<?php echo $_smarty_tpl->tpl_vars['element']->value->getY();?>
" data-gs-width="<?php echo $_smarty_tpl->tpl_vars['element']->value->getWidth();?>
" data-gs-height="<?php echo $_smarty_tpl->tpl_vars['element']->value->getHeight();?>
" data-gs-title="<?php echo $_smarty_tpl->tpl_vars['element']->value->getTitle();?>
" data-gs-name="<?php echo $_smarty_tpl->tpl_vars['element']->value->getName();?>
">
                                        <div class="grid-stack-item-content form-element">
                                            <div class="form-element-header">
                                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['element']->value->getTitle();
$_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                            </div>
                                            <button class="form-element-remove"><i class="ti-trash"></i></button>
                                        </div>
                                    </div>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            <?php }?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="grid-stack grid-stack-4 sidebar-block">
                            <?php if ($_smarty_tpl->tpl_vars['bookLayoutSettings']->value->getContainer('sidebar')->getElements() != null) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bookLayoutSettings']->value->getContainer('sidebar')->getElements(), 'element', false, NULL, 'element', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
?>
                                    <div class="grid-stack-item" data-gs-min-width="2" data-gs-max-height="1" data-gs-x="<?php echo $_smarty_tpl->tpl_vars['element']->value->getX();?>
" data-gs-y="<?php echo $_smarty_tpl->tpl_vars['element']->value->getY();?>
" data-gs-width="<?php echo $_smarty_tpl->tpl_vars['element']->value->getWidth();?>
" data-gs-height="<?php echo $_smarty_tpl->tpl_vars['element']->value->getHeight();?>
" data-gs-title="<?php echo $_smarty_tpl->tpl_vars['element']->value->getTitle();?>
" data-gs-name="<?php echo $_smarty_tpl->tpl_vars['element']->value->getName();?>
">
                                        <div class="grid-stack-item-content form-element">
                                            <div class="form-element-header">
                                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['element']->value->getTitle();
$_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                            </div>
                                            <button class="form-element-remove"><i class="ti-trash"></i></button>
                                        </div>
                                    </div>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>

    <div class="row">
        <div class="col-lg-12">
            <button class="btn btn-primary m-t-20 pull-right" id="save-layout"<?php if ($_smarty_tpl->tpl_vars['isDemoMode']->value === true) {?> disabled<?php }?>>
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

<?php
}
}
/* {/block 'content'} */
/* {block 'footerPageJs'} */
class Block_194299608964845b5ddf3271_31662393 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_194299608964845b5ddf3271_31662393',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/jquery/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/lodash/lodash.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/gridstack/gridstack.all.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/gridstack/gridstack.jQueryUI.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerPageJs'} */
/* {block 'footerCustomJs'} */
class Block_10782519064845b5ddf8e08_73787391 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_10782519064845b5ddf8e08_73787391',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            var options = {
                width: 12,
                float: false,
                cellHeight: 80,
                verticalMargin: 0,
                acceptWidgets: '.grid-stack-item',
                resizable: {
                    handles: 'se, sw'
                }
            };
            $('.content-block').gridstack(options);
            $('.sidebar-block').gridstack(_.defaults({
                float: false,
                width: 4
            }, options));

            $(document).on('click', '.form-element-remove', function (e) {
                e.preventDefault();
                var item = $(this).closest('.grid-stack-item');
                var itemClone = $(this).closest('.grid-stack-item').clone();
                $('.book-layout-additional-elements').append(itemClone);
                $(item).remove();
                $('.book-layout-additional-elements .grid-stack-item').draggable({
                    refreshPositions: true,
                    revert: 'invalid',
                    handle: '.grid-stack-item-content',
                    scroll: false,
                    appendTo: 'body'
                });
            });

            $('.book-layout-additional-elements .grid-stack-item').draggable({
                refreshPositions: true,
                revert: 'invalid',
                handle: '.grid-stack-item-content',
                scroll: false,
                appendTo: 'body'
            });

            function getGridLayout(searchBlock) {
                var items = [];
                $(searchBlock).each(function () {
                    var $this = $(this);
                    items.push({
                        x: $this.attr('data-gs-x'),
                        y: $this.attr('data-gs-y'),
                        width: $this.attr('data-gs-width'),
                        height: $this.attr('data-gs-height'),
                        title: $this.attr('data-gs-title'),
                        name: $this.attr('data-gs-name')
                    });
                });

                return JSON.stringify(items);
            }
            <?php if ($_smarty_tpl->tpl_vars['isDemoMode']->value === false) {?>
            var bookLayoutUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookLayout",array());?>
';
            $('#save-layout').on('click', function (e) {
                e.preventDefault();
                console.log();
                var contentBlock = getGridLayout($('.content-block .grid-stack-item.ui-draggable'));
                var sidebarBlock = getGridLayout($('.sidebar-block .grid-stack-item.ui-draggable'));
                $.ajax({
                    dataType: 'json',
                    method: 'POST',
                    data: {
                        content: contentBlock,
                        sidebar: sidebarBlock
                    },
                    url: bookLayoutUrl,
                    beforeSend: function (data) {
                        app.card.loading.start('.card');
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                app.notification('success', data.success);
                            }
                        }
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    },
                    complete: function (data) {
                        app.card.loading.finish('.card');
                    }
                });
            });
            <?php }?>
        });
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'footerCustomJs'} */
}
