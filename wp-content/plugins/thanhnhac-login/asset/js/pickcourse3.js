(function($){
	// Gửi đăng kí khóa học của người dùng
	$('#submit').click(function(){
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
})(jQuery);