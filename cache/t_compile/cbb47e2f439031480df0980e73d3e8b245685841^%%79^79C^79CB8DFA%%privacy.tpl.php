<?php /* Smarty version 2.6.25-dev, created on 2019-02-28 19:18:37
         compiled from frontend/pages/privacy.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/header.tpl", 'smarty_include_vars' => array('pageTitle' => "manager.setup.privacyStatement")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="page page_privacy">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/breadcrumbs.tpl", 'smarty_include_vars' => array('currentTitleKey' => "manager.setup.privacyStatement")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php echo $this->_tpl_vars['currentContext']->getLocalizedSetting('privacyStatement'); ?>

</div><!-- .page -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>