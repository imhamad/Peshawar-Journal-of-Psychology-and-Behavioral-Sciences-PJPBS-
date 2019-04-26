<?php /* Smarty version 2.6.25-dev, created on 2019-03-05 09:52:25
         compiled from authorDashboard/reviewRoundInfo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'authorDashboard/reviewRoundInfo.tpl', 12, false),array('modifier', 'assign', 'authorDashboard/reviewRoundInfo.tpl', 19, false),array('function', 'url', 'authorDashboard/reviewRoundInfo.tpl', 19, false),array('function', 'load_url_in_div', 'authorDashboard/reviewRoundInfo.tpl', 20, false),)), $this); ?>

<!--  Display round status -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => ((is_array($_tmp='reviewRoundNotification_')) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['reviewRoundId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['reviewRoundId'])),'requestOptions' => $this->_tpl_vars['reviewRoundNotificationRequestOptions'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!-- Display editor's message to the author -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "authorDashboard/submissionEmails.tpl", 'smarty_include_vars' => array('submissionEmails' => $this->_tpl_vars['submissionEmails'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['showReviewerGrid']): ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.users.reviewer.AuthorReviewerGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => $this->_tpl_vars['stageId'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'reviewersGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'reviewersGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => ((is_array($_tmp="reviewersGrid-round_")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['reviewRoundId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['reviewRoundId'])),'url' => $this->_tpl_vars['reviewersGridUrl']), $this);?>

<?php endif; ?>

<!-- Display review attachments grid -->
<?php if ($this->_tpl_vars['showReviewAttachments']): ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.attachment.AuthorReviewAttachmentsGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => $this->_tpl_vars['stageId'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'reviewAttachmentsGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'reviewAttachmentsGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => "reviewAttachmentsGridContainer-".($this->_tpl_vars['stageId'])."-".($this->_tpl_vars['reviewRoundId']),'url' => $this->_tpl_vars['reviewAttachmentsGridUrl']), $this);?>


	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.review.AuthorReviewRevisionsGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => $this->_tpl_vars['stageId'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'revisionsGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'revisionsGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => "revisionsGrid-".($this->_tpl_vars['stageId'])."-".($this->_tpl_vars['reviewRoundId']),'url' => $this->_tpl_vars['revisionsGridUrl']), $this);?>

<?php endif; ?>