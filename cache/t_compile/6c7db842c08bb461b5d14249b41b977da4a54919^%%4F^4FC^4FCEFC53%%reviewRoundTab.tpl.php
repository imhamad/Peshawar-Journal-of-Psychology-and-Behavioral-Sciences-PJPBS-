<?php /* Smarty version 2.6.25-dev, created on 2019-03-05 09:52:24
         compiled from authorDashboard/reviewRoundTab.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'iterate', 'authorDashboard/reviewRoundTab.tpl', 24, false),array('function', 'url', 'authorDashboard/reviewRoundTab.tpl', 25, false),array('function', 'translate', 'authorDashboard/reviewRoundTab.tpl', 25, false),)), $this); ?>
<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#<?php echo $this->_tpl_vars['reviewRoundTabsId']; ?>
').pkpHandler(
			'$.pkp.controllers.TabHandler',
			{
				<?php $this->assign('roundIndex', $this->_tpl_vars['lastReviewRoundNumber']-1); ?>
				selected: <?php echo $this->_tpl_vars['roundIndex']; ?>

			}
		);
	});
</script>
<div id="<?php echo $this->_tpl_vars['reviewRoundTabsId']; ?>
" class="pkp_controllers_tab">
	<ul>
		<?php $this->_tag_stack[] = array('iterate', array('from' => 'reviewRounds','item' => 'reviewRound')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.authorDashboard.AuthorDashboardReviewRoundTabHandler",'op' => 'fetchReviewRoundInfo','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => $this->_tpl_vars['reviewRound']->getStageId(),'reviewRoundId' => $this->_tpl_vars['reviewRound']->getId(),'escape' => false), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.round",'round' => $this->_tpl_vars['reviewRound']->getRound()), $this);?>
</a></li>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	</ul>
</div>