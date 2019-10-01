

function validarCorreoUsuario()
{
  var correo = document.formusers.useremail.value;
  expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if (expr.test(correo))
  {
      document.formusers.useremail.style.border = "1px solid  #17dd37";
      $("#avisoemailuserformato").hide('slow');
      $("#avisoemailrequired").hide('slow');
      return true;
  }
  else
  {
    document.formusers.useremail.style.border = "1px solid #f22012";
    $("#avisoemailuserformato").show('slow');
    $("#avisoemailrequired").hide('slow');
    return false;
  }
}

function validarPassword()
{
  var pass_larga = true;
  var no_tiene_espacio = true;
  var tiene_numero = false;
  var password = document.formusers.password.value;
  var numero_caracteres = password.length;
  if(numero_caracteres < 8) pass_larga = false;

  for (var i = 0; i < numero_caracteres; i++)
  {
    if(password.charAt(i) == " ") no_tiene_espacio = false;

    if(password.charAt(i) == "0" || password.charAt(i) == "1" || password.charAt(i) == "2" || password.charAt(i) == "3" ||
       password.charAt(i) == "4" || password.charAt(i) == "5" || password.charAt(i) == "6" || password.charAt(i) == "7" ||
       password.charAt(i) == "8" || password.charAt(i) == "9")

       tiene_numero = true;
  }

  if(!tiene_numero || !no_tiene_espacio || !pass_larga)
  {
    document.formusers.password.style.border ="1px solid #f22012";
    $("#avisopassword").show('slow');
    $("#avisopasswordrequerido").hide('slow');
    return false;
  }
  else
  {
    $("#avisopassword").hide('slow');
    $("#avisopasswordrequerido").hide('slow');
    document.formusers.password.style.border = "1px solid #17dd37";
    return true;
  }
}

function ValidarRepeatPassword()
{
  if(document.formusers.password.value != document.formusers.repeatpass.value)
  {
    document.formusers.repeatpass.style.border = "1px solid #f22012";
    $("#avisopasswordrepeat").show('slow');
    $("#avisorepeatpaswordrequired").hide('slow');
    return false;
  }
  else
  {
    document.formusers.repeatpass.style.border = "1px solid #17dd37";
    $("#avisopasswordrepeat").hide('slow');
    $("#avisorepeatpaswordrequired").hide('slow');
    return true;
  }
}

function ValidarFormularioUsuarios()
{
    if (document.formusers.useremail.value != "")
    {
        $("#avisoemailrequired").hide('fast');
        document.formusers.useremail.style.border = "1px solid #17dd37";
    }

    if (document.formusers.useremail.value == "")
    {
        $("#avisoemailrequired").show('fast');
        document.formusers.useremail.style.border = "1px solid #f22012";
    }

    if (document.formusers.password.value != "")
    {
        $("#avisopasswordrequerido").hide('fast');
        document.formusers.password.style.border = "1px solid #17dd37";
    }

    if (document.formusers.password.value == "")
    {
        $("#avisopasswordrequerido").show('slow');
        document.formusers.password.style.border = "1px solid #f22012";
    }

    if (document.formusers.repeatpass.value != "")
    {
        $("#avisorepeatpaswordrequired").hide('fast');
        document.formusers.repeatpass.style.border = "1px solid #17dd37";
    }

    if (document.formusers.repeatpass.value == "")
    {
        $("#avisorepeatpaswordrequired").show('slow');
        document.formusers.repeatpass.style.border = "1px solid #f22012";
    }

    if (document.formusers.password.value != "" &&
        document.formusers.useremail.value != "" &&
        document.formusers.repeatpass.value != "")
    {
        var formData = new FormData($("#form-users")[0]);

        var email = document.formusers.useremail.value;
        var password = document.formusers.password.value;
        var pass2 = document.formusers.repeatpass.value;

        $.ajax({
          url: url + 'usuarios/guardarUsuario',
          type: 'POST',
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function(){
            $("#emailrepetido").hide('slow');
            $("#success").hide('fast');
            $("#carga").show("fast");
          },
          success: function(resp){

            if (resp == 1) {
              $("#carga").hide("slow");
              $("#emailrepetido").hide('slow');
              $("#success").show('slow');
              setTimeout(function(){
                location.href = url + "home/inicioSesion";
              }, 5000);
            }

            if (resp == 2) {
              $("#carga").hide("slow");
              $("#emailrepetido").show('slow');
            }

          }
        });
    }
}

$("#country").select2();
