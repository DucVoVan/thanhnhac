<?php 
	include 'connect.php';
	$sql = "CREATE TABLE IF NOT EXISTS `thanhnhac`.`account` ( `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT , `username` VARCHAR(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL UNIQUE, `email` VARCHAR(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL , `fullname` VARCHAR(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL , `password` VARCHAR(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL, `time` TIMESTAMP NOT NULL, PRIMARY KEY (`id`)) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;";

	$sql .= "CREATE TABLE IF NOT EXISTS `thanhnhac`.`topic` ( `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL , `time` TIMESTAMP NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;";

	$sql .= "CREATE TABLE IF NOT EXISTS `thanhnhac`.`topic-children` (`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT, PRIMARY KEY(`id`), `topicid` INT(11) UNSIGNED NOT NULL,`name` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL, `time` TIMESTAMP NOT NULL , FOREIGN KEY(topicid) REFERENCES topic(id) ON UPDATE cascade ON DELETE cascade) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;";

	$sql .= "CREATE TABLE IF NOT EXISTS `thanhnhac`.`course` (`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT, PRIMARY KEY(`id`), `topicidchildren` INT(11) UNSIGNED NOT NULL, FOREIGN KEY(topicidchildren) REFERENCES `topic-children`(id) ON UPDATE cascade ON DELETE cascade) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;";

	$sql .= "CREATE TABLE IF NOT EXISTS `thanhnhac`.`course-registered` (`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT, PRIMARY KEY(`id`),`accountid` INT(11) UNSIGNED NOT NULL, `courseid` INT(11) UNSIGNED NOT NULL, FOREIGN KEY(accountid) REFERENCES account(id) ON UPDATE cascade ON DELETE cascade, FOREIGN KEY(courseid) REFERENCES course(id) ON UPDATE cascade ON DELETE cascade) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;";

	mysqli_multi_query($conn,$sql);

	
?>