<?php
/* Smarty version 3.1.31, created on 2023-06-10 14:16:25
  from "C:\xampp7.3\htdocs\lms\themes\default\registration.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64846999289d81_64592677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dbee15be1fb174e9b36809d52cdbab48339151d' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\themes\\default\\registration.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64846999289d81_64592677 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_847983124648469991b6273_48643121', 'metaTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1248377957648469991b8987_79615786', 'metaDescription');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_326200112648469991ba045_86025555', 'metaKeywords');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_576635889648469991bba81_23805938', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207034670648469991bcea9_56746519', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121524541964846999257ef0_48581814', 'footerJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163079516464846999260b49_51182770', 'customJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'public.tpl');
}
/* {block 'metaTitle'} */
class Block_847983124648469991b6273_48643121 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaTitle' => 
  array (
    0 => 'Block_847983124648469991b6273_48643121',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Member Registration<?php
}
}
/* {/block 'metaTitle'} */
/* {block 'metaDescription'} */
class Block_1248377957648469991b8987_79615786 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaDescription' => 
  array (
    0 => 'Block_1248377957648469991b8987_79615786',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaDescription'} */
/* {block 'metaKeywords'} */
class Block_326200112648469991ba045_86025555 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaKeywords' => 
  array (
    0 => 'Block_326200112648469991ba045_86025555',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaKeywords'} */
/* {block 'headerCss'} */
class Block_576635889648469991bba81_23805938 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_576635889648469991bba81_23805938',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_207034670648469991bcea9_56746519 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_207034670648469991bcea9_56746519',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="registration">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title mb-4">
                        <h2 class="text-uppercase text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Registration<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("enableRegistration")) {?>
                        

                        <form action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userRegistration");?>
" method="post" class="validate user-registration mx-auto">
                            <div class="registration-successfully d-none">
                                <svg viewBox="-10 -10 500 500">
                                    <path class="circle" d="M877.28,335.72a203.17,203.17,0,0,1,37.86,118.1C915.14,565.26,823.44,657,712,657s-203.14-91.7-203.14-203.14S600.56,250.68,712,250.68a203.21,203.21,0,0,1,144.67,60.53" transform="translate(-508.86 -250.68)"></path>
                                    <polyline class="check" points="78.54 229.94 179.32 300.74 347.98 60.67"></polyline>
                                </svg>
                                <h2 class="thanks"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Thank you!<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h2>
                                <p><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Your e-mail has been sent a letter with a link to activate your account.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</p>
                            </div>
                            <div class="registration-form">
                                <div class="social-login">
                                    <?php if ($_smarty_tpl->tpl_vars['socialNetworkSettings']->value->getProvider('facebook')->isActive()) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("socialAuth",array("providerId"=>"facebook"));?>
" class="btn auth-btn btn-block facebook text-white mb-2"><i class="ti-facebook float-left"></i> <span><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Sign up with Facebook<?php $_block_repeat=false;
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
Sign up with Google+<?php $_block_repeat=false;
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
Sign up with Twitter<?php $_block_repeat=false;
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
                                <div class="form-group">
                                    <input type="text" class="form-control" autocomplete="off" id="email" name="email" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Email<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" autocomplete="off" name="password" id="mainPassword" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Password<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control confirmPassword" autocomplete="off" name="confirmPassword" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Confirm Password<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" autocomplete="off" name="firstName" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
First Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" autocomplete="off" name="lastName" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Last Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select name="gender" class="form-control custom-select">
                                        <option value="Male" selected><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Male<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
                                        <option value="Female"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Female<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" autocomplete="off" name="phone" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Phone<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" autocomplete="off" name="address" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Address<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                </div>

                                <button type="submit" class="btn btn-primary btn-block shadow reg-user"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Register<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</button>
                            </div>
                        </form>
                    <?php } else { ?>
                        <h2 class="text-center mt-5"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Registration is disabled by admin<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h2>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerJs'} */
class Block_121524541964846999257ef0_48581814 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerJs' => 
  array (
    0 => 'Block_121524541964846999257ef0_48581814',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/jquery.validate.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerJs'} */
/* {block 'customJs'} */
class Block_163079516464846999260b49_51182770 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customJs' => 
  array (
    0 => 'Block_163079516464846999260b49_51182770',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $('.validate').validate({
            ignore: null,
            messages: {
                email: {
                    remote: jQuery.validator.format("<strong>{0}</strong> is already exist. Please use another email.")
                }
            },
            rules: {
                email: {
                    required: true,
                    email: true,
                    remote: {
                        param: {
                            url: '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userEmailCheck",array());?>
',
                            type: "post",
                            data: {
                                email: function () {
                                    return $("#email").val();
                                }
                            }
                        }
                    }
                },
                firstName: {
                    required: true
                },
                lastName: {
                    required: true
                },
                password: {
                    required: true
                },
                confirmPassword: {
                    equalTo: "#mainPassword"
                }
            }
        });
        $('.reg-user').on('click', function (e) {
            e.preventDefault();
            var form = $(this).closest('form');
            if ($(form).valid()) {
                $('.confirmPassword').attr('disabled', true);
                $.ajax({
                    dataType: 'json',
                    method: 'POST',
                    data: form.serialize(),
                    url: form.attr('action'),
                    beforeSend: function (data) {
                        $(form).append('<div class="form-message"><i class="fa fa-spinner fa-spin"></i><span class="sr-only"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Loading...<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Sending, Please Wait..<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 </div>');
                    },
                    success: function (data) {
                        app.ajax_redirect(data);
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            $('.registration-form').remove();
                            $('.registration-successfully').removeClass('d-none');
                        }
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    },
                    complete: function (data) {
                        $(form).find('.form-message').fadeOut().remove();
                    }
                });
            }
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'customJs'} */
}
