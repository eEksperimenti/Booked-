<?php /* Smarty version Smarty-3.1.16, created on 2015-07-15 17:16:10
         compiled from "/opt/lampp/htdocs/booked/tpl/Dashboard/resource_availability.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70405541155a6793a013194-55277731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95d24894822c9b17b4f34eb1ccb2602fe7069099' => 
    array (
      0 => '/opt/lampp/htdocs/booked/tpl/Dashboard/resource_availability.tpl',
      1 => 1435073766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70405541155a6793a013194-55277731',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Available' => 0,
    'i' => 0,
    'Timezone' => 0,
    'Path' => 0,
    'Unavailable' => 0,
    'UnavailableAllDay' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55a6793a0a4d49_90452083',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a6793a0a4d49_90452083')) {function content_55a6793a0a4d49_90452083($_smarty_tpl) {?>

<div class="dashboard availabilityDashboard" id="availabilityDashboard">
	<div class="dashboardHeader">
		<a href="javascript:void(0);" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ShowHide'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ResourceAvailability"),$_smarty_tpl);?>
</a>
	</div>
	<div class="dashboardContents">
		<div class="header"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Available'),$_smarty_tpl);?>
</div>
		<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Available']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
			<div class="availabilityItem">
				<div class="resourceName">
					<a href="#" resource-id="<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
" class="resourceNameSelector"><?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceName();?>
</a>
				</div>
				<div class="availability">

					<?php if ($_smarty_tpl->tpl_vars['i']->value->NextTime()!=null) {?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AvailableUntil'),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['i']->value->NextTime(),'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'dashboard'),$_smarty_tpl);?>

					<?php } else { ?>
						<span class="no-data"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllNoUpcomingReservations','args'=>30),$_smarty_tpl);?>
 </span>
					<?php }?>
				</div>
				<div class="inline">
					<a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::RESOURCE_ID;?>
=<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CreateReservation'),$_smarty_tpl);?>
</a>
				</div>
			</div>
			<?php }
if (!$_smarty_tpl->tpl_vars['i']->_loop) {
?>
			<div class="no-data"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</div>
		<?php } ?>

		<div class="header"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Unavailable'),$_smarty_tpl);?>
</div>
		<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Unavailable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
			<div class="availabilityItem">
				<div class="resourceName">
					<a href="#" resource-id="<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
" class="resourceNameSelector"><?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceName();?>
</a>
				</div>
				<div class="availability">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AvailableBeginningAt'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['i']->value->ReservationEnds(),'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'dashboard'),$_smarty_tpl);?>

				</div>
				<div class="inline">
					<a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::RESOURCE_ID;?>
=<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
&<?php echo QueryStringKeys::START_DATE;?>
=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['i']->value->ReservationEnds(),'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'url_full'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CreateReservation'),$_smarty_tpl);?>
</a>
				</div>
			</div>
			<?php }
if (!$_smarty_tpl->tpl_vars['i']->_loop) {
?>
			<div class="no-data"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</div>
		<?php } ?>

		<div class="header"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UnavailableAllDay'),$_smarty_tpl);?>
</div>
		<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['UnavailableAllDay']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
			<div class="availabilityItem">
				<div class="resourceName">
					<a href="#" resource-id="<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
" class="resourceNameSelector"><?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceName();?>
</a>
				</div>
				<div class="availability">
					Available At <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['i']->value->ReservationEnds(),'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'dashboard'),$_smarty_tpl);?>

				</div>
				<div class="inline">
					<a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::RESOURCE_ID;?>
=<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
&<?php echo QueryStringKeys::START_DATE;?>
=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['i']->value->ReservationEnds(),'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'url_full'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CreateReservation'),$_smarty_tpl);?>
</a>
				</div>
			</div>
			<?php }
if (!$_smarty_tpl->tpl_vars['i']->_loop) {
?>
			<div class="no-data"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</div>
		<?php } ?>
	</div>
</div><?php }} ?>
