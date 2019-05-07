$(document).ready(function() {

	$(window).load(function() {
		loadMessagess();
	});

	var url = window.location.href;

	$('ul li a').each(function() {

		if (url == (this.href)) {
			$(this).closest('li').addClass('active');
		}

	});


	$('#places-form').on('submit', function(e) {
		e.preventDefault();

		$.ajax({
			type: 'POST',
			url: '../controller/PlacesController.php',
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			beforeSend: function(){
				$('#post').attr('disabled','disabled');
				$('#places-form').css('opacity', '.5');
			},
			success: function(response) {
				$('#statusMsg').html('');
				if (response == 'ok') {
					$('#places-form')[0].reset();
					$('#statusMsg').html('<span style="font-size:18px;color:#34A853">The post has been added.</span>');
				} else {
					$('#statusMsg').html('<span style="font-size:18px;color:#EA4335">Some problem occurred, please try again.</span>');
				}

				$('#places-form').css('opacity', '');
				$('#post').removeAttr('disabled');
			}
		});
	});

});

function loadMessagess() {

	$.ajax({

		method: 'GET',
		url: '../controller/MessagesController.php?display=messages',
		dataType: 'html',
		success: function(response) {
			$('#message-table tbody').html(response);
		}

	});

}