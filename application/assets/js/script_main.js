/*
| ==================================================
| General Variabel
| ==================================================
*/
var url = window.location.href,
	segment = url.split("/"),
	base_url = window.location.origin+"/"+segment[3]+"/";

// alert(base_url);

var pathArray = window.location.pathname.split( '/' ),
	urlParam = new URLSearchParams(window.location.search);
	// loader = $("#myLoader");

var _URL = window.URL || window.webkitURL;
// alert(urlParam.get('q'));

$('#file').on("change",function() {
	console.log("change fire");
   var i = $(this).prev('label').clone();
	var file = $('#file')[0].files[0].name;
 console.log(file);
	$(this).prev('label').text(file);
 
  });

/*
| ==================================================
| Login
| ==================================================
*/
$(document).ready(function() {
	$(document).on('click', '#login button', function() {
		var aa = $('#login');
		aa.validate({
			rules: {
				username: { required: true }, password: { required: true }
			},
			submitHandler: function(form) {
				$.ajax({
					type: 'POST',
					url: base_url + 'login/process',
					data: new FormData(form),
					contentType: false,
		            processData: false,
		            cache: false,
					success: function(data) {
						window.location.reload();
					}
				})
			}
		})
	})
})



