$(document).ready(function() {
	$("#btnCadastrar").click(function() {
		
		var obj = {
			nome: $("#nome").val(),
			email: $("#email").val(),
			telefone: $("#telefone").val()
		};
		
		console.log(obj);
		
		
		$.ajax({
			url: "usuarioAction.php/?req=1",
			type: "POST",
			dataType: "TEXT",
			data: obj,
			beforeSend:function() {
				$("#resultado").html("Processando...");
			},
			success: function(data) {
				if (data == 1) {
					$("#resultado").css("color", "green");
					$("#resultado").html("Cadastrado...");
				}else{
					$("#resultado").css("color", "red");
					$("#resultado").html("ouve um erro, tente mais tarde...");
				}
			},
			error: function(error) {
				alert("Erro: " + error)
			}
		});
		

	});

	$("#btnConsulta").click(function() {
		
		
		$.ajax({
			url: "usuarioAction.php/?req=2",
			type: "GET",
			dataType: "TEXT",
			data: {},
			success: function(data) {
				$("#consulta").html(data);
			},
			error: function(error) {
				alert("Erro: " + error)
			}
		});
		

	});
});