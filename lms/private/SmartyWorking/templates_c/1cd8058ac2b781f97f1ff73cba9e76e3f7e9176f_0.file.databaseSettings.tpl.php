<?php
/* Smarty version 3.1.31, created on 2023-06-10 08:42:35
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\databaseSettings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64841b5b02bf46_70671302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cd8058ac2b781f97f1ff73cba9e76e3f7e9176f' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\databaseSettings.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64841b5b02bf46_70671302 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166094242864841b5aef63c2_60524836', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136806024964841b5aeffd43_27485903', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174971174364841b5af05676_45858560', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103109154364841b5b025b31_93282492', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73754153264841b5b027f69_66966834', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_166094242864841b5aef63c2_60524836 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_166094242864841b5aef63c2_60524836',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Database Settings<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'headerCss'} */
class Block_136806024964841b5aeffd43_27485903 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_136806024964841b5aeffd43_27485903',
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
class Block_174971174364841b5af05676_45858560 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_174971174364841b5af05676_45858560',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['isDemoMode']->value === true) {?>
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-info text-center">In the demo version you can't see or change database settings.</div>
            </div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['isDemoMode']->value === false) {?>
    <?php $_smarty_tpl->_assignInScope('route', $_smarty_tpl->tpl_vars['routes']->value->getRouteString("databaseSettings"));
?>
    <form action="<?php echo $_smarty_tpl->tpl_vars['route']->value;?>
" method="post" id="connections">
        <div class="repeat-container">
            <?php if (isset($_smarty_tpl->tpl_vars['databaseSettings']->value) && $_smarty_tpl->tpl_vars['databaseSettings']->value->getDatabaseConnections() !== null) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['databaseSettings']->value->getDatabaseConnections(), 'connection', false, NULL, 'connection', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['connection']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_connection']->value['index']++;
?>
                    <div class="card connection">
                        <div class="card-header pt-0 pb-0">
                            <div class="app-radio round inline">
                                <label><input type="radio" class="form-control" data-name="connectionStatus" name="connectionStatus[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_connection']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_connection']->value['index'] : null);?>
]" value="1" <?php if (strcmp($_smarty_tpl->tpl_vars['connection']->value->getName(),$_smarty_tpl->tpl_vars['databaseSettings']->value->getActiveConnectionName()) == 0) {?> checked<?php }?>> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Connection Status<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                </label>
                            </div>
                            <div class="heading-elements pt-1">
                                <div class="dropdown d-inline" data-trigger="hover" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Delete<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                    <button class="btn btn-outline-info no-border" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                    <ul class="dropdown-menu delete-dropdown dropdown-menu-right">
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
                                            <button class="btn btn-outline-danger delete-connection">
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
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="name" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                        <input class="form-control" data-name="name" type="text" name="name[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_connection']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_connection']->value['index'] : null);?>
]" value="<?php echo $_smarty_tpl->tpl_vars['connection']->value->getName();?>
">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="databaseType" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Database Type<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                        <select name="databaseType[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_connection']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_connection']->value['index'] : null);?>
]" data-name="databaseType" class="form-control select-picker">
                                            <option value="mysql"<?php if (strcmp($_smarty_tpl->tpl_vars['connection']->value->getDatabaseType(),'mysql') == 0) {?> selected<?php }?>>mysql</option>
                                            <option value="mariadb" <?php if (strcmp($_smarty_tpl->tpl_vars['connection']->value->getDatabaseType(),'mariadb') == 0) {?> selected<?php }?>>mariadb</option>
                                            <option value="mssql" <?php if (strcmp($_smarty_tpl->tpl_vars['connection']->value->getDatabaseType(),'mssql') == 0) {?> selected<?php }?>>mssql</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="databaseName" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Database Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                        <input class="form-control" type="text" data-name="databaseName" name="databaseName[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_connection']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_connection']->value['index'] : null);?>
]" value="<?php echo $_smarty_tpl->tpl_vars['connection']->value->getDatabaseName();?>
">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="host" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Hostname<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                        <input class="form-control" type="text" data-name="host" name="host[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_connection']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_connection']->value['index'] : null);?>
]" value="<?php echo $_smarty_tpl->tpl_vars['connection']->value->getHost();?>
">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="port" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Port<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                        <input class="form-control" type="text" data-name="port" name="port[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_connection']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_connection']->value['index'] : null);?>
]" value="<?php echo $_smarty_tpl->tpl_vars['connection']->value->getPort();?>
">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="username" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
User Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                        <input class="form-control" type="text" data-name="username" name="username[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_connection']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_connection']->value['index'] : null);?>
]" value="<?php echo $_smarty_tpl->tpl_vars['connection']->value->getUsername();?>
">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="password" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Password<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                        <input class="form-control" type="password" data-name="password" name="password[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_connection']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_connection']->value['index'] : null);?>
]" value="<?php echo $_smarty_tpl->tpl_vars['connection']->value->getPassword();?>
">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="charset" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Charset<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                        <input class="form-control" type="text" data-name="charset" name="charset[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_connection']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_connection']->value['index'] : null);?>
]" value="<?php echo $_smarty_tpl->tpl_vars['connection']->value->getCharset();?>
">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <?php }?>
            <div class="card copy-template connection">
                <div class="card-header pt-0 pb-0">
                    <div class="app-radio round inline">
                        <label>
                            <input type="radio" class="form-control" data-name="connectionStatus" name="connectionStatus[]" value="1" disabled> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Connection Status<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        </label>
                    </div>
                    <div class="heading-elements pt-1">
                        <div class="dropdown d-inline" data-trigger="hover" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Delete<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                            <button class="btn btn-outline-info no-border" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-trash-alt"></i>
                            </button>
                            <ul class="dropdown-menu delete-dropdown dropdown-menu-right">
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
                                    <button class="btn btn-outline-danger delete-connection">
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
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="name" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                <input class="form-control" data-name="name" type="text" name="name[]" disabled>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="databaseType" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Database Type<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                <select name="databaseType[]" data-name="databaseType" class="form-control" disabled>
                                    <option value="mysql">mysql</option>
                                    <option value="mariadb">mariadb</option>
                                    <option value="mssql">mssql</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="databaseName" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Database Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                <input class="form-control" type="text" data-name="databaseName" name="databaseName[]" disabled>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="host" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Hostname<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                <input class="form-control" type="text" data-name="host" name="host[]" disabled>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="port" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Port<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                <input class="form-control" type="text" data-name="port" name="port[]" disabled>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="username" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
User Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                <input class="form-control" type="text" data-name="username" name="username[]" disabled>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="password" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Password<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                <input class="form-control" type="password" data-name="password" name="password[]" disabled>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="charset" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Charset<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                <input class="form-control" type="text" data-name="charset" name="charset[]" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <button type="button" class="btn btn-outline-success add-connection">
                    <i class="fas fa-plus"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Connection<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                </button>
            </div>
            <div class="col-lg-6">
                <button type="submit" class="btn btn-success pull-right save-connections">
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
    </form>
    <?php }
}
}
/* {/block 'content'} */
/* {block 'footerPageJs'} */
class Block_103109154364841b5b025b31_93282492 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_103109154364841b5b025b31_93282492',
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
class Block_73754153264841b5b027f69_66966834 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_73754153264841b5b027f69_66966834',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['isDemoMode']->value === false) {?>
    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $('.add-connection').on('click', function (e) {
                e.preventDefault();
                var template = $('.copy-template');
                var container = template.closest('.repeat-container');
                var newRow = template.clone();
                newRow.removeClass('copy-template');
                newRow.find('input, select').removeAttr('disabled');
                newRow.appendTo(container);
                newRow.find('select').selectpicker();
                app.tooltip_popover();
                return false;
            });
            $('#connections').on('submit', function (e) {
                var container = $('.repeat-container');
                var count = 0;
                $('.card',container).each(function (i, element) {
                    $('input, select', element).each(function (i, element) {
                        var name = $(element).attr('data-name');
                        var newName = name + '[' + count + ']';
                        $(element).attr('name', newName);
                    });
                    count++;
                });
            });
            $(document).on('click', '.delete-connection', function (e) {
                e.preventDefault();
                var card = $(this).closest('.card');
                card.remove();
                $('.tooltip.show').remove();
            });
            $(document).on('change', 'input[type=radio]', function () {
                $('input[type=radio]:checked').not(this).prop('checked', false);
            });
        });
    <?php echo '</script'; ?>
>
    <?php }
}
}
/* {/block 'footerCustomJs'} */
}
