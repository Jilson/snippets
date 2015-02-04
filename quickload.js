$.fn.extend({ 

	 quickLoad: function(options) {
	 
		var defaults = {
			containerID : '#products',
			linkClass: '.page-numbers'
		}
		
		var options =  $.extend(defaults, options);
	
		 return this.each(function() {
			var o = options;
			var linkClass = $(this);
			var items = $(linkClass);

			items.on('click', function(){
				var post_link = $(this).attr("href");
				
				$('.loading').show();

				$(o.containerID).load(post_link + ' ' + o.containerID, function() {
					$('.loading').hide();
				});
				
				if(post_link!=window.location){
					window.history.pushState({path:post_link},'',post_link);
				}
				return false;
			});
			
		});
		
	}
	
});
	

$(document).ready(function() {

	$(".products-front .page-numbers").quickLoad({ 
			containerID: "#products"
	});
	
});

$(document).ajaxComplete(function() {

	$(".products-front .page-numbers").quickLoad({ 
			containerID: "#products"
	});
	
});
