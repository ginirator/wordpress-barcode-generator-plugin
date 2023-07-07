jQuery(document).ready(function ($) {
	console.log(online_tool_object.online_tool_url + '/barcode.php');
	$('#barcodeForm').on('submit', function(e) {
		e.preventDefault();
		$.ajax({
			type: 'POST',
			url: online_tool_object.online_tool_url + '/barcode.php',
			data: $(this).serialize(),
			success: function(response) {
				// you can open a new window/tab with the barcode
				var win = window.open('', '_blank');
				win.document.write(response);
				win.document.close();
				win.print();
			},
			error: function(error) {
				// handle error
				console.log(error);
			}
		});
	});
});
