function details()
{
	$.ajax({
         
		type: 'GET',
		url: 'details.php',
		data: {},
		success: function(data) {
	$("#show_data").html(data);
		}
		});	
	
}
