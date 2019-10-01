function validate()
{
    if (document.formlogin.loginpass.value == "")
    {
        $("#avisoPasswordRequeridoLogin").show('slow');
        $("#avisoPasswordLogin").hide('slow');
        document.formlogin.loginpass.style.border = "1px solid #f22012";
    }

    if (document.formlogin.emailuser.value == "")
    {
        $("#avisoEmailRequired").show('slow');
        document.formlogin.emailuser.style.border = "1px solid #f22012";
    }

    if (document.formlogin.emailuser.value != "" &&
        document.formlogin.loginpass.value != "" )
    {

        $("#avisoEmailRequired").hide('slow');
        $("#avisoPasswordRequeridoLogin").hide('slow');
        var formData = new FormData($("#form-login")[0]);

        $.ajax({
          url: url + 'home/Validar',
          type: 'POST',
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function(){
            $("#carga").show("slow");
            $("#successData").hide("slow");
            $("#errorData").hide('slow');
          },
          success: function(resp){

            if (resp == 1) {
              $("#carga").hide("slow");
              $("#successData").show('slow');
              $("#errorData").hide('slow');
                  setTimeout(function(){
                    location.href = url + "home/index";
                  }, 5000);
            } else {
              $("#carga").hide("slow");
              $("#successData").hide('slow');
              $("#errorData").show('slow');
            }

          }
        });
    }
}

function validarPasswordLogin()
{

  var password = document.formlogin.loginpass.value;
  
  if(password.length < 8)
  {
     document.formlogin.loginpass.style.border = "1px solid  #f22012";
      $("#avisoPasswordRequeridoLogin").hide('slow');
      $("#avisoPasswordLogin").show('slow');
  }
  
   
  if(password.length >= 8)
  {
     document.formlogin.loginpass.style.border = "1px solid  #17dd37";
      $("#avisoPasswordRequeridoLogin").hide('slow');
      $("#avisoPasswordLogin").hide('slow');
  }

}


function onKeyDown(event) 
{
    //Si presiona enter, podra ingresar si tiene los datos validos
    const key = event.key;
    
    if (key === "Enter")
    {
      validate();
    }
}

function validarCorreo()
{
  var correo = document.formlogin.emailuser.value;
  
  expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if (expr.test(correo))
  {
      document.formlogin.emailuser.style.border = "1px solid  #17dd37";
      $("#avisoemailformato").hide('slow');
      $("#avisoEmailRequired").hide('slow');
      return true;
  }
  else
  {
    document.formlogin.emailuser.style.border = "1px solid #f22012";
    $("#avisoemailformato").show('slow');
    return false;
  }
}
