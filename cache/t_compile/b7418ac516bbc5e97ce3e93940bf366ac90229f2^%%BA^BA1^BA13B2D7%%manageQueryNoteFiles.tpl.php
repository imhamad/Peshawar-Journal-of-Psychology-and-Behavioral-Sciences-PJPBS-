<?php /* Smarty version 2.6.25-dev, created on 2019-03-11 06:20:28
         compiled from controllers/grid/files/query/manageQueryNoteFiles.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'controllers/grid/files/query/manageQueryNoteFiles.tpl', 19, false),array('function', 'url', 'controllers/grid/files/query/manageQueryNoteFiles.tpl', 22, false),array('function', 'csrf', 'controllers/grid/files/query/manageQueryNoteFiles.tpl', 23, false),array('function', 'load_url_in_div', 'controllers/grid/files/query/manageQueryNoteFiles.tpl', 27, false),array('function', 'fbvFormButtons', 'controllers/grid/files/query/manageQueryNoteFiles.tpl', 30, false),array('block', 'fbvFormArea', 'controllers/grid/files/query/manageQueryNoteFiles.tpl', 24, false),array('block', 'fbvFormSection', 'controllers/grid/files/query/manageQueryNoteFiles.tpl', 25, false),array('modifier', 'assign', 'controllers/grid/files/query/manageQueryNoteFiles.tpl', 26, false),)), $this); ?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#manageQueryNoteFilesForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<!-- Current query files -->
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.submission.query.manageQueryNoteFilesDescription"), $this);?>
</p>

<div id="existingFilesContainer">
	<form class="pkp_form" id="manageQueryNoteFilesForm" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('component' => "grid.files.query.ManageQueryNoteFilesGridHandler",'op' => 'updateQueryNoteFiles','params' => $this->_tpl_vars['actionArgs'],'submissionId' => $this->_tpl_vars['submissionId'],'queryId' => $this->_tpl_vars['queryId'],'noteId' => $this->_tpl_vars['noteId'],'stageId' => @WORKFLOW_STAGE_ID_EDITING), $this);?>
" method="post">
		<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

		<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'manageQueryNoteFiles')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.query.ManageQueryNoteFilesGridHandler",'op' => 'fetchGrid','params' => $this->_tpl_vars['actionArgs'],'submissionId' => $this->_tpl_vars['submissionId'],'queryId' => $this->_tpl_vars['queryId'],'noteId' => $this->_tpl_vars['noteId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'manageQueryNoteFilesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'manageQueryNoteFilesGridUrl'));?>

				<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'manageQueryNoteFilesGrid','url' => $this->_tpl_vars['manageQueryNoteFilesGridUrl']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

			<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array(), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	</form>
</div>