<?php /* Smarty version 2.6.25-dev, created on 2019-03-11 07:33:12
         compiled from plugins/plugins/importexport/crossref/importexport/crossref:templates/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'plugins/plugins/importexport/crossref/importexport/crossref:templates/index.tpl', 14, false),array('modifier', 'translate', 'plugins/plugins/importexport/crossref/importexport/crossref:templates/index.tpl', 41, false),array('modifier', 'assign', 'plugins/plugins/importexport/crossref/importexport/crossref:templates/index.tpl', 47, false),array('modifier', 'default', 'plugins/plugins/importexport/crossref/importexport/crossref:templates/index.tpl', 81, false),array('function', 'translate', 'plugins/plugins/importexport/crossref/importexport/crossref:templates/index.tpl', 31, false),array('function', 'url', 'plugins/plugins/importexport/crossref/importexport/crossref:templates/index.tpl', 47, false),array('function', 'load_url_in_div', 'plugins/plugins/importexport/crossref/importexport/crossref:templates/index.tpl', 63, false),array('function', 'plugin_url', 'plugins/plugins/importexport/crossref/importexport/crossref:templates/index.tpl', 74, false),array('function', 'csrf', 'plugins/plugins/importexport/crossref/importexport/crossref:templates/index.tpl', 75, false),array('function', 'fbvElement', 'plugins/plugins/importexport/crossref/importexport/crossref:templates/index.tpl', 81, false),array('block', 'fbvFormArea', 'plugins/plugins/importexport/crossref/importexport/crossref:templates/index.tpl', 77, false),array('block', 'fbvFormSection', 'plugins/plugins/importexport/crossref/importexport/crossref:templates/index.tpl', 80, false),)), $this); ?>
<?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array('pageTitle' => "plugins.importexport.crossref.displayName")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<?php if (! empty ( $this->_tpl_vars['configurationErrors'] ) || ! ((is_array($_tmp=$this->_tpl_vars['currentContext']->getSetting('publisherInstitution'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)) || ! $this->_tpl_vars['exportArticles'] || ( ! $this->_tpl_vars['currentContext']->getSetting('onlineIssn') && ! $this->_tpl_vars['currentContext']->getSetting('printIssn') )): ?>
	<?php $this->assign('allowExport', false); ?>
<?php else: ?>
	<?php $this->assign('allowExport', true); ?>
<?php endif; ?>

<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#importExportTabs').pkpHandler('$.pkp.controllers.TabHandler');
	});
</script>
<div id="importExportTabs">
	<ul>
		<li><a href="#settings-tab"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.common.settings"), $this);?>
</a></li>
		<?php if ($this->_tpl_vars['allowExport']): ?>
			<li><a href="#exportSubmissions-tab"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.common.export.articles"), $this);?>
</a></li>
		<?php endif; ?>
	</ul>
	<div id="settings-tab">
		<?php if (! $this->_tpl_vars['allowExport']): ?>
			<div class="pkp_notification" id="crossrefConfigurationErrors">
				<?php $_from = $this->_tpl_vars['configurationErrors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['configurationError']):
?>
					<?php if ($this->_tpl_vars['configurationError'] == @DOI_EXPORT_CONFIG_ERROR_DOIPREFIX): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotificationContent.tpl", 'smarty_include_vars' => array('notificationId' => 'crossrefConfigurationErrors','notificationStyleClass' => 'notifyWarning','notificationTitle' => ((is_array($_tmp="plugins.importexport.common.missingRequirements")) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp)),'notificationContents' => ((is_array($_tmp="plugins.importexport.common.error.DOIsNotAvailable")) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php elseif ($this->_tpl_vars['configurationError'] == @EXPORT_CONFIG_ERROR_SETTINGS): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotificationContent.tpl", 'smarty_include_vars' => array('notificationId' => 'crossrefConfigurationErrors','notificationStyleClass' => 'notifyWarning','notificationTitle' => ((is_array($_tmp="plugins.importexport.common.missingRequirements")) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp)),'notificationContents' => ((is_array($_tmp="plugins.importexport.common.error.pluginNotConfigured")) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
				<?php if (! $this->_tpl_vars['currentContext']->getSetting('publisherInstitution')): ?>
					<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'management','op' => 'settings','path' => 'context','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'journalSettingsUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'journalSettingsUrl'));?>

					<?php ob_start(); ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.crossref.error.publisherNotConfigured",'journalSettingsUrl' => $this->_tpl_vars['journalSettingsUrl']), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('missingPublisherMessage', ob_get_contents());ob_end_clean(); ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotificationContent.tpl", 'smarty_include_vars' => array('notificationId' => 'crossrefConfigurationErrors','notificationStyleClass' => 'notifyWarning','notificationTitle' => ((is_array($_tmp="plugins.importexport.common.missingRequirements")) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp)),'notificationContents' => $this->_tpl_vars['missingPublisherMessage'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endif; ?>
				<?php if (! $this->_tpl_vars['currentContext']->getSetting('onlineIssn') && ! $this->_tpl_vars['currentContext']->getSetting('printIssn')): ?>
					<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'management','op' => 'settings','path' => 'context','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'journalSettingsUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'journalSettingsUrl'));?>

					<?php ob_start(); ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.crossref.error.issnNotConfigured",'journalSettingsUrl' => $this->_tpl_vars['journalSettingsUrl']), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('missingIssnMessage', ob_get_contents());ob_end_clean(); ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotificationContent.tpl", 'smarty_include_vars' => array('notificationId' => 'crossrefConfigurationErrors','notificationStyleClass' => 'notifyWarning','notificationTitle' => ((is_array($_tmp="plugins.importexport.common.missingRequirements")) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp)),'notificationContents' => $this->_tpl_vars['missingIssnMessage'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endif; ?>
				<?php if (! $this->_tpl_vars['exportArticles']): ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotificationContent.tpl", 'smarty_include_vars' => array('notificationId' => 'crossrefConfigurationErrors','notificationStyleClass' => 'notifyWarning','notificationTitle' => ((is_array($_tmp="plugins.importexport.common.missingRequirements")) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp)),'notificationContents' => ((is_array($_tmp="plugins.importexport.crossref.error.noDOIContentObjects")) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endif; ?>
			</div>
		<?php endif; ?>

		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.plugins.settingsPluginGridHandler",'op' => 'manage','plugin' => 'CrossRefExportPlugin','category' => 'importexport','verb' => 'index','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'crossrefSettingsGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'crossrefSettingsGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'crossrefSettingsGridContainer','url' => $this->_tpl_vars['crossrefSettingsGridUrl']), $this);?>

	</div>

	<?php if ($this->_tpl_vars['allowExport']): ?>
		<div id="exportSubmissions-tab">
			<script type="text/javascript">
				$(function() {
					// Attach the form handler.
					$('#exportSubmissionXmlForm').pkpHandler('$.pkp.controllers.form.FormHandler');
				});
			</script>
			<form id="exportSubmissionXmlForm" class="pkp_form" action="<?php echo $this->_plugins['function']['plugin_url'][0][0]->pluginUrl(array('path' => 'exportSubmissions'), $this);?>
" method="post">
				<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

				<input type="hidden" name="tab" value="exportSubmissions-tab" />
				<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'submissionsXmlForm')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.pubIds.PubIdExportSubmissionsListGridHandler",'op' => 'fetchGrid','plugin' => 'crossref','category' => 'importexport','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'submissionsListGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'submissionsListGridUrl'));?>

					<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'submissionsListGridContainer','url' => $this->_tpl_vars['submissionsListGridUrl']), $this);?>

					<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'validation','label' => "plugins.importexport.common.validation",'checked' => ((is_array($_tmp=@$this->_tpl_vars['validation'])) ? $this->_run_mod_handler('default', true, $_tmp, true) : smarty_modifier_default($_tmp, true))), $this);?>

					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					<?php if (! empty ( $this->_tpl_vars['actionNames'] )): ?>
						<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<ul class="export_actions">
							<?php $_from = $this->_tpl_vars['actionNames']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action'] => $this->_tpl_vars['actionName']):
?>
								<li class="export_action">
									<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'submit','label' => ($this->_tpl_vars['actionName']),'id' => ($this->_tpl_vars['action']),'name' => ($this->_tpl_vars['action']),'value' => '1','class' => ($this->_tpl_vars['action']),'translate' => false,'inline' => true), $this);?>

								</li>
							<?php endforeach; endif; unset($_from); ?>
						</ul>
						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					<?php endif; ?>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			</form>
			<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.crossref.statusLegend"), $this);?>
</p>
		</div>
	<?php endif; ?>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
