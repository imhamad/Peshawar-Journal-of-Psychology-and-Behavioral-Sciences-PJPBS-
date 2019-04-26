<?php /* Smarty version 2.6.25-dev, created on 2019-03-05 05:51:33
         compiled from controllers/modals/editorDecision/form/sendReviewsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'json_encode', 'controllers/modals/editorDecision/form/sendReviewsForm.tpl', 21, false),array('modifier', 'escape', 'controllers/modals/editorDecision/form/sendReviewsForm.tpl', 34, false),array('modifier', 'assign', 'controllers/modals/editorDecision/form/sendReviewsForm.tpl', 88, false),array('function', 'url', 'controllers/modals/editorDecision/form/sendReviewsForm.tpl', 32, false),array('function', 'csrf', 'controllers/modals/editorDecision/form/sendReviewsForm.tpl', 33, false),array('function', 'fbvElement', 'controllers/modals/editorDecision/form/sendReviewsForm.tpl', 49, false),array('function', 'translate', 'controllers/modals/editorDecision/form/sendReviewsForm.tpl', 55, false),array('function', 'load_url_in_div', 'controllers/modals/editorDecision/form/sendReviewsForm.tpl', 89, false),array('function', 'fbvFormButtons', 'controllers/modals/editorDecision/form/sendReviewsForm.tpl', 93, false),array('block', 'fbvFormSection', 'controllers/modals/editorDecision/form/sendReviewsForm.tpl', 47, false),)), $this); ?>
<script type="text/javascript">
	$(function() {
		$('#sendReviews').pkpHandler(
			'$.pkp.controllers.modals.editorDecision.form.EditorDecisionFormHandler',
			{
				<?php if ($this->_tpl_vars['revisionsEmail']): ?>
					revisionsEmail: <?php echo ((is_array($_tmp=$this->_tpl_vars['revisionsEmail'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
,
				<?php endif; ?>
				<?php if ($this->_tpl_vars['resubmitEmail']): ?>
					resubmitEmail: <?php echo ((is_array($_tmp=$this->_tpl_vars['resubmitEmail'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
,
				<?php endif; ?>
				peerReviewUrl: <?php echo ((is_array($_tmp=$this->_tpl_vars['peerReviewUrl'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>

			}
		);
	});
</script>

<form class="pkp_form" id="sendReviews" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => $this->_tpl_vars['saveFormOperation']), $this);?>
" >
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="stageId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['stageId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<input type="hidden" name="reviewRoundId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewRoundId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />

		<?php if ($this->_tpl_vars['decision'] != @SUBMISSION_EDITOR_DECISION_PENDING_REVISIONS && $this->_tpl_vars['decision'] != @SUBMISSION_EDITOR_DECISION_RESUBMIT): ?>
		<input type="hidden" name="decision" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['decision'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<?php else: ?>
		<?php if ($this->_tpl_vars['decision'] == @SUBMISSION_EDITOR_DECISION_PENDING_REVISIONS): ?>
			<?php $this->assign('checkedRevisions', '1'); ?>
		<?php elseif ($this->_tpl_vars['decision'] == @SUBMISSION_EDITOR_DECISION_RESUBMIT): ?>
			<?php $this->assign('checkedResubmit', '1'); ?>
		<?php endif; ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "editor.review.newReviewRound")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<ul class="checkbox_and_radiobutton">
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','id' => 'decisionRevisions','name' => 'decision','value' => @SUBMISSION_EDITOR_DECISION_PENDING_REVISIONS,'checked' => $this->_tpl_vars['checkedRevisions'],'label' => "editor.review.NotifyAuthorRevisions"), $this);?>

				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','id' => 'decisionResubmit','name' => 'decision','value' => @SUBMISSION_EDITOR_DECISION_RESUBMIT,'checked' => $this->_tpl_vars['checkedResubmit'],'label' => "editor.review.NotifyAuthorResubmit"), $this);?>

			</ul>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>

	<?php ob_start(); ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.submissionReview.sendEmail",'authorName' => $this->_tpl_vars['authorName']), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('sendEmailLabel', ob_get_contents());ob_end_clean(); ?>
	<?php if ($this->_tpl_vars['skipEmail']): ?>
		<?php $this->assign('skipEmailSkip', true); ?>
	<?php else: ?>
		<?php $this->assign('skipEmailSend', true); ?>
	<?php endif; ?>
	<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "common.sendEmail")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<ul class="checkbox_and_radiobutton">
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','id' => "skipEmail-send",'name' => 'skipEmail','value' => '0','checked' => $this->_tpl_vars['skipEmailSend'],'label' => $this->_tpl_vars['sendEmailLabel'],'translate' => false), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','id' => "skipEmail-skip",'name' => 'skipEmail','value' => '1','checked' => $this->_tpl_vars['skipEmailSkip'],'label' => "editor.submissionReview.skipEmail"), $this);?>

		</ul>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<div id="sendReviews-emailContent">
				<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'personalMessage')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','name' => 'personalMessage','id' => 'personalMessage','value' => $this->_tpl_vars['personalMessage'],'rich' => true,'variables' => $this->_tpl_vars['allowedVariables'],'variablesType' => $this->_tpl_vars['allowedVariablesType']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

				<?php if ($this->_tpl_vars['reviewsAvailable']): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<a id="importPeerReviews" href="#" class="pkp_button">
					<span class="fa fa-plus" aria-hidden="true"></span>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.comments.addReviews"), $this);?>

				</a>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>
	</div>

		<?php if ($this->_tpl_vars['reviewRoundId']): ?>
		<div id="attachments" style="margin-top: 30px;">
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.attachment.EditorSelectableReviewAttachmentsGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'reviewAttachmentsGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'reviewAttachmentsGridUrl'));?>

			<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'reviewAttachmentsGridContainer','url' => $this->_tpl_vars['reviewAttachmentsGridUrl']), $this);?>

		</div>
	<?php endif; ?>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('submitText' => "editor.submissionReview.recordDecision"), $this);?>

</form>