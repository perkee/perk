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
				$('#content'      ).html(data.sections.content );
				$('body>header>h1').html(data.sections.title   );
				$('head>title'    ).html(data.sections.title   );
				console.log(null,null,data.path);
				history.pushState(null,null,data.path);
			});
			return false;
		});
	});
})(jQuery);
