<?php /* Smarty version Smarty-3.1.16, created on 2015-11-25 18:02:22
         compiled from "/var/www/html/remote/tpl/Controls/Attributes/SelectList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20755674885655e99e276e31-09602542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '829a329fe03ede6f09cd7dfaed0b3bc0a398a0c8' => 
    array (
      0 => '/var/www/html/remote/tpl/Controls/Attributes/SelectList.tpl',
      1 => 1437386691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20755674885655e99e276e31-09602542',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'attributeName' => 0,
    'attribute' => 0,
    'align' => 0,
    'readonly' => 0,
    'class' => 0,
    'searchmode' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5655e99e29ded7_92606268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5655e99e29ded7_92606268')) {function content_5655e99e29ded7_92606268($_smarty_tpl) {?>
<label class="customAttribute" for="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value->Label(), ENT_QUOTES, 'UTF-8', true);?>
:</label>
<?php if ($_smarty_tpl->tpl_vars['align']->value=='vertical') {?>
<br/>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['readonly']->value) {?>
<span class="attributeValue <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value->Value(), ENT_QUOTES, 'UTF-8', true);?>
</span>
<?php } else { ?>
<select id="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
" class="customAttribute textbox <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
	<?php if (!$_smarty_tpl->tpl_vars['attribute']->value->Required()||$_smarty_tpl->tpl_vars['searchmode']->value) {?>
	<option value="">--</option>
	<?php }?>
	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attribute']->value->PossibleValueList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
	<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['attribute']->value->Value()==$_smarty_tpl->tpl_vars['value']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
	<?php } ?>
</select>
<?php }?>
<?php }} ?>
