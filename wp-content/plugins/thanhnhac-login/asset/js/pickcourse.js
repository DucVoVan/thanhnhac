(function($){
	// click vào phần tử class a
	$('.a').on('click',function(){
		// Xóa dòng thông báo
		$('.alert-pick').css("display","none");
		// di chuyển h1 lên đầu trang.
		$('.select').css("top","0");
		// opacity giảm về 0, với tốc độ slow, hàm callback sẽ add html vào vùng chọn .show
		// html sẽ chứa đoạn html muốn hiển thị
		$('.show').fadeTo("slow",0,function(){
			// Sau khi người dùng click vào .a, dùng ajax gọi đến User_Controller hàm load_course để show dữ liệu khóa học cho người dùng.
			$.ajax({
				url: "http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/Controller-client/User_Controller.php",
				type: "POST",
				data: {
					controller : "User_Controller",
					action : "load_course" 
				},
				success: function(response){
					// add response trả về vào html .show
					$('.show').html(response);

				}
			});
		});
		// sau đó opacity tăng lên 1 và hiển thị, với tốc độ slow
		$('.show').fadeTo("slow",1);
	});
	// Tương tự với b và c
	$('.b').on('click',function(){
		$('.alert-pick').css("display","none");
		$('.select').css("top","0");
		$('.show').fadeTo("slow",0,function(){
			$('.show').html("<p>hgjgjg</p>");
		});
		$('.show').fadeTo("slow",1);
	});
	$('.c').on('click',function(){
		$('.alert-pick').css("display","none");
		$('.select').css("top","0");
		$('.show').fadeTo("slow",0,function(){
			$('.show').html("<p>hgjgjg1</p>");
		});
		$('.show').fadeTo("slow",1);
	});
})(jQuery);