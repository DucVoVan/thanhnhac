<html>
<head>
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

</SCRIPT>
</head>
<body>
<h2>Prepare to be redirected after <span id="container"></span> second(s)!</h2>
</body>
</html>