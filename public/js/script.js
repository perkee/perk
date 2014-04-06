(function($){

	function nav(url,changeLocation){
		var jqxhr = $.ajax({
			url:      url,
			type:     'GET',
			dataType: 'json'
		});
		jqxhr.fail(function(jqxhr,textStatus,errorThrown){
			console.error(jqxhr,textStatus,errorThrown);
		});
		jqxhr.done(function(data){
			if(changeLocation){
				history.pushState({not:null},'not empty',data.path);
			}
			$('#content'      ).html(data.sections.content );
			$('body>header>h1').html(data.sections.title   );
			$('head>title'    ).html(data.sections.title   );
		});
	}

	//onload
	$(function(){
		$('a').on('click',function(evt){
			evt.preventDefault();
			nav(this.href,true);
			return false;
		});
		$(window).on('popstate',function(evt){
			evt.preventDefault();
			nav(location.pathname,false);
			return false;
		});
	});
})(jQuery);

