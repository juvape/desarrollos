$(document).ready(function(){
  // $('#table-stores').DataTable({
  //   "ordering": false,
  // });

  $("#table-stores").DataTable();
});



function mostrarRegion()
{
    $("#regions").toggle();
    $("#mostrar").hide("fast");
    $("#ocultar").show("fast");
}

function ocultarRegion()
{
    $("#regions").toggle();
    $("#mostrar").show("fast");
    $("#ocultar").hide("fast");
}

function mostrarCountry()
{
  $("#country").toggle();
  $("#mostrar-country").hide("fast");
  $("#ocultar-country").show("fast");
}

function ocultarCountry()
{
    $("#country").toggle();
    $("#mostrar-country").show("fast");
    $("#ocultar-country").hide("fast");
}

function mostrarStores()
{
  $("#stores").toggle();
  $("#mostrar-stores").hide("fast");
  $("#ocultar-stores").show("fast");
}

function ocultarStores()
{
    $("#stores").toggle();
    $("#mostrar-stores").show("fast");
    $("#ocultar-stores").hide("fast");
}

function mostrarCategory()
{
  $("#category").toggle();
  $("#mostrar-category").hide("fast");
  $("#ocultar-category").show("fast");
}

function ocultarCategory()
{
    $("#category").toggle();
    $("#mostrar-category").show("fast");
    $("#ocultar-category").hide("fast");
}

function filterCountries()
{
  validateRequired();

  var formData = new FormData($("#form-storelocator-usa")[0]);

  var region = document.formStorelocatorUsa.regionCode.value;

  $.ajax({
    url: url + 'home/searchCountry',
    type: 'POST',
    data: formData,
    dataType: 'json',
    cache: false,
    contentType: false,
    processData: false
  }).done(function(resp)
  {
    $("#country").html(resp.html);
  });
}

function validateRequired()
{
  if (document.formStorelocatorUsa.regionCode.value != "" ||
      document.formStorelocatorUsa.storesCode.value != "" ||
      document.formStorelocatorUsa.categoryCode.value != "")
  {
    $("#required").hide('slow');
    document.getElementById('filters').style.border = "none";
  }
}

function validateFormStoreLocator()
{
      var formData = new FormData($("#form-storelocator-usa")[0]);

      $.ajax({
        url: url + 'home/search',
        type: 'POST',
        data: formData,
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,

      }).done(function(resp)
      {
        $("#data-stores").html(resp.html);
      });
}

function refreshPage()
{
  location.reload();
}
