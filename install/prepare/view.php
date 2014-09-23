<?o()?>
<h1 class="page-header">Prepare</h1>

<h4 class="header">Application</h4>
<div class="application">
	<div class="row">
		<div class="col-md-2" style="margin: 2px;">Application name</div>
		<div class="col-md-4" style="margin: 2px;"><input class="form-control" type="text" name="app[name]" value="<?=(isset($_SESSION['prepare']['app']->name))?$_SESSION['prepare']['app']->name:''?>"></div>
	</div>
	<div class="row">
		<div class="col-md-2" style="margin: 2px;">Application class name <br><small>CamelCase</small></div>
		<div class="col-md-4" style="margin: 2px;"><input class="form-control" type="text" name="app[class_name]" value="<?=(isset($_SESSION['prepare']['app']->class))?$_SESSION['prepare']['app']->class:''?>"></div>
	</div>
	<div class="row">
		<div class="col-md-2" style="margin: 2px;">Time zone</div>
		<div class="col-md-4" style="margin: 2px;">
			<?$defaultTimeZone = (isset($_SESSION['prepare']['app']->timezone))?:'Europe/Riga';?>
			<select name="timezone" class="form-control">
			<?foreach(DateTimeZone::listIdentifiers() as $tz){?>
				<option value="$tz" <?if($tz == $defaultTimeZone){?>selected="selected"<?}?>><?=$tz?></option>
			<?}?>
			</select>
		</div>
	</div>
</div>

<hr>
<h4 class="header">Databases</h4>
<div class="databases">
	<?foreach($this->databases as $k=>$db){?>
	<div id="<?=$k?>">
		<label for="check<?=$k?>">
			<input type="checkbox" id="check<?=$k?>" class="enableDatabase" value="1" <?if(isset($_SESSION['prepare']['databases']->$k)){?>checked="checked"<?}?>>
			<?=$db['name']?>
		</label>

		<div class="database" data-type="<?=$k?>" style="<?if(!isset($_SESSION['prepare']['databases']->$k)){?>display: none;<?}?>">
			<?foreach($db['fields'] as $fieldKey=>$field){?>
				<div class="row">
					<div class="col-md-2" style="margin: 2px;"><?=$field?></div>
					<div class="col-md-4" style="margin: 2px;">
						<input class="form-control field" type="<?=($fieldKey == 'pass')?'password':'text'?>" name="db[<?=$k?>][<?=$fieldKey?>]" data-key="<?=$fieldKey?>" value="<?=(isset($_SESSION['prepare']['databases']->$k->$fieldKey))?$_SESSION['prepare']['databases']->$k->$fieldKey:''?>">
					</div>
				</div>
			<?}?>
		</div>
	</div>
	<?}?>
</div>

<hr>
<div class="row">
	<div class="col-md-2">
		<button class="disabled">Back</button>
	</div>
	<div class="col-md-8">
	</div>
	<div class="col-md-2">
		<button class="continue">Continue</button>
	</div>
</div>