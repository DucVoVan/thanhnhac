(function($){
	// Gửi đăng kí khóa học của người dùng Thanh nhạc
	$('#submit1').click(function(){
		var insert = [];
		$('.course-register').each(function(){
			if($(this).is(":checked")){
				insert.push($(this).val());
			}
		});
		// insert = insert.toString();
		$.ajax({
			url: "http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/Controller-client/User_Controller.php",
			type: "POST",
			// dataType: "json",
			data: {
				controller : "User_Controller",
				action : "register_course",
				insert:insert
			},
			success: function(data){
				$('.conn-1-2').append(data);
			}
		});
	});

	// Gửi đăng kí khóa học của người dùng Guitar
	$('#submit2').click(function(){
		var insert = [];
		$('.course-register').each(function(){
			if($(this).is(":checked")){
				insert.push($(this).val());
			}
		});
		// insert = insert.toString();
		$.ajax({
			url: "http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/Controller-client/User_Controller.php",
			type: "POST",
			// dataType: "json",
			data: {
				controller : "User_Controller",
				action : "register_course",
				insert:insert
			},
			success: function(data){
				$('.conn-2-2').append(data);
			}
		});
	});

	// Gửi đăng kí khóa học của người dùng Keyboard
	$('#submit3').click(function(){
		var insert = [];
		$('.course-register').each(function(){
			if($(this).is(":checked")){
				insert.push($(this).val());
			}
		});
		// insert = insert.toString();
		$.ajax({
			url: "http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/Controller-client/User_Controller.php",
			type: "POST",
			// dataType: "json",
			data: {
				controller : "User_Controller",
				action : "register_course",
				insert:insert
			},
			success: function(data){
				$('.conn-3-2').append(data);
			}
		});
	});
})(jQuery);