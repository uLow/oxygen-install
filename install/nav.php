<?o('div.col-md-2.navigation')?>
	<h3 class="header">Navigation</h3>
	<ul class="nav">
		<?$disabled = false?>
		<?foreach($this as $child){?>
			<li class="<?if($disabled === true){?>disabled<?}?>"><a href="javascript:void(0)"><?=$child?></a></li>

			<?if(!$this->child || $this->child->route == $child->route){?>
				<?$disabled = true?>
			<?}?>
		<?}?>
		<li class="disabled"><a href="javascript:void(0)">Delete installation files</a></li>
		<li class="disabled"><a href="javascript:void(0)">Ready to breathe</a></li>
	</ul>