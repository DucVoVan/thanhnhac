 $(document).ready(function(){
  
  fetch_data();

  function fetch_data()
  {
   var dataTable = $('#user_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
     url:"http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/control-admin-views/fetch-user.php",
     type:"POST"
    }
   });
  }
  
  
 });
