$('#button').click(function(){

	var name = $('#name').val();
	var pass = $('#pass').val();
	
	$.post('try.php', { name:name, pass:pass }, function(data){

		$('#fetcheddata').html(data);

	});

});