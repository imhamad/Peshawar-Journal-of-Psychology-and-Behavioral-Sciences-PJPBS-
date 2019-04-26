<?php /* Smarty version 2.6.25-dev, created on 2019-03-05 10:03:31
         compiled from controllers/grid/queries/readQuery.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/queries/readQuery.tpl', 16, false),array('function', 'translate', 'controllers/grid/queries/readQuery.tpl', 25, false),array('function', 'load_url_in_div', 'controllers/grid/queries/readQuery.tpl', 33, false),array('modifier', 'json_encode', 'controllers/grid/queries/readQuery.tpl', 16, false),array('modifier', 'assign', 'controllers/grid/queries/readQuery.tpl', 32, false),)), $this); ?>
<script>
	$(function() {
		$('#readQueryContainer').pkpHandler(
			'$.pkp.controllers.grid.queries.ReadQueryHandler',
			{
				fetchNoteFormUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => $this->_tpl_vars['queryNotesGridHandlerName'],'op' => 'addNote','params' => $this->_tpl_vars['requestArgs'],'queryId' => $this->_tpl_vars['query']->getId(),'escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
				fetchParticipantsListUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.queries.QueriesGridHandler",'op' => 'participants','params' => $this->_tpl_vars['requestArgs'],'queryId' => $this->_tpl_vars['query']->getId(),'escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>

			}
		);
	});
</script>

<div id="readQueryContainer" class="pkp_controllers_query">
    <h4>
        <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.submission.stageParticipants"), $this);?>

		<?php if ($this->_tpl_vars['editAction']): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['editAction'],'contextId' => 'editQuery')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
    </h4>
    <ul id="participantsListPlaceholder" class="participants"></ul>

	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => $this->_tpl_vars['queryNotesGridHandlerName'],'op' => 'fetchGrid','params' => $this->_tpl_vars['requestArgs'],'queryId' => $this->_tpl_vars['query']->getId(),'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'queryNotesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'queryNotesGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'queryNotesGrid','url' => $this->_tpl_vars['queryNotesGridUrl']), $this);?>


    <div class="openNoteForm add_note">
        <span class="pkp_spinner"></span>
        <a href="#">
            <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.query.addNote"), $this);?>

        </a>
    </div>

	<div id="newNotePlaceholder"></div>
</div>