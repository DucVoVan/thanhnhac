<form action="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/control-admin-views/AddTopicChildren.php" method="POST" class="form-add-topic">
				<label for="topic">Chọn các chủ đề: </label></br>
				<select id="topic" class="form-control topic-select">
						<option value="">--Chọn--</option>
						<option value="Thanh nhạc">Thanh nhạc</option>
						<option value="Guitar">Guitar</option>
						<option value="Keyboard">Keyboard</option>
						<option value="Chị em">Chị em</option>
				</select>
				</br>
				<div class="form-group topicchild-input">
					<label for="topicchild">Chủ đề con: </label>
					<input type="text" name="topicchild" id="topicchild" value="" class="form-control" placeholder="Chủ đề con">
				</div>
				<input type="submit" value="Thêm chủ đề" class="btn btn-info">
			</form></br>
			<div class="rs"></div>