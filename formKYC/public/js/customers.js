
function ValidarFormulario()
{
    if (document.formcustomers1.company_name.value == "")
      {
          $("#avisocompany").show('slow');
          document.formcustomers1.company_name.style.border = "1px solid #f22012";
      }

    if (document.formcustomers1.company_name.value != "")
      {
          $("#avisocompany").hide('slow');
          document.formcustomers1.company_name.style.border = "1px solid #17dd37";
      }

    if (document.formcustomers1.brand.value == "")
      {
          $("#avisobrand").show('slow');
          document.formcustomers1.brand.style.border = "1px solid #f22012";
      }

    if (document.formcustomers1.brand.value != "")
      {
          $("#avisobrand").hide('slow');
          document.formcustomers1.brand.style.border = "1px solid #17dd37";
      }

    if (document.formcustomers1.phone.value == "")
    {
        $("#avisophone").show('slow');
        document.formcustomers1.phone.style.border = "1px solid #f22012";
    }

    if (document.formcustomers1.phone.value != "")
    {
        $("#avisophone").hide('slow');
        document.formcustomers1.phone.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers1.website.value != "")
    {
        document.formcustomers1.website.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers1.email.value != "")
    {
        document.formcustomers1.email.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers1.email.value == "")
    {
        $("#avisomailformato").hide("slow");
        document.formcustomers1.email.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers1.face.value == "" || document.formcustomers1.face.value != "")
    {
        document.formcustomers1.face.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers1.instagram.value == "" || document.formcustomers1.instagram.value != "")
    {
        document.formcustomers1.instagram.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers1.twitter.value == "" || document.formcustomers1.twitter.value != "")
    {
        document.formcustomers1.twitter.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers1.pinterest.value == "" || document.formcustomers1.pinterest.value != "")
    {
        document.formcustomers1.pinterest.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers1.email.value == "" || document.formcustomers1.email.value != "")
    {
        document.formcustomers1.email.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers1.website.value == "" || document.formcustomers1.website.value != "")
    {
        document.formcustomers1.website.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers1.company_name.value != "" &&
        document.formcustomers1.brand.value != "" &&
        document.formcustomers1.phone.value != "")
    {

        $("#avisovalidaciones").hide('slow');
        $("#avisostate").hide('slow');
        var formData = new FormData($("#form-customers1")[0]);

        $.ajax({
          url: url + 'clientes/form1',
          type: 'POST',
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function(){
            $("#carga").show("slow");
            $("#exitoguardar").hide("slow");
          },
          success: function(resp){

            if (resp == 1) {
              $("#carga").hide("fast");
              $("#exitoguardar").show('fast');
                  setTimeout(function(){
                    location.href = url + "home/index2";
                  }, 2000);
            }

          }
        });
    }
    else
    {
        $("#avisovalidaciones").show('slow');
    }
}

function validarLargoTypeCompany()
{
  if (document.formcustomers2.typecompany.value.length < 3)
  {
      $("#avisotypecompanylargo").show('slow');
      $("#avisotypecompany").hide('slow');
      document.formcustomers2.typecompany.style.border = "1px solid #f22012";
  }

  if(document.formcustomers2.typecompany.value.length >= 3)
  {
      $("#avisotypecompanylargo").hide('slow');
      document.formcustomers2.typecompany.style.border = "1px solid #17dd37";
  }

}

function validarLargoBrand()
{
  if (document.formcustomers1.brand.value.length < 3)
  {
      $("#avisolargobrand").show('slow');
      $("#avisobrand").hide('slow');
      document.formcustomers1.brand.style.border = "1px solid #f22012";
  }

  if(document.formcustomers1.brand.value.length >= 3)
  {
      $("#avisolargobrand").hide('slow');
      document.formcustomers1.brand.style.border = "1px solid #17dd37";
  }

  if(document.formcustomers1.brand.value != "")
  {
    $("#avisobrand").hide('slow');
    document.formcustomers1.brand.style.border = "1px solid #17dd37";
  }
}

function ValidarLargoPhone()
{
  if (document.formcustomers1.phone.value.length < 5)
  {
      $("#avisolargophone").show('slow');
      $("#avisophone").hide('slow');
      document.formcustomers1.phone.style.border = "1px solid #f22012";
  }

  if(document.formcustomers1.phone.value.length >= 5)
  {
      $("#avisolargophone").hide('slow');
      document.formcustomers1.phone.style.border = "1px solid #17dd37";
  }

  if(document.formcustomers1.phone.value != "")
  {
    $("#avisophone").hide('slow');
    document.formcustomers1.phone.style.border = "1px solid #17dd37";
  }
}

// function ValidarLargoAddress()
// {
//   if (document.formcustomers1.address.value.length < 8)
//   {
//       $("#avisolargoaddress").show('slow');
//       $("#avisoaddress").hide('slow');
//       document.formcustomers1.address.style.border = "1px solid #f22012";
//   }
//
//   if(document.formcustomers1.address.value.length >= 8)
//   {
//       $("#avisolargoaddress").hide('slow');
//       document.formcustomers1.address.style.border = "1px solid #17dd37";
//   }
//
//   if(document.formcustomers1.address.value != "")
//   {
//     $("#avisoaddress").hide('slow');
//     document.formcustomers1.address.style.border = "1px solid #17dd37";
//   }
// }
//
// function ValidarLargoCity()
// {
//   if (document.formcustomers1.city.value.length < 3)
//   {
//       $("#avisolargocity").show('slow');
//       $("#avisocity").hide('slow');
//       document.formcustomers1.city.style.border = "1px solid #f22012";
//   }
//
//   if(document.formcustomers1.city.value.length >= 3)
//   {
//       $("#avisolargocity").hide('slow');
//       document.formcustomers1.city.style.border = "1px solid #17dd37";
//   }
//
//   if(document.formcustomers1.city.value != "")
//   {
//     $("#avisocity").hide('slow');
//     document.formcustomers1.city.style.border = "1px solid #17dd37";
//   }
// }
//
// function ValidarCountry()
// {
//
//   if (document.formcustomers1.country.value != "")
//   {
//       $("#avisocountry").hide('slow');
//       document.formcustomers1.country.style.border = "1px solid #17dd37";
//   }
// }
//
// function ValidarLargoState()
// {
//   if (document.formcustomers1.state.value.length < 4)
//   {
//       $("#avisolargostate").show('slow');
//       $("#avisostate").hide('slow');
//       document.formcustomers1.state.style.border = "1px solid #f22012";
//   }
//
//   if(document.formcustomers1.state.value.length >= 4)
//   {
//       $("#avisolargostate").hide('slow');
//       document.formcustomers1.state.style.border = "1px solid #17dd37";
//   }
//
//   if(document.formcustomers1.state.value != "")
//   {
//     $("#avisostate").hide('slow');
//     document.formcustomers1.state.style.border = "1px solid #17dd37";
//   }
// }
//
// function ValidarLargoZipcode()
// {
//   if (document.formcustomers1.zipcode.value.length < 3)
//   {
//       $("#avisolargozipcode").show('slow');
//       $("#avisozipcode").hide('slow');
//       document.formcustomers1.zipcode.style.border = "1px solid #f22012";
//   }
//
//   if(document.formcustomers1.zipcode.value.length >= 3)
//   {
//       $("#avisolargozipcode").hide('slow');
//       document.formcustomers1.zipcode.style.border = "1px solid #17dd37";
//   }
//
//   if(document.formcustomers1.zipcode.value != "")
//   {
//     $("#avisozipcode").hide('slow');
//     document.formcustomers1.zipcode.style.border = "1px solid #17dd37";
//   }
// }

function ValidarFormatoEmail()
{
    var correo = document.formcustomers1.email.value;
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (expr.test(correo))
    {
        document.formcustomers1.email.style.border = "1px solid  #17dd37";
        $("#avisomailformato").hide('slow');
          $("#avisoemail").hide('slow');
        return true;
    }
    else
    {
      document.formcustomers1.email.style.border = "1px solid #f22012";
      $("#avisomailformato").show('slow');
      $("#avisoemail").show('slow');
      return false;
    }
}
