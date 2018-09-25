// url = "http://localhost/saad/";
// $('body').on('submit','#loginform',function(e){
// 	var email = $("#email").val();
// 	var pass = $("#password").val();
// 	var data = {email:email,password:pass,login:'login'};
// 	$.ajax({
//         url: url+"Home/customer_login?nocache="+Math.random(),
//         type: "post",
//         data: data ,
//         cache: false,
//         dataType: "json",
//         success: function (response) {
              
//             console.log(response);
//         },
//         error: function(jqXHR, textStatus, errorThrown) {
//            // console.log(textStatus, errorThrown);
//         }


//     });
// 	return false;
// });