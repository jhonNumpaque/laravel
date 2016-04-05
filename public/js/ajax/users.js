function deleteUser(id) {
	var url = "/users/" + id;
	$.ajax({
		url: url,
		type: 'DELETE',
		dataType: 'json',
		success: function(res) {
			$("#row-"+id).fadeOut();
			console.log(res);
		}
	});
}