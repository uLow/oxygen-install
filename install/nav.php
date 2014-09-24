<?o('div.col-md-2.navigation')?>
	<h3 class="header">Installation steps</h3>
	<ul class="nav">
		<li class="active prepare"><a href="javascript:void(0)">Prepare</a></li>
		<li class="<?=($_SESSION['current_install_step'] == '_connectivity')?'active':'disabled'?> verification"><a href="javascript:void(0)">Verification</a></li>
		<li class="disabled ready"><a href="javascript:void(0)">Ready to breathe</a></li>
	</ul>