<?php 
	// echo $_POST['question1'];
	// echo $_POST['question2'];
	// echo $_POST['question3'];
	// echo $_POST['question5'];
	// echo $_POST['question6'];
	// echo $_POST['question7'];

    if (isset($_FILES['attachments'])) {
        $msg = "";
        $targetFile = "uploadsmusic/" . basename($_FILES['attachments']['name'][0]);
        if (file_exists($targetFile))
            $msg = array("status" => 0, "msg" => "File uploads đã tồn tại! Mời bạn đổi tên file");
        else if (move_uploaded_file($_FILES['attachments']['tmp_name'][0], $targetFile))
            $msg = array("status" => 1, "msg" => "File được uploads thành công!", "path" => $targetFile);

        exit(json_encode($msg));
        
        // echo "<pre>";
        // var_dump($_FILES);
    }
?>