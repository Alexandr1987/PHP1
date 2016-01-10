$('#submit').on('click', function(event){
	event.preventDefault();
	
	$.ajax({
		url:'response.php',
		method:'GET',
		data: $('#form').serialize(),
		success: function(data, status, req){
			console.log(data);
			console.log(status);
		},
		
	});
});

