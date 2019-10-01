function ValidarFormularioCustomers2()
{
  if (document.formcustomers2.taxid.value == "")
  {
    $("#avisotaxid").show('slow');
    document.formcustomers2.taxid.style.border = "1px solid #f22012";
  }

  if (document.formcustomers2.taxid.value != "")
  {
    $("#avisotaxid").hide('slow');
    document.formcustomers2.taxid.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers2.typecompany.value == "")
  {
    $("#avisotypecompany").show('slow');
    document.formcustomers2.typecompany.style.border = "1px solid #f22012";
  }

  if (document.formcustomers2.typecompany.value != "")
  {
    $("#avisotypecompany").hide('slow');
    document.formcustomers2.typecompany.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers2.owner.value == "")
  {
    $("#avisoOwner").show('slow');
    document.formcustomers2.owner.style.border = "1px solid #f22012";
  }

  if (document.formcustomers2.owner.value != "")
  {
    $("#avisoOwner").hide('slow');
    document.formcustomers2.owner.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers2.idnumber.value == "")
  {
    $("#avisonumber").show('slow');
    document.formcustomers2.idnumber.style.border = "1px solid #f22012";
  }


  if (document.formcustomers2.idnumber.value != "")
  {
    $("#avisonumber").hide('slow');
    document.formcustomers2.idnumber.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers2.address.value == "")
  {
    $("#avisoaddress").show("slow");
    document.formcustomers2.address.style.border = "1px solid #f22012";
  }

  if (document.formcustomers2.address.value != "")
  {
    $("#avisoaddress").hide("slow");
    document.formcustomers2.address.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers2.city.value == "")
  {
    $("#avisocity").show('slow');
    document.formcustomers2.city.style.border = "1px solid #f22012";
  }

  if (document.formcustomers2.city.value != "")
  {
    $("#avisocity").hide('slow');
    document.formcustomers2.city.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers2.state.value == "")
  {
    $("#avisostate").show('slow');
    document.formcustomers2.state.style.border = "1px solid #f22012";
  }

  if (document.formcustomers2.state.value != "")
  {
    $("#avisostate").hide('slow');
    document.formcustomers2.state.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers2.country.value == "")
  {
    $("#avisocountry").show('slow');
    document.formcustomers2.country.style.border = "1px solid #f22012";
  }

  if (document.formcustomers2.country.value != "")
  {
    $("#avisocountry").hide('slow');
    document.formcustomers2.country.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers2.zipcode.value == "")
  {
    $("#avisozipcode").show('slow');
    document.formcustomers2.zipcode.style.border = "1px solid #f22012";
  }

  if (document.formcustomers2.zipcode.value != "")
  {
    $("#avisozipcode").hide('slow');
    document.formcustomers2.zipcode.style.border = "1px solid #17dd37";
  }

    ValidarCountry1();
    validarCity1();
    validarState1();
    validarAddress1();
    validarStorename1();
    validarZipcode1();

  if (document.formcustomers2.taxid.value != "" &&
      document.formcustomers2.typecompany.value != "" &&
      document.formcustomers2.owner.value != "" &&
      document.formcustomers2.idnumber.value != "" &&
      document.formcustomers2.address.value != "" &&
      document.formcustomers2.city.value != "" &&
      document.formcustomers2.state.value != "" &&
      document.formcustomers2.country.value != "" &&
      document.formcustomers2.zipcode.value != "" &&
      document.formcustomers2.shippingcountry1.value != "" &&
      document.formcustomers2.state1.value != "" &&
      document.formcustomers2.city1.value != "" &&
      document.formcustomers2.dirbusiness1.value != "" &&
      document.formcustomers2.storename1.value != "" &&
      document.formcustomers2.zipcode1.value != "")
  {

    $("#avisovalidaciones2").hide('slow');
    $("#avisostate2").hide('slow');
    $("#avisostate3").hide('slow');
    var formData = new FormData($("#form-customers2")[0]);

    $.ajax({
      url: url + 'clientes/form3',
      type: 'POST',
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: function(){
        $("#carga2").show("fast");
        $("#exitoguardar2").hide('fast');

      },
      success: function(resp){

        if (resp == 1) {
          // $("#carga2").hide("slow");
          console.log("Guardado exitoso...!");
        }

      }
    });

      // Guardar tabla shipping address
      $.ajax({
        url: url + 'clientes/form3DireccionC',
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
            $("#correobusinesslocations").hide("slow");
            $("#exitoguardar2").show("slow");

            setTimeout(function(){
              location.href = url + "home/index3";
            }, 2000);
          }

        }
      });

  }
    else
    {
      $("#avisovalidaciones2").show('slow');
    }
}

function mostrarDirecciones()
{
  $("#othersAddress").show('slow');
  $("#menosdirecciones").show('slow');
  $("#masdirecciones").hide('slow');
}
function ocultarDirecciones()
{
  $("#othersAddress").hide('slow');
  $("#menosdirecciones").hide('slow');
  $("#masdirecciones").show('slow');
}

function validarLargoTax()
{
  if (document.formcustomers2.taxid.value.length < 3)
  {
    $("#avisolargotaxid").show('slow');
    $("#avisotaxid").hide('slow');
    document.formcustomers2.taxid.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.taxid.value.length >= 3)
  {
    $("#avisolargotaxid").hide('slow');
    document.formcustomers2.taxid.style.border = "1px solid #17dd37";
  }

}

function validarLargoOwerPhone()
{
  if (document.formcustomers2.phone2.value.length < 5)
  {
    $("#avisolargophone2").show('slow');
    document.formcustomers2.phone2.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.phone2.value.length >= 5)
  {
    $("#avisolargophone2").hide('slow');
    document.formcustomers2.phone2.style.border = "1px solid #17dd37";
  }
}

function ValidarLargoOwner()
{
  if (document.formcustomers2.owner.value.length < 3)
  {
    $("#avisolargoOwner").show('slow');
    $("#avisoOwner").hide('slow');
    document.formcustomers2.owner.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.owner.value.length >= 3)
  {
    $("#avisolargoOwner").hide('slow');
    document.formcustomers2.owner.style.border = "1px solid #17dd37";
  }

}

function ValidarLargoNumber()
{
  if (document.formcustomers2.idnumber.value.length < 5)
  {
    $("#avisolargonumber").show('slow');
    $("#avisonumber").hide('slow');
    document.formcustomers2.idnumber.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.idnumber.value.length >= 5)
  {
    $("#avisolargonumber").hide('slow');
    document.formcustomers2.idnumber.style.border = "1px solid #17dd37";
  }

}

function ValidarBillingCountry()
{
  if (document.formcustomers2.country.value != "")
  {
    $("#avisocountry").hide('slow');
    document.formcustomers2.country.style.border = "1px solid #17dd37";
  }
}

function ValidarLargoaddress()
{
  if (document.formcustomers2.address.value.length < 8)
  {
    $("#avisolargoaddress").show('slow');
    $("#avisoaddress").hide('slow');
    document.formcustomers2.address.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.address.value.length >= 8)
  {
    $("#avisolargoaddress").hide('slow');
    document.formcustomers2.address.style.border = "1px solid #17dd37";
  }

}

function ValidarLargocity()
{
  if (document.formcustomers2.city.value.length < 3)
  {
    $("#avisolargocity").show('slow');
    $("#avisocity").hide('slow');
    document.formcustomers2.city.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.city.value.length >= 3)
  {
    $("#avisolargocity").hide('slow');
    document.formcustomers2.city.style.border = "1px solid #17dd37";
  }

}

function validarLargoStoreName1()
{
  if (document.formcustomers2.storename1.value.length < 3)
  {
    $("#avisolargostorename1").show('slow');
    $("#avisostorename1").hide('slow');
    document.formcustomers2.storename1.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.storename1.value.length >= 3)
  {
    $("#avisolargostorename1").hide('slow');
    document.formcustomers2.storename1.style.border = "1px solid #17dd37";
  }

}

function validarLargoZipcode1()
{
  if (document.formcustomers2.zipcode1.value.length < 3)
  {
    $("#avisolargozipcode1").show('slow');
    $("#avisozipcode1").hide('slow');
    document.formcustomers2.zipcode1.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.zipcode1.value.length >= 3)
  {
    $("#avisolargozipcode1").hide('slow');
    document.formcustomers2.zipcode1.style.border = "1px solid #17dd37";
  }

}

function ValidarLargostate()
{
  if (document.formcustomers2.state.value.length < 4)
  {
    $("#avisolargostate").show('slow');
    $("#avisostate").hide('slow');
    document.formcustomers2.state.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.state.value.length >= 4)
  {
    $("#avisolargostate").hide('slow');
    document.formcustomers2.state.style.border = "1px solid #17dd37";
  }

}

function validarTypeCompany()
{

  if (document.formcustomers2.typecompany.value != "")
  {
    $("#avisotypecompany").hide('slow');
    document.formcustomers2.typecompany.style.border = "1px solid #17dd37";
  }
}

function ValidarCountry2()
{

  if (document.formcustomers2.country2.value != "")
  {
    $("#avisocountry2").hide('slow');
    document.formcustomers2.country2.style.border = "1px solid #17dd37";
  }
}

function validarLargozipcode()
{
  if (document.formcustomers2.zipcode.value.length < 3)
  {
    $("#avisolargozipcode").show('slow');
    $("#avisozipcode").hide('slow');
    document.formcustomers2.zipcode.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.zipcode.value.length >= 3)
  {
    $("#avisolargozipcode").hide('slow');
    document.formcustomers2.zipcode.style.border = "1px solid #17dd37";
  }

}

// Shipping address

function ValidarLargoDirBusiness01()
{
  if (document.formcustomers2.dirbusiness1.value.length < 8)
  {
    $("#avisolargodirbusiness01").show('slow');
    $("#avisodirbusiness1").hide('slow');
    document.formcustomers2.dirbusiness1.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.dirbusiness1.value.length >= 8)
  {
    $("#avisolargodirbusiness01").hide('slow');
    document.formcustomers2.dirbusiness1.style.border = "1px solid #17dd37";
  }

}

function ValidarLargoDirBusiness02()
{
  if (document.formcustomers2.dirbusiness2.value.length < 8)
  {
    $("#avisolargodirbusiness2").show('slow');
    $("#avisodirbusiness2").hide('slow');
    document.formcustomers2.dirbusiness2.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.dirbusiness2.value.length >= 8)
  {
    $("#avisolargodirbusiness2").hide('slow');
    document.formcustomers2.dirbusiness2.style.border = "1px solid #17dd37";
  }

}

function ValidarLargoDirBusiness03()
{
  if (document.formcustomers2.dirbusiness3.value.length < 8)
  {
    $("#avisolargodirbusiness3").show('slow');
    $("#avisodirbusiness3").hide('slow');
    document.formcustomers2.dirbusiness3.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.dirbusiness3.value.length >= 8)
  {
    $("#avisolargodirbusiness3").hide('slow');
    document.formcustomers2.dirbusiness3.style.border = "1px solid #17dd37";
  }

}

function ValidarLargoDirBusiness04()
{
  if (document.formcustomers2.dirbusiness4.value.length < 8)
  {
    $("#avisolargodirbusiness4").show('slow');
    $("#avisodirbusiness4").hide('slow');
    document.formcustomers2.dirbusiness4.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.dirbusiness4.value.length >= 8)
  {
    $("#avisolargodirbusiness4").hide('slow');
    document.formcustomers2.dirbusiness4.style.border = "1px solid #17dd37";
  }
}

function ValidarLargoDirBusiness05()
{
  if (document.formcustomers2.dirbusiness5.value.length < 8)
  {
    $("#avisolargodirbusiness5").show('slow');
    $("#avisodirbusiness5").hide('slow');
    document.formcustomers2.dirbusiness5.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.dirbusiness5.value.length >= 8)
  {
    $("#avisolargodirbusiness5").hide('slow');
    document.formcustomers2.dirbusiness5.style.border = "1px solid #17dd37";
  }
}

function Validarbusinesslocations()
{
  var dir = $("#businesslocation2").val();

  if(dir == "1" || dir == 1)
  {
    $("#addresses").show('slow');
    $("#addresses2").hide('slow');
    $("#addresses3").hide('slow');
    $("#addresses4").hide('slow');
    $("#addresses5").hide('slow');
    $("#avisobusinesslocation").hide('slow');
    $("#correobusinesslocations").hide('slow');
    document.formcustomers2.businesslocation2.style.border = "1px solid #17dd37";
  }

  else if(dir == "2" || dir == 2)
  {
    $("#addresses").hide('slow');
    $("#addresses2").show('slow');
    $("#addresses3").hide('slow');
    $("#addresses4").hide('slow');
    $("#addresses5").hide('slow');
    $("#avisobusinesslocation").hide('slow');
    $("#correobusinesslocations").hide('slow');
    document.formcustomers2.businesslocation2.style.border = "1px solid #17dd37";
  }

  else if(dir == "")
  {
    $("#addresses").hide('slow');
    $("#addresses2").hide('slow');
    $("#addresses3").hide('slow');
    $("#addresses4").hide('slow');
    $("#addresses5").hide('slow');
    $("#correobusinesslocations").hide('slow');
    document.formcustomers2.businesslocation2.style.border = "1px solid #17dd37";
  }

  else if(dir == "3" || dir == 3)
  {
    $("#addresses").hide('slow');
    $("#addresses2").hide('slow');
    $("#addresses3").show('slow');
    $("#addresses4").hide('slow');
    $("#addresses5").hide('slow');
    document.formcustomers2.businesslocation2.style.border = "1px solid #17dd37";
  }

  else if (dir == "4" || dir == 4)
  {
    $("#addresses").hide('slow');
    $("#addresses2").hide('slow');
    $("#addresses3").hide('slow');
    $("#addresses4").show('slow');
    $("#addresses5").hide('slow');
    $("#correobusinesslocations").hide('slow');
    document.formcustomers2.businesslocation2.style.border = "1px solid #17dd37";
  }
  else if(dir == "5" || dir == 5)
  {
    $("#addresses").hide('slow');
    $("#addresses2").hide('slow');
    $("#addresses3").hide('slow');
    $("#addresses4").hide('slow');
    $("#addresses5").show('ocultar');
    $("#correobusinesslocations").hide('slow');
    document.formcustomers2.businesslocation2.style.border = "1px solid #17dd37";
  }

  else
  {
    $("#addresses").hide('slow');
    $("#addresses2").hide('slow');
    $("#addresses3").hide('slow');
    $("#addresses4").hide('slow');
    $("#addresses5").hide('slow');
    $("#avisobusinesslocation").hide('slow');
    document.formcustomers2.businesslocation2.style.border = "1px solid #17dd37";
    $("#correobusinesslocations").show("slow");
  }
}

// Shipping address
// Location One
function ValidarCountry1()
{
  if (document.formcustomers2.shippingcountry1.value == "")
  {
    $("#avisoshippingcountry1").show('slow');
    document.formcustomers2.shippingcountry1.style.border = "1px solid #f22012";
  }

  if (document.formcustomers2.shippingcountry1.value != "")
  {
    $("#avisoshippingcountry1").hide('slow');
    document.formcustomers2.shippingcountry1.style.border = "1px solid #17dd37";
  }
}

function validarState1()
{
  if(document.formcustomers2.state1.value == "")
  {
    $("#avisostate1").show('slow');
    document.formcustomers2.state1.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.state1.value != "")
  {
    $("#avisostate1").hide('slow');
    document.formcustomers2.state1.style.border = "1px solid #17dd37";
  }
}

function validarCity1()
{
  if(document.formcustomers2.city1.value == "")
  {
    $("#avisocity1").show('slow');
    document.formcustomers2.city1.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.city1.value != "")
  {
    $("#avisocity1").hide('slow');
    document.formcustomers2.city1.style.border = "1px solid #17dd37";
  }
}

function validarAddress1()
{
  if(document.formcustomers2.dirbusiness1.value == "")
  {
    $("#avisodirbusiness1").show('slow');
    document.formcustomers2.dirbusiness1.style.border = "1px solid #f22012";
  }
  if(document.formcustomers2.dirbusiness1.value != "")
  {
    $("#avisodirbusiness1").hide('slow');
    document.formcustomers2.dirbusiness1.style.border = "1px solid #17dd37";
  }
}

function validarStorename1()
{
  if(document.formcustomers2.storename1.value == "")
  {
    $("#avisostorename1").show('slow');
    document.formcustomers2.storename1.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.storename1.value != "")
  {
    $("#avisostorename1").hide('slow');
    document.formcustomers2.storename1.style.border = "1px solid #17dd37";
  }
}

function validarZipcode1()
{
  if(document.formcustomers2.zipcode1.value == "")
  {
    $("#avisozipcode1").show('slow');
    document.formcustomers2.zipcode1.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.zipcode1.value != "")
  {
    $("#avisozipcode1").hide('slow');
    document.formcustomers2.zipcode1.style.border = "1px solid #17dd37";
  }
}

function ValidarLargoState01()
{
  if (document.formcustomers2.state1.value.length < 4)
  {
    $("#avisolargostate1").show('slow');
    $("#avisostate1").hide('slow');
    document.formcustomers2.state1.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.state1.value.length >= 4)
  {
    $("#avisolargostate1").hide('slow');
    document.formcustomers2.state1.style.border = "1px solid #17dd37";
  }

}

function validarLargoCity01()
{
  if (document.formcustomers2.city1.value.length < 3)
  {
    $("#avisolargocity1").show('slow');
    $("#avisocity1").hide('slow');
    document.formcustomers2.city1.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.city1.value.length >= 3)
  {
    $("#avisolargocity1").hide('slow');
    document.formcustomers2.city1.style.border = "1px solid #17dd37";
  }

}

function validarLargoStoreName01()
{
  if (document.formcustomers2.storename1.value.length < 3)
  {
    $("#avisolargostorename1").show('slow');
    $("#avisostorename1").hide('slow');
    document.formcustomers2.storename1.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.storename1.value.length >= 3)
  {
    $("#avisolargostorename1").hide('slow');
    document.formcustomers2.storename1.style.border = "1px solid #17dd37";
  }

}

function validarLargoZipcode01()
{
  if (document.formcustomers2.zipcode1.value.length < 3)
  {
    $("#avisolargozipcode1").show('slow');
    $("#avisozipcode1").hide('slow');
    document.formcustomers2.zipcode1.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.zipcode1.value.length >= 3)
  {
    $("#avisolargozipcode1").hide('slow');
    document.formcustomers2.zipcode1.style.border = "1px solid #17dd37";
  }

}

$("#typecompany").select2();
$("#shippingcountryone").select2();
$("#shippingcountrythree").select2();
$("#country02").select2();
$("#country4").select2();
$("#country5").select2();
