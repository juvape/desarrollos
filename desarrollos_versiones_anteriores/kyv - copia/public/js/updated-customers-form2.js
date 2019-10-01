
function FormularioActualizacionForm2()
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
      url: url + 'clientes/actualizacionDatosForm2',
      type: 'POST',
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: function(){
        $("#carga2").show("fast");
        $("#exitoupdateform2").hide('fast');
      },
      success: function(resp){

        if (resp == 1) {
          // $("#carga2").hide("slow");
          console.log("Actualización exitoso...!");
        }

      }
    });

      $.ajax({
        url: url + 'clientes/actualizarForm3ShippingA',
        type: 'POST',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function(){
          $("#exitoupdateform2").hide('fast');
          $("#carga2").show("fast");
        },
        success: function(resp){

          if (resp == 1)
          {
            $("#carga2").hide("slow");
            $("#correobusinesslocations").hide("slow");
            $("#exitoupdateform2").show("slow");

            setTimeout(function(){
              location.reload();
            }, 2000);
          }

        }
      });
    }

    else
    {
      $("#avisovalidaciones2").show('slow');
      $("#carga2").hide('slow');
    }
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

  if (document.formcustomers2.country2.value != "" ||
      document.formcustomers2.country2.value == "")
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

//  Location Two
function ValidarCountry02()
{
  if(document.formcustomers2.country02.value == "")
  {
    $("#avisocountry02").show('slow');
    document.formcustomers2.country02.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers2.country02.value != "")
  {
    $("#avisocountry02").hide('slow');
    document.formcustomers2.country02.style.border = "1px solid #17dd37";
  }
}

function validarCity2()
{
  if(document.formcustomers2.city02.value == "")
  {
    $("#avisocity02").show('slow');
    document.formcustomers2.city02.style.border = "1px solid #17dd37";
  }

  if(document.formcustomers2.city02.value != "")
  {
    $("#avisocity02").hide('slow');
    document.formcustomers2.city02.style.border = "1px solid #17dd37";
  }
}

function validarState2()
{
  if(document.formcustomers2.state02.value == "")
  {
    $("#avisostate02").show('slow');
    document.formcustomers2.state02.style.border = "1px solid #17dd37";
  }

  if(document.formcustomers2.state02.value != "")
  {
    $("#avisostate02").hide('slow');
    document.formcustomers2.state02.style.border = "1px solid #17dd37";
  }
}
function validarAddress2()
{
  if(document.formcustomers2.dirbusiness2.value == "")
  {
    $("#avisodirbusiness2").show('slow');
    document.formcustomers2.dirbusiness2.style.border = "1px solid #17dd37";
  }

  if(document.formcustomers2.dirbusiness2.value != "")
  {
    $("#avisodirbusiness2").hide('slow');
    document.formcustomers2.dirbusiness2.style.border = "1px solid #17dd37";
  }
}

function validarStorename2()
{
  if(document.formcustomers2.storename2.value == "")
  {
    $("#avisostorename02").show('slow');
    document.formcustomers2.storename2.style.border = "1px solid #17dd37";
  }

  if(document.formcustomers2.storename2.value != "")
  {
    $("#avisostorename02").hide('slow');
    document.formcustomers2.storename2.style.border = "1px solid #17dd37";
  }
}
function validarZipcode2()
{
  if(document.formcustomers2.zipcode2.value == "")
  {
    $("#avisozipcode02").show('slow');
    document.formcustomers2.zipcode2.style.border = "1px solid #17dd37";
  }

  if(document.formcustomers2.zipcode2.value != "")
  {
    $("#avisozipcode02").hide('slow');
    document.formcustomers2.zipcode2.style.border = "1px solid #17dd37";
  }
}

function ValidarLargoState02()
{
  if (document.formcustomers2.state02.value.length < 4)
  {
    $("#avisolargostate02").show('slow');
    $("#avisostate02").hide('slow');
    document.formcustomers2.state02.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.state02.value.length >= 4)
  {
    $("#avisolargostate02").hide('slow');
    document.formcustomers2.state02.style.border = "1px solid #17dd37";
  }

}

function validarLargoCity02()
{
  if (document.formcustomers2.city02.value.length < 3)
  {
    $("#avisolargocity02").show('slow');
    $("#avisocity02").hide('slow');
    document.formcustomers2.city02.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.city02.value.length >= 3)
  {
    $("#avisolargocity02").hide('slow');
    document.formcustomers2.city02.style.border = "1px solid #17dd37";
  }

}

function validarLargoStoreName02()
{
  if (document.formcustomers2.storename2.value.length < 3)
  {
    $("#avisolargostorename02").show('slow');
    $("#avisostorename02").hide('slow');
    document.formcustomers2.storename2.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.storename2.value.length >= 3)
  {
    $("#avisolargostorename02").hide('slow');
    document.formcustomers2.storename2.style.border = "1px solid #17dd37";
  }

}

function validarLargoZipcode02()
{
  if (document.formcustomers2.zipcode2.value.length < 3)
  {
    $("#avisolargozipcode02").show('slow');
    $("#avisozipcode02").hide('slow');
    document.formcustomers2.zipcode2.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.zipcode2.value.length >= 3)
  {
    $("#avisolargozipcode02").hide('slow');
    document.formcustomers2.zipcode2.style.border = "1px solid #17dd37";
  }

}

//  Location Three
function ValidarCountry03()
{
  if (document.formcustomers2.shippingcountry3.value == "")
  {
    $("#avisocountry03").show('slow');
    document.formcustomers2.shippingcountry3.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers2.shippingcountry3.value != "")
  {
    $("#avisocountry03").hide('slow');
    document.formcustomers2.shippingcountry3.style.border = "1px solid #17dd37";
  }
}

function validarCity3()
{

  if (document.formcustomers2.city3.value == "")
  {
    $("#avisocity03").show('slow');
    document.formcustomers2.city3.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers2.city3.value != "")
  {
    $("#avisocity03").hide('slow');
    document.formcustomers2.city3.style.border = "1px solid #17dd37";
  }
}
function validarState3()
{
  if (document.formcustomers2.state3.value == "")
  {
    $("#avisostate3").show('slow');
    document.formcustomers2.state3.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers2.state3.value != "")
  {
    $("#avisostate3").hide('slow');
    document.formcustomers2.state3.style.border = "1px solid #17dd37";
  }
}
function validarAddress3()
{
  if (document.formcustomers2.dirbusiness3.value == "")
  {
    $("#avisodirbusiness3").show('slow');
    document.formcustomers2.dirbusiness3.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers2.dirbusiness3.value != "")
  {
    $("#avisodirbusiness3").hide('slow');
    document.formcustomers2.dirbusiness3.style.border = "1px solid #17dd37";
  }
}

function validarStorename3()
{
  if (document.formcustomers2.storename3.value == "")
  {
    $("#avisostorename3").show('slow');
    document.formcustomers2.storename3.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers2.storename3.value != "")
  {
    $("#avisostorename3").hide('slow');
    document.formcustomers2.storename3.style.border = "1px solid #17dd37";
  }
}

function validarZipcode3()
{
  if (document.formcustomers2.zipcode3.value == "")
  {
    $("#avisozipcode03").show('slow');
    document.formcustomers2.zipcode3.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers2.zipcode3.value != "")
  {
    $("#avisozipcode03").hide('slow');
    document.formcustomers2.zipcode3.style.border = "1px solid #17dd37";
  }
}

function ValidarLargoState03()
{
  if (document.formcustomers2.state3.value.length < 4)
  {
    $("#avisolargostate3").show('slow');
    $("#avisostate3").hide('slow');
    document.formcustomers2.state3.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.state3.value.length >= 4)
  {
    $("#avisolargostate3").hide('slow');
    document.formcustomers2.state3.style.border = "1px solid #17dd37";
  }

}

function validarLargoCity03()
{
  if (document.formcustomers2.city3.value.length < 4)
  {
    $("#avisolargocity3").show('slow');
    $("#avisocity03").hide('slow');
    document.formcustomers2.city3.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.city3.value.length >= 4)
  {
    $("#avisolargocity3").hide('slow');
    document.formcustomers2.city3.style.border = "1px solid #17dd37";
  }

}

function validarLargoStoreName03()
{
  if (document.formcustomers2.storename3.value.length < 3)
  {
    $("#avisolargostorename3").show('slow');
    $("#avisostorename3").hide('slow');
    document.formcustomers2.storename3.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.storename3.value.length >= 3)
  {
    $("#avisolargostorename3").hide('slow');
    document.formcustomers2.storename3.style.border = "1px solid #17dd37";
  }

}

function validarLargoZipcode03()
{
  if (document.formcustomers2.zipcode3.value.length < 3)
  {
    $("#avisolargozipcode03").show('slow');
    $("#avisozipcode03").hide('slow');
    document.formcustomers2.zipcode3.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.zipcode3.value.length >= 3)
  {
    $("#avisolargozipcode03").hide('slow');
    document.formcustomers2.zipcode3.style.border = "1px solid #17dd37";
  }

}

//  Location Four

function ValidarCountry04()
{
  if (document.formcustomers2.country04.value == "")
  {
    $("#avisocountry4").show('slow');
    document.formcustomers2.country04.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers2.country04.value != "")
  {
    $("#avisocountry4").hide('slow');
    document.formcustomers2.country04.style.border = "1px solid #17dd37";
  }
}

function validarState4()
{
  if (document.formcustomers2.state4.value == "")
  {
    $("#avisostate4").show('slow');
    document.formcustomers2.state4.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers2.state4.value != "")
  {
    $("#avisostate4").hide('slow');
    document.formcustomers2.state4.style.border = "1px solid #17dd37";
  }
}

function ValidarLargoState04()
{
  if (document.formcustomers2.state4.value.length < 4)
  {
    $("#avisolargostate4").show('slow');
    $("#avisostate4").hide('slow');
    document.formcustomers2.state4.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.state4.value.length >= 4)
  {
    $("#avisolargostate4").hide('slow');
    document.formcustomers2.state4.style.border = "1px solid #17dd37";
  }
}

function validarCity4()
{
  if (document.formcustomers2.city4.value == "")
  {
    $("#avisocity4").show('slow');
    document.formcustomers2.city4.style.border = "1px solid #17dd37";
  }

  if(document.formcustomers2.city4.value != "")
  {
    $("#avisocity4").hide('slow');
    document.formcustomers2.city4.style.border = "1px solid #17dd37";
  }
}

function validarLargoCity04()
{
  if (document.formcustomers2.city4.value.length < 3)
  {
    $("#avisolargocity4").show('slow');
    $("#avisocity4").hide('slow');
    document.formcustomers2.city4.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.city4.value.length >= 3)
  {
    $("#avisolargocity4").hide('slow');
    document.formcustomers2.city4.style.border = "1px solid #17dd37";
  }
}

function validarAddress4()
{
  if (document.formcustomers2.dirbusiness4.value == "")
  {
    $("#avisodirbusiness4").show('slow');
    document.formcustomers2.dirbusiness4.style.border = "1px solid #17dd37";
  }

  if(document.formcustomers2.dirbusiness4.value != "")
  {
    $("#avisodirbusiness4").hide('slow');
    document.formcustomers2.dirbusiness4.style.border = "1px solid #17dd37";
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

function validarStorename4()
{
  if (document.formcustomers2.storename4.value == "")
  {
    $("#avisostorename4").show('slow');
    document.formcustomers2.storename4.style.border = "1px solid #17dd37";
  }

  if(document.formcustomers2.storename4.value != "")
  {
    $("#avisostorename4").hide('slow');
    document.formcustomers2.storename4.style.border = "1px solid #17dd37";
  }
}

function validarLargoStoreName04()
{
  if (document.formcustomers2.storename4.value.length < 3)
  {
    $("#avisolargostorename4").show('slow');
    $("#avisostorename4").hide('slow');
    document.formcustomers2.storename4.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.storename4.value.length >= 3)
  {
    $("#avisolargostorename4").hide('slow');
    document.formcustomers2.storename4.style.border = "1px solid #17dd37";
  }
}

function validarZipcode4()
{
  if (document.formcustomers2.zipcode4.value == "")
  {
    $("#avisozipcode4").show('slow');
    document.formcustomers2.zipcode4.style.border = "1px solid #17dd37";
  }

  if(document.formcustomers2.zipcode4.value != "")
  {
    $("#avisozipcode4").hide('slow');
    document.formcustomers2.zipcode4.style.border = "1px solid #17dd37";
  }
}

function validarLargoZipcode04()
{
  if (document.formcustomers2.zipcode4.value.length < 3)
  {
    $("#avisolargozipcode4").show('slow');
    $("#avisozipcode4").hide('slow');
    document.formcustomers2.zipcode4.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.zipcode4.value.length >= 3)
  {
    $("#avisolargozipcode4").hide('slow');
    document.formcustomers2.zipcode4.style.border = "1px solid #17dd37";
  }
}

//  Location Five
function ValidarCountry05()
{
  if (document.formcustomers2.country5.value == "")
  {
    $("#avisocountry5").show('slow');
    document.formcustomers2.country5.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers2.country5.value != "")
  {
    $("#avisocountry5").hide('slow');
    document.formcustomers2.country5.style.border = "1px solid #17dd37";
  }
}

function validarState5()
{
  if (document.formcustomers2.state5.value == "")
  {
    $("#avisostate5").show('slow');
    document.formcustomers2.state5.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers2.state5.value != "")
  {
    $("#avisostate5").hide('slow');
    document.formcustomers2.state5.style.border = "1px solid #17dd37";
  }
}

function ValidarLargoState05()
{
  if (document.formcustomers2.state5.value.length < 4)
  {
    $("#avisolargostate5").show('slow');
    $("#avisostate5").hide('slow');
    document.formcustomers2.state5.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.state5.value.length >= 4)
  {
    $("#avisolargostate5").hide('slow');
    document.formcustomers2.state5.style.border = "1px solid #17dd37";
  }

}

function validarCity5()
{
  if (document.formcustomers2.city5.value == "")
  {
    $("#avisocity5").show('slow');
    document.formcustomers2.city5.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers2.city5.value != "")
  {
    $("#avisocity5").hide('slow');
    document.formcustomers2.city5.style.border = "1px solid #17dd37";
  }
}

function validarLargoCity05()
{
  if (document.formcustomers2.city5.value.length < 3)
  {
    $("#avisolargocity5").show('slow');
    $("#avisocity5").hide('slow');
    document.formcustomers2.city5.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.city5.value.length >= 3)
  {
    $("#avisolargocity5").hide('slow');
    document.formcustomers2.city5.style.border = "1px solid #17dd37";
  }
}

function validarAddress5()
{
  if (document.formcustomers2.dirbusiness5.value == "")
  {
    $("#avisodirbusiness5").show('slow');
    document.formcustomers2.dirbusiness5.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers2.dirbusiness5.value != "")
  {
    $("#avisodirbusiness5").hide('slow');
    document.formcustomers2.dirbusiness5.style.border = "1px solid #17dd37";
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

function validarStorename5()
{
  if (document.formcustomers2.storename5.value == "")
  {
    $("#avisostorename5").show('slow');
    document.formcustomers2.storename5.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers2.storename5.value != "")
  {
    $("#avisostorename5").hide('slow');
    document.formcustomers2.storename5.style.border = "1px solid #17dd37";
  }
}

function validarLargoStoreName05()
{
  if (document.formcustomers2.storename5.value.length < 3)
  {
    $("#avisolargostorename5").show('slow');
    $("#avisostorename5").hide('slow');
    document.formcustomers2.storename5.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.storename5.value.length >= 3)
  {
    $("#avisolargostorename5").hide('slow');
    document.formcustomers2.storename5.style.border = "1px solid #17dd37";
  }
}

function validarZipcode5()
{
  if (document.formcustomers2.zipcode5.value == "")
  {
    $("#avisozipcode5").show('slow');
    document.formcustomers2.zipcode5.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers2.zipcode5.value != "")
  {
    $("#avisozipcode5").hide('slow');
    document.formcustomers2.zipcode5.style.border = "1px solid #17dd37";
  }
}

function validarLargoZipcode05()
{
  if (document.formcustomers2.zipcode5.value.length < 3)
  {
    $("#avisolargozipcode5").show('slow');
    $("#avisozipcode5").hide('slow');
    document.formcustomers2.zipcode5.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.zipcode5.value.length >= 3)
  {
    $("#avisolargozipcode5").hide('slow');
    document.formcustomers2.zipcode5.style.border = "1px solid #17dd37";
  }
}

$("#typecompany").select2();
$("#shippingcountryone").select2();
$("#shippingcountry3").select2();
$("#country02").select2();
$("#country4").select2();
$("#country5").select2();
