<?php
/**
 * Template Name: ajaxchatbot
 */
?>

<?php 
	$number = isset($_GET['number']) ? $_GET['number'] : false;
	$home = "Location: http://localhost/thanhnhac/?s=";
	
	// Lặp từ 1 tới number để in ra màn hình
	// for ($i = 1; $i <= $number; $i++){
	//     echo '<li>Số: '.$i.'</li>';
	// }
?>
<?php 
	if($number == "1" || $number == "2" || $number == "3"){
?>
<div id="result" class="result" onclick="document.getElementById('result').style.display='none'"; style="opacity: 1;
	display: block;
    z-index: 1;
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    transition: opacity .15s linear;
    background-color: rgba(127, 127, 127, 0.7);">
    <div class="menu-modal">
	    <div class="button-menu">
			<div class="title-menu">
				<?php 
					switch ($number) {
					    case "1":
					        echo "abc";
					        break;
					    case "2":
					        echo "xyz";
					        break;
					    case "3":
					        echo "def";
					        break;
					    default:
					    	echo $number;
					}
				?>
			</div>
			<button type="button" class="close-popup" onclick="document.getElementById('result').style.display='none'">
			    <span aria-hidden="true">×</span>
			</button>
		</div>
		<?php
			if($number=="1"){
				vd_menu('primary-menu1');
			}elseif($number=="2"){
				vd_menu('primary-menu2');
			}elseif($number=="3"){
				vd_menu('primary-menu3');
			}
		?>
	</div>
</div>
	<?php
	}
	else {
		$home = $home.$number;
		header($home);
		// print "<?php header('$home'); ";
	}
	?>

