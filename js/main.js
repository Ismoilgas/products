var BaseRecord=(function() {
$(document).ready(function() {
   $(".link_again").click(function() {return false;});  
   //...
});

return {

mailerNews: function(message, contact){
   var ajaxSetting={
      method: 'post',
      url: '?page=start',
      data: {
         hook: 'MailerNews',
         message: message,
         contact: contact,
      },
      success: function(data){
         //alert(data);
         var data_json=JSON.parse(data);
         for(var i in data_json) {
            if(i=='success') {
               $('.result_to_email').html('Your message has been sended successfully...');
               $('.result_to_email').css('color', 'green');
            }
            if(i=='error') {
               errors='';
               for(var j in data_json[i]) {
                  errors+=data_json[i][j][0]+'<br>';
               }
               $('.result_to_email').html(errors);
               $('.result_to_email').css('color', 'red');
            }
         }
      },
   };
   $.ajax(ajaxSetting);
},

};

})();