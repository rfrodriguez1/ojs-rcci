<?php
/* Smarty version 3.1.39, created on 2024-03-25 15:30:46
  from 'app:controllersnotificationin' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6601d0e68522e2_35615604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a308e60c5c6063ff7e1cc3cb172608528aed0c6' => 
    array (
      0 => 'app:controllersnotificationin',
      1 => 1664925130,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6601d0e68522e2_35615604 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="pkp_notification_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['notificationId']->value ));?>
"<?php if ($_smarty_tpl->tpl_vars['notificationStyleClass']->value) {?> class="<?php echo $_smarty_tpl->tpl_vars['notificationStyleClass']->value;?>
"<?php }?>>
	<?php if ($_smarty_tpl->tpl_vars['notificationTitle']->value) {?>
		<span class="title">
			<?php echo $_smarty_tpl->tpl_vars['notificationTitle']->value;?>

		</span>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['notificationContents']->value) {?>
		<span class="description">
			<?php echo $_smarty_tpl->tpl_vars['notificationContents']->value;?>

		</span>
	<?php }?>
</div>
<?php }
}
