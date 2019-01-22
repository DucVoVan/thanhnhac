<html>
<head>
	<style type="text/css">
		body{
			background: url("http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/image/piano2.jpg");
		}
		h2{
			color: #ff2f2f;
		}
		.alert{
			position: absolute;
		    top: 35%;
		    left: 35%;
		}
	</style>
<script type="text/javascript">
function getQueryVariable(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}
var a = getQueryVariable('username');
var time = 5; //How long (in seconds) to countdown
var page = "http://localhost/thanhnhac/?username="+a; //The page to redirect to
function countDown(){
time--;
gett("container").innerHTML = time;
if(time == 0){
window.location = page;
}
}
function gett(id){
if(document.getElementById) return document.getElementById(id);
if(document.all) return document.all.id;
if(document.layers) return document.layers.id;
if(window.opera) return window.opera.id;
}
function init(){
if(gett('container')){
setInterval(countDown, 1000);
gett("container").innerHTML = time;
}
else{
setTimeout(init, 50);
}
}
document.onload = init();

</script>
</head>
<body>
	<div class="alert">
		<h2>Đăng kí thành công!</h2>
		<h2>Đang chuyển về trang chủ trong <span id="container"></span> giây!</h2>
	</div>
</body>
</html>