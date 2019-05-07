/**
 * JS function for adding counter
 */

jQuery('.counter').counterUp({
    delay: 10,
    time: 1000
});

$('#loadmore').click(function() {
	var lastid = $(this).data('id');
	//alert(lastid);
	$('#loadmore').html('Loading...');
	$.ajax({

		url: './controller/PlacesController.php',
		method: 'POST',
		data: {
			lastid: lastid
		},
		dataType: 'html',
		success: function(response) {
			if (response != "") {
				$('#remove-row').remove();
				$('#places-container').append(response);
			} else {
				$('#loadmore').html('No more data to show');
				$('#loadmore').attr('disabled', 'disabled');
			}
		}

	});
});


/**
 * JS Function for adding active class in nav while on a current page.
 */

$(function() {

	// $(window).load(function() {
	// 	displayPlaces();
	// });


	var url = window.location.href;

	$('ul li a').each(function() {

		if (url == (this.href)) {
			$(this).closest('li').addClass('active');
		}

	});

	/**
	 * JS function for validating messages
	 */

	$('#send').on('click', function(e) {

		e.preventDefault();

		$('#fnerror').text('');
		$('#lnerror').text('');
		$('#eerror').text('');
		$('#merror').text('');
		$('#firstname').removeClass('border-primary');
		$('#lastname').removeClass('border-primary');
		$('#email').removeClass('border-primary');
		$('#message').removeClass('border-primary');


		var firstname = $('#firstname').val();
		var lastname = $('#lastname').val();
		var email = $('#email').val();
		var message = $('#message').val();

		var error = false;

		if (firstname == "") {
			$('#fnerror').text('First name is required.');
			$('#fnerror').addClass('text-primary');
			$('#firstname').addClass('border-primary');
			error = true;
		}

		if (lastname == "") {
			$('#lnerror').text('Last name is required.');
			$('#lnerror').addClass('text-primary');
			$('#lastname').addClass('border-primary');
			error = true;
		}

		if (email == "") {
			$('#eerror').text('Email is required.');
			$('#eerror').addClass('text-primary');
			$('#email').addClass('border-primary');
			error = true;
		}

		if (message == "") {
			$('#merror').text('Message is required.');
			$('#merror').addClass('text-primary');
			$('#message').addClass('border-primary');
			error = true;
		}

		if(email != "" && validateEmail(email) == false) {
			$('#eerror').text('Invalid email address.');
			$('#eerror').addClass('text-primary');
			$('#email').addClass('border-primary');
			error = true;	
		}

		if(firstname != "" && validateName(firstname) == false) {
			$('#fnerror').text('Invalid first name.');
			$('#fnerror').addClass('text-primary');
			$('#firstname').addClass('border-primary');
			error = true;	
		}

		if(lastname != "" && validateName(lastname) == false) {
			$('#lnerror').text('Invalid last name.');
			$('#lnerror').addClass('text-primary');
			$('#lastname').addClass('border-primary');
			error = true;	
		}

		if (error == false) {

			$.ajax({
				method: 'post',
				url: './controller/MessagesController.php',
				data: {
					firstname: firstname,
					lastname: lastname,
					email: email,
					message: message,
					send: 1
				},
				dataType: 'json',
				success: function(response) {
					if (response.status === 'empty') {
						$('#error').show();
						$('#error').text(response.message);
						$('#message-form')[0].reset();
					} else if (response.status === 'invalidemail') {
						$('#error').show();
						$('#error').text(response.message);
						$('#message-form')[0].reset();
					} else if (response.status === 'invalidname') {
						$('#error').show();
						$('#error').text(response.message);
						$('#message-form')[0].reset();
					} else if (response.status === 'success') {
						$('#success').show();
						$('#success').text(response.message);
						$('#message-form')[0].reset();
					}
				}
			});

		}

		return false;

	});

	/**
	 * JS function for login
	 */

	$('#login').on('click', function(e) {

		e.preventDefault();

		$('#username-error').text('');
		$('#password-error').text('');
		$('#username').removeClass('border-primary');
		$('#password').removeClass('border-primary');


		var username = $('#username').val();
		var email = $('#username').val();
		var password = $('#password').val();

		var error = false;

		if (username == "") {
			$('#username-error').text('Username or Email is required.');
			$('#username-error').addClass('text-primary');
			$('#username').addClass('border-primary');
			error = true;
		}

		if (password == "") {
			$('#password-error').text('Password is required.');
			$('#password-error').addClass('text-primary');
			$('#password').addClass('border-primary');
			error = true;
		}

		if (error == false) {

			$.ajax({
				method: 'post',
				url: '../controller/LoginController.php',
				data: {
					username: username,
					email: email,
					password: password,
					login: 1
				},
				dataType: 'json',
				success: function(response) {
					if (response.status === 'failed') {
						$('#error').show();
						$('#error').text(response.message);
						$('#login-form')[0].reset();
					} else if (response.status === 'empty') {
						$('#error').show();
						$('#error').text(response.message);
						$('#login-form')[0].reset();
					} else if (response.status === 'success') {
						window.location.href = './dashboard.php';
					} 
				}
			});

		}

		return false;

	});

	/**
	 * JS function for register
	 */

	$('#register').on('click', function(e) {

		e.preventDefault();

		$('#username-error').text('');
		$('#email-error').text('');
		$('#password-error').text('');
		$('#username').removeClass('border-primary');
		$('#password').removeClass('border-primary');
		$('#email').removeClass('border-primary');


		var username = $('#username').val();
		var email = $('#email').val();
		var password = $('#password').val();

		var error = false;

		if (username == "") {
			$('#username-error').text('Username is required.');
			$('#username-error').addClass('text-primary');
			$('#username').addClass('border-primary');
			error = true;
		}

		if (email == "") {
			$('#email-error').text('Email is required.');
			$('#email-error').addClass('text-primary');
			$('#email').addClass('border-primary');
			error = true;
		}

		if (password == "") {
			$('#password-error').text('Password is required.');
			$('#password-error').addClass('text-primary');
			$('#password').addClass('border-primary');
			error = true;
		}

		if (error == false) {

			$.ajax({
				method: 'post',
				url: '../controller/RegisterController.php',
				data: {
					username: username,
					email: email,
					password: password,
					register: 1
				},
				dataType: 'json',
				success: function(response) {
					if (response.status === 'exist') {
						$('#error').show();
						$('#error').text(response.message);
						$('#register-form')[0].reset();
					} else if (response.status === 'empty') {
						$('#error').show();
						$('#error').text(response.message);
						$('#register-form')[0].reset();
					} else if (response.status === 'success') {
						$('#success').show();
						$('#success').text(response.message);
						$('#register-form')[0].reset();
					} 
				}
			});

		}

		return false;

	});


	function validateEmail(email) {
        var re = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
        return re.test(email);
    }

    function validateName(name) {
    	var re = /^[A-Za-z\s]*$/;
    	return re.test(name);
    }


    // function displayPlaces() {

    // 	$.ajax({
    // 		method: 'POST',
    // 		url: './controller/PlacesController.php?display=places',
    // 		dataType: 'html',
    // 		success: function(response) {
    // 			$('#places-container').html(response);
    // 		}
    // 	});

    // }

});