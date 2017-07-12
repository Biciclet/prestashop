<?php /* Smarty version Smarty-3.1.19, created on 2017-07-12 13:46:48
         compiled from "/var/www/html/prestashop/adminJolieBoutique/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131116507659660c2825b4f0-36539922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a1fdc3fb5f6e494548f6605a796dfd8c88272b0' => 
    array (
      0 => '/var/www/html/prestashop/adminJolieBoutique/themes/default/template/content.tpl',
      1 => 1499759179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131116507659660c2825b4f0-36539922',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59660c2826f7f4_85477146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59660c2826f7f4_85477146')) {function content_59660c2826f7f4_85477146($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
