<?php /* Smarty version 2.6.25-dev, created on 2019-03-07 04:44:24
         compiled from core:submission/form/step1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'core:submission/form/step1.tpl', 17, false),array('function', 'csrf', 'core:submission/form/step1.tpl', 18, false),array('function', 'fbvElement', 'core:submission/form/step1.tpl', 36, false),array('function', 'translate', 'core:submission/form/step1.tpl', 69, false),array('function', 'fbvFormButtons', 'core:submission/form/step1.tpl', 101, false),array('modifier', 'escape', 'core:submission/form/step1.tpl', 19, false),array('modifier', 'concat', 'core:submission/form/step1.tpl', 52, false),array('block', 'fbvFormArea', 'core:submission/form/step1.tpl', 24, false),array('block', 'fbvFormSection', 'core:submission/form/step1.tpl', 34, false),)), $this); ?>
<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#submitStep1Form').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<form class="pkp_form" id="submitStep1Form" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveStep','path' => $this->_tpl_vars['submitStep']), $this);?>
">
<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

<?php if ($this->_tpl_vars['submissionId']): ?><input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/><?php endif; ?>
	<input type="hidden" name="submissionChecklist" value="1"/>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'submitStep1FormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'submissionStep1')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

	<?php echo $this->_tpl_vars['additionalFormContent1']; ?>


	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "core:submission/submissionLocale.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php echo $this->_tpl_vars['additionalFormContent2']; ?>


		<?php if ($this->_tpl_vars['currentContext']->getLocalizedSetting('submissionChecklist')): ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => 'true','label' => "submission.submit.submissionChecklist",'description' => "submission.submit.submissionChecklistDescription",'id' => 'pkp_submissionChecklist')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $_from = $this->_tpl_vars['currentContext']->getLocalizedSetting('submissionChecklist'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['checklist'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['checklist']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['checklistId'] => $this->_tpl_vars['checklistItem']):
        $this->_foreach['checklist']['iteration']++;
?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => "checklist-".($this->_tpl_vars['checklistId']),'required' => true,'value' => 1,'label' => $this->_tpl_vars['checklistItem']['content'],'translate' => false,'checked' => false), $this);?>

			<?php endforeach; endif; unset($_from); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'commentsToEditor','title' => "submission.submit.coverNote")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','name' => 'commentsToEditor','id' => 'commentsToEditor','value' => $this->_tpl_vars['commentsToEditor'],'rich' => true), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php if ($this->_tpl_vars['noExistingRoles']): ?>
		<?php if (count ( $this->_tpl_vars['userGroupOptions'] ) > 1): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "submission.submit.availableUserGroups",'description' => "submission.submit.availableUserGroupsDescription",'list' => true,'required' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php $_from = $this->_tpl_vars['userGroupOptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['userGroupId'] => $this->_tpl_vars['userGroupName']):
?>
					<?php if ($this->_tpl_vars['defaultGroup']->getId() == $this->_tpl_vars['userGroupId']): ?><?php $this->assign('checked', true); ?><?php else: ?><?php $this->assign('checked', false); ?><?php endif; ?>
					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','id' => ((is_array($_tmp='userGroup')) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['userGroupId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['userGroupId'])),'name' => 'userGroupId','value' => $this->_tpl_vars['userGroupId'],'checked' => $this->_tpl_vars['checked'],'label' => $this->_tpl_vars['userGroupName'],'translate' => false), $this);?>

				<?php endforeach; endif; unset($_from); ?>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php else: ?>
			<?php $_from = $this->_tpl_vars['userGroupOptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['userGroupId'] => $this->_tpl_vars['userGroupName']):
?>
				<?php ob_start(); ?><?php echo $this->_tpl_vars['userGroupId']; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('onlyUserGroupId', ob_get_contents());ob_end_clean(); ?>
			<?php endforeach; endif; unset($_from); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "submission.submit.contactConsent",'list' => true,'required' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'userGroupId','required' => true,'value' => $this->_tpl_vars['onlyUserGroupId'],'label' => "submission.submit.contactConsentDescription"), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>

		<?php else: ?>
		<?php if (count ( $this->_tpl_vars['userGroupOptions'] ) > 1): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "submission.submit.availableUserGroups",'list' => true,'required' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php if ($this->_tpl_vars['managerGroups']): ?>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => 'submission.submit.userGroupDescriptionManagers','managerGroups' => $this->_tpl_vars['managerGroups']), $this);?>

				<?php else: ?>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => 'submission.submit.userGroupDescription'), $this);?>

				<?php endif; ?>
				<?php $_from = $this->_tpl_vars['userGroupOptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['userGroupId'] => $this->_tpl_vars['userGroupName']):
?>
					<?php if ($this->_tpl_vars['defaultGroup']->getId() == $this->_tpl_vars['userGroupId']): ?><?php $this->assign('checked', true); ?><?php else: ?><?php $this->assign('checked', false); ?><?php endif; ?>
					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','id' => ((is_array($_tmp='userGroup')) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['userGroupId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['userGroupId'])),'name' => 'userGroupId','value' => $this->_tpl_vars['userGroupId'],'checked' => $this->_tpl_vars['checked'],'label' => $this->_tpl_vars['userGroupName'],'translate' => false), $this);?>

				<?php endforeach; endif; unset($_from); ?>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php elseif (count ( $this->_tpl_vars['userGroupOptions'] ) == 1): ?>
			<?php $_from = $this->_tpl_vars['userGroupOptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['userGroupId'] => $this->_tpl_vars['authorUserGroupName']):
?><?php $this->assign('userGroupId', $this->_tpl_vars['userGroupId']); ?><?php endforeach; endif; unset($_from); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'hidden','id' => 'userGroupId','value' => $this->_tpl_vars['userGroupId']), $this);?>

		<?php endif; ?>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['copyrightNoticeAgree']): ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "submission.submit.copyrightNoticeAgreementLabel")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_tpl_vars['copyrightNotice']; ?>

			<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'copyrightNoticeAgree','required' => true,'value' => 1,'label' => "submission.submit.copyrightNoticeAgree",'checked' => $this->_tpl_vars['submissionId']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php ob_start(); ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'about','op' => 'privacy'), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('privacyUrl', ob_get_contents());ob_end_clean(); ?>
		<?php ob_start(); ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.form.privacyConsent",'privacyUrl' => $this->_tpl_vars['privacyUrl']), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('privacyLabel', ob_get_contents());ob_end_clean(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'privacyConsent','required' => true,'value' => 1,'label' => $this->_tpl_vars['privacyLabel'],'translate' => false,'checked' => $this->_tpl_vars['privacyConsent']), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'step1Buttons','submitText' => "common.saveAndContinue"), $this);?>


	<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

</form>