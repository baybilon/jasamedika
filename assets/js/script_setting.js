/*
| ==================================================
| Change User Menu
| ==================================================
*/

$(document).ready(function(){
	$(document).on('click', '#form-edit-menu button', function(e){
		var aa = $('form-edit-menu');
		aa.validate({
			submitHandler: function(form){

			}
		})
	})
})

/*
| ==================================================
| User Management
| ==================================================
*/

$(document).ready(function() {
	$(document).on('click', '#form-register button', function(e) {
		var aa = $('#form-register'),
			username = $('input[name="username"]', aa).val();
		aa.validate({
			rules: {
				fullname: { required: true }, 
				username: { 
					required: true,
					remote: {
						type: 'POST',
						url: base_url+'user-management/user-verif',
						data: {'username':username}
					}
				}, 
				password: { required: true },
				department: { required: true },
				sub_department: { required: true },
				level: { required: true }, 
			},
			messages:{
				username: { remote: "Username taken"},
			},
			submitHandler: function(form) {
				$.ajax({
					type: 'POST',
					url: base_url + 'user-management/register-process',
					data: new FormData(form),
					contentType: false,
		            processData: false,
		            cache: false,
					// error: function(data){
					// 	console.log('error');
					// },
					success: function(data) {
						console.log(data);
						// window.location.reload();
					}
				})
			}
		})
	})
})

$(document).ready(function() {
	$(document).on('click', '#delete a', function() {
		var aa = $('#delete');
		aa.validate({
			submitHandler: function(form) {
				$.ajax({
					type: 'POST',
					url: base_url + 'user-management/delete-user',
					data: new FormData(form),
					contentType: false,
		            processData: false,
		            cache: false,
					beforeSend:function(){
						return confirm("Are you sure?");
					 },
					success: function(data) {
						// console.log(data);
						window.location.reload();
					}
				})
			}
		})
	})
})


$(document).ready(function() {
	$(document).on('click', '#form-password button', function() {
		var aa = $('#form-password');
		aa.validate({
			rules: { 
				password: { 
					required: true
				 },
				confirmation: { 
					required: true,
					equalTo: '#password'
				 },

			},
			submitHandler: function(form) {
				$.ajax({
					type: 'POST',
					url: base_url + 'profile/edit-password',
					data: new FormData(form),
					contentType: false,
		            processData: false,
		            cache: false,
					beforeSend:function(){
						return confirm("Are you sure?");
					 },
					success: function(data) {
						console.log(data);
						// window.location.reload();
					}
				})
			}
		})
	})
})	

/*
| ==================================================
| Menu Management
| ==================================================
*/
$(document).ready(function() {
	$(document).on('change', '#add-menu select[name="category"]', function(e) {
		var aa = $('#add-menu'),
			category = $(this).find(':selected').val(),
			group = $('div[data-label="group"]',aa),
			menu = $('div[data-label="menu"]',aa),
			icon = $('div[data-label="icon"]',aa),
			// sub_menu = $('div[data-label="sub_menu"]',aa),
			all = $('div[data-label="group"], div[data-label="menu"], div[data-label="sub_menu"], div[data-label="icon"]',aa);
			
		if (category=='group') {
			console.log('hehe');
			all.hide();
		}

		if (category=='menu') {
			console.log('menu')
			all.hide();
			icon.fadeIn();
			group.fadeIn()
		}
		if (category=='sub_menu') {
			console.log('sub_menu')
			all.hide();
			group.fadeIn(); menu.fadeIn();
		}
		
	})

	$(document).on('click', '#add-menu button', function(e) {
		var aa = $('#add-menu');
			// form = $('input[name="form"]',aa).val();
		aa.validate({
			rules: { 
				menu_title: { required: true }, 
				category: { required: true }, 
				group: { required: true }, 
				menu: { required: true }, 
				sub_menu: { required: true }
			},
			submitHandler: function(form) {
				$.ajax({
					type: 'POST',
					url: base_url+'menu-management/add-menu',
					data: new FormData(form),
					contentType: false,
		            processData: false,
		            cache: false,
					success: function(data) {
						// console.log(data);
						
						// if (form=='add') {
						// 	window.location.href = base_url+'menu';
						// } else {
						// 	window.location.reload();
						// }
						window.location.reload();
					}
				})
			}
		})
	})

	// $(document).on('click', '#table-menu .btn-edit', function(e) {
	// 	// e.preventDefault();
	// 	var id = $(this).data('id');
	// 	window.location.href = base_url+'menu/edit/?id='+id;
	// })

	// $('#group').change(function(){
	// 	var menu = $(this).val();

	// 	$.ajax({
	// 		url: base_url+'menu-management/get-menu',
	// 		method: 'POST',
	// 		data: {menu: menu},
	// 		dataType: 'json',
	// 		success: function(response){
	// 			$('#group').find('option').not(':first').remove();
	// 			$('#menu').find('option').not(':first').remove();
				
	// 			$.each(response, function(index, data){
	// 				$('#menu').append('<option value="'+data['id'] + '">' + data['menu_title'] + '</option>');
	// 			});
	// 		},
	// 		error: function (response){
	// 			console.log('gsgal');
	// 		}
	// 	})
	// })

	$('#group').change(function(){
		var group_id = $('#group').val();
		if (group_id != ''){
			$.ajax({
			url: base_url+'menu-management/get-menu',
			method: 'POST',
			data: {group_id: group_id},
			success: function(data){
				$('#menu').html(data);
			},
			error: function(data){
				console.log('gagal');
			}
			})
		}
	})

	$(document).on('click', '#user-menu button', function(e){

		var aa = $('#user-menu');
		aa.validate({
			submitHandler: function(form){
				$.ajax({
					type: 'POST',
					url: base_url+'user-management/setting-menu',
					data: new FormData(form),
					contentType: false,
					processData: false,
					cache: false,
					success: function(data){
						windoww.location.reload();
					}
				})
			}
		})

	})

})