(function($){
	//onload
	$(function(){
	$('a').on('click',function(evt){
		evt.preventDefault();
		var jqxhr = $.ajax({
			url:  this.href,
			type: 'GET',
			dataType: 'json'
		});
		jqxhr.fail(function(jqxhr,textStatus,errorThrown){
			console.error(jqxhr,textStatus,errorThrown);
		});
		jqxhr.done(function(data){
			$('#content').html(data.content);
		});
	});
		return false;
	});
})(jQuery);
