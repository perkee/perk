(function($){
	//onload
	$(function(){
		var jqxhr = $.ajax({
			url:  document.location.href,
			data: {baz:1,bar:2},
			type: 'GET',
			dataType: 'json'
		});
		jqxhr.fail(function(jqxhr,textStatus,errorThrown){
			console.error(jqxhr,textStatus,errorThrown);
		});
		jqxhr.done(function(data){
			console.log(data);
		});
	});
})(jQuery);