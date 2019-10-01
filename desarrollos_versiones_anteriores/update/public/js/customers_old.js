
function ValidarFormulario()
{
    if (document.formcustomers.tipo_diligencia.value == "")
      {
          $("#avisotipodiligencia").show('slow');
          document.formcustomers.tipo_diligencia.style.border = "2px solid #f22012";
      }

    if (document.formcustomers.tipo_diligencia.value != "")
      {
          $("#avisotipodiligencia").hide('slow');
          document.formcustomers.tipo_diligencia.style.border = "1px solid #17dd37";
      }

    if (document.formcustomers.fecha_diligenciamiento.value == "")
      {
          $("#avisofecha").show('slow');
          document.formcustomers.fecha_diligenciamiento.style.border = "1px solid #f22012";
      }

    if (document.formcustomers.fecha_diligenciamiento.value != "")
      {
          $("#avisofecha").hide('slow');
          document.formcustomers.fecha_diligenciamiento.style.border = "1px solid #17dd37";
      }


    if (document.formcustomers.lugar_diligenciamiento.value == "")
    {
        $("#avisolugar").show('slow');
        document.formcustomers.lugar_diligenciamiento.style.border = "1px solid #f22012";
    }

    if (document.formcustomers.lugar_diligenciamiento.value != "")
    {
        $("#avisolugar").hide('slow');
        document.formcustomers.lugar_diligenciamiento.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers.nombre1.value == "")
    {
        $("#avisonombre1").show('slow');
        document.formcustomers.nombre1.style.border = "1px solid #f22012";
    }

    if (document.formcustomers.nombre1.value != "")
    {
        $("#avisonombre1").hide('slow');
        document.formcustomers.nombre1.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers.apellido1.value == "")
    {
        $("#avisoapellido1").show('slow');
        document.formcustomers.apellido1.style.border = "1px solid #f22012";
    }

    if (document.formcustomers.apellido1.value != "")
    {
        $("#avisoapellido1").hide('slow');
        document.formcustomers.apellido1.style.border = "1px solid #17dd37";
    }


    if (document.formcustomers.sexo.value == "")
    {
        $("#avisosexo").show('slow');
        document.formcustomers.sexo.style.border = "1px solid #f22012";
    }

    if (document.formcustomers.sexo.value != "")
    {
        $("#avisosexo").hide('slow');
        document.formcustomers.sexo.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers.nacimiento.value == "")
    {
        $("#avisonacimiento").show('slow');
        document.formcustomers.nacimiento.style.border = "1px solid #f22012";
    }

    if (document.formcustomers.nacimiento.value != "")
    {
        $("#avisonacimiento").show('slow');
        document.formcustomers.nacimiento.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers.tipo_documento.value == "")
    {
        $("#avisotipodocumento").show('slow');
        document.formcustomers.tipo_documento.style.border = "1px solid #f22012";
    }

    if (document.formcustomers.tipo_documento.value != "")
    {
        $("#avisotipodocumento").hide('slow');
        document.formcustomers.tipo_documento.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers.documento.value == "")
    {
        $("#avisodocumento").show('slow');
        document.formcustomers.documento.style.border = "1px solid #f22012";
    }

    if (document.formcustomers.documento.value != "")
    {
        $("#avisodocumento").hide('slow');
        document.formcustomers.documento.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers.direccion.value == "")
    {
        $("#avisodireccion").show('slow');
        document.formcustomers.direccion.style.border = "1px solid #f22012";
    }

    if (document.formcustomers.pais.value == "")
    {
        $("#avisopais").show('slow');
        document.formcustomers.pais.style.border = "1px solid #f22012";
    }

    if (document.formcustomers.pais.value != "")
    {
        $("#avisopais").hide('slow');
        document.formcustomers.pais.style.border = "1px solid #17dd37";
    }


    if (document.formcustomers.departamento.value == "")
    {
        $("#avisodepartamento").show('slow');
        document.formcustomers.departamento.style.border = "1px solid #f22012";
    }

    if (document.formcustomers.departamento.value != "")
    {
        $("#avisodepartamento").hide('slow');
        document.formcustomers.departamento.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers.email.value == "")
    {
        $("#avisocorreo").show('slow');
        document.formcustomers.email.style.border = "1px solid #f22012";
    }

    if (document.formcustomers.email.value != "")
    {
      $("#avisocorreo").hide('slow');
      document.formcustomers.email.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers.tipo_diligencia.value != "" &&
        document.formcustomers.fecha_diligenciamiento.value != "" &&
        document.formcustomers.lugar_diligenciamiento.value != "" &&
        document.formcustomers.nombre1.value != "" &&
        document.formcustomers.apellido1.value != "" &&
        document.formcustomers.sexo.value != "" &&
        document.formcustomers.nacimiento.value != "" &&
        document.formcustomers.tipo_documento.value != "" &&
        document.formcustomers.documento.value != "" &&
        document.formcustomers.direccion.value != "" &&
        document.formcustomers.ciudad.value != "" &&
        document.formcustomers.pais.value != "" &&
        document.formcustomers.departamento.value != "" &&
        document.formcustomers.email.value != ""
      )
    {
        
        $("#avisonacimiento").hide('fast');
        ValidarExistenciaCorreo();

        var formData = new FormData($("#form-customers")[0]);

        var tipoDiligencia = document.formcustomers.tipo_diligencia.value;
        var fechaDiligencia = document.formcustomers.fecha_diligenciamiento.value;
        var lugar = document.formcustomers.lugar_diligenciamiento.value;
        var nombre1 = document.formcustomers.nombre1.value;
        var nombre2 = document.formcustomers.nombre2.value;
        var apellido1 = document.formcustomers.apellido1.value;
        var apellido2 = document.formcustomers.apellido2.value;
        var sexo = document.formcustomers.sexo.value;
        var nacimiento = document.formcustomers.nacimiento.value;
        var tipoDocumento = document.formcustomers.tipo_documento.value;
        var documento = document.formcustomers.documento.value;
        var direccion = document.formcustomers.direccion.value;
        var ciudad = document.formcustomers.ciudad.value;
        var departamento = document.formcustomers.departamento.value;
        var pais = document.formcustomers.pais.value;
        var celular = document.formcustomers.celular.value;
        var email = document.formcustomers.email.value;

        $.ajax({
          url: url + 'clientes/GuardarRegistro',
          type: 'POST',
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function(){
            $("#exito").hide('fast');
            $("#carga").show("fast");
            // $("#exitocorreo").hide('slow');
            $("#errorduplicado").hide('slow');
            $("#erroremail").hide('slow');
            $("#avisonacimiento").hide('slow');
          },
          success: function(resp){

            if (resp == 1) {
              $("#carga").hide("fast");
              $("#exito").show('slow');
              // $("#exitocorreo").show('slow');
              $("#erroremail").hide('slow');
                document.formcustomers.tipo_diligencia.value = "";
                document.formcustomers.tipo_diligencia.style.border = "";
                // document.formcustomers.fecha_diligenciamiento.value = "";
                // document.formcustomers.fecha_diligenciamiento.style.border = "";
                document.formcustomers.lugar_diligenciamiento.value = "";
                document.formcustomers.lugar_diligenciamiento.style.border = "";
                document.formcustomers.nombre1.value = "";
                document.formcustomers.nombre1.style.border = "";
                document.formcustomers.nombre2.value = "";
                document.formcustomers.nombre2.style.border = "";
                document.formcustomers.apellido1.value = "";
                document.formcustomers.apellido1.style.border = "";
                document.formcustomers.apellido2.value = "";
                document.formcustomers.apellido2.style.border = "";
                document.formcustomers.sexo.value = "";
                document.formcustomers.sexo.style.border = "";
                document.formcustomers.nacimiento.value = "";
                document.formcustomers.nacimiento.style.border = "";
                document.formcustomers.tipo_documento.value = "";
                document.formcustomers.tipo_documento.style.border = "";
                document.formcustomers.documento.value = "";
                document.formcustomers.documento.style.border = "";
                document.formcustomers.direccion.value = "";
                document.formcustomers.direccion.style.border = "";
                document.formcustomers.ciudad.value = "";
                document.formcustomers.ciudad.style.border = "";
                document.formcustomers.departamento.value = "";
                document.formcustomers.departamento.style.border = "";
                document.formcustomers.pais.value = "";
                document.formcustomers.pais.style.border = "";
                document.formcustomers.celular.value = "";
                document.formcustomers.celular.style.border = "";
                document.formcustomers.email.value = "";
                document.formcustomers.email.style.border = "";
                  setTimeout(function(){
                    location.reload();;
                  }, 10000);
            }

            else if (resp == 2) {
              $("#carga").hide("fast");
              $("#exito").hide('slow');
              // $("#exitocorreo").hide('slow');
              $("#error").show('slow');
              $("#erroremail").hide('slow');

              document.formcustomers.tipo_diligencia.value = "";
              document.formcustomers.tipo_diligencia.style.border = "";
              // document.formcustomers.fecha_diligenciamiento.value = "";
              // document.formcustomers.fecha_diligenciamiento.style.border = "";
              document.formcustomers.lugar_diligenciamiento.value = "";
              document.formcustomers.lugar_diligenciamiento.style.border = "";
              document.formcustomers.nombre1.value = "";
              document.formcustomers.nombre1.style.border = "";
              document.formcustomers.nombre2.value = "";
              document.formcustomers.nombre2.style.border = "";
              document.formcustomers.apellido1.value = "";
              document.formcustomers.apellido1.style.border = "";
              document.formcustomers.apellido2.value = "";
              document.formcustomers.apellido2.style.border = "";
              document.formcustomers.sexo.value = "";
              document.formcustomers.sexo.style.border = "";
              document.formcustomers.nacimiento.value = "";
              document.formcustomers.nacimiento.style.border = "";
              document.formcustomers.tipo_documento.value = "";
              document.formcustomers.tipo_documento.style.border = "";
              document.formcustomers.documento.value = "";
              document.formcustomers.documento.style.border = "";
              document.formcustomers.direccion.value = "";
              document.formcustomers.direccion.style.border = "";
              document.formcustomers.ciudad.value = "";
              document.formcustomers.ciudad.style.border = "";
              document.formcustomers.departamento.value = "";
              document.formcustomers.departamento.style.border = "";
              document.formcustomers.pais.value = "";
              document.formcustomers.pais.style.border = "";
              document.formcustomers.celular.value = "";
              document.formcustomers.celular.style.border = "";
              document.formcustomers.email.value = "";
              document.formcustomers.email.style.border = "";
                setTimeout(function(){
                  location.reload();;
                }, 10000);
            }

            else if (resp = "Mensaje no enviado")
            {
              $("#carga").hide("fast");
              $("#exito").show('slow');
              // $("#exitocorreo").hide('slow');
              $("#error").hide('slow');

              document.formcustomers.tipo_diligencia.value = "";
              document.formcustomers.tipo_diligencia.style.border = "";
              // document.formcustomers.fecha_diligenciamiento.value = "";
              // document.formcustomers.fecha_diligenciamiento.style.border = "";
              document.formcustomers.lugar_diligenciamiento.value = "";
              document.formcustomers.lugar_diligenciamiento.style.border = "";
              document.formcustomers.nombre1.value = "";
              document.formcustomers.nombre1.style.border = "";
              document.formcustomers.nombre2.value = "";
              document.formcustomers.nombre2.style.border = "";
              document.formcustomers.apellido1.value = "";
              document.formcustomers.apellido1.style.border = "";
              document.formcustomers.apellido2.value = "";
              document.formcustomers.apellido2.style.border = "";
              document.formcustomers.sexo.value = "";
              document.formcustomers.sexo.style.border = "";
              document.formcustomers.nacimiento.value = "";
              document.formcustomers.nacimiento.style.border = "";
              document.formcustomers.tipo_documento.value = "";
              document.formcustomers.tipo_documento.style.border = "";
              document.formcustomers.documento.value = "";
              document.formcustomers.documento.style.border = "";
              document.formcustomers.direccion.value = "";
              document.formcustomers.direccion.style.border = "";
              document.formcustomers.ciudad.value = "";
              document.formcustomers.ciudad.style.border = "";
              document.formcustomers.departamento.value = "";
              document.formcustomers.departamento.style.border = "";
              document.formcustomers.pais.value = "";
              document.formcustomers.pais.style.border = "";
              document.formcustomers.celular.value = "";
              document.formcustomers.celular.style.border = "";
              document.formcustomers.email.value = "";
              document.formcustomers.email.style.border = "";
                setTimeout(function(){
                  location.reload();;
                }, 10000);
            }

            else
            {
              $("#carga").hide("fast");
              $("#exito").show('slow');
              $("#error").hide('slow');
              $("#erroremail").hide('slow');
              // $("#exitocorreo").show('slow');

              document.formcustomers.tipo_diligencia.value = "";
              document.formcustomers.tipo_diligencia.style.border = "";
              // document.formcustomers.fecha_diligenciamiento.value = "";
              // document.formcustomers.fecha_diligenciamiento.style.border = "";
              document.formcustomers.lugar_diligenciamiento.value = "";
              document.formcustomers.lugar_diligenciamiento.style.border = "";
              document.formcustomers.nombre1.value = "";
              document.formcustomers.nombre1.style.border = "";
              document.formcustomers.nombre2.value = "";
              document.formcustomers.nombre2.style.border = "";
              document.formcustomers.apellido1.value = "";
              document.formcustomers.apellido1.style.border = "";
              document.formcustomers.apellido2.value = "";
              document.formcustomers.apellido2.style.border = "";
              document.formcustomers.sexo.value = "";
              document.formcustomers.sexo.style.border = "";
              document.formcustomers.nacimiento.value = "";
              document.formcustomers.nacimiento.style.border = "";
              document.formcustomers.tipo_documento.value = "";
              document.formcustomers.tipo_documento.style.border = "";
              document.formcustomers.documento.value = "";
              document.formcustomers.documento.style.border = "";
              document.formcustomers.direccion.value = "";
              document.formcustomers.direccion.style.border = "";
              document.formcustomers.ciudad.value = "";
              document.formcustomers.ciudad.style.border = "";
              document.formcustomers.departamento.value = "";
              document.formcustomers.departamento.style.border = "";
              document.formcustomers.pais.value = "";
              document.formcustomers.pais.style.border = "";
              document.formcustomers.celular.value = "";
              document.formcustomers.celular.style.border = "";
              document.formcustomers.email.value = "";
              document.formcustomers.email.style.border = "";
                setTimeout(function(){
                  location.reload();;
                }, 10000);
            }

          }
        });
    }
}

function tipoDiligencia()
{
  if (document.formcustomers.tipo_diligencia.value != "")
    {
        $("#avisotipodiligencia").hide('slow');
        document.formcustomers.tipo_diligencia.style.border = "1px solid #17dd37";
    }
}

function ValidarFecha()
{
  if (document.formcustomers.fecha_diligenciamiento.value != "")
    {
        $("#avisofecha").hide('slow');
        document.formcustomers.fecha_diligenciamiento.style.border = "1px solid #17dd37";
    }
}

function validarLugar()
{
  if (document.formcustomers.lugar_diligenciamiento.value != "")
  {
      $("#avisolugar").hide('slow');
      document.formcustomers.lugar_diligenciamiento.style.border = "1px solid #17dd37";
  }
}

function ValidarLargoNombre1()
{
  if (document.formcustomers.nombre1.value.length < 3)
  {
      $("#avisonombre1largo").show('slow');
      document.formcustomers.nombre1.style.border = "1px solid #f22012";
  }

  if(document.formcustomers.nombre1.value.length >= 3)
  {
      $("#avisonombre1largo").hide('slow');
      $("#avisonombre1").hide('slow');
      document.formcustomers.nombre1.style.border = "1px solid #17dd37";
  }

  if(document.formcustomers.nombre1.value != "")
  {
    $("#avisonombre1").hide('slow');
    document.formcustomers.nombre1.style.border = "1px solid #17dd37";
  }
}

function ValidarLargoApellido()
{
  if (document.formcustomers.apellidos.value.length < 3)
  {
      $("#avisoapellidolargo").show('slow');
      document.formcustomers.apellidos.style.border = "1px solid #f22012";
  }

  if(document.formcustomers.apellidos.value.length >= 3)
  {
      $("#avisoapellidolargo").hide('slow');
      $("#avisoapellidos").hide('slow');
      document.formcustomers.apellidos.style.border = "1px solid #17dd37";
  }

  if(document.formcustomers.apellidos.value != "")
  {
    $("#avisoapellidos").hide('slow');
    document.formcustomers.apellidos.style.border = "1px solid #17dd37";
  }
}

function ValidarSexo()
{

  if (document.formcustomers.sexo.value != "")
  {
      $("#avisosexo").hide('slow');
      document.formcustomers.sexo.style.border = "1px solid #17dd37";
  }
}

function ValidarTipoDocumento()
{
  if(document.formcustomers.tipo_documento.value != "")
  {
    $("#avisotipodocumento").hide('slow');
    document.formcustomers.tipo_documento.style.border = "1px solid #17dd37";
  }
}


function ValidarLargoDocumento()
{
  if (document.formcustomers.documento.value.length < 5)
  {
      $("#avisolargodocumento").show('slow');
      document.formcustomers.documento.style.border = "1px solid #f22012";
  }

  if(document.formcustomers.documento.value.length >= 5)
  {
      $("#avisolargodocumento").hide('slow');
      $("#avisodocumento").hide('slow');
      document.formcustomers.documento.style.border = "1px solid #17dd37";
  }

  if(document.formcustomers.documento.value != "")
  {
    $("#avisodocumento").hide('slow');
    document.formcustomers.documento.style.border = "1px solid #17dd37";
  }
}

function ValidarDireccion()
{
  if (document.formcustomers.direccion.value.length < 10)
  {
      $("#avisolargodireccion").show('slow');
      document.formcustomers.direccion.style.border = "1px solid #f22012";
  }

  if(document.formcustomers.direccion.value.length >= 10)
  {
      $("#avisolargodireccion").hide('slow');
      $("#avisodireccion").hide('slow');
      document.formcustomers.direccion.style.border = "1px solid #17dd37";
  }

  if(document.formcustomers.direccion.value != "")
  {
    $("#avisodireccion").hide('slow');
    document.formcustomers.direccion.style.border = "1px solid #17dd37";
  }
}

function ValidarPais()
{
  if (document.formcustomers.pais.value.length < 3)
  {
      $("#avisolargopais").show('slow');
      document.formcustomers.pais.style.border = "1px solid #f22012";
  }

  if(document.formcustomers.pais.value.length >= 3)
  {
      $("#avisolargopais").hide('slow');
      $("#avisopais").hide('slow');
      document.formcustomers.pais.style.border = "1px solid #17dd37";
  }

  if(document.formcustomers.pais.value != "")
  {
    $("#avisopais").hide('slow');
    document.formcustomers.pais.style.border = "1px solid #17dd37";
  }
}

function ValidarCelEmail()
{
  if (document.formcustomers.celular.value.length < 6)
  {
      $("#avisolargocelular").show('slow');
      document.formcustomers.celular.style.border = "1px solid #f22012";
  }

  if(document.formcustomers.celular.value.length >= 6)
  {
      $("#avisolargocelular").hide('slow');
      $("#avisocelular").hide('slow');
      document.formcustomers.celular.style.border = "1px solid #17dd37";
  }

  if(document.formcustomers.celular.value != "")
  {
    $("#avisocelular").hide('slow');
    document.formcustomers.celular.style.border = "1px solid #17dd37";
  }
}

function ValidarCorreo()
{
    var correo = document.formcustomers.email.value;
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (expr.test(correo))
    {
        document.formcustomers.email.style.border = "1px solid  #17dd37";
        $("#avisomailformato").hide('slow');
          $("#avisocorreo").hide('slow');
        return true;
    }
    else
    {
      document.formcustomers.email.style.border = "1px solid #f22012";
      $("#avisomailformato").show('slow');
      $("#avisocorreo").show('slow');
      return false;
    }
}

function MostrarTextoLegal()
  {
      $("#text-complete").show(1000);
      $("#btn-mostrar").hide('slow');
      $("#btn-ocultar").show('slow');
      $("#text-incomplete").hide('slow');
  }

  function OcultarTextoLegal()
  {
      $("#text-complete").hide('slow');
      $("#text-incomplete").show('slow')
      $("#btn-mostrar").show('slow');
      $("#btn-ocultar").hide('slow');
  }

function validarFechaLim() {

  var limite = $("#limite").val();
  var nacimiento = $("#nacimiento").val();
  var limitemenor = $("#limitemenor").val();

  if (nacimiento >= limite) {
    swal({
          title: "La fecha seleccionada no puede ser mayor o igual a la fecha actual!",
          type: "error",
          confirmButtonColor: "#41C0B9",
          confirmButtonText: "Aceptar",
          closeOnConfirm: true,
          });
    // alert('La fecha seleccionada no puede ser mayor o igual a la fecha actual!');
        $("#avisonacimiento").show('slow');
        document.formcustomers.nacimiento.style.border = "1px solid #f22012";
        $("#nacimiento").val("");
      return false;
  }else if (nacimiento >= limitemenor){
    swal({
          title: "La fecha de nacimiento seleccionada no es válida, debes tener mínimo 18 años!",
          type: "error",
          confirmButtonColor: "#41C0B9",
          confirmButtonText: "Aceptar",
          closeOnConfirm: true,
          });
    $("#avisonacimiento").show('slow');
    document.formcustomers.nacimiento.style.border = "1px solid #f22012";
    $("#nacimiento").val("");
      return false;
  }else{
    $("#avisonacimiento").hide('slow');
    document.formcustomers.nacimiento.style.border = "1px solid #17dd37";
    $("#nacimiento").val(nacimiento);
     return true;
  }
}

function ValidarExistenciaCorreo()
{
    var correo = $('#email').val();

    $.ajax({
      url: url + 'clientes/validarExistenciaCorreo',
      type: 'POST',
      data: {'correo': correo},
      datatype: "text",
      success: function(resp){

        if (resp == 1) {
          swal({
                title: "El corrreo electrónico ingresado ya existe en nuestra base de datos!",
                type: "error",
                confirmButton: "#41C0B9",
                confirmButtonText: "Aceptar",
                // confirmButtonText: "Cancelar",
                closeOnConfirm: false,
                closeOnCancel: false
              });
              $('#email').val("");
              document.formcustomers.email.style.border = "1px solid #f22012";
              $('#email').focus();
        }

      }
  });
}
