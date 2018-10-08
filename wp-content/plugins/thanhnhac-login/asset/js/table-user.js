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
  $('#add').click(function(){
   // var html = '<tr>';
   // html += '<td contenteditable id="data1"></td>';
   // html += '<td contenteditable id="data2"></td>';
   // html += '<td contenteditable id="data3"></td>';
   // html += '<td contenteditable id="data4"></td>';
   // html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
   // html += '</tr>';
   // $('#user_data tbody').prepend(html);
   $('#fade').popup({
          transition: 'all 0.3s',
          autoopen: true,
          closeelement: '.my_popup_close'
        });
  });

  $(".form-add-user").on('submit', function(){
    var username = $('#data1').val();
    var email = $('#data2').val();
    var fullname = $('#data3').val();
    var password = $('#data4').val();
    var url = $(this).attr("action");
    var method = $(this).attr("method");
    if(username != '' && email != '' && fullname != '' && password !='')
      {
        $.ajax({
         url:url,
         method:method,
         data:{username:username, email:email, fullname: fullname, password: password},
         success:function(data)
         {
          // $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');

          $('#fadeandscale').html("");
          $('#fadeandscale').append('<button class="my_popup_close btn btn-info">'+data+'</button>');
          $('#fadeandscale').popup({
            transition: 'all 0.3s',
            autoopen: true,
            closeelement: '.my_popup_close'
          });
          $('#user_data').DataTable().destroy();
          fetch_data();
         }
        });
        $("#data1").val("");
        $("#data2").val("");
        $("#data3").val("");
        $("#data4").val("");
        // setInterval(function(){
        //  $('#alert_message').html('');
        // }, 5000);
        
      }
      else
      {
        alert("Vui lòng nhập đầy đủ nội dung!");
      }
    
    return false;
  });
  $(document).on('click', '.delete', function(){
   var id = $(this).attr("id");
   if(confirm("Bạn chắc chắn muốn xóa user này?"))
   {
    $.ajax({
     url:"http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/control-admin-views/delete-user.php",
     method:"POST",
     data:{id:id},
     success:function(data){
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
  });
  function update_data(id, column_name, value)
  {
    $.ajax({
    url:"http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/control-admin-views/update-user.php",
    method:"POST",
    data:{id:id, column_name:column_name, value:value},
    success:function(data)
    {
     $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
     $('#user_data').DataTable().destroy();
     fetch_data();
    }
    });
    setInterval(function(){
    $('#alert_message').html('');
    }, 10000);
  }

  $(document).on('blur', '.update', function(){
   var id = $(this).data("id");
   var column_name = $(this).data("column");
   var value = $(this).text();
   if(confirm("Bạn đã chắc chắn về những thay đổi của mình?")){
     update_data(id, column_name, value);
   }else{
     $('#user_data').DataTable().destroy();
     fetch_data();
   }

  });
 });
