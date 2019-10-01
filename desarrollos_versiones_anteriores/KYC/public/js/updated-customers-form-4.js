
function ValidarFormularioUpdateCustomers4()
{
  var active = $("#active").is(":checked");
  var swimwear = $("#swimwear").is(":checked");
  var covers = $("#cover-ups").is(":checked");
  var kids = $("#kids").is(":checked");
  var trunks = $("#trunks").is(":checked");
  var accesories = $("#accesories").is(":checked");

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


      if (document.formcustomers4.typeBusiness.value == "ONLINE" &&
          document.formcustomers4.website.value == "")
      {
        $("#avisowebsite").show("slow");
        document.formcustomers4.website.style.border = "1px solid #f22012";
      }

      if (document.formcustomers4.typeBusiness.value == "NOTHING")
      {
          $("#avisotypebusiness").show("slow");
          document.formcustomers4.typeBusiness.style.border = "1px solid #f22012";
      }

      if ((document.formcustomers4.typeBusiness.value == "DEPARTMENT")||
          (document.formcustomers4.typeBusiness.value == "SWIMWEAR") ||
          (document.formcustomers4.typeBusiness.value == "DISTRIBUITOR") ||
          (document.formcustomers4.typeBusiness.value == "FRANCHISE") ||
          (document.formcustomers4.typeBusiness.value == "RESORT") ||
          (document.formcustomers4.typeBusiness.value == "BOUTIQUE") ||
          (document.formcustomers4.typeBusiness.value == "KIDS") ||
          (document.formcustomers4.typeBusiness.value == "SPORTING") ||
          (document.formcustomers4.typeBusiness.value == "SURF") ||
          (document.formcustomers4.typeBusiness.value == "STUDIOS") ||
          (document.formcustomers4.typeBusiness.value == "CORPORATE") ||
          (document.formcustomers4.typeBusiness.value == "OUTLET") &&
          document.formcustomers4.businessCountry1.value == "")
      {
        $("#avisoBusinessCountry1").show("slow");
        document.formcustomers4.businessCountry1.style.border = "1px solid #f22012";
      }

      if(document.formcustomers4.businessCountry1.value != "")
      {
        $("#avisoBusinessCountry1").hide("slow");
        document.formcustomers4.businessCountry1.style.border = "1px solid #17dd37";
      }

      if (document.formcustomers4.typeBusiness.value == "DEPARTMENT" ||
          document.formcustomers4.typeBusiness.value == "SWIMWEAR" ||
          document.formcustomers4.typeBusiness.value == "DISTRIBUITOR" ||
          document.formcustomers4.typeBusiness.value == "FRANCHISE" ||
          document.formcustomers4.typeBusiness.value == "RESORT" ||
          document.formcustomers4.typeBusiness.value == "BOUTIQUE" ||
          document.formcustomers4.typeBusiness.value == "KIDS" ||
          document.formcustomers4.typeBusiness.value == "SPORTING" ||
          document.formcustomers4.typeBusiness.value == "SURF" ||
          document.formcustomers4.typeBusiness.value == "STUDIOS" ||
          document.formcustomers4.typeBusiness.value == "CORPORATE" ||
          document.formcustomers4.typeBusiness.value == "OUTLET" &&
          document.formcustomers4.BusinessState1.value == "")
      {
        $("#avisobusinessState1").show("slow");
        document.formcustomers4.BusinessState1.style.border = "1px solid #f22012";
      }

      if(document.formcustomers4.BusinessState1.value != "")
      {
        $("#avisobusinessState1").hide("slow");
        document.formcustomers4.BusinessState1.style.border = "1px solid #17dd37";
      }

      if ((document.formcustomers4.typeBusiness.value == "DEPARTMENT")||
          (document.formcustomers4.typeBusiness.value == "SWIMWEAR") ||
          (document.formcustomers4.typeBusiness.value == "DISTRIBUITOR") ||
          (document.formcustomers4.typeBusiness.value == "FRANCHISE") ||
          (document.formcustomers4.typeBusiness.value == "RESORT") ||
          (document.formcustomers4.typeBusiness.value == "BOUTIQUE") ||
          (document.formcustomers4.typeBusiness.value == "KIDS") ||
          (document.formcustomers4.typeBusiness.value == "SPORTING") ||
          (document.formcustomers4.typeBusiness.value == "SURF") ||
          (document.formcustomers4.typeBusiness.value == "STUDIOS") ||
          (document.formcustomers4.typeBusiness.value == "CORPORATE") ||
          (document.formcustomers4.typeBusiness.value == "OUTLET") &&
          document.formcustomers4.BusinessCity1.value == "")
      {
        $("#avisoBusinessCity1").show("slow");
        document.formcustomers4.BusinessCity1.style.border = "1px solid #f22012";
      }

      if(document.formcustomers4.BusinessCity1.value != "")
      {
        $("#avisoBusinessCity1").hide("slow");
        document.formcustomers4.BusinessCity1.style.border = "1px solid #17dd37";
      }

      if ((document.formcustomers4.typeBusiness.value == "DEPARTMENT")||
          (document.formcustomers4.typeBusiness.value == "SWIMWEAR") ||
          (document.formcustomers4.typeBusiness.value == "DISTRIBUITOR") ||
          (document.formcustomers4.typeBusiness.value == "FRANCHISE") ||
          (document.formcustomers4.typeBusiness.value == "RESORT") ||
          (document.formcustomers4.typeBusiness.value == "BOUTIQUE") ||
          (document.formcustomers4.typeBusiness.value == "KIDS") ||
          (document.formcustomers4.typeBusiness.value == "SPORTING") ||
          (document.formcustomers4.typeBusiness.value == "SURF") ||
          (document.formcustomers4.typeBusiness.value == "STUDIOS") ||
          (document.formcustomers4.typeBusiness.value == "CORPORATE") ||
          (document.formcustomers4.typeBusiness.value == "OUTLET") &&
          document.formcustomers4.BusinessAddress1.value == "")
      {
        $("#avisoBusinessAddres1").show("slow");
        document.formcustomers4.BusinessAddress1.style.border = "1px solid #f22012";
      }

      if(document.formcustomers4.BusinessAddress1.value != "")
      {
        $("#avisoBusinessAddres1").hide("slow");
        document.formcustomers4.BusinessAddress1.style.border = "1px solid #17dd37";
      }

      if (document.formcustomers4.typeBusiness.value == "DEPARTMENT" ||
          document.formcustomers4.typeBusiness.value == "SWIMWEAR" ||
          document.formcustomers4.typeBusiness.value == "DISTRIBUITOR" ||
          document.formcustomers4.typeBusiness.value == "FRANCHISE" ||
          document.formcustomers4.typeBusiness.value == "RESORT" ||
          document.formcustomers4.typeBusiness.value == "BOUTIQUE" ||
          document.formcustomers4.typeBusiness.value == "KIDS" ||
          document.formcustomers4.typeBusiness.value == "SPORTING" ||
          document.formcustomers4.typeBusiness.value == "SURF" ||
          document.formcustomers4.typeBusiness.value == "STUDIOS" ||
          document.formcustomers4.typeBusiness.value == "CORPORATE" ||
          document.formcustomers4.typeBusiness.value == "OUTLET" &&
          document.formcustomers4.Businessstorename1.value == "")
      {
        $("#avisoBusinessStorename1").show("slow");
        document.formcustomers4.Businessstorename1.style.border = "1px solid #f22012";
      }

      if(document.formcustomers4.Businessstorename1.value != "")
      {
        $("#avisoBusinessStorename1").hide("slow");
        document.formcustomers4.Businessstorename1.style.border = "1px solid #17dd37";
      }

      if (document.formcustomers4.typeBusiness.value == "DEPARTMENT" ||
          document.formcustomers4.typeBusiness.value == "SWIMWEAR" ||
          document.formcustomers4.typeBusiness.value == "DISTRIBUITOR" ||
          document.formcustomers4.typeBusiness.value == "FRANCHISE" ||
          document.formcustomers4.typeBusiness.value == "RESORT" ||
          document.formcustomers4.typeBusiness.value == "BOUTIQUE" ||
          document.formcustomers4.typeBusiness.value == "KIDS" ||
          document.formcustomers4.typeBusiness.value == "SPORTING" ||
          document.formcustomers4.typeBusiness.value == "SURF" ||
          document.formcustomers4.typeBusiness.value == "STUDIOS" ||
          document.formcustomers4.typeBusiness.value == "CORPORATE" ||
          document.formcustomers4.typeBusiness.value == "OUTLET" &&
          document.formcustomers4.Businesszipcode1.value == "")
      {
        $("#avisoBusinessZipcode1").show("slow");
        document.formcustomers4.Businesszipcode1.style.border = "1px solid #f22012";
      }

      if(document.formcustomers4.Businesszipcode1.value != "")
      {
        $("#avisoBusinessZipcode1").hide("slow");
        document.formcustomers4.Businesszipcode1.style.border = "1px solid #17dd37";
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

    if (document.formcustomers4.typeBusiness.value == "ONLINE" &&
        document.formcustomers4.website.value != "" ||
        document.formcustomers4.businessCountry1.value == "" ||
        document.formcustomers4.BusinessState1.value == "" ||
        document.formcustomers4.BusinessCity1.value == "" ||
        document.formcustomers4.BusinessAddress1.value == "" ||
        document.formcustomers4.Businessstorename1.value == "" ||
        document.formcustomers4.Businesszipcode1.value == "")
    {
      $("#avisowebsite").hide("slow");
      document.formcustomers4.website.style.border = "1px solid #17dd37";

      $("#avisolargoBusinessState1").hide("slow");
      $("#avisobusinessState1").hide("slow");
      document.formcustomers4.BusinessState1.style.border = "1px solid #17dd37";

      $("#avisolargoBusinesscity").hide("slow");
      $("#avisoBusinessCity1").hide("slow");
      document.formcustomers4.BusinessCity1.style.border = "1px solid #17dd37";

      $("#avisolargoBusinessAddress").hide("slow");
      $("#avisoBusinessAddres1").hide("slow");
      document.formcustomers4.BusinessAddress1.style.border = "1px solid #17dd37";

      $("#avisolargoBusinessStore").hide("slow");
      $("#avisoBusinessStorename1").hide("slow");
      document.formcustomers4.Businessstorename1.style.border = "1px solid #17dd37";

      $("#avisolargoBusinesszipcode").hide("slow");
      $("#avisoBusinessZipcode1").hide("slow");
      document.formcustomers4.Businesszipcode1.style.border = "1px solid #17dd37";
    }

    if(active || swimwear || covers || kids || trunks || accesories)
    {

      if (document.formcustomers4.potentialbrand.value != "" &&
          document.formcustomers4.typeBusiness.value != "" &&
          document.formcustomers4.file1.value != "" &&
          document.formcustomers4.file2.value != "" &&
          document.formcustomers4.file3.value != "" &&
          document.formcustomers4.file4.value != "" )
      {
          $("#avisovalidacionesform4").hide('slow');
          var formData = new FormData($("#form-customers4")[0]);

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
              document.formcustomers4.typeBusiness.value != ""){

                var formData = new FormData($("#form-customers4")[0]);

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

                          setTimeout(function(){
                            location.reload();
                          }, 2000);
                    }

                  }
                });

              }
      }

      else
      {
          $("#avisovalidacionesform4").show('slow');
      }
    }

    else
    {
        $("#avisovalidacionesform4").show('slow');
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

function validarLargoWebSite()
{
  if (document.formcustomers4.website.value.length < 5)
  {
      $("#avisolargowebsite").show('slow');
      $("#avisowebsite").hide('slow');
      document.formcustomers4.website.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.website.value.length >= 5)
  {
      $("#avisolargowebsite").hide('slow');
      document.formcustomers4.website.style.border = "1px solid #17dd37";
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
