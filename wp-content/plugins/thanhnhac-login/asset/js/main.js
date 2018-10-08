(function($){
	$(".form-add-topic").on('submit',function(){
		var that = $(this),
			url  = that.attr('action'),
			type = that.attr('method'),
			data = {};
		
		function isEmpty(str)
		{
		    str = str || null;
		    return (typeof str == "undefined" || str == null);
		}
		var topic = $('#topic').val();
		var topicchild = $('#topicchild').val();
		if (isEmpty(topic)){
				$('#fadeandscale').html("Bạn phải chọn chủ đề!");
				$('#fadeandscale').popup({
					transition: 'all 0.3s',
					autoopen: true
				});
		}else if(isEmpty(topicchild)){
				$('#fadeandscale').html("Vui lòng điền vào ô chủ đề con!");
		        $('#fadeandscale').popup({
					transition: 'all 0.3s',
					autoopen: true
				});
		}else{
			$.ajax({
				url: url,
				type: type,
				data: {
					topic: $('#topic').val(),
					topicchild: $('#topicchild').val() 
				},
				success: function(response){
					switch(response){
						case "ok":
							$('#fadeandscale').html("Thêm thành công!");
					        $('#fadeandscale').popup({
								transition: 'all 0.3s',
								autoopen: true
							});
							break;
						case "fail":
							$('#fadeandscale').html("Thêm không thành công!");
							$('#fadeandscale').popup({
								transition: 'all 0.3s',
								autoopen: true
							});
							break;
						case "duplicate":
							$('#fadeandscale').html("Chủ đề vừa thêm đã tồn tại. Mời bạn nhập chủ đề khác!");
					        $('#fadeandscale').popup({
								transition: 'all 0.3s',
								autoopen: true
							});
							break;
						default:
							break;
					}
					$('#topicchild').val("");
				}
			});
		}
		return false;
	});
	// $('#123').change(function(value){
	// 		var data = {};
	// 		var value = $(this).val();
	// 		data['duc'] = value;
	// 	});

})(jQuery);