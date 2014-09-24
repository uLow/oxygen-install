$this.find('.back').live('click', function(){
	$this.remote(
		'back',
		{},
		function(err, res){
			$('[role="main"]').embed(res, true);

			$('.navigation').find('.verification').removeClass('active');
			$('.navigation').find('.verification').addClass('disabled');
		}
	);
});

$this.find('.refresh').live('click', function(){
	$this.refresh();
});

$this.find('.finish').live('click', function(){
	$this.remote(
		'finish',
		{},
		function(err, res){
			setTimeout(function(){
				location.reload(true);
			}, 2000);
			
			$('.navigation').find('.ready').addClass('active');
		}
	);
});