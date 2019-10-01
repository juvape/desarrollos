
//-----------------------------------------------------------------------------------------------------
//  Verifica email ingresado con el de la base de datos para envíar email y el usuario pueda recuperar
//  su contraseña

function forgotPassword()
{
    
    if (document.formRememberPass.emailuserforgotpass.value == "")
      {
        document.formRememberPass.emailuserforgotpass.style.border = "1px solid #f22012";
        $("#avisoemailformato").show('slow');
        $("#avisoemailrequiredforgot").show('slow');
      }

    if (document.formRememberPass.emailuserforgotpass.value != "")
    {
        $("#avisoemailreqvuiredforgot").hide('slow');
        
        var formData = new FormData($("#form-rememberPassword")[0]);

        $.ajax({
          url: url + 'usuarios/RecuperarContrasenha',
          type: 'POST',
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function(){
            $("#cargaRememberPass").show("slow");
            $("#errordataforgotpassword").hide("slow");
            $("#exitoActualizacionRememberPass").hide("slow");
          },
          success: function(resp){

            if (resp == 1)
            {
              $("#cargaRememberPass").hide("fast");
              $("#exitoActualizacionRememberPass").show('fast');
              $("#errordataforgotpassword").hide("fast");
                  
                  
            }
            
            if(resp == 2) 
            {
              $("#cargaRememberPass").hide("fast");
              $("#exitoActualizacionRememberPass").hide('fast');
              $("#errordataforgotpassword").show('fast');
            }

          }
        });
    }
    else
    {
        $("#avisoemailreqvuiredforgot").show('slow');
    }
}

function rememberPass(event)
{
    //Si presiona enter, podra ingresar si tiene los datos validos
    const key = event.key;
    
    if (key === "Enter")
    {
        // alert("Presionaste ENTER");
        event.preventDefault();
        forgotPassword();
    }
    
}


function validarCorreoRememberPass()
{
  var correo = document.formRememberPass.emailuserforgotpass.value;
  expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if (expr.test(correo))
  {
      document.formRememberPass.emailuserforgotpass.style.border = "1px solid  #17dd37";
      $("#avisoemailformato").hide('slow');
      $("#avisoemailrequiredforgot").hide('slow');
      return true;
  }
  else
  {
    document.formRememberPass.emailuserforgotpass.style.border = "1px solid #f22012";
    $("#avisoemailformato").show('slow');
    $("#avisoemailrequiredforgot").show('slow');
    return false;
  }
}

//----------------------------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------
// Para realizar la actualización de la contraseña olvidada

// function validarEmailChangePass()
// {
//   var correo = document.formChangePass.emailChangePass.value;
//   expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
//   if (expr.test(correo))
//   {
//       document.formChangePass.emailChangePass.style.border = "1px solid  #17dd37";
//       $("#avisoemailuserformato").hide('slow');
//       $("#avisoemailrequired").hide('slow');
//       return true;
//   }
//   else
//   {
//     document.formChangePass.emailChangePass.style.border = "1px solid #f22012";
//     $("#avisoemailuserformato").show('slow');
//     $("#avisoemailrequired").hide('slow');
//     return false;
//   }
// }

// function validarChangePassword()
// {
//   var pass_larga = true;
//   var no_tiene_espacio = true;
//   var tiene_numero = false;
//   var password = document.formChangePass.passChangePass.value;
//   var numero_caracteres = password.length;
//   if(numero_caracteres < 8) pass_larga = false;

//   for (var i = 0; i < numero_caracteres; i++)
//   {
//     if(password.charAt(i) == " ") no_tiene_espacio = false;

//     if(password.charAt(i) == "0" || password.charAt(i) == "1" || password.charAt(i) == "2" || password.charAt(i) == "3" ||
//       password.charAt(i) == "4" || password.charAt(i) == "5" || password.charAt(i) == "6" || password.charAt(i) == "7" ||
//       password.charAt(i) == "8" || password.charAt(i) == "9")

//       tiene_numero = true;
//   }

//   if(!tiene_numero || !no_tiene_espacio || !pass_larga)
//   {
//     document.formChangePass.passChangePass.style.border ="1px solid #f22012";
//     $("#avisopassword").show('slow');
//     $("#avisopasswordrequerido").hide('slow');
//     return false;
//   }
//   else
//   {
//     $("#avisopassword").hide('slow');
//     $("#avisopasswordrequerido").hide('slow');
//     document.formChangePass.passChangePass.style.border = "1px solid #17dd37";
//     return true;
//   }
// }

// function ValidarRepeatChangePassword()
// {
//   if(document.formChangePass.passChangePass.value != document.formChangePass.repeatChangePass.value)
//   {
//     document.formChangePass.repeatChangePass.style.border = "1px solid #f22012";
//     $("#avisopasswordrepeat").show('slow');
//     $("#avisorepeatpaswordrequired").hide('slow');
//     return false;
//   }
//   else
//   {
//     document.formChangePass.repeatChangePass.style.border = "1px solid #17dd37";
//     $("#avisopasswordrepeat").hide('slow');
//     $("#avisorepeatpaswordrequired").hide('slow');
//     return true;
//   }
// }

// function ValidarFormularioChangePass()
// {
//     if (document.formChangePass.emailChangePass.value != "")
//     {
//         $("#avisoemailrequired").hide('fast');
//         document.formChangePass.emailChangePass.style.border = "1px solid #17dd37";
//     }

//     if (document.formChangePass.emailChangePass.value == "")
//     {
//         $("#avisoemailrequired").show('fast');
//         document.formChangePass.emailChangePass.style.border = "1px solid #f22012";
//     }

//     if (document.formChangePass.passChangePass.value != "")
//     {
//         $("#avisopasswordrequerido").hide('fast');
//         document.formChangePass.passChangePass.style.border = "1px solid #17dd37";
//     }

//     if (document.formChangePass.passChangePass.value == "")
//     {
//         $("#avisopasswordrequerido").show('slow');
//         document.formChangePass.passChangePass.style.border = "1px solid #f22012";
//     }

//     if (document.formChangePass.repeatChangePass.value != "")
//     {
//         $("#avisorepeatpaswordrequired").hide('fast');
//         document.formChangePass.repeatChangePass.style.border = "1px solid #17dd37";
//     }

//     if (document.formChangePass.repeatChangePass.value == "")
//     {
//         $("#avisorepeatpaswordrequired").show('slow');
//         document.formChangePass.repeatChangePass.style.border = "1px solid #f22012";
//     }

//     if (document.formChangePass.passChangePass.value != "" &&
//         document.formChangePass.emailChangePass.value != "" &&
//         document.formChangePass.repeatChangePass.value != "")
//     {
//         var formData = new FormData($("#form-changePass")[0]);


//         $.ajax({
//           url: url + 'usuarios/ActualizarContrasenha',
//           type: 'POST',
//           data: formData,
//           cache: false,
//           contentType: false,
//           processData: false,
//           beforeSend: function(){
//             $("#successChangePass").hide('fast');
//             $("#carga").show("fast");
//           },
//           success: function(resp){

//             if (resp == 1) {
//               $("#carga").hide("slow");
//               $("#successChangePass").show('slow');
//               setTimeout(function(){
//                 location.href = url + "home/inicioSesion";
//               }, 5000);
//             }

//             if (resp == 2) {
//               $("#carga").hide("slow");
//               $("#errorChangePass").show('slow');
//             }

//           }
//         });
//     }
// }
