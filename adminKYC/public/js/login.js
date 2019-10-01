
//Limpia los campos al recargar la página
$(document).ready(function(){
	var email = document.getElementById("email").value;

	if (email != ""){
		document.getElementById("email").value = "";
	}
});

//función de los campos
$(".input").focus(function(){
	$(this).parent().addClass("focus");
}).blur(function(){
	if($(this).val() === ''){
		$(this).parent().removeClass("focus");
	}
})

//configuración del toast
toastr.options = {
	"closeButton": false,
	"debug": false,
	"newestOnTop": false,
	"progressBar": false,
	"positionClass": "toast-top-left",
	"preventDuplicates": false,
	"onclick": null,
	"showDuration": "300",
	"hideDuration": "1000",
	"timeOut": "5000",
	"extendedTimeOut": "1000",
	"showEasing": "swing",
	"hideEasing": "linear",
	"showMethod": "fadeIn",
	"hideMethod": "fadeOut"
}

function onKeyDown(event)
{
	const key = event.key;

	if (key === "Enter")
	{
		validaCampos();
	}
}

function validaCampos() {
	var email = $("#email").val();
	var pass = $("#pass").val();

	if ($.trim(email) == "" && $.trim(pass) == "") {
		toastr.error("The email is required", "Error!");
		$(".inputBox").addClass("validarEmail");

		toastr.error("The password is required", "Error!");
		$(".inputBoxPass").addClass("validarPass");

		return false;
	}else if($.trim(email) != "" && $.trim(pass) == "")
	{
		toastr.error("The password is required", "Error!");
		$(".inputBoxPass").addClass("validarPass");
		return false;
	}
	else if($.trim(pass) != "" && $.trim(email) == "" )
	{

		toastr.error("The email is required", "Error!");
		$(".inputBox").addClass("validarEmail");
	}
  else
  {
    if (email != "" && pass != "")
		{
			var formData = new FormData($("#frmlogin")[0]);

		  var email = document.formLogin.email.value;
		  var pass = document.formLogin.pass.value;

		  $.ajax({
		    url: url + 'home/consultarUsuario',
		    type: 'POST',
		    data: formData,
		    cache: false,
		    contentType: false,
		    processData: false,
				beforeSend: function(){
					$("#carga").show("fast");
				},
				success: function(resp)
				{
						if (resp == 1 || resp == "1")
						{
							$("#carga").hide("slow");
							$("#success").show("fast");
							$("#formatoEmail").hide("slow");
							$("#errorcredenciales").hide("slow");

							window.location = url + 'home/getPanelClientes';
						}

						if (resp == 2 || resp == "2")
						{
							$("#carga").hide("fast");
							$("#success").hide("fast");
							$("#formatoEmail").hide("fast");
							$("#errorcredenciales").show("fast");
						}
				}
		  });
    }
  }
}

function formatoEmail()
{
	var correo = document.formLogin.email.value;
	expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (expr.test(correo))
	{
			document.formLogin.email.style.borderBottom = "2px solid #777";
			$("#formatoEmail").hide('slow');
			return true;
	}
	else
	{
		document.formLogin.email.style.borderBottom = "1px solid #f22012";
		$("#formatoEmail").show('slow');
		return false;
	}
}

function validarEmail()
{
	var email = $("#email").val();

	if (email.length >= 2)
	{
		$(".inputBox").removeClass("validarEmail");
	}
}

function validarPass()
{
	var pass = $("#pass").val();

	if (pass.length >= 2)
	{
		$(".inputBoxPass").removeClass("validarPass");
	}
}
