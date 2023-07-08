<?php
/* Smarty version 3.1.31, created on 2023-06-09 23:52:34
  from "C:\xampp7.3\htdocs\lms\private\Templates\admin\issues\issues.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_64839f22ce7174_76013079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '886348beebdab7fef56fc57ea84763d0c689b185' => 
    array (
      0 => 'C:\\xampp7.3\\htdocs\\lms\\private\\Templates\\admin\\issues\\issues.tpl',
      1 => 1584518505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/issues/issues-list.tpl' => 1,
  ),
),false)) {
function content_64839f22ce7174_76013079 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp7.3\\htdocs\\lms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156999251764839f22c91205_84612577', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164155111064839f22c99d40_44143718', 'toolbar');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193189692264839f22c9bad4_64065791', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130772353364839f22ca09b8_22927775', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114199439664839f22cbcbe2_97268256', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8822130464839f22cbf219_19992831', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_156999251764839f22c91205_84612577 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_156999251764839f22c91205_84612577',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Issued Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'toolbar'} */
class Block_164155111064839f22c99d40_44143718 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'toolbar' => 
  array (
    0 => 'Block_164155111064839f22c99d40_44143718',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="heading-elements">
        <a href="#issue-book-block" class="btn btn-success" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">
            <span class="btn-icon"><i class="fas fa-plus"></i></span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Issue Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        </a>
    </div>
<?php
}
}
/* {/block 'toolbar'} */
/* {block 'headerCss'} */
class Block_193189692264839f22c9bad4_64065791 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_193189692264839f22c9bad4_64065791',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/css/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/summernote/summernote-bs4.css" rel="stylesheet"/>
<?php
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_130772353364839f22ca09b8_22927775 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_130772353364839f22ca09b8_22927775',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="collapse" id="issue-book-block">
                <div class="card">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 33%;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                <th style="width: 33%;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Copy<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                <th style="width: 33%;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
User<?php $_block_repeat=false;
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
                                    <select name="bookIds[]" id="bookId" class="form-control"></select>
                                </td>
                                <td>
                                    <select name="bookCopyIds[]" id="bookCopyId" class="form-control custom-select"></select>
                                </td>
                                <td>
                                    <select name="userId" id="userId" class="form-control"></select>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-outline-success no-border" id="add-book" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Another Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
"><i class="fas fa-plus" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("issueCreate");?>
" id="issue-form">
                        <input type="hidden" name="userId" id="user-id">
                        <table class="table table-hover d-none" id="issue-result">
                            <thead>
                                <tr>
                                    <th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Books for<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <span class="text-muted user-name"></span></th>
                                    <th style="width: 200px;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book Copy<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                    <th style="width: 150px;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Publisher<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                    <th style="width: 150px;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Publishing Year<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                    <th style="width: 150px;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN10/13<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                    <th style="width: 65px;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Delete<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="#" class="btn btn-success pull-right <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>ml-2<?php } else { ?>mr-2<?php }?> mb-3" id="issue-book"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Issue<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card" id="issues-card">
                <?php $_smarty_tpl->_subTemplateRender('file:admin/issues/issues-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        </div>
    </div>
    <div class="modal fade" id="userSendSMSModal" tabindex="-1" role="dialog" aria-labelledby="userSendSMSModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title m-auto"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Send Notification<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h5>
                </div>
                <div class="modal-body">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("smsSend",array());?>
" class="card p-3 mb-0">
                        <div class="form-group">
                            <label for="subject"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Sender<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                            <input type="hidden" name="bookId" id="smsBookId">
                            <input type="text" class="form-control" id="messageSender" name="sender">
                        </div>
                        <div class="form-group">
                            <label for="smsContent"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Message<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                <a class="text-muted" data-toggle="collapse" href="#shortcode-block-sms" aria-expanded="false" aria-controls="shortcode-block-sms"><i class="fa fa-info-circle"></i></a></label>
                            <textarea class="form-control" id="smsContent" name="content"></textarea>
                        </div>
                        <div class="alert alert-default text-center collapse" id="shortcode-block-sms">
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ShortCodes For Use<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
: <br><code>[USER_FIRST_NAME]</code>, <code>[USER_LAST_NAME]</code>, <code>[BOOK]</code>, <code>[BOOKS]</code>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-outline-primary" id="sendSMSToDelayedUser" data-url="">
                                <span class="btn-icon"><i class="far fa-paper-plane"></i></span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Send SMS<?php $_block_repeat=false;
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

    <div class="modal fade" id="userSendEmailModal" tabindex="-1" role="dialog" aria-labelledby="userSendEmailModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title m-auto"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Send Notification<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h5>
                </div>
                <div class="modal-body">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userSendEmail",array());?>
" class="card p-3 mb-0">
                        <div class="form-group">
                            <label for="subject"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Subject<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                            <input type="hidden" name="bookId" id="emailBookId">
                            <input type="text" class="form-control" id="messageSubject" name="subject">
                        </div>
                        <div class="form-group">
                            <label for="emailContent"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Message<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                <a class="text-muted" data-toggle="collapse" href="#shortcode-block-email" aria-expanded="false" aria-controls="shortcode-block-email"><i class="fa fa-info-circle"></i></a></label>
                            <textarea class="form-control" id="emailContent" name="content"></textarea>
                        </div>
                        <div class="alert alert-default text-center collapse" id="shortcode-block-email">
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ShortCodes For Use<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
: <br><code>[USER_FIRST_NAME]</code>, <code>[USER_LAST_NAME]</code>,
                            <code>[BOOK]</code>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-outline-primary" id="sendEmailToDelayedUser" data-url="">
                                <span class="btn-icon"><i class="far fa-paper-plane"></i></span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Send Email<?php $_block_repeat=false;
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
<?php
}
}
/* {/block 'content'} */
/* {block 'footerPageJs'} */
class Block_114199439664839f22cbcbe2_97268256 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_114199439664839f22cbcbe2_97268256',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/summernote/summernote-bs4.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerPageJs'} */
/* {block 'footerCustomJs'} */
class Block_8822130464839f22cbf219_19992831 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_8822130464839f22cbf219_19992831',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        var userSendEmailURL = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userSendEmail",array());?>
';
        var userSMSSendURL = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("smsSend",array());?>
';
        $('#userSendSMSModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var userId = button.data('user');
            var bookId = button.data('book');
            var modal = $(this);
            $('#smsBookId').val(bookId);
            $('#sendSMSToDelayedUser').attr('data-url', userSMSSendURL.replace('[userId]', userId));
            $.ajax({
                type: "GET",
                dataType: 'json',
                url: userSMSSendURL.replace('[userId]', userId),
                beforeSend: function () {
                    app.card.loading.start($(modal).find('.card'));
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            $('#messageSender').val(data.sender);
                            $('#smsContent').val(data.smsTemplate);
                        }
                    }
                },
                complete: function () {
                    app.card.loading.finish($(modal).find('.card'));
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $('#userSendEmailModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var userId = button.data('user');
            var bookId = button.data('book');
            var modal = $(this);
            $('#emailBookId').val(bookId);
            $('#sendEmailToDelayedUser').attr('data-url', userSendEmailURL.replace('[userId]', userId));
            $.ajax({
                type: "GET",
                dataType: 'json',
                url: userSendEmailURL.replace('[userId]', userId),
                beforeSend: function () {
                    app.card.loading.start($(modal).find('.card'));
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            $('#emailContent').val(data.dynamicEmailTemplate).summernote({
                                toolbar: [
                                    ['style', ['bold', 'italic', 'underline', 'clear']],
                                    ['font', ['strikethrough']],
                                    ['fontsize', ['fontsize']],
                                    ['color', ['color']],
                                    ['para', ['ul', 'ol', 'paragraph']],
                                    ['height', ['height']],
                                    ['misc', ['codeview']]
                                ]
                            });
                        }
                    }
                },
                complete: function () {
                    app.card.loading.finish($(modal).find('.card'));
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $('#sendSMSToDelayedUser').on('click', function (e) {
            e.preventDefault();
            var form = $(this).closest('form');
            var url = $(this).attr('data-url');
            $.ajax({
                type: "POST",
                url: url,
                data: $(form).serialize(),
                dataType: 'json',
                beforeSend: function () {
                    app.card.loading.start($(form));
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            app.notification('success', data.success);
                            $('#userSendSMSModal').modal('hide');
                            $('.tooltip.show').remove();
                        }
                    }
                },
                complete: function () {
                    app.card.loading.finish($(form));
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $('#sendEmailToDelayedUser').on('click', function (e) {
            e.preventDefault();
            var form = $(this).closest('form');
            var url = $(this).attr('data-url');
            $.ajax({
                type: "POST",
                url: url,
                data: $(form).serialize(),
                dataType: 'json',
                beforeSend: function () {
                    app.card.loading.start($(form));
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            app.notification('success', data.success);
                            $('#emailContent').summernote('destroy');
                            $('#userSendEmailModal').modal('hide');
                            $('.tooltip.show').remove();
                        }
                    }
                },
                complete: function () {
                    app.card.loading.finish($(form));
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        var bookSearchUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookSearch",array());?>
';
        $('#bookId').select2({
            ajax: {
                url: function () {
                    return bookSearchUrl;
                },
                dataType: 'json',
                type: 'POST',
                data: function (params) {
                    return {
                        searchText: params.term
                    };
                },
                error: function (jqXHR, exception) {
                    if (jqXHR.statusText == 'abort') {
                        return;
                    }
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                },
                processResults: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            return {
                                results: data.books
                            };
                        }
                    }
                },
                cache: true
            },
            escapeMarkup: function (markup) {
                return markup;
            },
            minimumInputLength: 2,
            templateResult: formatBook,
            templateSelection: formatBookSelection
        }).on('select2:select', function (e) {
            var data = $(this).select2('data');
            var bookCopies = data[0].bookCopies;
            var bookCopiesSelect = $('#bookCopyId');
            bookCopiesSelect.empty();
            if(bookCopies && bookCopies.length > 0) {
                $.each(bookCopies, function (i, item) {
                    if(item.issueStatus != 'ISSUED' && item.issueStatus != 'LOST') {
                        $(bookCopiesSelect).append($('<option>', {
                            value: item.id,
                            text: item.bookSN
                        }));
                    }
                });
                if($(bookCopiesSelect).find('option').length < 1) {
                    $(bookCopiesSelect).append($('<option>', {
                        value: 'NULL',
                        text: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Not Available<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
'
                    }));
                }
            } else {
                $(bookCopiesSelect).append($('<option>', {
                    value: 'NULL',
                    text: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Not Available<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
'
                }));
            }
        });
        function formatBook(book) {
            if (book.loading) return book.text;
            var i, lastIndex, markup = "<div class='select-book'>";
            markup += "<div class='select-book-cover'>";
            if (book.cover) {
                markup += '<img src="' + book.cover.webPath + '" class="img-fluid">';
            } else {
                markup += '<img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noBookImageFilePath");?>
" class="img-fluid">';
            }
            markup += "</div>";
            markup += "<div class='select-book-info'>";
            markup += "<div class='select-book-title'>" + book.title + "";
            if (book.publishingYear) {
                markup += " <span>(" + book.publishingYear + ")</span>";
            }
            markup += "</div>";
            if (book.publisher) {
                markup += "<div class='select-book-publisher'><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Publisher:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</strong> " + book.publisher.name + "</div>";
            }
            if (book.ISBN10) {
                markup += "<div class='select-book-isbn'><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN10:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</strong> " + book.ISBN10 + "</div>";
            } else if (book.ISBN13) {
                markup += "<div class='select-book-isbn'><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN13:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</strong> " + book.ISBN13 + "</div>";
            }
            if (book.genres && book.genres.length > 0) {
                markup += "<div class='select-book-genre'><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Genres:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</strong> ";
                lastIndex = book.genres.length - 1;
                for (i = 0; i < book.genres.length; i++) {
                    markup += book.genres[i].name;
                    if (lastIndex != i) {
                        markup += ", ";
                    }
                }
                markup += "</div>";
            }
            if (book.authors && book.authors.length > 0) {
                markup += "<div class='select-book-author'><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Authors:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</strong> ";
                lastIndex = book.authors.length - 1;
                for (i = 0; i < book.authors.length; i++) {
                    if (book.authors[i].firstName) {
                        var text = book.authors[i].firstName + ' ' + book.authors[i].lastName;
                    } else {
                        text = book.authors[i].lastName;
                    }
                    markup += text;
                    if (lastIndex != i) {
                        markup += ", ";
                    }
                }
                markup += "</div>";
            }
            markup += "</div></div>";
            return markup;
        }
        function formatBookSelection(book) {
            return book.title || book.text;
        }
        var searchUserUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userSearch",array());?>
';
        $('#userId').select2({
            ajax: {
                url: function () {
                    return searchUserUrl;
                },
                dataType: 'json',
                type: 'POST',
                data: function (params) {
                    return {
                        searchText: params.term
                    };
                },
                error: function (jqXHR, exception) {
                    if (jqXHR.statusText == 'abort') {
                        return;
                    }
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
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
                                        text: item.firstName + ' ' + item.lastName + ' (' + item.email + ')',
                                        id: item.id,
                                        term: params.term
                                    }
                                })
                            };
                        }
                    }
                },
                cache: true
            },
            templateResult: function (item) {
                if (item.loading) {
                    return item.text;
                }
                return app.markMatch(item.text, item.term);
            },
            minimumInputLength: 2
        }).on("change", function (e) {
            var data = $(this).select2('data');
            $('#user-id').val($(this).val());
            if (data.length > 0) {
                $('#issue-form').find('.user-name').text(data[0].text);
            }
        });
        $('#add-book').on('click', function (e) {
            e.preventDefault();
            var book = $("#bookId");
            var bookVal = book.val();
            var bookCopy = $('#bookCopyId');
            var bookCopyVal = bookCopy.val();
            var user = $("#userId");
            var userVal = user.val();
            if (!bookVal) {
                app.notification('error', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book is required<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                return false;
            }
            if (!bookCopyVal || bookCopyVal == 'NULL') {
                app.notification('error', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
There is no available copies<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                return false;
            }
            if (!userVal) {
                app.notification('error', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
User is required<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                return false;
            }
            if (bookVal && userVal) {
                $('#issue-result').removeClass('d-none').slideDown();
                var data = $(book).select2('data');
                var bookId = data[0].id;
                var title = data[0].title;
                if (data[0].publisher) {
                    var publisherName = data[0].publisher.name;
                }
                var publishingYear = data[0].publishingYear;
                var ISBN10 = data[0].ISBN10;
                var ISBN13 = data[0].ISBN13;
                var bookCopies = data[0].bookCopies;

                var markup = "<tr>";
                markup += "<td>" + title + "</td>";
                if(bookCopies && bookCopies.length > 0) {
                    markup += "<td>";
                    markup += "<select name='bookCopyIds[]' class='form-control form-control-sm custom-select'>";
                    for (var i = 0; i < bookCopies.length; i++) {
                        if(bookCopies[i].issueStatus != 'ISSUED' && bookCopies[i].issueStatus != 'LOST') {
                            markup += "<option value='" + bookCopies[i].id + "'>" + bookCopies[i].bookSN + "</option>";
                        }
                    }
                    markup += "</select>";
                    markup += "</td>";
                }

                markup += "<td>";
                if (publisherName) {
                    markup += publisherName;
                }
                markup += "</td>";
                markup += "<td>";
                if (publishingYear) {
                    markup += publishingYear;
                }
                markup += "</td>";
                markup += "<td>";
                if (ISBN13) {
                    markup += ISBN13;
                } else if (ISBN10) {
                    markup += ISBN10;
                }
                markup += "</td>";
                markup += "<td class='text-center'>";
                //markup += "<input type='hidden' name='bookIds[]' value=" + bookId + ">";
                markup += "<a href='#' class='btn btn-outline-info btn-sm no-border remove-book' title='<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Delete Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
'><i class='far fa-trash-alt'></i></a>";
                markup += "</td>";
                markup += "</tr>";
                $('#issue-result tbody').append(markup);
                $('#bookId').empty().trigger('change');
                $('#bookCopyId').empty();
            }
        });
        $('#issue-book').on('click', function (e) {
            e.preventDefault();
            var formData, form = $('#issue-form');
            var bookVal = $("#bookId").val();
            var userVal = $("#userId").val();
            var bookCopyVal = $('#bookCopyId').val();
            if (!userVal) {
                app.notification('error', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
User is required<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                return false;
            }
            if ($('#issue-result tbody tr').length < 1) {
                if (!bookVal) {
                    app.notification('error', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book is required<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                    return false;
                }
                if (!bookCopyVal || bookCopyVal == 'NULL') {
                    app.notification('error', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
There is no available copies<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                    return false;
                }
                formData = $('#bookCopyId, #userId').serialize();
            } else {
                formData = $(form).serialize()
            }
            $.ajax({
                type: "POST",
                dataType: 'json',
                data: formData,
                url: $(form).attr('action'),
                beforeSend: function () {
                    app.card.loading.start('#issue-book-block .card');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {

                            $('#userId').empty().trigger('change');
                            $('#bookId').empty().trigger('change');
                            $('#bookCopyId').empty();
                            $('#issue-result').addClass('d-none').slideUp();
                            $('#issue-result tbody tr').remove();
                            var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("issueListView");?>
';
                            $.ajax({
                                type: "POST",
                                url: url,
                                data: $('#books-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order'),
                                dataType: 'json',
                                beforeSend: function () {
                                    app.card.loading.start('#issues-card');
                                },
                                success: function (data) {
                                    if (data.redirect) {
                                        window.location.href = data.redirect;
                                    } else {
                                        if (data.error) {
                                            app.notification('error', data.error);
                                        } else {
                                            $('#issues-card').html(data.html);
                                            app.bootstrap_select();
                                            app.tooltip_popover();
                                        }
                                    }
                                },
                                complete: function () {
                                    app.card.loading.finish('#issues-card');
                                },
                                error: function (jqXHR, exception) {
                                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                                }
                            });
                        }
                    }
                },
                complete: function () {
                    app.card.loading.finish('#issue-book-block .card');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $(document).on('click', '.lost-book', function (e) {
            e.preventDefault();
            var className, url, $this = $(this);
            var bookLost = $this.attr('data-lost');
            if (bookLost == 'true') {
                url = $this.attr('href').replace("[isLost]", 'false');
            } else {
                url = $this.attr('href').replace("[isLost]", 'true');
            }
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: url,
                beforeSend: function () {
                    app.card.loading.start('#issues-card');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            if (bookLost == 'true') {
                                $this.closest('tr').find('.book-status .badge').removeClass('badge-danger').text('');
                                $this.attr('data-lost', 'false');
                                $this.attr('data-original-title', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book Is Lost<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                            } else {
                                $this.closest('tr').find('.book-status .badge').addClass('badge-danger').text('<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
lost<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                                $this.attr('data-lost', 'true');
                                $this.attr('data-original-title', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book Not Lost<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                            }
                        }
                    }
                },
                complete: function () {
                    app.card.loading.finish('#issues-card');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $(document).on('click', '.return-book', function (e) {
            e.preventDefault();
            var $this = $(this);
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: $this.attr('href'),
                beforeSend: function () {
                    app.card.loading.start('#issues-card');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            $this.closest('tr').find('.book-returned-date').text(data.returnDate);
                            $this.closest('tr').find('.book-status .badge').addClass('badge-success').text('<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
returned<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                            $this.tooltip('hide').remove();
                        }
                    }
                },
                complete: function () {
                    app.card.loading.finish('#issues-card');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $(document).on('click', '.remove-book', function (e) {
            e.preventDefault();
            $(this).closest('tr').remove();
            if ($('#issue-result tbody tr').length < 1) {
                $('#issue-result').addClass('d-none');
            }
        });
        $(document).on('click', '.delete-issue', function (e) {
            var url = $(this).attr('data-url');
            var row = $(this).closest('tr');
            $.ajax({
                dataType: 'json',
                type: 'POST',
                url: url,
                beforeSend: function () {
                    app.card.loading.start('#issues-card');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            app.notification('success', data.success);
                            $(row).remove();
                        }
                    }
                },
                complete: function () {
                    app.card.loading.finish('#issues-card');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $(document).on('change', '#countPerPage', function (e) {
            var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("issueListView");?>
';
            $.ajax({
                type: "POST",
                url: url,
                data: $('#books-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order'),
                dataType: 'json',
                beforeSend: function () {
                    app.card.loading.start('#issues-card');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            $('#issues-card').html(data.html);
                            app.bootstrap_select();
                            app.tooltip_popover();
                        }
                    }
                },
                complete: function () {
                    app.card.loading.finish('#issues-card');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $(document).on('change', '#books-sort', function (e) {
            var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("issueListView");?>
';
            $.ajax({
                type: "POST",
                url: url,
                data: $('#books-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order'),
                dataType: 'json',
                beforeSend: function () {
                    app.card.loading.start('#issues-card');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            $('#issues-card').html(data.html);
                            app.bootstrap_select();
                            app.tooltip_popover();
                        }
                    }
                },
                complete: function () {
                    app.card.loading.finish('#issues-card');
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                }
            });
        });
        $(document).on('click', '.ajax-page', function (e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                dataType: 'json',
                data: $('#books-sort, #countPerPage').serialize() + '&sortOrder=' + $('option:selected', '#books-sort').attr('data-order'),
                url: $(this).attr('href'),
                beforeSend: function () {
                    app.card.loading.start('#issues-card');
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            $('#issues-card').html(data.html);
                            app.bootstrap_select();
                            app.tooltip_popover();
                        }
                    }
                },
                complete: function () {
                    app.card.loading.finish('#issues-card');
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
