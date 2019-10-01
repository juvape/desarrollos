$(document).ready(function() {
    $(".menu-icon").click(function() {
        $(".slidebar").toggleClass("active");
    });

    $('ul li').click(function() {
        $(this).siblings().removeClass('active');
        $(this).toggleClass('active');
    });

    $('.triggersU').on('click', function() {
        $('.modal-wrappersU').toggleClass('opens');
        $('.page-wrappersU').toggleClass('blur-its');
        return false;
    });

    setInterval(function() {

        setTimeout(function() {

            if ($("input[name='regionCode']:radio").is(":checked")) {
                $("#regions li.sub-menu").removeClass('active');
            }

            if ($("input[name='countryCode']:radio").is(":checked")) {
                $(".listByCountry li.sub-menu").removeClass('active');
            }

            if ($("input[name='storesCode']:radio").is(":checked")) {
                $("#stores li.sub-menu").removeClass('active');
            }

            if ($("input[name='categoryCode']:radio").is(":checked")) {
                $("#category li.sub-menu").removeClass('active');
            }
        }, 15000);
    }, 10000);

});


function filterCountries() {

  filtrarRegion();

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
    }).done(function(resp) {
        $("#country").html(resp.html);
    });
}

function filtrarRegion()
{
  var formData = new FormData($("#form-storelocator-usa")[0]);

  var region = document.formStorelocatorUsa.regionCode.value;

  $.ajax({
      url: url + 'home/searchByRegion',
      type: 'POST',
      data: formData,
      dataType: 'json',
      cache: false,
      contentType: false,
      processData: false
  }).done(function(resp) {
      $("#data-stores").html(resp.html);
  });
}

function regionPais()
{
  var formData = new FormData($("#form-storelocator-usa")[0]);

  $.ajax({
      url: url + 'home/searchByRegionCountry',
      type: 'POST',
      data: formData,
      dataType: 'json',
      cache: false,
      contentType: false,
      processData: false,

  }).done(function(resp) {
      $("#data-stores").html(resp.html);
  });
}

function regionPaisType()
{
  var formData = new FormData($("#form-storelocator-usa")[0]);

  $.ajax({
      url: url + 'home/searchByRegionCountryType',
      type: 'POST',
      data: formData,
      dataType: 'json',
      cache: false,
      contentType: false,
      processData: false,

  }).done(function(resp) {
      $("#data-stores").html(resp.html);
  });
}

function searchByOnline()
{
  var formData = new FormData($("#form-storelocator-usa")[0]);

  $.ajax({
      url: url + 'home/searchByOnline',
      type: 'POST',
      data: formData,
      dataType: 'json',
      cache: false,
      contentType: false,
      processData: false,

  }).done(function(resp) {
      $("#data-stores").html(resp.html);
  });
}

function filterAll()
{
  var formData = new FormData($("#form-storelocator-usa")[0]);

  $.ajax({
      url: url + 'home/filterBycategory',
      type: 'POST',
      data: formData,
      dataType: 'json',
      cache: false,
      contentType: false,
      processData: false,

  }).done(function(resp) {
      $("#data-stores").html(resp.html);
  });
}

function validateFormStoreLocator() {
    var formData = new FormData($("#form-storelocator-usa")[0]);

    $.ajax({
        url: url + 'home/search',
        type: 'POST',
        data: formData,
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,

    }).done(function(resp) {
        $("#data-stores").html(resp.html);
    });
}

function allTypes()
{
  var formData = new FormData($("#form-storelocator-usa")[0]);

  $.ajax({
      url: url + 'home/searchAllType',
      type: 'POST',
      data: formData,
      dataType: 'json',
      cache: false,
      contentType: false,
      processData: false,

  }).done(function(resp) {
      $("#data-stores").html(resp.html);
  });
}


// Cargar datos al cargar página
var formData = new FormData($("#form-storelocator-usa")[0]);

$.ajax({
    url: url + 'home/getAllStores',
    type: 'POST',
    data: formData,
    dataType: 'json',
    cache: false,
    contentType: false,
    processData: false
}).done(function(resp) {
    $("#data-stores").html(resp.html);
});


function onKeyDown(event)
{
  const key = event.key; // "A", "1", "Enter", "ArrowRight"...

  if (key === "Enter")
  {
    event.preventDefault();
  }
}
