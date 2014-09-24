<?o()?>
<h1 class="page-header">Check connectivity and create application</h1>
<?/*<pre>
<?print_r($_SESSION['prepare'])?>
</pre>*/?>

<?if($this->validate()){
	$this->checkDatabases();
	$this->createApplication();
}?>
<hr>
<a href="javascript:void(0)" class="refresh">Refresh</a>
<hr>

<?if(!$this->validate()){?>
	<h4 class="header">Application</h4>
	<div class="application">
		<div class="row">
			<div class="col-md-2" style="margin: 2px;">Application name</div>
			<div class="col-md-4" style="margin: 2px;">
				<?=$this->appName?>
				<?if(isset($this->error['appName'])){?>
				<small style="color: red;">
					<?=implode(', ', $this->error['appName'])?>
				</small>
				<?}?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2" style="margin: 2px;">Application class name <br><small>CamelCase</small></div>
			<div class="col-md-4" style="margin: 2px;">
				<?=$this->className?>
				<?if(isset($this->error['className'])){?>
				<small style="color: red;">
					<?=implode(', ', $this->error['className'])?>
				</small>
				<?}?>
			</div>
		</div>
	</div>
	<hr>
	<h4 class="header">Databases</h4>
	<div class="databases">
		<?foreach($this->databases as $k=>$config){?>
		<div class="database" data-type="<?=$k?>" style="margin-left: 48px;">
			<h4 style="<?if(isset($this->error['databases'][$k])){?>color: red;<?}?>"><?=$k?></h4>
			<?foreach($config as $fieldKey=>$field){?>
				<div class="row">
					<div class="col-md-2" style="margin: 2px;"><?=$fieldKey?></div>
					<div class="col-md-4" style="margin: 2px;">
						<?if($fieldKey == 'pass'){?>
							<?=str_pad('*', strlen($field), '*')?>
						<?}else{?>
							<?=$field?>
						<?}?>
						<?if(isset($this->error['databases'][$k][$fieldKey])){?>
						<small style="color: red">
							<?=$this->error['databases'][$k][$fieldKey]?>
						</small>
						<?}?>
					</div>
				</div>
			<?}?>
		</div>
		<?}?>

		<?if(isset($this->error['connectivity'])){?>
			<div class="row">
			<?foreach($this->error['connectivity'] as $db=>$error){?>
				<div class="col-md-2" style="margin: 2px;"><b><?=$db?></b></div>
				<div class="col-md-10" style="margin: 2px; color: red;"><?=$error?></div>
			<?}?>
			</div>
		<?}?>
	</div>
<?}else{?>
	<div class="row">
		<div class="col-md-12">
			<p>
				Your installation is almost done. You can verify created files and finish, or go back and edit any data and then proceed. 
			</p>
			<p>
				After you press "finish" button, there will be replaced current <code>index.php</code> file with your application's one. <br>
				Page will refresh after 2 seconds (if <code>index.php</code> replacement will take longer, refresh page by yourself).
			</p>
			<p>
				If you decide to return it back to install mode, copy contents of <code>/install/install.php</code> to <code>index.php</code> and delete generated application folder.
			</p>
		</div>
	</div>
<?}?>

<hr>
<div class="row">
	<div class="col-md-2">
		<button class="back">Back</button>
	</div>
	<div class="col-md-8">
	</div>
	<div class="col-md-2">
		<button class="finish">Finish</button>
	</div>
</div>