$(document).ready(function () {



});
$('#state').on('change', function () {
	var id = $('#state').val();
	$.ajax({
		url:"core/app/querys/change_muni.php",
		type:'post',
		data: {'id': id},
		dataType:'json',
		success(data) {
			$('#municipal').empty();
			console.log(data);
			$.each(data, function (i, item) {
				$('#municipal').append($('<option>', { 
					value: item.id,
					text : item.name 
				}));
			});

		}


	});
});
$('#o').click(function () {
	alert();
});