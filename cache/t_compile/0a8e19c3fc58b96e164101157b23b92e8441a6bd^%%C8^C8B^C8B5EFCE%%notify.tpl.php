<?php /* Smarty version 2.6.25-dev, created on 2019-03-05 10:04:30
         compiled from controllers/grid/users/stageParticipant/form/notify.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/users/stageParticipant/form/notify.tpl', 16, false),array('function', 'csrf', 'controllers/grid/users/stageParticipant/form/notify.tpl', 23, false),array('function', 'translate', 'controllers/grid/users/stageParticipant/form/notify.tpl', 29, false),array('function', 'fbvElement', 'controllers/grid/users/stageParticipant/form/notify.tpl', 33, false),array('function', 'fbvFormButtons', 'controllers/grid/users/stageParticipant/form/notify.tpl', 40, false),array('modifier', 'json_encode', 'controllers/grid/users/stageParticipant/form/notify.tpl', 16, false),array('modifier', 'escape', 'controllers/grid/users/stageParticipant/form/notify.tpl', 26, false),array('block', 'fbvFormArea', 'controllers/grid/users/stageParticipant/form/notify.tpl', 25, false),array('block', 'fbvFormSection', 'controllers/grid/users/stageParticipant/form/notify.tpl', 28, false),)), $this); ?>
<script type="text/javascript">
	// Attach the notification handler.
	$(function() {
		$('#notifyForm').pkpHandler(
			'$.pkp.controllers.grid.users.stageParticipant.form.StageParticipantNotifyHandler',
			{
				templateUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => 'grid.users.stageParticipant.StageParticipantGridHandler','op' => 'fetchTemplateBody','stageId' => $this->_tpl_vars['stageId'],'submissionId' => $this->_tpl_vars['submissionId'],'escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>

			}
		);
	});
</script>
<div id="informationCenterNotifyTab">
	<form class="pkp_form" id="notifyForm" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'sendNotification','stageId' => $this->_tpl_vars['stageId'],'submissionId' => $this->_tpl_vars['submissionId'],'escape' => false), $this);?>
" method="post">
		<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'notifyFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'notifyFormArea')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<input type="hidden" name="userId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['userId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>

			<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "stageParticipants.notify.startDiscussion")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "stageParticipants.notify.startDiscussion.description",'userFullName' => $this->_tpl_vars['userFullName']), $this);?>
</p>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

			<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "stageParticipants.notify.chooseMessage",'for' => 'template','size' => $this->_tpl_vars['fbvStyles']['size']['medium'])); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','from' => $this->_tpl_vars['templates'],'translate' => false,'id' => 'template','defaultValue' => "",'defaultLabel' => ""), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

			<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "stageParticipants.notify.message",'for' => 'message','required' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','id' => 'message','rich' => true,'required' => 'true'), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>
			<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'notifyButton','hideCancel' => true,'submitText' => "submission.stageParticipants.notify"), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	</form>
</div>