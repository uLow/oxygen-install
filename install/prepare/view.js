$this.find('.enableDatabase').live('change', function(){
	if($(this).is(':checked')){
		$(this).parent().parent().find('.database').show();
	}else{
		$(this).parent().parent().find('.database').hide();
	}
});

$this.find('.continue').live('click', function(){
	var app = {
		name: $this.find('[name="app[name]"]').val(),
		class: $this.find('[name="app[class_name]"]').val()
	};
	var databases = {};
	$this.find('.databases .database').each(function(){
		if($(this).parent().find(':checked').length > 0){
			var database = {};
			$(this).find('.field').each(function(){
				var dbkey = $(this).data('key');
				database[dbkey] = $(this).val();
			});
			databases[$(this).data('type')] = database;
		}
	});
	$this.remote(
		'prepare',
		{
			app: app,
			databases: databases
		},
		function(err, res){
			$('[role="main"]').embed(res, true);
			$('.navigation').refresh();
		}
	);
});