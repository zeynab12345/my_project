<?php
/* Smarty version 3.1.31, created on 2023-06-09 23:19:36
  from "C:\xampp7.3\htdocs\lms\themes\default\general\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64839768444f71_46599965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f7fce9316f677bf17b74c76b54995ba5df142e0' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\themes\\default\\general\\header.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64839768444f71_46599965 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'printMenu' => 
  array (
    'compiled_filepath' => 'C:\\xampp7.3\\htdocs\\lms\\private\\SmartyWorking\\templates_c\\0f7fce9316f677bf17b74c76b54995ba5df142e0_0.file.header.tpl.php',
    'uid' => '0f7fce9316f677bf17b74c76b54995ba5df142e0',
    'call_name' => 'smarty_template_function_printMenu_66276603264839768392946_84495412',
  ),
));
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
?>
<header class="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 col-lg-3 col-md-6">
                <div class="logo">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("publicIndex");?>
"><?php if ($_smarty_tpl->tpl_vars['colorSchemas']->value[$_smarty_tpl->tpl_vars['theme']->value->getActiveColorSchema()]->isDark()) {?><img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("lightLogoFilePath");?>
" alt="Logo"><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("logoFilePath");?>
" alt="Logo"><?php }?></a>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <nav class="navbar navbar-expand-lg">
                    <div class="collapse navbar-collapse justify-content-center" id="header-menu">
                        
                        <ul class="navbar-nav primary-menu">
                            <?php if (isset($_smarty_tpl->tpl_vars['menu1']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu1']->value->getRootNodes(), 'rootNode');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rootNode']->value) {
?>
                                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'printMenu', array('node'=>$_smarty_tpl->tpl_vars['rootNode']->value), true);?>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            <?php }?>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="menu-icons d-flex text-right align-items-center justify-content-end">
                    <div class="search-box">
                        <a href="#" class="search-open"><i class="ti-search"></i></a>
                    </div>
                    <div class="user-dropdown">
                        <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value != null) {?>
                            <a href="#" class="user-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="ti-user"></i></a>
                            <ul class="dropdown-menu">
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->getRole() != null && $_smarty_tpl->tpl_vars['user']->value->getRole()->getPriority() <= 100) {?>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userProfile");?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Profile<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                                    </li>
                                    <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("enableBookIssue")) {?>
                                        <li>
                                            <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userBooksView");?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
My Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                                        </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("enableBookRequest") && !$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("enableBookIssueByUser")) {?>
                                        <li>
                                            <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userRequestListView");?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Requested Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                                        </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("enableBookIssue")) {?>
                                        <li>
                                            <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userIssuedBooksView");?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Issued Books History<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                                        </li>
                                    <?php }?>
                                <?php } else { ?>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("adminIndex");?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Dashboard<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userEdit",array("userId"=>$_smarty_tpl->tpl_vars['user']->value->getId()));?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Profile<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookListView");?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                                    </li>
                                    <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("enableBookRequest")) {?>
                                        <li>
                                            <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("requestListView");?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Requested Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                                        </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("enableBookIssue")) {?>
                                        <li>
                                            <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("issueListView");?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Issued Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                                        </li>
                                    <?php }?>
                                <?php }?>
                                <li class="divider"></li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("publicLogout");?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Logout<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                                </li>
                            </ul>
                        <?php } else { ?>
                            <a href="#" data-toggle="modal" data-target="#login-box" class="open-login-box">
                                <i class="ti-lock"></i>
                            </a>
                        <?php }?>
                    </div>
                    <?php if (isset($_smarty_tpl->tpl_vars['languages']->value)) {?>
                        <div class="languages">
                            <a href="#" class="lang-select" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="ti-world"></i></a>
                            <ul class="dropdown-menu">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['language']->value->isActive()) {?>
                                        <li>
                                            <a class="dropdown-item <?php if ($_smarty_tpl->tpl_vars['language']->value->getCode() == $_smarty_tpl->tpl_vars['activeLanguage']->value->getCode()) {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("languageChange",array("languageCode"=>$_smarty_tpl->tpl_vars['language']->value->getCode()));?>
"><i class="flag flag-<?php echo $_smarty_tpl->tpl_vars['language']->value->getShortCode();?>
"></i> <?php echo $_smarty_tpl->tpl_vars['language']->value->getName();?>

                                            </a>
                                        </li>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            </ul>
                        </div>
                    <?php }?>
                </div>
                <div class="menu-toggler" data-toggle="collapse" data-target="#header-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="bar"></div>
                </div>
            </div>

            <div class="col-12">
                <div class="search-header hide">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookSearchPublic");?>
" method="<?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("useGetRequestBookSearch")) {?>get<?php } else { ?>post<?php }?>">
                        <input class="form-control search-input" name="<?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("useGetRequestBookSearch")) {?>q<?php } else { ?>searchText<?php }?>" aria-describedby="search" type="search">
                        <button type="submit" class="btn" id="header-search"><i class="ti-search"></i></button>
                        <span class="search-close">
                        <i class="ti-close"></i>
                    </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="modal login-box" id="login-box" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card card-no-border">
                    <div class="card-body">
                        <?php if ($_smarty_tpl->tpl_vars['colorSchemas']->value[$_smarty_tpl->tpl_vars['theme']->value->getActiveColorSchema()]->isDark()) {?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("lightLogoFilePath");?>
" class="d-flex ml-auto mr-auto mb-4 mt-2 img-fluid" alt="Login">
                        <?php } else { ?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("logoFilePath");?>
" class="d-flex ml-auto mr-auto mb-4 mt-2 img-fluid" alt="Login">
                        <?php }?>
                        <div class="social-login">
                            <?php if ($_smarty_tpl->tpl_vars['socialNetworkSettings']->value->getProvider('facebook')->isActive()) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("socialAuth",array("providerId"=>"facebook"));?>
" class="btn auth-btn btn-block facebook text-white mb-2"><i class="ti-facebook float-left"></i> <span><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Sign in with Facebook<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span></a>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['socialNetworkSettings']->value->getProvider('google')->isActive()) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("socialAuth",array("providerId"=>"google"));?>
" class="btn auth-btn btn-block google-plus text-white"><i class="ti-google float-left"></i> <span><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Sign in with Google+<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span></a>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['socialNetworkSettings']->value->getProvider('twitter')->isActive()) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("socialAuth",array("providerId"=>"twitter"));?>
" class="btn auth-btn btn-block twitter text-white"><i class="ti-twitter-alt float-left"></i> <span><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Sign in with Twitter<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span></a>
                            <?php }?>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['socialNetworkSettings']->value->getProvider('facebook')->isActive() || $_smarty_tpl->tpl_vars['socialNetworkSettings']->value->getProvider('google')->isActive() || $_smarty_tpl->tpl_vars['socialNetworkSettings']->value->getProvider('twitter')->isActive()) {?>
                            <div class="my-3 text-sm text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
OR<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>
                        <?php }?>
                        <form action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("publicLogin");?>
" method="post" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input name="login" class="form-control" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Login<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" value="" type="text" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input name="password" class="form-control" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Password<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" type="password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-8 col-xs-8 text-left">
                                        <div class="custom-control custom-checkbox mt-2">
                                            <input type="checkbox" name="rememberMe" class="custom-control-input" id="rememberMe">
                                            <label class="custom-control-label" for="rememberMe"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Remember me<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-4">
                                        <button class="btn btn-primary shadow btn-block"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Login<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</button>
                                    </div>
                                    <div class="col-md-12 mt-3 additional-text text-center">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("passwordRecovery");?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Forgot password?<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                                    </div>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("enableRegistration")) {?>
                                    <div class="text-black-50 mt-3 additional-text text-center">Do not have an account? <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userRegistration");?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Sign Up<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a></div>
                                <?php }?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
/* smarty_template_function_printMenu_66276603264839768392946_84495412 */
if (!function_exists('smarty_template_function_printMenu_66276603264839768392946_84495412')) {
function smarty_template_function_printMenu_66276603264839768392946_84495412($_smarty_tpl,$params) {
$params = array_merge(array('node'=>null), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
                            <?php if (isset($_smarty_tpl->tpl_vars['node']->value) && $_smarty_tpl->tpl_vars['node']->value->getValue() !== null) {?>
                                <?php $_smarty_tpl->_assignInScope('menuItem', $_smarty_tpl->tpl_vars['node']->value->getValue());
?>
                                <li class="<?php if ($_smarty_tpl->tpl_vars['node']->value->getParent() == null) {?>nav-item<?php }
if ($_smarty_tpl->tpl_vars['node']->value->getChildren() != null && $_smarty_tpl->tpl_vars['node']->value->getParent() == null) {?> dropdown<?php } elseif ($_smarty_tpl->tpl_vars['node']->value->getParent() != null && $_smarty_tpl->tpl_vars['node']->value->getChildren() != null) {?> dropdown-submenu<?php }?> <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->getClass() != null) {
echo $_smarty_tpl->tpl_vars['menuItem']->value->getClass();
}?>">
                                    <a href="<?php if ($_smarty_tpl->tpl_vars['menuItem']->value->getPageId() !== null) {
echo $_smarty_tpl->tpl_vars['pageUrls']->value[$_smarty_tpl->tpl_vars['menuItem']->value->getPageId()];
} elseif ($_smarty_tpl->tpl_vars['menuItem']->value->getPostId() !== null) {
echo $_smarty_tpl->tpl_vars['postUrls']->value[$_smarty_tpl->tpl_vars['menuItem']->value->getPostId()];
} elseif ($_smarty_tpl->tpl_vars['menuItem']->value->getLink() !== null) {
echo $_smarty_tpl->tpl_vars['menuItem']->value->getLink();
}?>" class="<?php if ($_smarty_tpl->tpl_vars['node']->value->getParent() != null) {?>dropdown-item<?php }?>" <?php if ($_smarty_tpl->tpl_vars['node']->value->getChildren() != null) {?> data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"<?php }?>>
                                        <?php echo $_smarty_tpl->tpl_vars['menuItem']->value->getTitle();?>
 <?php if ($_smarty_tpl->tpl_vars['node']->value->getChildren() != null && $_smarty_tpl->tpl_vars['node']->value->getParent() == null) {?>
                                            <i class="ti-angle-down"></i>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['node']->value->getParent() != null && $_smarty_tpl->tpl_vars['node']->value->getChildren() != null) {?>
                                            <i class="ti-angle-right ml-auto"></i>
                                        <?php }?>
                                    </a>
                                    <?php if ($_smarty_tpl->tpl_vars['node']->value->getChildren() != null) {?>
                                        <ul class="dropdown-menu<?php if ($_smarty_tpl->tpl_vars['node']->value->getParent() != null) {?> menu-left<?php }?>">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value->getChildren(), 'subNode');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subNode']->value) {
?>
                                                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'printMenu', array('node'=>$_smarty_tpl->tpl_vars['subNode']->value), true);?>

                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                        </ul>
                                    <?php }?>
                                </li>
                            <?php }?>
                        <?php
}}
/*/ smarty_template_function_printMenu_66276603264839768392946_84495412 */
}
