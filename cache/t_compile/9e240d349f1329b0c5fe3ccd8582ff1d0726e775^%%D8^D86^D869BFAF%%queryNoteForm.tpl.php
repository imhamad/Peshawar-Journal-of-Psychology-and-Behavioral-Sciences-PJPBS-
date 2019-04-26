<?php /* Smarty version 2.6.25-dev, created on 2019-03-05 10:04:00
         compiled from controllers/grid/queries/form/queryNoteForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/queries/form/queryNoteForm.tpl', 17, false),array('function', 'csrf', 'controllers/grid/queries/form/queryNoteForm.tpl', 24, false),array('function', 'fbvElement', 'controllers/grid/queries/form/queryNoteForm.tpl', 28, false),array('function', 'load_url_in_div', 'controllers/grid/queries/form/queryNoteForm.tpl', 33, false),array('function', 'fbvFormButtons', 'controllers/grid/queries/form/queryNoteForm.tpl', 36, false),array('modifier', 'json_encode', 'controllers/grid/queries/form/queryNoteForm.tpl', 17, false),array('modifier', 'assign', 'controllers/grid/queries/form/queryNoteForm.tpl', 32, false),array('block', 'fbvFormSection', 'controllers/grid/queries/form/queryNoteForm.tpl', 27, false),array('block', 'fbvFormArea', 'controllers/grid/queries/form/queryNoteForm.tpl', 31, false),)), $this); ?>
<script>
	// Attach the handler.
	$(function() {
		$('#noteForm').pkpHandler(
			'$.pkp.controllers.form.CancelActionAjaxFormHandler',
			{
				cancelUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'deleteNote','params' => $this->_tpl_vars['actionArgs'],'csrfToken' => $this->_tpl_vars['csrfToken'],'noteId' => $this->_tpl_vars['noteId'],'escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>

			}
		);
	});
</script>

<form class="pkp_form" id="noteForm" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'insertNote','params' => $this->_tpl_vars['actionArgs'],'noteId' => $this->_tpl_vars['noteId'],'escape' => false), $this);?>
" method="post">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'queryNoteFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "stageParticipants.notify.message",'for' => 'comment','required' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','id' => 'comment','rich' => true,'value' => $this->_tpl_vars['comment'],'required' => 'true'), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'queryNoteFilesArea')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.query.QueryNoteFilesGridHandler",'op' => 'fetchGrid','params' => $this->_tpl_vars['actionArgs'],'noteId' => $this->_tpl_vars['noteId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'queryNoteFilesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'queryNoteFilesGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'queryNoteFilesGrid','url' => $this->_tpl_vars['queryNoteFilesGridUrl']), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'addNoteButton'), $this);?>

</form>