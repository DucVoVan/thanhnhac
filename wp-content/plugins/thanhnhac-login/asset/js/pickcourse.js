(function($){
	// click vào phần tử class a
	// click vào Học Nhạc
	$('.a').on('click',function(){
		// Xóa dòng thông báo
		$('.alert-pick').css("display","none");
		// di chuyển h1 lên đầu trang.
		$('.select').css("top","0");
		// opacity giảm về 0, với tốc độ slow, hàm callback sẽ add html vào vùng chọn .show
		// html sẽ chứa đoạn html muốn hiển thị
		$('.show').fadeTo("slow",0,function(){
			$(this).html('<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist"> <li class="nav-item"> <a class="nav-link active part-1" data-name="Thanh nhạc" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Thanh nhạc</a> </li> <li class="nav-item"> <a class="nav-link part-2" id="pills-profile-tab" data-name="Guitar" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Guitar</a> </li> <li class="nav-item"> <a class="nav-link part-3" id="pills-contact-tab" data-name="Keyboard" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Keyboard</a> </li></ul><div class="tab-content" id="pills-tabContent"> <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><div class="conn-1"><div class="conn-1-1"></div><div class="conn-1-2"><div>Click vào chủ đề để hiển thị các khóa học tương ứng</div></div></div></div> <div class="tab-pane fade conn-2" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><div class="conn-2"><div class="conn-2-1"></div><div class="conn-2-2"><div>Click vào chủ đề để hiển thị các khóa học tương ứng</div></div></div></div> <div class="tab-pane fade conn-3" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"><div class="conn-3"><div class="conn-3-1"></div><div class="conn-3-2"><div>Click vào chủ đề để hiển thị các khóa học tương ứng</div></div></div></div></div><script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/pickcourse2.js" async></script>');
			// debugger;
			$.ajax({
				url: "http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/Controller-client/User_Controller.php",
				type: "POST",
				dataType: "json",
				data: {
					controller : "User_Controller",
					action : "load_topicchild",
					name: $('.part-1').data("name") 
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