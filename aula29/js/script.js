$(document).ready(function() {
	$("#cep").focusout(function() {
		if ($("#cep").val().length >= 5) {
			var cep = $("#cep").val().replace("-", "");
			var url = "http://localhost/PHP/aula29/cep.php/?cep=" + cep;
			$.ajax({
				url: url,
				type: "GET",
				dataType: "JSON",
				data: {},
				success: function(data) {
					if (data != null) {
						$("#estado").val(data.estado);
						$("#cidade").val(data.cidade);
						$("#rua").val(data.rua);
					}
				},
				error: function(error) {
						$("#estado").val("0");
						$("#cidade").val("0");
						$("#rua").val("0");
				}
			});
		};
	});
});