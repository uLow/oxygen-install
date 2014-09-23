<?o()?>
<header>
	<div class="container">
		<a href="/">Oxygen Install</a>
	</div>
</header>
<div class="shadow"></div>
<div class="container">
	<div class="row">
		<?$this->put_nav()?>
		<div class="col-md-10" role="main">
			<?if($this->child){?>
				<?$this->child->put_view()?>
			<?}else{?>
				<?$this['_prepare']->put_view()?>
			<?}?>
		</div>
	</div>
</div>