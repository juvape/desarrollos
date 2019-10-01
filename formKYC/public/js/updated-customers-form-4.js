
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

    if (document.formcustomers4.typeBusiness.value != "NOTHING")
    {
        $("#avisotypebusiness").hide("slow");
        document.formcustomers4.typeBusiness.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers4.storelocations.value == "none")
    {
      $("#avisoquantitystores").show("slow");
      document.formcustomers4.storelocations.style.border = "1px solid #f22012";
    }

    if (document.formcustomers4.storelocations.value == "1")
    {
      validarLocationStore1();
    }

    else if (document.formcustomers4.storelocations.value == "2")
    {
      //Location one
      validarLocationStore1();

      //Location Two
      validarLocationStore2();
    }

    else if (document.formcustomers4.storelocations.value == "3")
    {
      //Location one
      validarLocationStore1();

      //Location two
      validarLocationStore2();

      //location three
      validarLocationStore3();
    }

    else if (document.formcustomers4.storelocations.value == "4")
    {
      //Location one
      validarLocationStore1();

      //Location two
      validarLocationStore2();

      //location three
      validarLocationStore3();

      //location four
      validarLocationStore4();
    }

    else if (document.formcustomers4.storelocations.value == "5")
    {
      //Location one
      validarLocationStore1();

      //Location two
      validarLocationStore2();

      //location three
      validarLocationStore3();

      //location four
      validarLocationStore4();

      //location Five
      validarLocationStore5();
    }
    else
    {
      console.log("seleccionaste la opcion mas-5");
    }

    if(document.formcustomers4.certificateexistence.value == "")
    {
      $("#avisoarchivosrequeridos").show("slow");
      $("#file1").addClass('border-files');
    }

    if(document.formcustomers4.certificateexistence.value != "")
    {
      $("#avisoarchivosrequeridos").hide("slow");
      $("#file1").removeClass('border-files');
    }

    if(document.formcustomers4.taxcertificate.value == "")
    {
      $("#avisoarchivosrequeridos2").show("slow");
      $("#file2").addClass('border-files');
    }

    if(document.formcustomers4.taxcertificate.value != "")
    {
      $("#avisoarchivosrequeridos2").hide("slow");
      $("#file2").removeClass('border-files');
    }

    if(document.formcustomers4.checkspecimen.value == "")
    {
      $("#avisoarchivosrequeridos3").show("slow");
      $("#file3").addClass('border-files');
    }

    if(document.formcustomers4.checkspecimen.value != "")
    {
      $("#avisoarchivosrequeridos3").hide("slow");
      $("#file3").removeClass('border-files');
    }

    if(document.formcustomers4.legalrepresentative.value == "")
    {
      $("#avisoarchivosrequeridos4").show("slow");
      $("#file4").addClass('border-files');
    }

    if(document.formcustomers4.legalrepresentative.value != "")
    {
      $("#avisoarchivosrequeridos4").hide("slow");
      $("#file4").removeClass('border-files');
    }
    //
    // if(document.formcustomers4.resalercertificate.value == "")
    // {
    //   $("#avisoarchivosrequeridos5").show("slow");
    //   $("#file5").addClass('border-files');
    // }
    //
    // if(document.formcustomers4.resalercertificate.value != "")
    // {
    //   $("#avisoarchivosrequeridos5").hide("slow");
    //   $("#file5").removeClass('border-files');
    // }

    if(active || swimwear || covers || kids || trunks || accesories)
    {

      if ((document.formcustomers4.typeBusiness.value != "NOTHING" ||
          document.formcustomers4.typeBusiness.value != "") &&
          (document.formcustomers4.storelocations.value != "none" ||
          document.formcustomers4.storelocations.value != "") &&
          document.formcustomers4.certificateexistence.value != "" &&
          document.formcustomers4.taxcertificate.value != "" &&
          document.formcustomers4.checkspecimen.value != "" &&
          document.formcustomers4.legalrepresentative.value != "")
      {
          $("#avisovalidacionesform4").hide('slow');
          var formData = new FormData($("#form-customers4")[0]);

          $.ajax({
            url: url + 'clientes/actualizacionDatosForm4',
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

                console.log("Datos actualizados correctamente");

                // insercion campos Store Locations (union4)
                $.ajax({
                  url: url + 'clientes/actualizarForm4StoresL',
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

                      $("#carga4").hide("slow");
                      $("#errorarchivos").hide('slow');
                      $("#avisovalidacionesform4").hide('slow');
                      $("#avisovalidacionesform4").addClass("ocultar");
                      // $("#sucessInfo").show("slow");
                      // $("#successfiles").show('slow');
                      swal({
                            title: "¡Success!",
                            text: "Information Updated Successfully",
                            type: "success",
                       },
                       function(isConfirm){
                         if(isConfirm)
                         {
                           window.location.href = url + "home/index";
                         }
                       });
                    }

                  }
                });

              }

              if(resp == 2)
              {
                $("#carga4").hide("fast");
                $("#avisovalidacionesform4").show("fast");
                $("#errorarchivos").show('slow');
                $("#sucessInfo").hide("slow");
                $("#file1").css("border", "1px solid #f22012");
                $("#file2").css("border", "1px solid #f22012");
                $("#file3").css("border", "1px solid #f22012");
                $("#file4").css("border", "1px solid #f22012");
              }
            }
          });
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

//Retail Store Location
//Location One

function validarLocationStore1()
{
  if (document.formcustomers4.countrystore1.value == "")
  {
    $("#avisocountrystore1").show('slow');
    document.formcustomers4.countrystore1.style.border = "1px solid #f22012";
  }

  if (document.formcustomers4.countrystore1.value != "")
  {
    $("#avisocountrystore1").hide('slow');
    document.formcustomers4.countrystore1.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers4.statestore1.value == "")
  {
    $("#avisostatestore1").show('slow');
    document.formcustomers4.statestore1.style.border = "1px solid #f22012";
  }

  if (document.formcustomers4.statestore1.value != "")
  {
    $("#avisostatestore1").hide('slow');
    document.formcustomers4.statestore1.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers4.citystoreretail1.value == "")
  {
    $("#avisocitystore1").show('slow');
    document.formcustomers4.citystoreretail1.style.border = "1px solid #f22012";
  }

  if (document.formcustomers4.citystoreretail1.value != "")
  {
    $("#avisocitystore1").hide('slow');
    document.formcustomers4.citystoreretail1.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers4.addressstore1.value == "")
  {
    $("#avisoadddresstore1").show('slow');
    document.formcustomers4.addressstore1.style.border = "1px solid #f22012";
  }

  if (document.formcustomers4.addressstore1.value != "")
  {
    $("#avisoadddresstore1").hide('slow');
    document.formcustomers4.addressstore1.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers4.storenameretail1.value == "")
  {
    $("#avisostorenameretail1").show('slow');
    document.formcustomers4.storenameretail1.style.border = "1px solid #f22012";
  }

  if (document.formcustomers4.storenameretail1.value != "")
  {
    $("#avisostorenameretail1").hide('slow');
    document.formcustomers4.storenameretail1.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers4.zipcodestore1.value == "")
  {
    $("#avisozipcodestore1").show('slow');
    document.formcustomers4.zipcodestore1.style.border = "1px solid #f22012";
  }

  if (document.formcustomers4.zipcodestore1.value != "")
  {
    $("#avisozipcodestore1").hide('slow');
    document.formcustomers4.zipcodestore1.style.border = "1px solid #17dd37";
  }
}
//Fin Location One


function showAnualFigures()
{
  if (document.formcustomers4.currencyAnualFigures.value != "")
  {
    $("#hideCurrency").show('slow');
  }

  if (document.formcustomers4.currencyAnualFigures.value == "")
  {
    $("#hideCurrency").hide('slow');
  }
}

//Anual Sales Figures: Solo admite números
onload = function(){
  var ele = document.querySelectorAll('.validanumeros')[0];
  ele.onkeypress = function(e) {
     if(isNaN(this.value+String.fromCharCode(e.charCode)))
        return false;
  }
  ele.onpaste = function(e){
     e.preventDefault();
  }
}

function validarFormatoURL()
{
  // alert("here");
  var url = document.formcustomers4.website.value;
  var expression = /(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,3})/gi;

  if (expression.test(url)) {
    document.formcustomers4.website.style.border = "1px solid  #17dd37";
    $("#avisoformatourl").hide('slow');
      $("#avisolargowebsite").hide('slow');
    return true;
  }
  else {
    document.formcustomers4.website.style.border = "1px solid #f22012";
    $("#avisoformatourl").show('slow');
    $("#avisolargowebsite").hide('slow');
    return false;
  }
}

function validarFile1()
{
  $("#file1").removeClass('border-files');
  $("#avisoarchivosrequeridos").hide("slow");
}

function validarFile2()
{
  $("#file2").removeClass('border-files');
  $("#avisoarchivosrequeridos2").hide("slow");
}

function validarFile3()
{
  $("#file3").removeClass('border-files');
  $("#avisoarchivosrequeridos3").hide("slow");
}

function validarFile4()
{
  $("#file4").removeClass('border-files');
  $("#avisoarchivosrequerido4").hide("slow");
}

function validarFile5()
{
  $("#file5").removeClass('border-files');
}


function validarFigures()
{
  if (document.formcustomers4.figures.value.length < 3)
  {
      $("#avisolargofigures").show('slow');
      $("#avisonumeros").show('slow');
      $("#avisofigures").hide('slow');
      document.formcustomers4.figures.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.figures.value.length >= 3)
  {
      $("#avisolargofigures").hide('slow');
      $("#avisonumeros").hide('slow');
      document.formcustomers4.figures.style.border = "1px solid #17dd37";
  }

}

// Inicio validación longitud location one
function ValidarCountryStore1()
{
  if (document.formcustomers4.countrystore1.value != "")
  {
    $("#avisocountrystore1").hide('slow');
    document.formcustomers4.countrystore1.style.border = "1px solid #17dd37";
  }
}

function ValidarLargoStateStore1()
{
  if (document.formcustomers4.statestore1.value.length < 3)
  {
    $("#avisolargostatestore1").show('slow');
    $("#avisostatestore1").hide('slow');
    document.formcustomers4.statestore1.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.statestore1.value.length >= 3)
  {
    $("#avisolargostatestore1").hide('slow');
    document.formcustomers4.statestore1.style.border = "1px solid #17dd37";
  }

}

function validarLargoCityStore1()
{
  if (document.formcustomers4.citystoreretail1.value.length < 3)
  {
    $("#avisolargocitystore1").show('slow');
    $("#avisocitystore1").hide('slow');
    document.formcustomers4.citystoreretail1.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.citystoreretail1.value.length >= 3)
  {
    $("#avisolargocitystore1").hide('slow');
    document.formcustomers4.citystoreretail1.style.border = "1px solid #17dd37";
  }

}

function ValidarLargoAddresStore1()
{
  if (document.formcustomers4.addressstore1.value.length < 8)
  {
    $("#avisolargoaddresstore1").show('slow');
    $("#avisoadddresstore1").hide('slow');
    document.formcustomers4.addressstore1.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.addressstore1.value.length >= 8)
  {
    $("#avisolargoaddresstore1").hide('slow');
    document.formcustomers4.addressstore1.style.border = "1px solid #17dd37";
  }
}

function validarLargoStoreNameRetail1()
{
  if (document.formcustomers4.storenameretail1.value.length < 3)
  {
      $("#avisolargostorenameretail1").show('slow');
      $("#avisostorenameretail1").hide('slow');
      document.formcustomers4.storenameretail1.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.storenameretail1.value.length >= 3)
  {
      $("#avisolargostorenameretail1").hide('slow');
      document.formcustomers4.storenameretail1.style.border = "1px solid #17dd37";
  }
}

function validarLargoZipcodeStore1()
{
  if (document.formcustomers4.zipcodestore1.value.length < 4)
  {
      $("#avisolargozipcodestore1").show('slow');
      $("#avisozipcodestore1").hide('slow');
      document.formcustomers4.zipcodestore1.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.zipcodestore1.value.length >= 4)
  {
      $("#avisolargozipcodestore1").hide('slow');
      document.formcustomers4.zipcodestore1.style.border = "1px solid #17dd37";
  }
}


function validarTypeBusiness()
{
  var online = document.formcustomers4.typebusiness.value;

  if (online == "ONLINE")
  {
      $("#mostrarWebSite").show('slow');
      $("#mostrarOcultarBusinessLocation").addClass('ocultar');
  }
  else
  {
      $("#mostrarWebSite").hide('slow');
      $("#mostrarOcultarBusinessLocation").removeClass('ocultar');
  }
}

// Inicio Location Two
function validarLocationStore2()
{
  if (document.formcustomers4.countrystore2.value == "")
  {
    $("#avisocountrystore2").show('slow');
    document.formcustomers4.countrystore2.style.border = "1px solid #f22012";
  }

  if (document.formcustomers4.countrystore2.value != "")
  {
    $("#avisocountrystore2").hide('slow');
    document.formcustomers4.countrystore2.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers4.statestore2.value == "")
  {
    $("#avisostatestore2").show('slow');
    document.formcustomers4.statestore2.style.border = "1px solid #f22012";
  }

  if (document.formcustomers4.statestore2.value != "")
  {
    $("#avisostatestore2").hide('slow');
    document.formcustomers4.statestore2.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers4.citystoreretail2.value == "")
  {
    $("#avisocitystore2").show('slow');
    document.formcustomers4.citystoreretail2.style.border = "1px solid #f22012";
  }

  if (document.formcustomers4.citystoreretail2.value != "")
  {
    $("#avisocitystore2").hide('slow');
    document.formcustomers4.citystoreretail2.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers4.addresstore2.value == "")
  {
    $("#avisoaddresstore2").show('slow');
    document.formcustomers4.addresstore2.style.border = "1px solid #f22012";
  }

  if (document.formcustomers4.addresstore2.value != "")
  {
    $("#avisoaddresstore2").hide('slow');
    document.formcustomers4.addresstore2.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers4.storenameretail2.value == "")
  {
    $("#avisostorenameretail2").show('slow');
    document.formcustomers4.storenameretail2.style.border = "1px solid #f22012";
  }

  if (document.formcustomers4.storenameretail2.value != "")
  {
    $("#avisostorenameretail2").hide('slow');
    document.formcustomers4.storenameretail2.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers4.zipcodestore2.value == "")
  {
    $("#avisozipcodestore2").show('slow');
    document.formcustomers4.zipcodestore2.style.border = "1px solid #f22012";
  }

  if (document.formcustomers4.zipcodestore2.value != "")
  {
    $("#avisozipcodestore2").hide('slow');
    document.formcustomers4.zipcodestore2.style.border = "1px solid #17dd37";
  }
}
// Fin Location Two

//Validar largo location Two
function ValidarCountryStore2()
{
  if (document.formcustomers4.countrystore2.value != "")
  {
    $("#avisocountrystore2").hide('slow');
    document.formcustomers4.countrystore2.style.border = "1px solid #17dd37";
  }
}


function ValidarLargoStateStore2()
{
  if (document.formcustomers4.statestore2.value.length < 4)
  {
    $("#avisolargostatestore2").show('slow');
    $("#avisostatestore2").hide('slow');
    document.formcustomers4.statestore2.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.statestore2.value.length >= 4)
  {
    $("#avisolargostatestore2").hide('slow');
    document.formcustomers4.statestore2.style.border = "1px solid #17dd37";
  }
}

function validarLargoCityStore2()
{
  if (document.formcustomers4.citystoreretail2.value.length < 3)
  {
    $("#avisolargocitystore2").show('slow');
    $("#avisocitystore2").hide('slow');
    document.formcustomers4.citystoreretail2.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.citystoreretail2.value.length >= 3)
  {
    $("#avisolargocitystore2").hide('slow');
    document.formcustomers4.citystoreretail2.style.border = "1px solid #17dd37";
  }
}

function ValidarLargoAddressStore2()
{
  if (document.formcustomers4.addresstore2.value.length < 8)
  {
    $("#avisolargoaddresstore2").show('slow');
    $("#avisoaddresstore2").hide('slow');
    document.formcustomers4.addresstore2.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.addresstore2.value.length >= 8)
  {
    $("#avisolargoaddresstore2").hide('slow');
    document.formcustomers4.addresstore2.style.border = "1px solid #17dd37";
  }
}

function validarLargoStoreNameRetail2()
{
  if (document.formcustomers4.storenameretail2.value.length < 3)
  {
    $("#avisolargostorenameretail2").show('slow');
    $("#avisostorenameretail2").hide('slow');
    document.formcustomers4.storenameretail2.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.storenameretail2.value.length >= 3)
  {
    $("#avisolargostorenameretail2").hide('slow');
    document.formcustomers4.storenameretail2.style.border = "1px solid #17dd37";
  }
}

function validarLargoZipcodeStore2()
{
  if (document.formcustomers4.zipcodestore2.value.length < 3)
  {
    $("#avisolargozipcodestore2").show('slow');
    $("#avisozipcodestore2").hide('slow');
    document.formcustomers4.zipcodestore2.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.zipcodestore2.value.length >= 3)
  {
    $("#avisolargozipcodestore2").hide('slow');
    document.formcustomers4.zipcodestore2.style.border = "1px solid #17dd37";
  }
}
// Fin largo location two

//Store location
//Location Three
function validarLocationStore3()
{
  if (document.formcustomers4.countrystore3.value == "")
  {
    $("#avisocountrystore3").show('slow');
    document.formcustomers4.countrystore3.style.border = "1px solid #f22012";
  }

  if (document.formcustomers4.countrystore3.value != "")
  {
    $("#avisocountrystore3").hide('slow');
    document.formcustomers4.countrystore3.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers4.statestore3.value == "")
  {
    $("#avisostatestore3").show('slow');
    document.formcustomers4.statestore3.style.border = "1px solid #f22012";
  }

  if (document.formcustomers4.statestore3.value != "")
  {
    $("#avisostatestore3").hide('slow');
    document.formcustomers4.statestore3.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers4.citystoreretail3.value == "")
  {
    $("#avisocitystore3").show('slow');
    document.formcustomers4.citystoreretail3.style.border = "1px solid #f22012";
  }

  if (document.formcustomers4.citystoreretail3.value != "")
  {
    $("#avisocitystore3").hide('slow');
    document.formcustomers4.citystoreretail3.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers4.addressstore3.value == "")
  {
    $("#avisoaddresstore3").show('slow');
    document.formcustomers4.addressstore3.style.border = "1px solid #f22012";
  }

  if (document.formcustomers4.addressstore3.value != "")
  {
    $("#avisoaddresstore3").hide('slow');
    document.formcustomers4.addressstore3.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers4.storenameretail3.value == "")
  {
    $("#avisostorenameretail3").show('slow');
    document.formcustomers4.storenameretail3.style.border = "1px solid #f22012";
  }

  if (document.formcustomers4.storenameretail3.value != "")
  {
    $("#avisostorenameretail3").hide('slow');
    document.formcustomers4.storenameretail3.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers4.zipcodestore3.value == "")
  {
    $("#avisozipcodestore3").show('slow');
    document.formcustomers4.zipcodestore3.style.border = "1px solid #f22012";
  }

  if (document.formcustomers4.zipcodestore3.value != "")
  {
    $("#avisozipcodestore3").hide('slow');
    document.formcustomers4.zipcodestore3.style.border = "1px solid #17dd37";
  }
}
//Fin location three

//Validar largo location three
function validarCountryStore3()
{
  if (document.formcustomers4.countrystore3.value != "")
  {
    $("#avisocountrystore3").hide('slow');
    document.formcustomers4.countrystore3.style.border = "1px solid #17dd37";
  }
}

function ValidarLargoStateStore3()
{
  if (document.formcustomers4.statestore3.value.length < 4)
  {
    $("#avisolargostatestore3").show('slow');
    $("#avisostatestore3").hide('slow');
    document.formcustomers4.statestore3.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.statestore3.value.length >= 4)
{
    $("#avisolargostatestore3").hide('slow');
    document.formcustomers4.statestore3.style.border = "1px solid #17dd37";
  }
}

function validarLargoCityStore3()
{
  if (document.formcustomers4.citystoreretail3.value.length < 3)
  {
    $("#avisolargocitystore3").show('slow');
    $("#avisocitystore3").hide('slow');
    document.formcustomers4.citystoreretail3.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.citystoreretail3.value.length >= 3)
  {
    $("#avisolargocitystore3").hide('slow');
    document.formcustomers4.citystoreretail3.style.border = "1px solid #17dd37";
  }
}

function ValidarLargoAddresStore3()
{
  if (document.formcustomers4.addressstore3.value.length < 8)
  {
    $("#avisolargoaddresstore3").show('slow');
    $("#avisoaddresstore3").hide('slow');
    document.formcustomers4.addressstore3.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.addressstore3.value.length >= 8)
  {
    $("#avisolargoaddresstore3").hide('slow');
    document.formcustomers4.addressstore3.style.border = "1px solid #17dd37";
  }
}

function validarLargoStoreNameRetail3()
{
  if (document.formcustomers4.storenameretail3.value.length < 3)
  {
    $("#avisolargostorenameretail3").show('slow');
    $("#avisostorenameretail3").hide('slow');
    document.formcustomers4.storenameretail3.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.storenameretail3.value.length >= 3)
  {
    $("#avisolargostorenameretail3").hide('slow');
    document.formcustomers4.storenameretail3.style.border = "1px solid #17dd37";
  }
}

function validarLargoZipcodeStore3()
{
  if (document.formcustomers4.zipcodestore3.value.length < 3)
  {
    $("#avisolargozipcodestore3").show('slow');
    $("#avisozipcodestore3").hide('slow');
    document.formcustomers4.zipcodestore3.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.zipcodestore3.value.length >= 3)
  {
    $("#avisolargozipcodestore3").hide('slow');
    document.formcustomers4.zipcodestore3.style.border = "1px solid #17dd37";
  }
}
//Fin largo location three

//Store retail
//Location Four

function validarLocationStore4()
{
  if (document.formcustomers4.countrystore4.value == "")
  {
    $("#avisocountrystore4").show('slow');
    document.formcustomers4.countrystore4.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.countrystore4.value != "")
  {
    $("#avisocountrystore4").hide('slow');
    document.formcustomers4.countrystore4.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers4.statestore4.value == "")
  {
    $("#avisostatestore4").show('slow');
    document.formcustomers4.statestore4.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.statestore4.value != "")
  {
    $("#avisostatestore4").hide('slow');
    document.formcustomers4.statestore4.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers4.citystore4.value == "")
  {
    $("#avisocitystore4").show('slow');
    document.formcustomers4.citystore4.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.citystore4.value != "")
  {
    $("#avisocitystore4").hide('slow');
    document.formcustomers4.citystore4.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers4.addresstore4.value == "")
  {
    $("#avisoaddresstore4").show('slow');
    document.formcustomers4.addresstore4.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.addresstore4.value != "")
  {
    $("#avisoaddresstore4").hide('slow');
    document.formcustomers4.addresstore4.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers4.storenameretail4.value == "")
  {
    $("#avisostorenameretail4").show('slow');
    document.formcustomers4.storenameretail4.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.storenameretail4.value != "")
  {
    $("#avisostorenameretail4").hide('slow');
    document.formcustomers4.storenameretail4.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers4.zipcodestore4.value == "")
  {
    $("#avisozipcodestore4").show('slow');
    document.formcustomers4.zipcodestore4.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.zipcodestore4.value != "")
  {
    $("#avisozipcodestore4").hide('slow');
    document.formcustomers4.zipcodestore4.style.border = "1px solid #17dd37";
  }
}
// Fin location Four


//Validar largo location four
function ValidarCountryStore4()
{
  if (document.formcustomers4.countrystore4.value != "")
  {
    $("#avisocountrystore4").hide('slow');
    document.formcustomers4.countrystore4.style.border = "1px solid #17dd37";
  }
}

function ValidarLargoStateStore4()
{
  if (document.formcustomers4.statestore4.value.length < 4)
  {
    $("#avisolargostatestore4").show('slow');
    $("#avisostatestore4").hide('slow');
    document.formcustomers4.statestore4.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.statestore4.value.length >= 4)
  {
    $("#avisolargostatestore4").hide('slow');
    document.formcustomers4.statestore4.style.border = "1px solid #17dd37";
  }

}

function validarLargoCityStore4()
{
  if (document.formcustomers4.citystore4.value.length < 3)
  {
    $("#avisolargocitystore4").show('slow');
    $("#avisocitystore4").hide('slow');
    document.formcustomers4.citystore4.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.citystore4.value.length >= 3)
  {
    $("#avisolargocitystore4").hide('slow');
    document.formcustomers4.citystore4.style.border = "1px solid #17dd37";
  }

}

function ValidarLargoAddresStore4()
{
  if (document.formcustomers4.addresstore4.value.length < 8)
  {
    $("#avisolargoaddressstore4").show('slow');
    $("#avisoaddresstore4").hide('slow');
    document.formcustomers4.addresstore4.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.addresstore4.value.length >= 8)
  {
    $("#avisolargoaddressstore4").hide('slow');
    document.formcustomers4.addresstore4.style.border = "1px solid #17dd37";
  }
}

function validarLargoStoreNameRetail4()
{
  if (document.formcustomers4.storenameretail4.value.length < 3)
  {
    $("#avisolargostorenameretail4").show('slow');
    $("#avisostorenameretail4").hide('slow');
    document.formcustomers4.storenameretail4.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.storenameretail4.value.length >= 3)
  {
    $("#avisolargostorenameretail4").hide('slow');
    document.formcustomers4.storenameretail4.style.border = "1px solid #17dd37";
  }

}

function validarLargoZipcodeStore4()
{
  if (document.formcustomers4.zipcodestore4.value.length < 3)
  {
    $("#avisolargozipcodestore4").show('slow');
    $("#avisozipcodestore4").hide('slow');
    document.formcustomers4.zipcodestore4.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.zipcodestore4.value.length >= 3)
  {
    $("#avisolargozipcodestore4").hide('slow');
    document.formcustomers4.zipcodestore4.style.border = "1px solid #17dd37";
  }
}
//Fin largo location four

//Store Retail
//Location Five
function validarLocationStore5()
{
  if (document.formcustomers4.countrystore5.value == "")
  {
    $("#avisocountrystore5").show('slow');
    document.formcustomers4.countrystore5.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.countrystore5.value != "")
  {
    $("#avisocountrystore5").hide('slow');
    document.formcustomers4.countrystore5.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers4.statesore5.value == "")
  {
    $("#avisostatestore5").show('slow');
    document.formcustomers4.statesore5.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.statesore5.value != "")
  {
    $("#avisostatestore5").hide('slow');
    document.formcustomers4.statesore5.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers4.citystore5.value == "")
  {
    $("#avisocitystore5").show('slow');
    document.formcustomers4.citystore5.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.citystore5.value != "")
  {
    $("#avisocitystore5").hide('slow');
    document.formcustomers4.citystore5.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers4.addresstore5.value == "")
  {
    $("#avisoaddrestore5").show('slow');
    document.formcustomers4.addresstore5.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.addresstore5.value != "")
  {
    $("#avisoaddrestore5").hide('slow');
    document.formcustomers4.addresstore5.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers4.storenameretail5.value == "")
  {
    $("#avisostorenameretail5").show('slow');
    document.formcustomers4.storenameretail5.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.storenameretail5.value != "")
  {
    $("#avisostorenameretail5").hide('slow');
    document.formcustomers4.storenameretail5.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers4.zipcodestore5.value == "")
  {
    $("#avisozipcodestore5").show('slow');
    document.formcustomers4.zipcodestore5.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.zipcodestore5.value != "")
  {
    $("#avisozipcodestore5").hide('slow');
    document.formcustomers4.zipcodestore5.style.border = "1px solid #17dd37";
  }
}
//Fin location five

//Validar largo location five
function ValidarCountryStore5()
{
  if (document.formcustomers4.countrystore5.value != "")
  {
    $("#avisocountrystore5").hide('slow');
    document.formcustomers4.countrystore5.style.border = "1px solid #f22012";
  }
}

function ValidarLargoStateStore5()
{
  if (document.formcustomers4.statesore5.value.length < 4)
  {
    $("#avisolargostatestore5").show('slow');
    $("#avisostatestore5").hide('slow');
    document.formcustomers4.statesore5.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.statesore5.value.length >= 4)
  {
    $("#avisolargostatestore5").hide('slow');
    document.formcustomers4.statesore5.style.border = "1px solid #17dd37";
  }
}

function validarLargoCityStore5()
{
  if (document.formcustomers4.citystore5.value.length < 3)
  {
    $("#avisolargocitystore5").show('slow');
    $("#avisocitystore5").hide('slow');
    document.formcustomers4.citystore5.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.citystore5.value.length >= 3)
  {
    $("#avisolargocitystore5").hide('slow');
    document.formcustomers4.citystore5.style.border = "1px solid #17dd37";
  }

}

function ValidarLargoAddresStore5()
{
  if (document.formcustomers4.addresstore5.value.length < 8)
  {
    $("#avisolargoaddrestore5").show('slow');
    $("#avisoaddrestore5").hide('slow');
    document.formcustomers4.addresstore5.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.addresstore5.value.length >= 8)
  {
    $("#avisolargoaddrestore5").hide('slow');
    document.formcustomers4.addresstore5.style.border = "1px solid #17dd37";
  }

}

function validarLargoStoreNameRetail5()
{
  if (document.formcustomers4.storenameretail5.value.length < 4)
  {
    $("#avisolargostorenameretail5").show('slow');
    $("#avisostorenameretail5").hide('slow');
    document.formcustomers4.storenameretail5.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.storenameretail5.value.length >= 4)
  {
    $("#avisolargostorenameretail5").hide('slow');
    document.formcustomers4.storenameretail5.style.border = "1px solid #17dd37";
  }

}

function validarLargoZipcodeStore5()
{
  if (document.formcustomers4.zipcodestore5.value.length < 3)
  {
    $("#avisolargozipcodestore5").show('slow');
    $("#avisozipcodestore5").hide('slow');
    document.formcustomers4.zipcodestore5.style.border = "1px solid #f22012";
  }

  if(document.formcustomers4.zipcodestore5.value.length >= 3)
  {
    $("#avisolargozipcodestore5").hide('slow');
    document.formcustomers4.zipcodestore5.style.border = "1px solid #17dd37";
  }
}

$("#countryStore1").select2();
$("#countryStore2").select2();
$("#countryStore3").select2();
$("#countryStore4").select2();
$("#countryStore5").select2();
