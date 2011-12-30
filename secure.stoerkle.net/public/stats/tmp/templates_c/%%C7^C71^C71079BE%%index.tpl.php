<?php /* Smarty version 2.6.26, created on 2011-03-31 16:11:12
         compiled from /var/www/mail.stoerkle.net/public/stats/plugins/Live/templates/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/var/www/mail.stoerkle.net/public/stats/plugins/Live/templates/index.tpl', 49, false),)), $this); ?>
<?php echo '
<script type="text/javascript" charset="utf-8">

$(document).ready(function() {
	initSpy();
});

function initSpy()
{
	if($(\'#_spyTmp\').size() == 0) {
		//$(\'#visitsLive > div:gt(2)\').fadeEachDown(); // initial fade
		$(\'#visitsLive\').spy({
			limit: 10,
			ajax: \'index.php?module=Live&idSite='; ?>
<?php echo $this->_tpl_vars['idSite']; ?>
<?php if (! empty ( $this->_tpl_vars['liveTokenAuth'] )): ?>&token_auth=<?php echo $this->_tpl_vars['liveTokenAuth']; ?>
<?php endif; ?><?php echo '&action=getLastVisitsStart\',
			fadeLast: 2,
			isDupe: check_for_dupe,
			timeout: 8000,
			customParameterName: \'minTimestamp\',
			customParameterValueCallback: lastMinTimestamp,
			fadeInSpeed: 600,
			appendTo: \'div#content\'
		});
	}
}

//updates the numbers of total visits in startbox
function updateTotalVisits()
{
	$("#visitsTotal").load("index.php?module=Live&idSite='; ?>
<?php echo $this->_tpl_vars['idSite']; ?>
<?php if (! empty ( $this->_tpl_vars['liveTokenAuth'] )): ?>&token_auth=<?php echo $this->_tpl_vars['liveTokenAuth']; ?>
<?php endif; ?><?php echo '&action=ajaxTotalVisitors");
}
//updates the visit table, to refresh the already presented visitors pages
function updateVisitBox()
{
	$("#visitsLive").load("index.php?module=Live&idSite='; ?>
<?php echo $this->_tpl_vars['idSite']; ?>
<?php if (! empty ( $this->_tpl_vars['liveTokenAuth'] )): ?>&token_auth=<?php echo $this->_tpl_vars['liveTokenAuth']; ?>
<?php endif; ?><?php echo '&action=getLastVisitsStart");
}
</script>
'; ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "Live/templates/totalVisits.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id='visitsLive'>
<?php echo $this->_tpl_vars['visitors']; ?>

</div>

<div class="visitsLiveFooter">
	<a title="Pause Live!" href="javascript:void(0);" onclick="onClickPause();"><img id="pauseImage" border="0" src="plugins/Live/templates/images/pause_disabled.gif" /></a>
	<a title="Start Live!" href="javascript:void(0);" onclick="onClickPlay();"><img id="playImage" border="0" src="plugins/Live/templates/images/play.gif" /></a>
	<?php if (! $this->_tpl_vars['disableLink']): ?>
		&nbsp; <a class="rightLink" href="javascript:broadcast.propagateAjax('module=Live&action=getVisitorLog')"><?php echo ((is_array($_tmp='Live_LinkVisitorLog')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a>
	<?php endif; ?>
</div>