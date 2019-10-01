
$(document).ready(function ()
{
  $(".menu-icon").click(function ()
  {
    $(".slidebar").toggleClass("active");
  });

  $('ul li').click(function ()
  {
    $(this).siblings().removeClass('active');
    $(this).toggleClass('active');
  });

  $('.triggersU').on('click', function ()
  {
    $('.modal-wrappersU').toggleClass('opens');
    $('.page-wrappersU').toggleClass('blur-its');
    return false;
  });

  setInterval(function(){

    setTimeout(function(){

      if ($("input[name='regionCode']:radio").is(":checked"))
      {
        $("#regions li.sub-menu").removeClass('active');
      }

      if ($("input[name='countryCode']:radio").is(":checked"))
      {
        $(".listByCountry li.sub-menu").removeClass('active');
      }

      if ($("input[name='storesCode']:radio").is(":checked"))
      {
        $("#stores li.sub-menu").removeClass('active');
      }

      if ($("input[name='categoryCode']:radio").is(":checked"))
      {
        $("#category li.sub-menu").removeClass('active');
      }
    }, 5000);
  }, 10000);

});

function filterCountries()
{

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
