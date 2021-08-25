$(document).on('click', '#btn-edit',function(){
    $('.modal-body #data-nama').val($(this).data('nama'));
    $('.modal-body #data-id').val($(this).data('id'));
})


	// $(".fileSelection1 #Select_File1").click(function(e) {
	// 	document.getElementsByName('anggota_id')[0].value = $(this).attr("data_id");
	// 	$('#TableAnggota').modal('hide');
	// 	$.ajax({
	// 		type: "POST",
	// 		url: "<?php echo base_url('petugas/result'); ?>",
	// 		data: 'kode_anggota=' + $(this).attr("data_id"),
	// 		beforeSend: function() {
	// 			$("#result").html("");
	// 			$("#result_tunggu").html('<p style="color:green"><blink>tunggu sebentar</blink></p>');
	// 		},
	// 		success: function(html) {
	// 			$("#result").html(html);
	// 			$("#result_tunggu").html('');
	// 		}
	// 	});
	// });



	// // AJAX call for autocomplete 
	// $(document).ready(function() {
	// 	$("#search-box").keyup(function() {
	// 		$.ajax({
	// 			type: "POST",
	// 			url: "<?php echo base_url('petugas/result'); ?>",
	// 			data: 'kode_anggota=' + $(this).val(),
	// 			beforeSend: function() {
	// 				$("#result").html("");
	// 				$("#result_tunggu").html('<p style="color:green"><blink>tunggu sebentar</blink></p>');
	// 			},
	// 			success: function(html) {
	// 				$("#result").html(html);
	// 				$("#result_tunggu").html('');
	// 			}
	// 		});
	// 	});
	// });

