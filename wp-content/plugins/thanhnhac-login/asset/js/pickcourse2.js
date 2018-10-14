(function($){
	// Click vào Thanh nhạc
	$('.part-1').on('click', function(){
		// Làm trống nội dung trong class .conn-1 trước khi load dữ liệu từ server ra.
		$('.conn-1-1').empty();
		$.ajax({
			url: "http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/Controller-client/User_Controller.php",
			type: "POST",
			dataType: "json",
			data: {
				controller : "User_Controller",
				action : "load_topicchild",
				name: $(this).data("name") 
			},
			success: function(data){
				// add response trả về vào html .show
				// $('.show').html(response);
				$('.conn-1-1').append('<div>Các chủ đề con:</div>');
				for(var i in data){
					var row = data[i];
					var id = row.id;
					var name = row.name;
					var time = row.time;
					$('.conn-1-1').append('<div class="topic-child-id" data-id="'+id+'">'+name+'</div>');
				}
			}
		});


	});

	// click vào một chủ đề con trong chủ đề Thanh nhạc
	$('.conn-1-1').on('click','.topic-child-id', function(){
		// Làm trống nội dung trong class .conn-2 trước khi load dữ liệu từ server ra.
		$('.conn-1-2').empty();
		$.ajax({
			url: "http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/Controller-client/User_Controller.php",
			type: "POST",
			dataType: "json",
			data: {
				controller : "User_Controller",
				action : "load_course",
				id : $(this).data("id")
			},
			success: function(data){
				// add response trả về vào html .show
				// $('.show').html(response);
				for(var i in data){
					var row = data[i];
					var id = row.id;
					var name = row.name;
					var time = row.time;
					$('.conn-1-2').append('<label class="course">'+name+'</label><input type="checkbox" value="'+id+'" class="course-register"/>');
				}
				$('.conn-1-2').append('<button type="button" name="submit" id="submit1">Save</button>');
				$('.conn-1-2').append('<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/pickcourse3.js"></script>');
			}
		});

	});


	// CLick vào Guitar
	$('.part-2').on('click', function(){
		// Làm trống nội dung trong class .conn-1 trước khi load dữ liệu từ server ra.
		$('.conn-2-1').empty();
		$.ajax({
			url: "http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/Controller-client/User_Controller.php",
			type: "POST",
			dataType: "json",
			data: {
				controller : "User_Controller",
				action : "load_topicchild",
				name: $(this).data("name") 
			},
			success: function(data){
				// add response trả về vào html .show
				// $('.show').html(response);
				$('.conn-2-1').append('<div>Các chủ đề con:</div>');
				for(var i in data){
					var row = data[i];
					var id = row.id;
					var name = row.name;
					var time = row.time;
					$('.conn-2-1').append('<div class="topic-child-id" data-id="'+id+'">'+name+'</div>');
				}
			}
		});
	});

	// Click vào một chủ đề con trong chủ đề Guitar
	$('.conn-2-1').on('click','.topic-child-id', function(){
		// Làm trống nội dung trong class .conn-2 trước khi load dữ liệu từ server ra.
		$('.conn-2-2').empty();
		$.ajax({
			url: "http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/Controller-client/User_Controller.php",
			type: "POST",
			dataType: "json",
			data: {
				controller : "User_Controller",
				action : "load_course",
				id : $(this).data("id")
			},
			success: function(data){
				// add response trả về vào html .show
				// $('.show').html(response);
				for(var i in data){
					var row = data[i];
					var id = row.id;
					var name = row.name;
					var time = row.time;
					$('.conn-2-2').append('<label class="course">'+name+'</label><input type="checkbox" value="'+id+'" class="course-register"/>');
				}
				$('.conn-2-2').append('<button type="button" name="submit" id="submit2">Save</button>');
				$('.conn-2-2').append('<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/pickcourse3.js"></script>');
			}
		});

	});

	// Click vào Keyboard
	$('.part-3').on('click', function(){
		// Làm trống nội dung trong class .conn-1 trước khi load dữ liệu từ server ra.
		$('.conn-3-1').empty();
		$.ajax({
			url: "http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/Controller-client/User_Controller.php",
			type: "POST",
			dataType: "json",
			data: {
				controller : "User_Controller",
				action : "load_topicchild",
				name: $(this).data("name") 
			},
			success: function(data){
				// add response trả về vào html .show
				// $('.show').html(response);
				$('.conn-3-1').append('<div>Các chủ đề con:</div>');
				for(var i in data){
					var row = data[i];
					var id = row.id;
					var name = row.name;
					var time = row.time;
					$('.conn-3-1').append('<div class="topic-child-id" data-id="'+id+'">'+name+'</div>');
				}
			}
		});
	});

	// Click vào một chủ đề con trong chủ đề Keyboard
	$('.conn-3-1').on('click','.topic-child-id', function(){
		// Làm trống nội dung trong class .conn-2 trước khi load dữ liệu từ server ra.
		$('.conn-3-2').empty();
		$.ajax({
			url: "http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/Controller-client/User_Controller.php",
			type: "POST",
			dataType: "json",
			data: {
				controller : "User_Controller",
				action : "load_course",
				id : $(this).data("id")
			},
			success: function(data){
				// add response trả về vào html .show
				// $('.show').html(response);
				for(var i in data){
					var row = data[i];
					var id = row.id;
					var name = row.name;
					var time = row.time;
					$('.conn-3-2').append('<label class="course">'+name+'</label><input type="checkbox" value="'+id+'" class="course-register"/>');
				}
				$('.conn-3-2').append('<button type="button" name="submit" id="submit3">Save</button>');
				$('.conn-3-2').append('<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/pickcourse3.js"></script>');
			}
		});

	});
})(jQuery);