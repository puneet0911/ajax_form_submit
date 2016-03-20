$(document).ready(function() {
 
    $("#form1").submit(function(ev) {
      ev.preventDefault();
      
      $.ajax({
         url:"upload.php",
          type: "POST",
         data:new FormData(this),
         contentType: false,       
         cache: false,             
         processData:false,
         success: function(response,status){         
          console.log(response);     
          var data="<img src="+response+" />";
          $("#showimage").html(data);
           }
       });
    });
});