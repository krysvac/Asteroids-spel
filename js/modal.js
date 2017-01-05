/**
 * Generata a modal popup
 *
 * @param Object{content, headline, |width, height, color, success, size, reload|}
 */
var modal = (function(){
	var method = {},
		$overlay = $('<div class="overlay"></div>'),
		$modal = $('<div class="modal block"></div>'),
		$head = $('<div class="blockhead"></div>'),
		$headline = $('<h2></h2>'),
		$content = $('<div class="blockcontent"></div>'),
		$close = $('<span class="closeblock">X</span>');

	$modal.hide();
	$overlay.hide();
	$head.append($headline, $close);
	$modal.append($head, $content);

	$(document).ready(function(){
		$('body').append($overlay, $modal);
	});

	var success = "";
	var reload = "";

	$close.click(function(e){
		e.preventDefault();
		if (success === "true" || reload === "true")
		{
			if (reload === "false")
			{}
			else
			{
				location.reload(true);
			}
		}
		method.close();
	});

	$overlay.click(function(e){
		e.preventDefault();
		if (success == "true" || reload === "true")
		{
			if (reload === "false")
			{}
			else
			{
				location.reload(true);
			}
		}
		method.close();
	});

	method.center = function(){
		var top,
			left;

		top = Math.max($(window).height() - $modal.outerHeight(), 0) / 2;
		left = Math.max($(window).width() - $modal.outerWidth(), 0) / 2;

		$modal.css({
			top:top,
			left:left - 10
		});
	};

	method.open = function(settings){
		$content.empty().append(settings.content);
		$headline.empty().append(settings.headline);
		success = settings.success;
		reload = settings.reload || "false";
		$modal.css({
			width: settings.width || 'auto', 
			height: settings.height || '250px',
		});

		$content.css({
			color: "black",
			"font-size": settings.size || "100%"
		});

		$headline.css({
			color: settings.color || "black",
			"font-size": settings.size || "100%"
		});
					
		method.center();
			
		$(window).bind('resize.modal', method.center);
				
		$modal.show();
		$overlay.show();
	};

	method.close = function () {
		$modal.hide();
		$overlay.hide();
		$content.empty();
		$(window).unbind('resize.modal');
	};
	return method;
}());