

function ValidarCampos()
{
  var emailuser = $('#emailuser').val();
  var pass = $('#pass').val();

  if (emailuser != '' && pass != '') {
    $("#avisocampos").hide("slow");
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
      return true;
  }
  else
  {
    document.formlogin.emailuser.style.border = "1px solid #f22012";
    $("#avisoemailformato").show('slow');
    return false;
  }
}

function onKeyDown(event) {
    const key = event.key; // "A", "1", "Enter", "ArrowRight"...
    // console.log("Presionada: " + key);

    if (key === "Enter")
    {
        // alert("presionaste ENTER");

        var connect, emailuser, pass, form, result;
        emailuser = document.getElementById('emailuser').value;
        pass = document.getElementById('pass').value;

        if (emailuser != '' && pass != '') {
          form = 'emailuser=' + emailuser + '&pass=' + pass;

          connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
          connect.onreadystatechange = function()
          {
            if (connect.readyState == 4 && connect.status == 200) {
                if (parseInt(connect.responseText) == 1) {
                  //Conexión exitosa y se redirecciona
                  result = '<div class="alert alert-dismissible alert-success">';
                  result += '<button type="button" class="close" data-dismiss="alert">x</button>';
                  result += '<center><strong><i class="fa fa-spinner fa-spin fa-3x" aria-hidden="true"></i>&nbsp;Connected!</strong> We are redirecting...</center>';
                  result += '</div>';
                  document.getElementById('_AJAX_').innerHTML = result;
                  window.location = url + 'home/index';
                }else{
                  //Error: datos incorrectos
                  result = '<div class="alert alert-dismissible alert-danger">';
                  result += '<button type="button" class="close" data-dismiss="alert">x</button>';
                  result += '<p class="text-center"><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;Error! </strong>Incorrect credentials</p>';
                  result += '</div>';
                  document.getElementById('_AJAX_').innerHTML = result;
                }
            }

            if(connect.readyState != 4){
              //Procesando..
              result = '<div class="alert alert-dismissible alert-warning">';
              result += '<button type="button" class="close" data-dismiss="alert">x</button>';
              result += '<center><strong><i class="fa fa-spinner fa-spin fa-3x" aria-hidden="true"></i>&nbsp;Procesing data...!</strong></center>';
              result += '</div>';
              document.getElementById('_AJAX_').innerHTML = result;
            }
          }
          connect.open('POST', url + 'home/Validar', true);
          connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
          connect.send(form);
        }else{
          //Mostrar error de datos vacíos
          result = '<div class="alert alert-dismissible alert-danger" id="avisocampos">';
          result += '<button type="button" class="close" data-dismiss="alert">x</button>';
          result += '<p class="text-center"><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp';
          result += 'Error! </strong>You have to fill all the fields with <span class="red">*</span></p>';
          result += '</div>';
          document.getElementById('emailuser').style.border = '1px solid #f22012';
          document.getElementById('pass').style.border = '1px solid #f22012';
          document.getElementById('_AJAX_').innerHTML = result;
        }
    }
};

    function valedate(){

      var connect, pass, form, result;
      emailuser = document.getElementById('emailuser').value;
      pass = document.getElementById('pass').value;

      if (emailuser != '' && pass != '') {
        form = 'emailuser=' + emailuser + '&pass=' + pass;

        connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        connect.onreadystatechange = function()
        {
          if (connect.readyState == 4 && connect.status == 200) {
              if (parseInt(connect.responseText) == 1) {
                //Conexión exitosa y se redirecciona
                result = '<div class="alert alert-dismissible alert-success">';
                result += '<button type="button" class="close" data-dismiss="alert">x</button>';
                result += '<center><strong><i class="fa fa-spinner fa-spin fa-3x" aria-hidden="true"></i>&nbsp;Connected!</strong> We are redirecting...</center>';
                result += '</div>';
                document.getElementById('_AJAX_').innerHTML = result;
                window.location = url + 'home/index';
              }else{
                //Error: datos incorrectos
                result = '<div class="alert alert-dismissible alert-danger">';
                result += '<button type="button" class="close" data-dismiss="alert">x</button>';
                result += '<p class="text-center"><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;Error! </strong>Incorrect credentials</p>';
                result += '</div>';
                document.getElementById('_AJAX_').innerHTML = result;
              }
          }

          if(connect.readyState != 4){
            //Procesando..
            result = '<div class="alert alert-dismissible alert-warning">';
            result += '<button type="button" class="close" data-dismiss="alert">x</button>';
            result += '<center><strong><i class="fa fa-spinner fa-spin fa-3x" aria-hidden="true"></i>&nbsp;Procesing data...!</strong></center>';
            result += '</div>';
            document.getElementById('_AJAX_').innerHTML = result;
          }
        }
        connect.open('POST', url + 'home/Validar', true);
        connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        connect.send(form);
      }else{
        //Mostrar error de datos vacíos
        result = '<div class="alert alert-dismissible alert-danger" id="avisocampos">';
        result += '<button type="button" class="close" data-dismiss="alert">x</button>';
        result += '<p class="text-center"><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp';
        result += 'Error! </strong>You have to fill all the fields with <span class="red">*</span></p>';
        result += '</div>';
        document.getElementById('emailuser').style.border = '1px solid #f22012';
        document.getElementById('pass').style.border = '1px solid #f22012';
        document.getElementById('_AJAX_').innerHTML = result;
      }
  }
