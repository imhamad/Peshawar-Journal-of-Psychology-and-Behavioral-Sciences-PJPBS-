<?php /* Smarty version 2.6.25-dev, created on 2019-03-01 07:07:34
         compiled from controllers/grid/queries/form/queryForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'controllers/grid/queries/form/queryForm.tpl', 15, false),array('function', 'url', 'controllers/grid/queries/form/queryForm.tpl', 23, false),array('function', 'csrf', 'controllers/grid/queries/form/queryForm.tpl', 30, false),array('function', 'fbvElement', 'controllers/grid/queries/form/queryForm.tpl', 47, false),array('function', 'load_url_in_div', 'controllers/grid/queries/form/queryForm.tpl', 57, false),array('function', 'fbvFormButtons', 'controllers/grid/queries/form/queryForm.tpl', 62, false),array('modifier', 'escape', 'controllers/grid/queries/form/queryForm.tpl', 23, false),array('modifier', 'uniqid', 'controllers/grid/queries/form/queryForm.tpl', 36, false),array('modifier', 'assign', 'controllers/grid/queries/form/queryForm.tpl', 56, false),array('block', 'fbvFormSection', 'controllers/grid/queries/form/queryForm.tpl', 35, false),array('block', 'fbvFormArea', 'controllers/grid/queries/form/queryForm.tpl', 45, false),)), $this); ?>

 <?php if (! $this->_tpl_vars['hasParticipants']): ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.query.noParticipantOptions"), $this);?>

 <?php else: ?>
	<script>
		// Attach the handler.
		$(function() {
			$('#queryForm').pkpHandler(
				'$.pkp.controllers.form.CancelActionAjaxFormHandler',
				{
					cancelUrl: <?php if ($this->_tpl_vars['isNew']): ?>'<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'deleteQuery','queryId' => $this->_tpl_vars['queryId'],'csrfToken' => $this->_tpl_vars['csrfToken'],'params' => $this->_tpl_vars['actionArgs'],'escape' => false), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
'<?php else: ?>null<?php endif; ?>
				}
			);
		});
	</script>

	<form class="pkp_form" id="queryForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'updateQuery','queryId' => $this->_tpl_vars['queryId'],'params' => $this->_tpl_vars['actionArgs']), $this);?>
">
		<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>


		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'queryFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<?php if ($this->_tpl_vars['queryParticipantsListData']): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php $this->assign('uuid', ((is_array($_tmp=((is_array($_tmp="")) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))); ?>
				<div id="queryParticipants-<?php echo $this->_tpl_vars['uuid']; ?>
">
					<script type="text/javascript">
						pkp.registry.init('queryParticipants-<?php echo $this->_tpl_vars['uuid']; ?>
', 'SelectListPanel', <?php echo $this->_tpl_vars['queryParticipantsListData']; ?>
);
					</script>
				</div>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>

		<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'queryContentsArea')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "common.subject",'for' => 'subject','required' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'subject','value' => $this->_tpl_vars['subject'],'required' => 'true'), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

			<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "stageParticipants.notify.message",'for' => 'comment','required' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','id' => 'comment','rich' => true,'value' => $this->_tpl_vars['comment'],'required' => 'true'), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'queryNoteFilesArea')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.query.QueryNoteFilesGridHandler",'op' => 'fetchGrid','params' => $this->_tpl_vars['actionArgs'],'queryId' => $this->_tpl_vars['queryId'],'noteId' => $this->_tpl_vars['noteId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'queryNoteFilesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'queryNoteFilesGridUrl'));?>

			<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'queryNoteFilesGrid','url' => $this->_tpl_vars['queryNoteFilesGridUrl']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'addQueryButton'), $this);?>


	</form>
<?php endif; ?>