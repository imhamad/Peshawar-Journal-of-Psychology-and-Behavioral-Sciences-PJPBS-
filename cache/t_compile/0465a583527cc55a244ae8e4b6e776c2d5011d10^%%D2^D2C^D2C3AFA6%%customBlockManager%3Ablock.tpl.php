<?php /* Smarty version 2.6.25-dev, created on 2019-02-28 17:14:29
         compiled from plugins/plugins/generic/customBlockManager/generic/customBlockManager:block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'plugins/plugins/generic/customBlockManager/generic/customBlockManager:block.tpl', 11, false),)), $this); ?>
<div class="pkp_block block_custom" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['customBlockId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
">
	<div class="content">
		<?php echo $this->_tpl_vars['customBlockContent']; ?>

	</div>
</div>