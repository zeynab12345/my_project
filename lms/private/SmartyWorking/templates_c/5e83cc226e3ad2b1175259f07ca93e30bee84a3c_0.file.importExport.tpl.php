<?php
/* Smarty version 3.1.31, created on 2023-06-09 23:52:12
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\csv\importExport.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64839f0c9a3ce9_07726050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e83cc226e3ad2b1175259f07ca93e30bee84a3c' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\csv\\importExport.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64839f0c9a3ce9_07726050 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2730022864839f0c959360_85344706', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87964596364839f0c960d16_47727922', 'toolbar');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63308624664839f0c961e15_03176008', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84597182864839f0c966c95_26818713', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214240216864839f0c974a89_72936898', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106104091364839f0c9766e0_24371176', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_2730022864839f0c959360_85344706 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2730022864839f0c959360_85344706',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Import & Export CSV<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'toolbar'} */
class Block_87964596364839f0c960d16_47727922 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'toolbar' => 
  array (
    0 => 'Block_87964596364839f0c960d16_47727922',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'toolbar'} */
/* {block 'headerCss'} */
class Block_63308624664839f0c961e15_03176008 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_63308624664839f0c961e15_03176008',
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
class Block_84597182864839f0c966c95_26818713 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_84597182864839f0c966c95_26818713',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <form enctype="multipart/form-data" action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("importCSV");?>
" method="POST" class="card import-csv">
                <table class="table">
                    <thead>
                        <tr>
                            <th style=""><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
CSV File<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                <i class="fa fa-exclamation-circle ml-2" aria-hidden="true" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
It is recommended to make imports into a clean database to avoid duplication of information (in particular authors, genres, etc.)<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
"></i>
                            </th>
                            <th style=""><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Column Delimiter<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                            <th style=""><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Multiple Values Delimiter<?php $_block_repeat=false;
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
                                <label class="custom-file d-block">
                                    <input type="file" class="custom-file-input" id="files" name="file">
                                    <span class="custom-file-label"></span>
                                </label>
                            </td>
                            <td>
                                <input name="columnDelimiter" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Default: ,<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" id="columnDelimiter" class="form-control" type="text" value="">
                            </td>
                            <td>
                                <input name="multipleValuesDelimiter" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Default: |<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" id="multipleValuesDelimiter" class="form-control" type="text" value="">
                            </td>
                            <td class='text-center'>
                                <a href="#" class="btn btn-outline-success" id="import">
                                    <span class="btn-icon"><i class="far fa-file-excel"></i></span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Import<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="card-body">
                    <div class="row" id="csv-config"></div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("exportCSV");?>
" method="POST" class="card export-csv">
                <table class="table">
                    <thead>
                        <tr>
                            <th style=""><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Column Delimiter<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                            <th style=""><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Multiple Values Delimiter<?php $_block_repeat=false;
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
                                <input name="columnDelimiter" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Default: ,<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" class="form-control" type="text" value="">
                            </td>
                            <td>
                                <input name="multipleValuesDelimiter" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Default: |<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" class="form-control" type="text" value="">
                            </td>
                            <td class="text-center">
                                <a href="#" class="btn btn-outline-success" id="export">
                                    <span class="btn-icon"><i class="far fa-file-excel"></i></span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Export<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
    <div class="modal fade" id="logs" role="dialog" data-backdrop="static" aria-labelledby="logsLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
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
class Block_214240216864839f0c974a89_72936898 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_214240216864839f0c974a89_72936898',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/bootstrap-select/bootstrap-select.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/papaparse/papaparse.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerPageJs'} */
/* {block 'footerCustomJs'} */
class Block_106104091364839f0c9766e0_24371176 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_106104091364839f0c9766e0_24371176',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        function compare(a, b) {
            if (a.priority < b.priority)
                return -1;
            if (a.priority > b.priority)
                return 1;
            return 0;
        }

        $("input[type=file]").change(function () {
            var fieldVal = $(this).val();
            if (fieldVal != undefined || fieldVal != "") {
                fieldVal = fieldVal.substring(12);
                $(this).next(".custom-file-label").html(fieldVal);
            }
        });
        $('#files').on('change', function (e) {
            e.preventDefault();
            $('#files').parse({
                config: {
                    preview: 1,
                    delimiter: $('#columnDelimiter').val(),
                    complete: function (results, file) {
                        var a1 = [
                            {
                                regex: /(metatit|meta_tit|meta tit)/i,
                                title: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Meta Title<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
',
                                value: 'Books.metaTitle',
                                isMapped: false,
                                priority: 25,
                                csvColumn: null
                            },
                            {
                                regex: /(title|book_name|bookname)/i,
                                title: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Title<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
',
                                value: 'Books.title',
                                isMapped: false,
                                priority: 1,
                                csvColumn: null
                            },
                            {
                                regex: /(subtitle|sub_title|sub-title|sub title)/i,
                                title: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Subtitle<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
',
                                value: 'Books.subtitle',
                                isMapped: false,
                                priority: 2,
                                csvColumn: null
                            },
                            {
                                regex: /(bookid|book_id|serial|bookSN)/i,
                                title: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book ID<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
',
                                value: 'Books.bookSN',
                                isMapped: false,
                                priority: 3,
                                csvColumn: null
                            },
                            {
                                regex: /(isbn10|isbn_10|isbn-10|isbn 10)/i,
                                title: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN 10<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
',
                                value: 'Books.ISBN10',
                                isMapped: false,
                                priority: 5,
                                csvColumn: null
                            },
                            {
                                regex: /(isbn13|isbn_13|isbn-13|isbn 13|isbn)/i,
                                title: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN 13<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
',
                                value: 'Books.ISBN13',
                                isMapped: false,
                                priority: 4,
                                csvColumn: null
                            },
                            {
                                regex: /(cover|image)/i,
                                title: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Cover<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
',
                                value: 'Images.path',
                                isMapped: false,
                                priority: 6,
                                csvColumn: null
                            },
                            {
                                regex: /(publisher)/i,
                                title: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Publisher<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
',
                                value: 'Publishers.name',
                                isMapped: false,
                                priority: 7,
                                csvColumn: null
                            },
                            {
                                regex: /(series)/i,
                                title: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Series<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
',
                                value: 'Series.name',
                                isMapped: false,
                                priority: 8,
                                csvColumn: null
                            },
                            {
                                regex: /(author)/i,
                                title: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Authors<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
',
                                value: 'Authors.lastName',
                                isMapped: false,
                                priority: 9,
                                csvColumn: null
                            },
                            {
                                regex: /(genre)/i,
                                title: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Genres<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
',
                                value: 'Genres.name',
                                isMapped: false,
                                priority: 10,
                                csvColumn: null
                            },
                            {
                                regex: /(store)/i,
                                title: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Stores<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
',
                                value: 'Stores.name',
                                isMapped: false,
                                priority: 11,
                                csvColumn: null
                            },
                            {
                                regex: /(loc)/i,
                                title: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Locations<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
',
                                value: 'Locations.name',
                                isMapped: false,
                                priority: 12,
                                csvColumn: null
                            },
                            {
                                regex: /(edit)/i,
                                title: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Edition<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
',
                                value: 'Books.edition',
                                isMapped: false,
                                priority: 13,
                                csvColumn: null
                            },
                            {
                                regex: /(year|date)/i,
                                title: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Published Year<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
',
                                value: 'Books.publishingYear',
                                isMapped: false,
                                priority: 14,
                                csvColumn: null
                            },
                            {
                                regex: /(page)/i,
                                title: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Pages<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
',
                                value: 'Books.pages',
                                isMapped: false,
                                priority: 15,
                                csvColumn: null
                            },
                            {
                                regex: /(type)/i,
                                title: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Type<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
',
                                value: 'Books.type',
                                isMapped: false,
                                priority: 16,
                                csvColumn: null
                            },
                            {
                                regex: /(phys|form)/i,
                                title: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Physical Form<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
',
                                value: 'Books.physicalForm',
                                isMapped: false,
                                priority: 17,
                                csvColumn: null
                            },
                            {
                                regex: /(size)/i,
                                title: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Size<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
',
                                value: 'Books.size',
                                isMapped: false,
                                priority: 18,
                                csvColumn: null
                            },
                            {
                                regex: /(bind)/i,
                                title: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Binding<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
',
                                value: 'Books.binding',
                                isMapped: false,
                                priority: 19,
                                csvColumn: null
                            },
                            {
                                regex: /(quant)/i,
                                title: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Quantity<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
',
                                value: 'Books.quantity',
                                isMapped: false,
                                priority: 20,
                                csvColumn: null
                            },
                            {
                                regex: /(price)/i,
                                title: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Price<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
',
                                value: 'Books.price',
                                isMapped: false,
                                priority: 21,
                                csvColumn: null
                            },
                            {
                                regex: /(lang)/i,
                                title: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Language<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
',
                                value: 'Books.language',
                                isMapped: false,
                                priority: 22,
                                csvColumn: null
                            },
                            {
                                regex: /(metadesc|meta_desc|meta desc)/i,
                                title: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Meta Description<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
',
                                value: 'Books.metaDescription',
                                isMapped: false,
                                priority: 27,
                                csvColumn: null
                            },
                            {
                                regex: /(desc)/i,
                                title: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Description<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
',
                                value: 'Books.description',
                                isMapped: false,
                                priority: 23,
                                csvColumn: null
                            },
                            {
                                regex: /(note)/i,
                                title: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Notes<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
',
                                value: 'Books.notes',
                                isMapped: false,
                                priority: 24,
                                csvColumn: null
                            },
                            {
                                regex: /(metakey|meta_key|meta key)/i,
                                title: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Meta Keywords<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
',
                                value: 'Books.metaKeywords',
                                isMapped: false,
                                priority: 26,
                                csvColumn: null
                            }
                        ];
                        if (file.type == 'application/vnd.ms-excel' || file.type == 'text/plain' || file.type == 'text/x-csv' || file.type == 'application/csv' || file.type == 'application/x-csv' || file.type == 'text/csv' || file.type == 'text/comma-separated-values' || file.type == 'text/x-comma-separated-values' || file.type == 'text/tab-separated-values') {
                            var markup = "";
                            var index;
                            for (var i = 0; i < results.data[0].length; i++) {
                                //console.log(results.data[0][i]);
                                for (index = 0; index < a1.length; ++index) {
                                    if (a1[index].isMapped == false) {
                                        if (a1[index].regex.test(results.data[0][i])) {
                                            a1[index].csvColumn = results.data[0][i];
                                            a1[index].isMapped = true;
                                            break;
                                        }
                                    }
                                }
                            }
                            a1.sort(compare);
                            for (i = 0; i < results.data[0].length; i++) {
                                markup += "<div class='col-lg-2 col-md-3 mb-3  card text-center'>";
                                markup += "<div class='card-header csv-header'>" + results.data[0][i] + "</div>";
                                markup += "<input type='hidden' name='keys[" + i + "]' value='" + results.data[0][i] + "'>";
                                markup += "<div class='card-body type'>";
                                markup += "<select name='values[" + i + "]' class='form-control select-picker'>";
                                markup += "<option value=''></option>";

                                for (index = 0; index < a1.length; ++index) {
                                    var isSelected = (a1[index].csvColumn == results.data[0][i]);
                                    markup += "<option value='" + a1[index].value + "'" + (isSelected ? " selected" : "") + ">" + a1[index].title + "</option>";
                                }
                                <?php if ($_smarty_tpl->tpl_vars['customFields']->value != null) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customFields']->value, 'customField', false, NULL, 'customField', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['customField']->value) {
?>
                                markup += "<option value='Books.<?php echo $_smarty_tpl->tpl_vars['customField']->value->getName();?>
'><?php echo $_smarty_tpl->tpl_vars['customField']->value->getTitle();?>
</option>";
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                <?php }?>
                                markup += "</select>";
                                markup += "</div>";
                                markup += "</div>";
                            }
                            $('#csv-config').empty().append(markup);
                            app.bootstrap_select();
                        } else {
                            app.notification('error', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
CSV files are accepted only<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                        }
                    }
                },
                before: function (file, inputElem) {
                    /*for (var index = 0; index < a1.length; ++index) {
                     a1[index].isMapped = false;
                     }*/
                },
                complete: function () {
                    console.log("Done with all files.");
                }
            });
        });
        var importCSVUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("importCSV",array());?>
';
        $(document).on('click', '#import', function (e) {
            e.preventDefault();
            var formData = new FormData();
            var file = $('input:file');
            var fileValue = $(file).val();
            if ($(file)[0].files[0].type == 'application/vnd.ms-excel' || $(file)[0].files[0].type == 'text/plain' || $(file)[0].files[0].type == 'text/x-csv' || $(file)[0].files[0].type == 'application/csv' || $(file)[0].files[0].type == 'application/x-csv' || $(file)[0].files[0].type == 'text/csv' || $(file)[0].files[0].type == 'text/comma-separated-values' || $(file)[0].files[0].type == 'text/x-comma-separated-values' || $(file)[0].files[0].type == 'text/tab-separated-values') {
                if ($(file)[0].files[0] != null) {
                    formData.append('file', $(file)[0].files[0], fileValue);
                    $("#csv-config input, #csv-config select").each(function (index, element) {
                        formData.append($(element).attr('name'), $(element).val());
                    });
                    if ($('#columnDelimiter').val()) {
                        formData.append('columnDelimiter', $('#columnDelimiter').val());
                    }
                    if ($('#multipleValuesDelimiter').val()) {
                        formData.append('multipleValuesDelimiter', $('#multipleValuesDelimiter').val());
                    }
                } else {
                    app.notification('error', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Please choose file<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                    return false;
                }
                $.ajax({
                    type: "POST",
                    data: formData,
                    url: importCSVUrl,
                    processData: false,
                    contentType: false,
                    dataType: 'html',
                    xhr: function () {
                        var xhr = new XMLHttpRequest();
                        //var xhr = new XMLHttpRequest();
                        xhr.addEventListener("progress", function (evt) {
                            var lines = evt.currentTarget.response.split("\n");
                            if (lines.length)
                                var progress = lines[lines.length - 1];
                            else
                                var progress = 0;
                            $(".console .mCSB_container").html(progress);
                            $("#console").mCustomScrollbar("scrollTo", 'bottom');
                        }, false);

                        return xhr;
                    },
                    beforeSend: function () {
                        app.card.loading.start('.card.import-csv');
                        $('#logs').modal('show');
                        $('#consoleMessages').html('');
                    },
                    success: function (data) {
                        app.notification('success', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Books Successfully Imported<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                    },
                    complete: function () {
                        app.card.loading.finish('.card.import-csv');
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    }
                });
            } else {
                app.notification('error', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Please choose a valid CSV file<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                return false;
            }
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


        var exportCSVUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("exportCSV",array());?>
';
        $('#export').on('click', function (e) {
            e.preventDefault();
            var formData = $('.export-csv').serialize();
            $.ajax({
                type: 'POST',
                processData: false,
                data: formData,
                url: exportCSVUrl,
                beforeSend: function () {
                    app.card.loading.start('.export-csv');
                },
                success: function (data, textStatus, jqXHR) {
                    function isJson(str) {
                        try {
                            JSON.parse(str);
                        } catch (e) {
                            return false;
                        }
                        return true;
                    }

                    if (isJson(data)) {
                        var json = JSON.parse(data);
                        if (json.redirect) {
                            window.location.href = json.redirect;
                        } else {
                            app.notification('error', json.error);
                        }
                    } else {
                        var blob = new Blob([data], {
                            type: 'application/vnd.ms-excel'
                        });
                        var rawFileName = jqXHR.getResponseHeader('Content-Disposition');
                        var re = /filename[^;=\n]*="((['"]).*?\2|[^;\n]*)"/i;
                        var m;
                        if ((m = re.exec(rawFileName)) !== null) {
                            if (m.index === re.lastIndex) {
                                re.lastIndex++;
                            }
                        }
                        var downloadUrl = URL.createObjectURL(blob);
                        var a = document.createElement("a");
                        a.href = downloadUrl;
                        a.download = m[1];
                        document.body.appendChild(a);
                        a.click();
                    }
                },
                complete: function () {
                    app.card.loading.finish('.export-csv');
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
