
function ValidarFormularioCustomers4()
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

    if (document.formcustomers4.figures.value == "")
    {
        document.formcustomers4.figures.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers4.figures.value != "")
    {
        document.formcustomers4.figures.style.border = "1px solid #17dd37";
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

    if(active || swimwear || covers || kids || trunks || accesories)
    {

      if (document.formcustomers4.typeBusiness.value != "" &&
          document.formcustomers4.file1.value != "" &&
          document.formcustomers4.file2.value != "" &&
          document.formcustomers4.file3.value != "" &&
          document.formcustomers4.file4.value != "")
      {
          $("#avisovalidacionesform4").hide('slow');
          var formData = new FormData($("#form-customers4")[0]);

          $.ajax({
            url: url + 'clientes/form5',
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
          if(document.formcustomers4.typeBusiness.value != ""){

              var formData = new FormData($("#form-customers4")[0]);

                $.ajax({
                  url: url + 'clientes/form5BusinessL',
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

                    if (resp == 1)
                    {
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

function validarLargoWebSite()
{
  if (document.formcustomers4.website.value.length < 5)
  {
    $("#avisolargowebsite").show('slow');
    $("#avisowebsite").hide('slow');
    document.formcustomers4.website.style.border = "1px solid #f22012";
  }

  if (document.formcustomers4.website.value.length >= 5)
  {
    $("#avisolargowebsite").hide('slow');
    $("#avisowebsite").hide('slow');
    document.formcustomers4.website.style.border = "1px solid #17dd37";
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

function ValidarBusinnessCountry1()
{
  if (document.formcustomers4.businessCountry1.value != "")
  {
    $("#avisoBusinessCountry1").hide('slow');
    document.formcustomers4.businessCountry1.style.border = "1px solid #17dd37";
  }
}

function ValidarLargoBusinessState01()
{
  if (document.formcustomers4.BusinessState1.value.length < 3)
  {
      $("#avisolargoBusinessState1").show('slow');
      $("#avisobusinessState1").hide('slow');
      document.formcustomers4.BusinessState1.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.BusinessState1.value.length >= 3)
  {
      $("#avisolargoBusinessState1").hide('slow');
      document.formcustomers4.BusinessState1.style.border = "1px solid #17dd37";
  }

}

function validarLargoBusinessCity()
{
  if (document.formcustomers4.BusinessCity1.value.length < 3)
  {
    $("#avisolargoBusinesscity").show('slow');
    $("#avisoBusinessCity1").hide('slow');
    document.formcustomers4.BusinessCity1.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.BusinessCity1.value.length >= 3)
{
    $("#avisolargoBusinesscity").hide('slow');
    document.formcustomers4.BusinessCity1.style.border = "1px solid #17dd37";
  }

}

function ValidarLargoBusinessAddress()
{
  if (document.formcustomers4.BusinessAddress1.value.length < 8)
  {
    $("#avisolargoBusinessAddress").show('slow');
    $("#avisoBusinessAddres1").hide('slow');
    document.formcustomers4.BusinessAddress1.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.BusinessAddress1.value.length >= 8)
  {
    $("#avisolargoBusinessAddress").hide('slow');
    document.formcustomers4.BusinessAddress1.style.border = "1px solid #17dd37";
  }
}

function validarLargoBusinessStoreName()
{
  if (document.formcustomers4.Businessstorename1.value.length < 3)
  {
      $("#avisolargoBusinessStore").show('slow');
      $("#avisoBusinessStorename1").hide('slow');
      document.formcustomers4.Businessstorename1.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.Businessstorename1.value.length >= 3)
  {
      $("#avisolargoBusinessStore").hide('slow');
      document.formcustomers4.Businessstorename1.style.border = "1px solid #17dd37";
  }
}

function ValidarLargoBusinessZipcode()
{
  if (document.formcustomers4.Businesszipcode1.value.length < 5)
  {
      $("#avisolargoBusinesszipcode").show('slow');
      $("#avisoBusinessZipcode1").hide('slow');
      document.formcustomers4.Businesszipcode1.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.Businesszipcode1.value.length >= 5)
  {
      $("#avisolargoBusinesszipcode").hide('slow');
      document.formcustomers4.Businesszipcode1.style.border = "1px solid #17dd37";
  }
}

// Ocultar y mostrar los campos de las otras business locations
function mostrarMasDireccionesBusiness()
{
  $("#othersAddressBusiness").show('slow');
  $("#menosdireccionesBusiness").show('slow');
  $("#masdireccionesBusiness").hide('slow');
}

function ocultarDireccionesBusiness()
{
  $("#othersAddressBusiness").hide('slow');
  $("#menosdireccionesBusiness").hide('slow');
  $("#masdireccionesBusiness").show('slow');
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

function validarTypeBusiness()
{
  var select = document.getElementById("typeBusiness").value;

  if(select == "ONLINE")
  {
    $("#avisowebsite").show('slow');
    document.getElementById('mostrarOcultarBusinessLocation').style.display="none";
    document.getElementById('mostraOcultarWebSite').style.display = "block";
    document.formcustomers4.website.style.border = "1px solid #f22012";
  }

  else if (select == "NOTHING")
  {
    document.getElementById('mostrarOcultarBusinessLocation').style.display="none";
    document.getElementById('mostraOcultarWebSite').style.display="none";
  }

  else {
    document.getElementById('mostrarOcultarBusinessLocation').style.display="block";
    document.getElementById('mostraOcultarWebSite').style.display="none";
    $("#avisowebsite").hide('slow');
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

function ValidarLargoState1()
{
if (document.formcustomers4.state1.value.length < 4)
{
$("#avisolargostate1").show('slow');
$("#avisostate1").hide('slow');
document.formcustomers4.state1.style.border = "1px solid #f22012";
}

if(document.formcustomers4.state1.value.length >= 4)
{
$("#avisolargostate1").hide('slow');
document.formcustomers4.state1.style.border = "1px solid #17dd37";
}

}
function ValidarLargoState1()
{
if (document.formcustomers4.state1.value.length < 4)
{
$("#avisolargostate1").show('slow');
$("#avisostate1").hide('slow');
document.formcustomers4.state1.style.border = "1px solid #f22012";
}

if(document.formcustomers4.state1.value.length >= 4)
{
$("#avisolargostate1").hide('slow');
document.formcustomers4.state1.style.border = "1px solid #17dd37";
}

}

function validarLargoCity1()
{
if (document.formcustomers4.city1.value.length < 3)
{
$("#avisolargocity1").show('slow');
$("#avisocity1").hide('slow');
document.formcustomers4.city1.style.border = "1px solid #f22012";
}

if(document.formcustomers4.city1.value.length >= 3)
{
$("#avisolargocity1").hide('slow');
document.formcustomers4.city1.style.border = "1px solid #17dd37";
}

}

function validarLargoStoreName1()
{
if (document.formcustomers4.storename1.value.length < 3)
{
$("#avisolargostorename1").show('slow');
$("#avisostorename1").hide('slow');
document.formcustomers4.storename1.style.border = "1px solid #f22012";
}

if(document.formcustomers4.storename1.value.length >= 3)
{
$("#avisolargostorename1").hide('slow');
document.formcustomers4.storename1.style.border = "1px solid #17dd37";
}

}

function validarLargoZipcode1()
{
if (document.formcustomers4.zipcode1.value.length < 3)
{
$("#avisolargozipcode1").show('slow');
$("#avisozipcode1").hide('slow');
document.formcustomers4.zipcode1.style.border = "1px solid #f22012";
}

if(document.formcustomers4.zipcode1.value.length >= 3)
{
$("#avisolargozipcode1").hide('slow');
document.formcustomers4.zipcode1.style.border = "1px solid #17dd37";
}

}
//  /Location One
//  Location Two
function ValidarCountry6()
{

if (document.formcustomers4.country6.value != "")
{
    $("#avisocountry6").hide('slow');
    // $(".select2-container--default .select2-selection--single").css("border", "1px solid #17dd37");
    document.formcustomers4.country6.style.border = "1px solid #17dd37";
}
}

function ValidarLargoState6()
{
if (document.formcustomers4.state6.value.length < 4)
{
    $("#avisolargostate6").show('slow');
    $("#avisostate6").hide('slow');
    document.formcustomers4.state6.style.border = "1px solid #f22012";
}

if(document.formcustomers4.state6.value.length >= 4)
{
    $("#avisolargostate6").hide('slow');
    document.formcustomers4.state6.style.border = "1px solid #17dd37";
}

}

function validarLargoCity6()
{
if (document.formcustomers4.city6.value.length < 3)
{
    $("#avisolargocity6").show('slow');
    $("#avisocity6").hide('slow');
    document.formcustomers4.city6.style.border = "1px solid #f22012";
}

if(document.formcustomers4.city6.value.length >= 3)
{
    $("#avisolargocity6").hide('slow');
    document.formcustomers4.city6.style.border = "1px solid #17dd37";
}

}

function validarLargoStoreName6()
{
if (document.formcustomers4.storename6.value.length < 3)
{
    $("#avisolargostorename6").show('slow');
    $("#avisostorename6").hide('slow');
    document.formcustomers4.storename6.style.border = "1px solid #f22012";
}

if(document.formcustomers4.storename6.value.length >= 3)
{
    $("#avisolargostorename6").hide('slow');
    document.formcustomers4.storename6.style.border = "1px solid #17dd37";
}

}

function validarLargoZipcode6()
{
if (document.formcustomers4.zipcode6.value.length < 3)
{
    $("#avisolargozipcode6").show('slow');
    $("#avisozipcode6").hide('slow');
    document.formcustomers4.zipcode6.style.border = "1px solid #f22012";
}

if(document.formcustomers4.zipcode6.value.length >= 3)
{
    $("#avisolargozipcode6").hide('slow');
    document.formcustomers4.zipcode6.style.border = "1px solid #17dd37";
}

}
//  /Location Two
//  Location Three
function ValidarCountry3()
{

  if (document.formcustomers4.country03.value != "")
  {
      $("#avisocountry03").hide('slow');
      // $(".select2-container--default .select2-selection--single").css("border", "1px solid #17dd37");
      document.formcustomers4.country03.style.border = "1px solid #17dd37";
  }
}

function ValidarLargoState3()
{
  if (document.formcustomers4.state03.value.length < 4)
  {
      $("#avisolargostate03").show('slow');
      $("#avisostate03").hide('slow');
      document.formcustomers4.state03.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.state03.value.length >= 4)
  {
      $("#avisolargostate03").hide('slow');
      document.formcustomers4.state03.style.border = "1px solid #17dd37";
  }

}

function ValidarLargoState3()
{
  if (document.formcustomers4.state03.value.length < 4)
  {
      $("#avisolargostate03").show('slow');
      $("#avisostate03").hide('slow');
      document.formcustomers4.state03.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.state03.value.length >= 4)
  {
      $("#avisolargostate03").hide('slow');
      document.formcustomers4.state03.style.border = "1px solid #17dd37";
  }

}

function validarLargoCity3()
{
  if (document.formcustomers4.city03.value.length < 3)
  {
      $("#avisolargocity03").show('slow');
      $("#avisocity03").hide('slow');
      document.formcustomers4.city03.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.city03.value.length >= 3)
  {
      $("#avisolargocity03").hide('slow');
      document.formcustomers4.city03.style.border = "1px solid #17dd37";
  }

}

function validarLargoStoreName3()
{
  if (document.formcustomers4.storename3.value.length < 3)
  {
      $("#avisolargostorename3").show('slow');
      $("#avisostorename3").hide('slow');
      document.formcustomers4.storename3.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.storename3.value.length >= 3)
  {
      $("#avisolargostorename3").hide('slow');
      document.formcustomers4.storename3.style.border = "1px solid #17dd37";
  }

}

function validarLargoZipcode3()
{
  if (document.formcustomers4.zipcode03.value.length < 3)
  {
      $("#avisolargozipcode03").show('slow');
      $("#avisozipcode03").hide('slow');
      document.formcustomers4.zipcode03.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.zipcode03.value.length >= 3)
  {
      $("#avisolargozipcode03").hide('slow');
      document.formcustomers4.zipcode03.style.border = "1px solid #17dd37";
  }

}
//  /Location Three
//  Location Four
function ValidarCountry4()
{

if (document.formcustomers4.country4.value != "")
{
    $("#avisocountry4").hide('slow');
    // $(".select2-container--default .select2-selection--single").css("border", "1px solid #17dd37");
    document.formcustomers4.country4.style.border = "1px solid #17dd37";
}
}

function ValidarLargoState4()
{
if (document.formcustomers4.state4.value.length < 4)
{
    $("#avisolargostate4").show('slow');
    $("#avisostate4").hide('slow');
    document.formcustomers4.state4.style.border = "1px solid #f22012";
}

if(document.formcustomers4.state4.value.length >= 4)
{
    $("#avisolargostate4").hide('slow');
    document.formcustomers4.state4.style.border = "1px solid #17dd37";
}

}
// function ValidarLargoState4()
// {
//   if (document.formcustomers4.state4.value.length < 4)
//   {
//       $("#avisolargostate4").show('slow');
//       $("#avisostate4").hide('slow');
//       document.formcustomers4.state4.style.border = "1px solid #f22012";
//   }
//
//   if(document.formcustomers4.state4.value.length >= 4)
//   {
//       $("#avisolargostate4").hide('slow');
//       document.formcustomers4.state4.style.border = "1px solid #17dd37";
//   }
//
// }

function validarLargoCity4()
{
if (document.formcustomers4.city4.value.length < 3)
{
    $("#avisolargocity4").show('slow');
    $("#avisocity4").hide('slow');
    document.formcustomers4.city4.style.border = "1px solid #f22012";
}

if(document.formcustomers4.city4.value.length >= 3)
{
    $("#avisolargocity4").hide('slow');
    document.formcustomers4.city4.style.border = "1px solid #17dd37";
}

}

function validarLargoStoreName4()
{
if (document.formcustomers4.storename4.value.length < 3)
{
    $("#avisolargostorename4").show('slow');
    $("#avisostorename4").hide('slow');
    document.formcustomers4.storename4.style.border = "1px solid #f22012";
}

if(document.formcustomers4.storename4.value.length >= 3)
{
    $("#avisolargostorename4").hide('slow');
    document.formcustomers4.storename4.style.border = "1px solid #17dd37";
}

}

function validarLargoZipcode4()
{
if (document.formcustomers4.zipcode4.value.length < 3)
{
    $("#avisolargozipcode4").show('slow');
    $("#avisozipcode4").hide('slow');
    document.formcustomers4.zipcode4.style.border = "1px solid #f22012";
}

if(document.formcustomers4.zipcode4.value.length >= 3)
{
    $("#avisolargozipcode4").hide('slow');
    document.formcustomers4.zipcode4.style.border = "1px solid #17dd37";
}

}
//  /Location Four
//  Location Five
function ValidarCountry5()
{

if (document.formcustomers4.country5.value != "")
{
    $("#avisocountry5").hide('slow');
    // $(".select2-container--default .select2-selection--single").css("border", "1px solid #17dd37");
    document.formcustomers4.country5.style.border = "1px solid #17dd37";
}
}

function ValidarLargoState5()
{
if (document.formcustomers4.state5.value.length < 4)
{
    $("#avisolargostate5").show('slow');
    $("#avisostate5").hide('slow');
    document.formcustomers4.state5.style.border = "1px solid #f22012";
}

if(document.formcustomers4.state5.value.length >= 4)
{
    $("#avisolargostate5").hide('slow');
    document.formcustomers4.state5.style.border = "1px solid #17dd37";
}

}
// function ValidarLargoState5()
// {
//   if (document.formcustomers4.state5.value.length < 5)
//   {
//       $("#avisolargostate5").show('slow');
//       $("#avisostate5").hide('slow');
//       document.formcustomers4.state5.style.border = "1px solid #f22012";
//   }
//
//   if(document.formcustomers4.state5.value.length >= 5)
//   {
//       $("#avisolargostate5").hide('slow');
//       document.formcustomers4.state5.style.border = "1px solid #17dd37";
//   }
//
// }

function validarLargoCity5()
{
if (document.formcustomers4.city5.value.length < 3)
{
    $("#avisolargocity5").show('slow');
    $("#avisocity5").hide('slow');
    document.formcustomers4.city5.style.border = "1px solid #f22012";
}

if(document.formcustomers4.city5.value.length >= 3)
{
    $("#avisolargocity5").hide('slow');
    document.formcustomers4.city5.style.border = "1px solid #17dd37";
}

}

function validarLargoStoreName5()
{
if (document.formcustomers4.storename5.value.length < 3)
{
    $("#avisolargostorename5").show('slow');
    $("#avisostorename5").hide('slow');
    document.formcustomers4.storename5.style.border = "1px solid #f22012";
}

if(document.formcustomers4.storename5.value.length >= 3)
{
    $("#avisolargostorename5").hide('slow');
    document.formcustomers4.storename5.style.border = "1px solid #17dd37";
}

}

function validarLargoZipcode5()
{
  if (document.formcustomers4.zipcode5.value.length < 3)
  {
      $("#avisolargozipcode5").show('slow');
      $("#avisozipcode5").hide('slow');
      document.formcustomers4.zipcode5.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.zipcode5.value.length >= 3)
  {
      $("#avisolargozipcode5").hide('slow');
      document.formcustomers4.zipcode5.style.border = "1px solid #17dd37";
  }
}

$("#businessCountry1").select2();
