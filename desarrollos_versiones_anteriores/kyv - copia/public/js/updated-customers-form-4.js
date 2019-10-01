
function ValidarFormularioUpdateCustomers4()
{
  var active = $("#active").is(":checked");
  var swimwear = $("#swimwear").is(":checked");
  var covers = $("#cover-ups").is(":checked");
  var kids = $("#kids").is(":checked");
  var trunks = $("#trunks").is(":checked");
  var accesories = $("#accesories").is(":checked");

    // if (document.formcustomers4.typebusiness.value == "")
    //   {
    //       $("#avisotypebusiness").show('slow');
    //       document.formcustomers4.typebusiness.style.border = "1px solid #f22012";
    //   }
    //
    // if (document.formcustomers4.typebusiness.value != "")
    //   {
    //       $("#avisotypebusiness").hide('slow');
    //       document.formcustomers4.typebusiness.style.border = "1px solid #17dd37";
    //   }

    if (!active || !swimwear || !covers || !kids || !trunks || !accesories)
      {
          $("#avisolines").show('slow');
          $("#lines").css("border","1px solid #f22012");
          $("#lines").css("padding","2% 0 0 8%");
      }

    if (active || swimwear || covers || kids || trunks || accesories)
      {
        $("#avisolines").hide('slow');
        $("#lines").css("border","1px solid #17dd37");
        $("#lines").css("padding","2% 0 0 8%");
      }

    // if (document.formcustomers4.figures.value == "")
    // {
    //     $("#avisofigures").show('slow');
    //     document.formcustomers4.figures.style.border = "1px solid #f22012";
    // }
    //
    // if (document.formcustomers4.figures.value != "")
    // {
    //     $("#avisofigures").hide('slow');
    //     document.formcustomers4.figures.style.border = "1px solid #17dd37";
    // }


    if (document.formcustomers4.typeBusiness.value == "NOTHING")
    {
        $("#avisotypebusiness").show("slow");
        document.formcustomers4.typeBusiness.style.border = "1px solid #f22012";
    }

    if (document.formcustomers4.businesslocation.value == "")
    {
        $("#avisobusinesslocation").show("slow");
        document.formcustomers4.businesslocation.style.border = "1px solid #f22012";
    }

    if (document.formcustomers4.businesslocation.value == "1" && document.formcustomers4.dirbusiness1.value == "")
    {
        $("#avisodirbusiness1").show('slow');
        $("#avisolargodirbusiness1").hide('slow');
        document.formcustomers4.dirbusiness1.style.border = "1px solid #f22012";
    }

    if (document.formcustomers4.businesslocation.value == "1" && document.formcustomers4.dirbusiness1.value != "")
    {
        $("#avisodirbusiness1").hide('slow');
        $("#avisolargodirbusiness1").hide('slow');
        document.formcustomers4.dirbusiness1.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers4.businesslocation.value == "2" &&
        document.formcustomers4.dirbusiness2.value == "")
    {
        $("#avisodirbusiness2").show('slow');
        $("#avisolargodirbusiness2").hide('slow');
        $("#avisodirbusiness1").show('slow');
        $("#avisolargodirbusiness1").hide('slow');
        document.formcustomers4.dirbusiness1.style.border = "1px solid #f22012";
        document.formcustomers4.dirbusiness2.style.border = "1px solid #f22012";
    }

    if (document.formcustomers4.businesslocation.value == "2" &&
        document.formcustomers4.dirbusiness2.value != "")
    {
        $("#avisodirbusiness2").hide('slow');
        $("#avisolargodirbusiness2").hide('slow');
        $("#avisodirbusiness1").hide('slow');
        $("#avisolargodirbusiness1").hide('slow');
        document.formcustomers4.dirbusiness1.style.border = "1px solid #17dd37";
        document.formcustomers4.dirbusiness2.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers4.businesslocation.value == "3" &&
        document.formcustomers4.dirbusiness3.value == "")
    {
        $("#avisodirbusiness2").show('slow');
        $("#avisolargodirbusiness2").hide('slow');
        $("#avisodirbusiness1").show('slow');
        $("#avisolargodirbusiness1").hide('slow');
        $("#avisodirbusiness3").show('slow');
        $("#avisolargodirbusiness3").hide('slow');
        document.formcustomers4.dirbusiness1.style.border = "1px solid #f22012";
        document.formcustomers4.dirbusiness2.style.border = "1px solid #f22012";
        document.formcustomers4.dirbusiness3.style.border = "1px solid #f22012";
    }

    if (document.formcustomers4.businesslocation.value == "3" &&
        document.formcustomers4.dirbusiness3.value != "")
    {
        $("#avisodirbusiness2").hide('slow');
        $("#avisolargodirbusiness2").hide('slow');
        $("#avisodirbusiness1").hide('slow');
        $("#avisolargodirbusiness1").hide('slow');
        $("#avisodirbusiness3").hide('slow');
        $("#avisolargodirbusiness3").hide('slow');
        $("#avisolargodirbusiness4").hide('slow');
        document.formcustomers4.dirbusiness1.style.border = "1px solid #17dd37";
        document.formcustomers4.dirbusiness2.style.border = "1px solid #17dd37";
        document.formcustomers4.dirbusiness3.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers4.businesslocation.value == "4" &&
        document.formcustomers4.dirbusiness4.value == "")
    {
        $("#avisodirbusiness2").show('slow');
        $("#avisolargodirbusiness2").hide('slow');
        $("#avisodirbusiness1").show('slow');
        $("#avisolargodirbusiness1").hide('slow');
        $("#avisodirbusiness3").show('slow');
        $("#avisolargodirbusiness3").hide('slow');
        $("#avisodirbusiness4").show('slow');
        $("#avisolargodirbusiness4").hide('slow');
        document.formcustomers4.dirbusiness1.style.border = "1px solid #f22012";
        document.formcustomers4.dirbusiness2.style.border = "1px solid #f22012";
        document.formcustomers4.dirbusiness3.style.border = "1px solid #f22012";
        document.formcustomers4.dirbusiness4.style.border = "1px solid #f22012";
    }

    if (document.formcustomers4.businesslocation.value == "4" &&
        document.formcustomers4.dirbusiness4.value != "")
    {
        $("#avisodirbusiness2").hide('slow');
        $("#avisolargodirbusiness2").hide('slow');
        $("#avisodirbusiness1").hide('slow');
        $("#avisolargodirbusiness1").hide('slow');
        $("#avisodirbusiness3").hide('slow');
        $("#avisolargodirbusiness3").hide('slow');
        $("#avisodirbusiness4").hide('slow');
        $("#avisolargodirbusiness4").hide('slow');
        document.formcustomers4.dirbusiness1.style.border = "1px solid #17dd37";
        document.formcustomers4.dirbusiness2.style.border = "1px solid #17dd37";
        document.formcustomers4.dirbusiness3.style.border = "1px solid #17dd37";
        document.formcustomers4.dirbusiness4.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers4.businesslocation.value == "5" &&
        document.formcustomers4.dirbusiness5.value == "")
    {
        $("#avisodirbusiness2").show('slow');
        $("#avisolargodirbusiness2").hide('slow');
        $("#avisodirbusiness1").show('slow');
        $("#avisolargodirbusiness1").hide('slow');
        $("#avisodirbusiness3").show('slow');
        $("#avisolargodirbusiness3").hide('slow');
        $("#avisodirbusiness4").show('slow');
        $("#avisolargodirbusiness4").hide('slow');
        $("#avisodirbusiness5").show('slow');
        $("#avisolargodirbusiness5").hide('slow');
        document.formcustomers4.dirbusiness1.style.border = "1px solid #f22012";
        document.formcustomers4.dirbusiness2.style.border = "1px solid #f22012";
        document.formcustomers4.dirbusiness3.style.border = "1px solid #f22012";
        document.formcustomers4.dirbusiness4.style.border = "1px solid #f22012";
        document.formcustomers4.dirbusiness5.style.border = "1px solid #f22012";
    }

    if (document.formcustomers4.businesslocation.value == "5" &&
        document.formcustomers4.dirbusiness5.value != "")
    {
        $("#avisodirbusiness2").hide('slow');
        $("#avisolargodirbusiness2").hide('slow');
        $("#avisodirbusiness1").hide('slow');
        $("#avisolargodirbusiness1").hide('slow');
        $("#avisodirbusiness3").hide('slow');
        $("#avisolargodirbusiness3").hide('slow');
        $("#avisodirbusiness4").hide('slow');
        $("#avisolargodirbusiness4").hide('slow');
        $("#avisodirbusiness5").hide('slow');
        $("#avisolargodirbusiness5").hide('slow');
        document.formcustomers4.dirbusiness1.style.border = "1px solid #17dd37";
        document.formcustomers4.dirbusiness2.style.border = "1px solid #17dd37";
        document.formcustomers4.dirbusiness3.style.border = "1px solid #17dd37";
        document.formcustomers4.dirbusiness4.style.border = "1px solid #17dd37";
        document.formcustomers4.dirbusiness5.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers4.businesslocation.value == "mas-5")
    {
        $("#avisodirbusiness2").hide('slow');
        $("#avisolargodirbusiness2").hide('slow');
        $("#avisodirbusiness1").hide('slow');
        $("#avisolargodirbusiness1").hide('slow');
        $("#avisodirbusiness3").hide('slow');
        $("#avisolargodirbusiness3").hide('slow');
        $("#avisodirbusiness4").hide('slow');
        $("#avisolargodirbusiness4").hide('slow');
        $("#avisodirbusiness5").hide('slow');
        $("#avisolargodirbusiness5").hide('slow');
        document.formcustomers4.dirbusiness1.style.border = "1px solid #17dd37";
        document.formcustomers4.dirbusiness2.style.border = "1px solid #17dd37";
        document.formcustomers4.dirbusiness3.style.border = "1px solid #17dd37";
        document.formcustomers4.dirbusiness4.style.border = "1px solid #17dd37";
        document.formcustomers4.dirbusiness5.style.border = "1px solid #17dd37";
    }

    if(document.formcustomers4.file1.value == "")
    {
      $("#avisoarchivosrequeridos").show("slow");
      document.formcustomers4.file1.style.border = "1px solid #f22012";
    }

    if(document.formcustomers4.file1.value != "")
    {
      $("#avisoarchivosrequeridos").hide("slow");
      document.formcustomers4.file1.style.border = "1px solid #17dd37";
    }

    if(document.formcustomers4.file2.value == "")
    {
      $("#avisoarchivosrequeridos2").show("slow");
      document.formcustomers4.file2.style.border = "1px solid #f22012";
    }

    if(document.formcustomers4.file2.value != "")
    {
      $("#avisoarchivosrequeridos2").hide("slow");
      document.formcustomers4.file2.style.border = "1px solid #17dd37";
    }

    if(document.formcustomers4.file3.value == "")
    {
      $("#avisoarchivosrequeridos3").show("slow");
      document.formcustomers4.file3.style.border = "1px solid #f22012";
    }

    if(document.formcustomers4.file3.value != "")
    {
      $("#avisoarchivosrequeridos3").hide("slow");
      document.formcustomers4.file3.style.border = "1px solid #17dd37";
    }

    if(document.formcustomers4.file4.value == "")
    {
      $("#avisoarchivosrequeridos4").show("slow");
      document.formcustomers4.file4.style.border = "1px solid #f22012";
    }

    if(document.formcustomers4.file4.value != "")
    {
      $("#avisoarchivosrequeridos4").hide("slow");
      document.formcustomers4.file4.style.border = "1px solid #17dd37";
    }

    if(active || swimwear || covers || kids || trunks || accesories)
    {

      if (document.formcustomers4.potentialbrand.value != "" &&
          document.formcustomers4.file1.value != "" &&
          document.formcustomers4.file2.value != "" &&
          document.formcustomers4.file3.value != "" &&
          document.formcustomers4.file4.value != "")
      {
          $("#avisovalidaciones4").hide('slow');
          var formData = new FormData($("#form-customers4")[0]);

          var figures = document.formcustomers4.figures.value;
          var potentialBrand = document.formcustomers4.potentialbrand.value;
          var file1 = document.formcustomers4.file1.value;
          var file2 = document.formcustomers4.file2.value;
          var file3 = document.formcustomers4.file3.value;
          var file4 = document.formcustomers4.file4.value;
          var active = $("#active").val();
          var swimwear = $("#active").val();
          var covers = $("#cover-ups").val();
          var kids = $("#kids").val();
          var trunks = $("#trunks").val();
          var accesories = $("#accesories").val();

          $.ajax({
            url: url + 'clientes/actualizacionDatosForm5',
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function(){
              $("#carga4").show("fast");
            },
            success: function(resp){

              if (resp == 1) {
                $("#carga4").hide("slow");
                $("#errorarchivos").hide('slow');
                $("#avisovalidacionesform4").hide('slow');
                $("#avisovalidacionesform4").addClass("ocultar");
                $("#sucessupdateinfoform4").show("slow");
                $("#successfiles").show('slow');

                    setTimeout(function(){
                      location.reload();
                    }, 5000);
              }

              if(resp == 2)
              {
                $("#carga4").hide("fast");
                $("#avisovalidacionesform4").show("fast");
                $("#errorarchivos").show('slow');
                $("#sucessupdateinfoform4").hide("slow");
                $("#file1").css("border", "1px solid #f22012");
                $("#file2").css("border", "1px solid #f22012");
                $("#file3").css("border", "1px solid #f22012");
                $("#file4").css("border", "1px solid #f22012");
              }

            }
          });
          // insercion campos businessLocation (union4)
          if(
              document.formcustomers4.businesslocation.value != ""){
                console.log("Cada vez estas más cerca...");
                console.log("Creo en tí");

                var businessLocation = document.formcustomers4.businesslocation.value;

                $.ajax({
                  url: url + 'clientes/actualizarForm5BusinessL',
                  type: 'POST',
                  data: formData,
                  cache: false,
                  contentType: false,
                  processData: false,
                  beforeSend: function(){
                    $("#exito2").hide('fast');
                    $("#carga2").show("fast");
                  },
                  success: function(resp){

                    if (resp == 1) {
                      $("#carga2").hide("slow");
                          // setTimeout(function(){
                          //   location.reload();
                          // }, 2000);
                    }

                  }
                });

              }
      }

      else
      {
          $("#avisovalidaciones4").show('slow');
      }
    }

    else
    {
        $("#avisovalidaciones4").show('slow');
    }
}

function validarLargoTypeBusiness()
{
  if (document.formcustomers4.typebusiness.value.length < 5)
  {
      $("#avisolargotypebusiness").show('slow');
      $("#avisotypebusiness").hide('slow');
      document.formcustomers4.typebusiness.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.typebusiness.value.length >= 5)
  {
      $("#avisolargotypebusiness").hide('slow');
      document.formcustomers4.typebusiness.style.border = "1px solid #17dd37";
  }

}

function ValidarLargoFigures()
{
  if (document.formcustomers4.figures.value.length < 2)
  {
      $("#avisolargofigures").show('slow');
      $("#avisofigures").hide('slow');
      document.formcustomers4.figures.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.figures.value.length >= 2)
  {
      $("#avisolargofigures").hide('slow');
      document.formcustomers4.figures.style.border = "1px solid #17dd37";
  }

}


function ValidarBusinessLocations()
{
  if (document.formcustomers4.businesslocation.value != "")
  {
      $("#avisobusinesslocation").hide('slow');
      document.formcustomers4.businesslocation.style.border = "1px solid #17dd37";
  }

}

function ValidarLargoDirBusiness1()
{
  if (document.formcustomers4.dirbusiness1.value.length < 8)
  {
      $("#avisolargodirbusiness1").show('slow');
      $("#avisodirbusiness1").hide('slow');
      document.formcustomers4.dirbusiness1.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.dirbusiness1.value.length >= 8)
  {
      $("#avisolargodirbusiness1").hide('slow');
      document.formcustomers4.dirbusiness1.style.border = "1px solid #17dd37";
  }

}

function ValidarLargoDirBusiness2()
{
  if (document.formcustomers4.dirbusiness2.value.length < 8)
  {
      $("#avisolargodirbusiness2").show('slow');
      $("#avisodirbusiness2").hide('slow');
      document.formcustomers4.dirbusiness2.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.dirbusiness2.value.length >= 8)
  {
      $("#avisolargodirbusiness2").hide('slow');
      document.formcustomers4.dirbusiness2.style.border = "1px solid #17dd37";
  }

}

function ValidarLargoDirBusiness3()
{
  if (document.formcustomers4.dirbusiness3.value.length < 8)
  {
      $("#avisolargodirbusiness3").show('slow');
      $("#avisodirbusiness3").hide('slow');
      document.formcustomers4.dirbusiness3.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.dirbusiness3.value.length >= 8)
  {
      $("#avisolargodirbusiness3").hide('slow');
      document.formcustomers4.dirbusiness3.style.border = "1px solid #17dd37";
  }

}

function ValidarLargoDirBusiness4()
{
  if (document.formcustomers4.dirbusiness4.value.length < 8)
  {
      $("#avisolargodirbusiness4").show('slow');
      $("#avisodirbusiness4").hide('slow');
      document.formcustomers4.dirbusiness4.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.dirbusiness4.value.length >= 8)
  {
      $("#avisolargodirbusiness4").hide('slow');
      document.formcustomers4.dirbusiness4.style.border = "1px solid #17dd37";
  }
}

function ValidarLargoDirBusiness5()
{
  if (document.formcustomers4.dirbusiness5.value.length < 8)
  {
      $("#avisolargodirbusiness5").show('slow');
      $("#avisodirbusiness5").hide('slow');
      document.formcustomers4.dirbusiness5.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.dirbusiness5.value.length >= 8)
  {
      $("#avisolargodirbusiness5").hide('slow');
      document.formcustomers4.dirbusiness5.style.border = "1px solid #17dd37";
  }

}


function ValidarBusinessLocations()
{
    var dir = document.formcustomers4.businesslocation.value;

	if(dir == "1")
	{
		$("#dirbusiness1").removeClass("ocultar");
		$("#dirbusiness2").addClass("ocultar");
		$("#dirbusiness3").addClass("ocultar");
		$("#dirbusiness4").addClass("ocultar");
    $("#dirbusiness5").addClass("ocultar");
    $("#correobusinesslocations").hide("slow");
    $("#avisobusinesslocation").hide("slow");
    $("#avisodirbusiness2").hide('slow');
    $("#avisodirbusiness1").show('slow');
    document.formcustomers4.dirbusiness1.style.border = "1px solid #f22012";
    $("#avisodirbusiness3").hide('slow');
    $("#avisodirbusiness4").hide('slow');
    $("#avisodirbusiness5").hide('slow');
    $("#avisolargodirbusiness2").hide('slow');
    $("#correobusinesslocationssended").hide('slow');
	}

	else if(dir == "2")
	{
		$("#dirbusiness1").removeClass("ocultar");
		$("#dirbusiness2").removeClass("ocultar");
		$("#dirbusiness3").addClass("ocultar");
		$("#dirbusiness4").addClass("ocultar");
    $("#dirbusiness5").addClass("ocultar");
    $("#correobusinesslocations").hide("slow");
    $("#avisobusinesslocation").hide("slow");
    $("#avisodirbusiness3").hide('slow');
    $("#avisodirbusiness4").hide('slow');
    $("#avisodirbusiness5").hide('slow');
    $("#avisolargodirbusiness3").hide('slow');
    $("#avisodirbusiness1").show('slow');
    document.formcustomers4.dirbusiness1.style.border = "1px solid #f22012";
    $("#avisodirbusiness2").show('slow');
    document.formcustomers4.dirbusiness2.style.border = "1px solid #f22012";
      $("#correobusinesslocationssended").hide('slow');
	}

	else if(dir == "")
	{
		$("#dirbusiness1").addClass("ocultar");
		$("#dirbusiness2").addClass("ocultar");
		$("#dirbusiness3").addClass("ocultar");
		$("#dirbusiness4").addClass("ocultar");
    $("#dirbusiness5").addClass("ocultar");
    $("#correobusinesslocations").hide("slow");
    $("#avisodirbusiness1").hide('slow');
    $("#avisolargodirbusiness1").hide('slow');
    $("#avisobusinesslocation").show('slow');
    $("#avisodirbusiness2").hide('slow');
    $("#avisodirbusiness3").hide('slow');
    $("#avisodirbusiness4").hide('slow');
    $("#avisodirbusiness5").hide('slow');
    $("#correobusinesslocationssended").hide('slow');
	}

	else if(dir == "3")
	{
		$("#dirbusiness1").removeClass("ocultar");
		$("#dirbusiness2").removeClass("ocultar");
		$("#dirbusiness3").removeClass("ocultar");
		$("#dirbusiness4").addClass("ocultar");
    $("#dirbusiness5").addClass("ocultar");
    $("#correobusinesslocations").hide("slow");
    $("#avisobusinesslocation").hide("slow");
    $("#avisodirbusiness4").hide('slow');
    $("#avisolargodirbusiness4").hide('slow');
    $("#avisodirbusiness1").show('slow');
    document.formcustomers4.dirbusiness1.style.border = "1px solid #f22012";
    $("#avisodirbusiness2").show('slow');
    document.formcustomers4.dirbusiness2.style.border = "1px solid #f22012";
    $("#avisodirbusiness3").show('slow');
    document.formcustomers4.dirbusiness3.style.border = "1px solid #f22012";
    $("#avisodirbusiness5").hide('slow');
    $("#correobusinesslocationssended").hide('slow');
	}

  else if (dir == "4")
  {
    $("#dirbusiness1").removeClass("ocultar");
		$("#dirbusiness2").removeClass("ocultar");
		$("#dirbusiness3").removeClass("ocultar");
		$("#dirbusiness4").removeClass("ocultar");
    $("#dirbusiness5").addClass("ocultar");
    $("#correobusinesslocations").hide("slow");
    $("#avisobusinesslocation").hide("slow");
    $("#avisodirbusiness5").hide('slow');
    $("#avisolargodirbusiness5").hide('slow');
    $("#avisodirbusiness1").show('slow');
    document.formcustomers4.dirbusiness1.style.border = "1px solid #f22012";
    $("#avisodirbusiness2").show('slow');
    document.formcustomers4.dirbusiness2.style.border = "1px solid #f22012";
    $("#avisodirbusiness3").show('slow');
    document.formcustomers4.dirbusiness3.style.border = "1px solid #f22012";
    $("#avisodirbusiness4").show('slow');
    document.formcustomers4.dirbusiness4.style.border = "1px solid #f22012";
    $("#correobusinesslocationssended").hide('slow');
  }
  else if(dir == "5")
  {
    $("#dirbusiness1").removeClass("ocultar");
    $("#dirbusiness2").removeClass("ocultar");
    $("#dirbusiness3").removeClass("ocultar");
    $("#dirbusiness4").removeClass("ocultar");
    $("#dirbusiness5").removeClass("ocultar");
    $("#correobusinesslocations").hide("slow");
    $("#avisobusinesslocation").hide("slow");
    $("#avisodirbusiness1").show('slow');
    document.formcustomers4.dirbusiness1.style.border = "1px solid #f22012";
    $("#avisodirbusiness2").show('slow');
    document.formcustomers4.dirbusiness2.style.border = "1px solid #f22012";
    $("#avisodirbusiness3").show('slow');
    document.formcustomers4.dirbusiness3.style.border = "1px solid #f22012";
    $("#avisodirbusiness4").show('slow');
    document.formcustomers4.dirbusiness4.style.border = "1px solid #f22012";
    $("#avisodirbusiness5").show('slow');
    document.formcustomers4.dirbusiness5.style.border = "1px solid #f22012";
    $("#correobusinesslocationssended").hide('slow');
  }

  else
  {
    $("#dirbusiness1").addClass("ocultar");
    $("#dirbusiness2").addClass("ocultar");
    $("#dirbusiness3").addClass("ocultar");
    $("#dirbusiness4").addClass("ocultar");
    $("#dirbusiness5").addClass("ocultar");
    $("#correobusinesslocations").show("slow");

    setTimeout(function(){
      $("#correobusinesslocations").hide("slow");;
    }, 10000);

    $("#avisobusinesslocation").hide("slow");
    $("#avisodirbusiness2").hide('slow');
    $("#avisolargodirbusiness2").hide('slow');
    $("#avisodirbusiness1").hide('slow');
    $("#avisolargodirbusiness1").hide('slow');
    $("#avisodirbusiness3").hide('slow');
    $("#avisolargodirbusiness3").hide('slow');
    $("#avisodirbusiness4").hide('slow');
    $("#avisolargodirbusiness4").hide('slow');
    $("#avisodirbusiness5").hide('slow');
    $("#avisolargodirbusiness5").hide('slow');
    $("#correobusinesslocationssended").hide('slow');
  }

}

function validarDocumento1()
{
  if (document.formcustomers4.file1.value != "")
  {
      $("#avisoarchivosrequeridos").hide('slow');
      document.formcustomers4.file1.style.border = "1px solid #17dd37";
  }
}

function validarDocumento2()
{
  if (document.formcustomers4.file2.value != "")
  {
      $("#avisoarchivosrequeridos2").hide('slow');
      document.formcustomers4.file2.style.border = "1px solid #17dd37";
  }
}

function validarDocumento3()
{
  if (document.formcustomers4.file3.value != "")
  {
      $("#avisoarchivosrequeridos3").hide('slow');
      document.formcustomers4.file3.style.border = "1px solid #17dd37";
  }
}

function validarDocumento4()
{
  if (document.formcustomers4.file4.value != "")
  {
      $("#avisoarchivosrequeridos4").hide('slow');
      document.formcustomers4.file4.style.border = "1px solid #17dd37";
  }
}


$("#businesslocation").select2();

//chrome
function sqa(){
  var select = document.getElementById("typeBusiness").value;
  if(select == "ONLINE"){
    document.getElementById('mostrarOcultarBusinessLocation').style.display="none";
    document.getElementById('mostraOcultarWebSite').style.display="block";
  } else if (select == "NOTHING") {
    document.getElementById('mostrarOcultarBusinessLocation').style.display="none";
    document.getElementById('mostraOcultarWebSite').style.display="none";
  } else {
    document.getElementById('mostrarOcultarBusinessLocation').style.display="block";
    document.getElementById('mostraOcultarWebSite').style.display="none";
  }

  if (document.formcustomers4.typeBusiness.value != "NOTHING")
  {
      $("#avisotypebusiness").hide("slow");
      document.formcustomers4.typeBusiness.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers4.typeBusiness.value == "NOTHING")
  {
      $("#avisotypebusiness").show("slow");
      document.formcustomers4.typeBusiness.style.border = "1px solid #f22012";
  }

}
