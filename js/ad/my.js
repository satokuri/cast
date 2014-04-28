$(function () {
	for (var i = 1; i <= $('ul').length; i++) { //
		if ($.cookie('menu' + i) == 'block') {
			$('#menu' + i).show();
		}
	}
	$('div').click(function() {
		var child = $(this).next('ul'); // メニュー表示/非表示
		$(child).slideToggle('fast', function() {
			$.cookie($(child).attr('id'), $(child).css('display'), { expires: 1 });
		});
	});
});