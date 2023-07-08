<?php
/* Smarty version 3.1.31, created on 2023-06-10 13:16:51
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\shortcode\staticShortCode.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64845ba38c6673_58073602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '635b96664977b4d70d1e4e107496d6f82029928a' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\shortcode\\staticShortCode.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64845ba38c6673_58073602 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164730890364845ba37150e7_61344333', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83675456664845ba3720259_49423032', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110867609364845ba372c441_24431308', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37564823264845ba38bebd2_93837798', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149036375464845ba38c36e9_83410979', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_164730890364845ba37150e7_61344333 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_164730890364845ba37150e7_61344333',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Static ShortCodes<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'headerCss'} */
class Block_83675456664845ba3720259_49423032 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_83675456664845ba3720259_49423032',
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
class Block_110867609364845ba372c441_24431308 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_110867609364845ba372c441_24431308',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <?php $_smarty_tpl->_assignInScope('route', $_smarty_tpl->tpl_vars['routes']->value->getRouteString("staticShortCodeListView"));
?>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['route']->value;?>
" method="post" class="validate" id="form">
                        <div class="shortcode-container">
                            <?php if (isset($_smarty_tpl->tpl_vars['shortCodes']->value) && $_smarty_tpl->tpl_vars['shortCodes']->value != null && !empty($_smarty_tpl->tpl_vars['shortCodes']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shortCodes']->value, 'shortCode', false, NULL, 'shortCode', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['shortCode']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_shortCode']->value['index']++;
?>
                                    <div class="shortcode">
                                        <div class="input-group">
                                            <input class="form-control code-field" type="text" name="code[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_shortCode']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_shortCode']->value['index'] : null);?>
]" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Code Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" value="<?php echo $_smarty_tpl->tpl_vars['shortCode']->value->getCode();?>
">
                                            <div class="input-group-btn">
                                                <button class="btn btn-outline-info" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                                <ul class="dropdown-menu delete-dropdown dropdown-menu-right p-2">
                                                    <li class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Do you really want to delete?<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</li>
                                                    <li class="divider"></li>
                                                    <li class="text-center">
                                                        <button class="btn btn-outline-danger delete-shortcode">
                                                            <span class="btn-icon"><i class="far fa-trash-alt"></i></span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Delete<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <textarea name="code" cols="30" rows="5" id="code<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_shortCode']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_shortCode']->value['index'] : null);?>
" class="form-control editor-field"><?php echo $_smarty_tpl->tpl_vars['shortCode']->value->getValue();?>
</textarea>
                                        <textarea name="value[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_shortCode']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_shortCode']->value['index'] : null);?>
]" class="form-control value-field d-none"><?php echo $_smarty_tpl->tpl_vars['shortCode']->value->getValue();?>
</textarea>
                                    </div>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            <?php }?>
                        </div>
                        <a href="#" class="btn btn-outline-info mt-3 pull-left" id="add-shortcode"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add ShortCode<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                        <button type="submit" class="btn btn-success pull-right mt-3">
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
                    </form>
                    <div class="shortcode copy-template">
                        <div class="input-group">
                            <input class="form-control code-field" type="text" name="code[]" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Code Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                            <div class="input-group-btn">
                                <button class="btn btn-outline-info" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                                <ul class="dropdown-menu delete-dropdown dropdown-menu-right p-2">
                                    <li class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Do you really want to delete?<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</li>
                                    <li class="divider"></li>
                                    <li class="text-center">
                                        <button class="btn btn-outline-danger delete-shortcode">
                                            <span class="btn-icon"><i class="far fa-trash-alt"></i></span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Delete<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <textarea name="code" cols="30" rows="5" id="" class="form-control editor-field"></textarea>
                        <textarea name="value[]" class="form-control value-field d-none"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerPageJs'} */
class Block_37564823264845ba38bebd2_93837798 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_37564823264845ba38bebd2_93837798',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/ace/ace.js" charset="utf-8"><?php echo '</script'; ?>
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
class Block_149036375464845ba38c36e9_83410979 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_149036375464845ba38c36e9_83410979',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            function editor(element) {
                var code = $(element).find('.editor-field');
                var codeValue = $(element).find('.value-field');
                var editor = ace.edit(code.attr('id'));
                editor.setTheme("ace/theme/monokai");
                editor.session.setMode("ace/mode/smarty");
                editor.setOptions({
                    maxLines: 15,
                    showPrintMargin: false,
                    fontSize: '14px'
                });
                editor.getSession().on('change', function(){
                    codeValue.val(editor.getSession().getValue());
                });
            }

            $('.shortcode:not(.copy-template)').each(function (index, element) {
                editor(element);
            });

            $('#add-shortcode').on('click', function (e) {
                e.preventDefault();
                var container = $('.shortcode-container'),
                        template = $('.copy-template').clone(),
                        count = 0;
                container.append(template.removeClass('copy-template'));
                $('.shortcode:not(.copy-template)').each(function (index, element) {
                    $(element).find('.editor-field').attr('id', 'code' + count);
                    $(element).find('.code-field').attr('name', 'code[' + count + ']');
                    $(element).find('.value-field').attr('name', 'value[' + count + ']');
                    count++;
                });
                editor(template);
            });

            $(document).on('click', '.delete-shortcode', function (e) {
                e.preventDefault();
                $(this).closest('.shortcode').remove();
            });
            $('#form').submit(function() {
                var count = 0;
                $('.shortcode:not(.copy-template)').each(function (index, element) {
                    $(element).find('.code-field').attr('name', 'code[' + count + ']');
                    $(element).find('.value-field').attr('name', 'value[' + count + ']');
                    count++;
                });
                return true;
            });
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerCustomJs'} */
}
