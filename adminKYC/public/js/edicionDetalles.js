
function habilitarEdicion()
{
  $("#CompanyName").removeAttr('readonly');
  $("#BrandName").removeAttr('readonly');
  $("#Email").removeAttr('readonly');
  $("#CompanyPhone").removeAttr('readonly');
  $("#Website").removeAttr('readonly');
  $("#Facebook").removeAttr('readonly');
  $("#Instagram").removeAttr('readonly');
  $("#Twitter").removeAttr('readonly');
  $("#Pinterest").removeAttr('readonly');

  $("#btnguardarcambios").removeAttr('disabled');
}

function guardarCambios()
{
  alert("Has dado click en el boton guardar cambios");
}

function traerInformacionIndex1(id)
{
  $.ajax({
    url:url+"home/informacionIndex1",
    type:'POST',
    dataType: 'json',
    data:{
      id:id,
    }
  }).done(function(respuesta){
    // Index 1
    $("#CompanyName").val(respuesta.companyName);
    $("#BrandName").val(respuesta.brandName);
    $("#Email").val(respuesta.email);
    $("#CompanyPhone").val(respuesta.phone);
    $("#Website").val(respuesta.website);
    $("#Facebook").val(respuesta.facebook);
    $("#Instagram").val(respuesta.instagram);
    $("#Twitter").val(respuesta.twitter);
    $("#Pinterest").val(respuesta.pinterest);

    // Index 2
    $("#CompanyName").val(respuesta.taxId);
    $("#BrandName").val(respuesta.typeCompany);
    $("#Email").val(respuesta.owner);
    $("#CompanyPhone").val(respuesta.idNumber);
    $("#Website").val(respuesta.phone);
    $("#Facebook").val(respuesta.billingAddress);
    $("#Instagram").val(respuesta.billingCity);
    $("#Twitter").val(respuesta.billingState);
    $("#Pinterest").val(respuesta.billingCountry);
    $("#Pinterest").val(respuesta.billingZipCode);
    $("#Pinterest").val(respuesta.quantityLocations);
  });
}

function habilitarEdicionIndex2()
{
  $("#TaxId").removeAttr('readonly');
  $("#TypeCompany").removeAttr('readonly');
  $("#LegalRepOwner").removeAttr('readonly');
  $("#LegalIdNumber").removeAttr('readonly');
  $("#OwnerPhone").removeAttr('readonly');
  $("#CountryModalIndex2").removeAttr('disabled');
  $("#State").removeAttr('readonly');
  $("#City").removeAttr('readonly');
  $("#Address").removeAttr('readonly');
  $("#ZipCode").removeAttr('readonly');
  $("#QuantityLocations").removeAttr('disabled');

  $("#btnguardarcambiosIdx2").removeAttr('disabled');
}
