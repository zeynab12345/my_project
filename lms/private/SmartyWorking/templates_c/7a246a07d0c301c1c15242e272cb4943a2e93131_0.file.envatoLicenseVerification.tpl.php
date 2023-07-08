<?php
/* Smarty version 3.1.31, created on 2023-06-09 22:37:15
  from "C:\xampp7.3\htdocs\lms\themes\default\auth\envatoLicenseVerification.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64838d7b952819_25164988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a246a07d0c301c1c15242e272cb4943a2e93131' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\themes\\default\\auth\\envatoLicenseVerification.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:errors.tpl' => 1,
  ),
),false)) {
function content_64838d7b952819_25164988 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
?>
<!DOCTYPE html>
<html lang="en" style="height: 100%;">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="KAASoft">
        <meta name="robots" content="noindex,nofollow">
        <meta http-equiv="cache-control" content="no-cache"/>
        <meta http-equiv="Pragma" content="no-cache"/>
        <meta http-equiv="Expires" content="-1"/>
        <title>Install Library CMS</title>
        <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/css/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/css/plugins.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/css/style.css" rel="stylesheet">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/images/favicon.png">
    </head>
    <body style="min-height: 100%;background: linear-gradient(180deg,#f0f0f0 0,#dee1e3 100%) !important;">
        <section id="wrapper">
            <div class="login-register" style="">
                <div class="login-box card" style="max-width: 600px;width: auto;">
                    <div class="card-body">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/images/logo.png" class="d-flex ml-auto mr-auto mb-4 mt-2" alt="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Logo<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
"/>
                        <?php $_smarty_tpl->_subTemplateRender('file:errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <form action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("envatoLicenseVerificationPublic");?>
" method="post" class="form-horizontal validate">
                            <div class="form-group">
                                <h3 class="text-center mb-3">Library CMS License Verification</h3>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Purchase Code</label>
                                <input type="text" name="purchaseCode" autocomplete="off" class="form-control purchase-code">
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary btn-block" id="verify-code"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Verify<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/jquery/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/bootstrap/popper.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/jquery-validate/jquery.validate.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/tooltipster/jquery.tooltipster.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/noty/noty.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/main.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            $('#verify-code').on('click', function (e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    data: $('.purchase-code').serialize(),
                    url: '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("envatoLicenseVerificationPublic");?>
',
                    beforeSend: function () {
                        app.card.loading.start('.login-box');
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else if (data.warning) {
                                app.notification('warning', data.warning);
                            } else {
                                app.notification('success', data.success);
                                window.location.href = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("publicIndex");?>
';
                            }
                        }
                    },
                    complete: function () {
                        app.card.loading.finish('.login-box');
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    }
                });
            });

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
                    purchaseCode: {
                        required: true
                    }
                }
            });
        <?php echo '</script'; ?>
>
    </body>
</html><?php }
}
