<?php /* Smarty version 2.6.25-dev, created on 2019-03-11 06:16:21
         compiled from controllers/grid/settings/user/form/userDetailsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/settings/user/form/userDetailsForm.tpl', 16, false),array('function', 'translate', 'controllers/grid/settings/user/form/userDetailsForm.tpl', 17, false),array('function', 'csrf', 'controllers/grid/settings/user/form/userDetailsForm.tpl', 28, false),array('function', 'fbvElement', 'controllers/grid/settings/user/form/userDetailsForm.tpl', 50, false),array('function', 'fbvFormButtons', 'controllers/grid/settings/user/form/userDetailsForm.tpl', 65, false),array('modifier', 'json_encode', 'controllers/grid/settings/user/form/userDetailsForm.tpl', 16, false),array('modifier', 'escape', 'controllers/grid/settings/user/form/userDetailsForm.tpl', 37, false),array('modifier', 'uniqid', 'controllers/grid/settings/user/form/userDetailsForm.tpl', 56, false),array('block', 'fbvFormSection', 'controllers/grid/settings/user/form/userDetailsForm.tpl', 49, false),)), $this); ?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#userDetailsForm').pkpHandler('$.pkp.controllers.grid.settings.user.form.UserDetailsFormHandler',
			{
				fetchUsernameSuggestionUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "api.user.UserApiHandler",'op' => 'suggestUsername','firstName' => 'FIRST_NAME_DUMMY','lastName' => 'LAST_NAME_DUMMY','escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
				usernameSuggestionTextAlert: <?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "grid.user.mustProvideName"), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>

			}
		);
	});
</script>

<?php if (! $this->_tpl_vars['userId']): ?>
	<?php $this->assign('passwordRequired', 'true'); ?>
<?php endif; ?>
<form class="pkp_form" id="userDetailsForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.user.UserGridHandler",'op' => 'updateUser'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<div id="userDetailsFormContainer">
		<div id="userDetails" class="full left">
			<?php if ($this->_tpl_vars['userId']): ?>
				<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "grid.user.userDetails"), $this);?>
</h3>
			<?php else: ?>
				<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "grid.user.step1"), $this);?>
</h3>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['userId']): ?>
				<input type="hidden" id="userId" name="userId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['userId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
			<?php endif; ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'userDetailsFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>

		<?php if ($this->_tpl_vars['userId']): ?><?php $this->assign('disableSendNotifySection', true); ?><?php endif; ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/userDetails.tpl", 'smarty_include_vars' => array('disableAuthSourceSection' => "!".($this->_tpl_vars['authSourceOptions']),'disableSendNotifySection' => $this->_tpl_vars['disableSendNotifySection'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<?php if ($this->_tpl_vars['canCurrentUserGossip']): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "user.gossip",'description' => "user.gossip.description")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','name' => 'gossip','id' => 'gossip','rich' => true,'value' => $this->_tpl_vars['gossip']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>

		<?php if ($this->_tpl_vars['userId']): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php $this->assign('uuid', ((is_array($_tmp=((is_array($_tmp="")) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))); ?>
				<div id="userGroups-<?php echo $this->_tpl_vars['uuid']; ?>
">
					<script type="text/javascript">
						pkp.registry.init('userGroups-<?php echo $this->_tpl_vars['uuid']; ?>
', 'SelectListPanel', <?php echo $this->_tpl_vars['selectUserListData']; ?>
);
					</script>
				</div>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>
		<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>
		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array(), $this);?>

	</div>
</form>