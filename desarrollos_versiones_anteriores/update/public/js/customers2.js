function ValidarLargoNombre2()
{
  if (document.formcustomers.nombre2.value.length < 3)
  {
      $("#avisonombre2largo").show('slow');
      document.formcustomers.nombre2.style.border = "1px solid #f22012";
  }

  if(document.formcustomers.nombre2.value.length >= 3)
  {
      $("#avisonombre2largo").hide('slow');
      $("#avisonombre2").hide('slow');
      document.formcustomers.nombre2.style.border = "1px solid #17dd37";
  }

  if(document.formcustomers.nombre2.value != "")
  {
    $("#avisonombre2").hide('slow');
    document.formcustomers.nombre2.style.border = "1px solid #17dd37";
  }
}

function ValidarLargoApellido()
{
  if (document.formcustomers.apellido1.value.length < 3)
  {
      $("#avisoapellido1largo").show('slow');
      document.formcustomers.apellido1.style.border = "1px solid #f22012";
  }

  if(document.formcustomers.apellido1.value.length >= 3)
  {
      $("#avisoapellido1largo").hide('slow');
      $("#avisoapellido1").hide('slow');
      document.formcustomers.apellido1.style.border = "1px solid #17dd37";
  }

  if(document.formcustomers.apellido1.value != "")
  {
    $("#avisoapellido1").hide('slow');
    document.formcustomers.apellido1.style.border = "1px solid #17dd37";
  }
}

function ValidarLargoApellido2()
{
  if (document.formcustomers.apellido2.value.length < 3)
  {
      $("#avisoapellido2largo").show('slow');
      document.formcustomers.apellido2.style.border = "1px solid #f22012";
  }

  if(document.formcustomers.apellido2.value.length >= 3)
  {
      $("#avisoapellido2largo").hide('slow');
      $("#avisoapellido2").hide('slow');
      document.formcustomers.apellido2.style.border = "1px solid #17dd37";
  }

  if(document.formcustomers.apellido2.value != "")
  {
    $("#avisoapellido2").hide('slow');
    document.formcustomers.apellido2.style.border = "1px solid #17dd37";
  }
}

function validarDepartamento()
{
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
}

$("#lugar_diligenciamiento").select2();
$("#sexo").select2();
$("#tipo_documento").select2();
$("#departamento").select2();
$("#ciudad").select2();
$("#pais").select2();
