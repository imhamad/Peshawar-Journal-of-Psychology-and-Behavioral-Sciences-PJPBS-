<?php /* Smarty version 2.6.25-dev, created on 2019-03-05 09:52:25
         compiled from authorDashboard/submissionEmails.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'authorDashboard/submissionEmails.tpl', 14, false),array('function', 'url', 'authorDashboard/submissionEmails.tpl', 32, false),array('block', 'iterate', 'authorDashboard/submissionEmails.tpl', 17, false),array('modifier', 'escape', 'authorDashboard/submissionEmails.tpl', 23, false),array('modifier', 'json_encode', 'authorDashboard/submissionEmails.tpl', 30, false),array('modifier', 'date_format', 'authorDashboard/submissionEmails.tpl', 44, false),)), $this); ?>

<?php if ($this->_tpl_vars['submissionEmails'] && $this->_tpl_vars['submissionEmails']->getCount()): ?>

	<div class="pkp_submission_emails">
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "notification.notifications"), $this);?>
</h3>

		<ul>
			<?php $this->_tag_stack[] = array('iterate', array('from' => 'submissionEmails','item' => 'submissionEmail')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

				<?php ob_start(); ?>submissionEmail-<?php echo $this->_tpl_vars['submissionEmail']->getId(); ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('submissionEmailLinkId', ob_get_contents());ob_end_clean(); ?>
				<script type="text/javascript">
					// Initialize JS handler.
					$(function() {
						$('#<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionEmailLinkId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
').pkpHandler(
							'$.pkp.pages.authorDashboard.SubmissionEmailHandler',
							{
																actionRequest: '$.pkp.classes.linkAction.ModalRequest',
								actionRequestOptions: {
									titleIcon: 'modal_information',
									title: <?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "notification.notifications"), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
									modalHandler: '$.pkp.controllers.modal.AjaxModalHandler',
									url: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'authorDashboard','op' => 'readSubmissionEmail','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => $this->_tpl_vars['stageId'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'submissionEmailId' => $this->_tpl_vars['submissionEmail']->getId(),'escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>

								}
							}
						);
					});
				</script>

				<li>
					<span class="message">
						<a href="#" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionEmailLinkId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['submissionEmail']->getSubject())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>
					</span>
					<span class="date">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionEmail']->getDateSent())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>

					</span>
				</li>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		</ul>
	</div>
<?php endif; ?>