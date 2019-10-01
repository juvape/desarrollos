
function shippingQuantityLoc() {
  var locations = document.formcustomers2.quantitylocationsshipping.value;

  if (locations != "")
  {
    $("#avisoquantitylocationsshipping").hide('slow');
    document.formcustomers2.quantitylocationsshipping.style.border = "1px solid #17dd37";
  }

    if (locations == "1") {
        // alert("hello one");
        $("#f1").show('slow');
        $("#f2").hide('slow');
        $("#f3").hide('slow');
        $("#f4").hide('slow');
        $("#f5").hide('slow');
        $("#f6").hide('slow');
    } else if (locations == "2") {
        $("#f1").show('slow');
        $("#f2").show('slow');
        $("#f3").hide('slow');
        $("#f4").hide('slow');
        $("#f5").hide('slow');
        $("#f6").hide('slow');
        // alert("hello two");
    } else if (locations == "3") {
        $("#f1").show('slow');
        $("#f2").show('slow');
        $("#f3").show('slow');
        $("#f4").hide('slow');
        $("#f5").hide('slow');
        $("#f6").hide('slow');
        // alert("hello three");
    } else if (locations == "4") {
        $("#f1").show('slow');
        $("#f2").show('slow');
        $("#f3").show('slow');
        $("#f4").show('slow');
        $("#f5").hide('slow');
        $("#f6").hide('slow');
        // alert("hello four");
    } else if (locations == "5") {
        $("#f1").show('slow');
        $("#f2").show('slow');
        $("#f3").show('slow');
        $("#f4").show('slow');
        $("#f5").show('slow');
        $("#f6").hide('slow');
        // alert("hello five");
    } else if (locations == "mas-5") {
      $("#f1").hide('slow');
      $("#f2").hide('slow');
      $("#f3").hide('slow');
      $("#f4").hide('slow');
      $("#f5").hide('slow');
      $("#f6").show('slow');
    }
    else
    {
      $("#f1").hide('slow');
      $("#f2").hide('slow');
      $("#f3").hide('slow');
      $("#f4").hide('slow');
      $("#f5").hide('slow');
      $("#f6").hide('slow');
    }
}


var URLactual = window.location;

if (URLactual == (url + "home/index2")) {
  window.onload = load;
  // alert("Complete");
  function load() {

    var locations = document.formcustomers2.quantitylocationsshipping.value;

    if (locations == "1") {
        // alert("hello one");
        $("#f1").show('slow');
        $("#f2").hide('slow');
        $("#f3").hide('slow');
        $("#f4").hide('slow');
        $("#f5").hide('slow');
        $("#f6").hide('slow');
    } else if (locations == "2") {
        $("#f1").show('slow');
        $("#f2").show('slow');
        $("#f3").hide('slow');
        $("#f4").hide('slow');
        $("#f5").hide('slow');
        $("#f6").hide('slow');
        // alert("hello two");
    } else if (locations == "3") {
        $("#f1").show('slow');
        $("#f2").show('slow');
        $("#f3").show('slow');
        $("#f4").hide('slow');
        $("#f5").hide('slow');
        $("#f6").hide('slow');
        // alert("hello three");
    } else if (locations == "4") {
        $("#f1").show('slow');
        $("#f2").show('slow');
        $("#f3").show('slow');
        $("#f4").show('slow');
        $("#f5").hide('slow');
        $("#f6").hide('slow');
        // alert("hello four");
    } else if (locations == "5") {
        $("#f1").show('slow');
        $("#f2").show('slow');
        $("#f3").show('slow');
        $("#f4").show('slow');
        $("#f5").show('slow');
        $("#f6").hide('slow');
        // alert("hello five");
    } else if (locations == "6") {
          $("#f1").hide('slow');
          $("#f2").hide('slow');
          $("#f3").hide('slow');
          $("#f4").hide('slow');
          $("#f5").hide('slow');
          $("#f6").show('slow');
    }
    else
    {
      $("#f1").hide('slow');
      $("#f2").hide('slow');
      $("#f3").hide('slow');
      $("#f4").hide('slow');
      $("#f5").hide('slow');
      $("#f6").hide('slow');
    }
  }
}

 // INDEX3: BUYER CONTACTS
 function buyerContacts() {

   if ( document.formcustomers3.buyercontactsquantity.value != "")
   {
     $("#avisoquantitybuyers").hide("slow");
     document.formcustomers3.buyercontactsquantity.style.border = "1px solid #17dd37";
   }

     var locations = document.formcustomers3.buyercontactsquantity.value;

     if (locations == "1") {
         // alert("hello one");
         $("#c1").show('slow');
         $("#c2").hide('slow');
         $("#c3").hide('slow');
         $("#c4").hide('slow');
         $("#c5").hide('slow');
         $("#c6").hide('slow');
     } else if (locations == "2") {
         $("#c1").show('slow');
         $("#c2").show('slow');
         $("#c3").hide('slow');
         $("#c4").hide('slow');
         $("#c5").hide('slow');
         $("#c6").hide('slow');
         // alert("hello two");
     } else if (locations == "3") {
         $("#c1").show('slow');
         $("#c2").show('slow');
         $("#c3").show('slow');
         $("#c4").hide('slow');
         $("#c5").hide('slow');
         $("#c6").hide('slow');
         // alert("hello three");
     } else if (locations == "4") {
         $("#c1").show('slow');
         $("#c2").show('slow');
         $("#c3").show('slow');
         $("#c4").show('slow');
         $("#c5").hide('slow');
         $("#c6").hide('slow');
         // alert("hello four");
     } else if (locations == "5") {
         $("#c1").show('slow');
         $("#c2").show('slow');
         $("#c3").show('slow');
         $("#c4").show('slow');
         $("#c5").show('slow');
         $("#c6").hide('slow');
         // alert("hello five");
     } else if (locations == "mas-5") {
       $("#c1").hide('slow');
       $("#c2").hide('slow');
       $("#c3").hide('slow');
       $("#c4").hide('slow');
       $("#c5").hide('slow');
       $("#c6").show('slow');
     }

     else
     {
       $("#f1").hide('slow');
       $("#f2").hide('slow');
       $("#f3").hide('slow');
       $("#f4").hide('slow');
       $("#f5").hide('slow');
       $("#f6").hide('slow');
     }
 }

 if(URLactual == (url + "home/index3"))
 {
   var buyers = document.formcustomers3.buyercontactsquantity.value;

   if (buyers == "1") {
       // alert("hello one");
       $("#c1").show('slow');
       $("#c2").hide('slow');
       $("#c3").hide('slow');
       $("#c4").hide('slow');
       $("#c5").hide('slow');
       $("#c6").hide('slow');
   } else if (buyers == "2") {
       $("#c1").show('slow');
       $("#c2").show('slow');
       $("#c3").hide('slow');
       $("#c4").hide('slow');
       $("#c5").hide('slow');
       $("#c6").hide('slow');
       // alert("hello two");
   } else if (buyers == "3") {
       $("#c1").show('slow');
       $("#c2").show('slow');
       $("#c3").show('slow');
       $("#c4").hide('slow');
       $("#c5").hide('slow');
       $("#c6").hide('slow');
       // alert("hello three");
   } else if (buyers == "4") {
       $("#c1").show('slow');
       $("#c2").show('slow');
       $("#c3").show('slow');
       $("#c4").show('slow');
       $("#c5").hide('slow');
       $("#c6").hide('slow');
       // alert("hello four");
   } else if (buyers == "5") {
       $("#c1").show('slow');
       $("#c2").show('slow');
       $("#c3").show('slow');
       $("#c4").show('slow');
       $("#c5").show('slow');
       $("#c6").hide('slow');
       // alert("hello five");
   } else if (buyers == "mas-5") {
       // alert("hello six");
       $("#c1").hide('slow');
       $("#c2").hide('slow');
       $("#c3").hide('slow');
       $("#c4").hide('slow');
       $("#c5").hide('slow');
       $("#c6").show('slow');
   }
   else
   {
    console.log("No se ha seleccionado una opción válida");
   }

 }

// TYPE OF PAYMENT OTHER
// WHICH ONE
 if(URLactual == (url + "home/index3"))
 {
   // alert("Soy Index3");
   var typePayment = document.formcustomers3.paymenttype.value;

   if (typePayment == "other") {
       // alert("hello typePayment");
       $("#OthersPyment").show('slow');
   }

   else
   {
     $("#OthersPyment").hide('slow');
   }
 }


 // INDEX4: STORE LOCATIONS
 function funcStoreLocations() {

   if(document.formcustomers4.storelocations.value != "none" &&
      document.formcustomers4.storelocations.value != "")
   {
     $("#avisoquantitystores").hide('slow');
     document.formcustomers4.storelocations.style.border = "1px solid #17dd37";
   }

     var storeLocations = document.formcustomers4.storelocations.value;

     if (storeLocations == "1") {
         // alert("hello one");
         $("#d1").show('slow');
         $("#d2").hide('slow');
         $("#d3").hide('slow');
         $("#d4").hide('slow');
         $("#d5").hide('slow');
         $("#d6").hide('slow');
     } else if (storeLocations == "2") {
         $("#d1").show('slow');
         $("#d2").show('slow');
         $("#d3").hide('slow');
         $("#d4").hide('slow');
         $("#d5").hide('slow');
         $("#d6").hide('slow');
         // alert("hello two");
     } else if (storeLocations == "3") {
         $("#d1").show('slow');
         $("#d2").show('slow');
         $("#d3").show('slow');
         $("#d4").hide('slow');
         $("#d5").hide('slow');
         $("#d6").hide('slow');
         // alert("hello three");
     } else if (storeLocations == "4") {
         $("#d1").show('slow');
         $("#d2").show('slow');
         $("#d3").show('slow');
         $("#d4").show('slow');
         $("#d5").hide('slow');
         $("#d6").hide('slow');
         // alert("hello four");
     } else if (storeLocations == "5") {
         $("#d1").show('slow');
         $("#d2").show('slow');
         $("#d3").show('slow');
         $("#d4").show('slow');
         $("#d5").show('slow');
         $("#d6").hide('slow');
         // alert("hello five");
     } else if (storeLocations == "mas-5") {
       $("#d1").hide('slow');
       $("#d2").hide('slow');
       $("#d3").hide('slow');
       $("#d4").hide('slow');
       $("#d5").hide('slow');
       $("#d6").show('slow');
     }

     else
     {
       $("#f1").hide('slow');
       $("#f2").hide('slow');
       $("#f3").hide('slow');
       $("#f4").hide('slow');
       $("#f5").hide('slow');
       $("#f6").hide('slow');
     }
 }

// Currency and anual figures index 4
 if (URLactual == (url + "home/index4"))
 {
     // alert("evento load 4 detectado!");
     var currency = document.formcustomers4.currencyAnualFigures.value;

     if (currency == "USD")
     {
       // alert("hello one");
       $("#hideCurrency").show('slow');
     }
     else if (currency == "CAD")
     {
       $("#hideCurrency").show('slow');
       // alert("hello two");
     }
     else if (currency == "COP")
     {
       $("#hideCurrency").show('slow');
       // alert("hello three");
     }
     else if (currency == "EUR")
     {
       $("#hideCurrency").show('slow');
       // alert("hello four");
     }
     else if (currency == "AUD")
     {
       $("#hideCurrency").show('slow');
       // alert("hello five");
     }
     else if(currency == "GBP")
    {
      $("#hideCurrency").show('slow');
      // alert("hello six");
    }
    else
    {
      $("#hideCurrency").hide('slow');
    }
 }

// Website index 4
 if(URLactual = (url + "home/index4"))
 {
   var typeBusiness = document.formcustomers4.typebusiness.value;

   if (typeBusiness == "ONLINE")
   {
     $("#mostrarWebSite").removeClass('ocultar');
     $("#mostrarOcultarBusinessLocation").addClass('ocultar');
   }
   else if(typeBusiness != "ONLINE")
   {
     $("#mostrarWebSite").addClass('ocultar');
     $("#mostrarOcultarBusinessLocation").removeClass('ocultar');
   }
   else
   {
     $("#mostrarWebSite").addClass('ocultar');
     $("#mostrarOcultarBusinessLocation").addClass('ocultar');
   }
 }

//Store Locations index 4
if(URLactual == (url + "home/index4")){

   var storeLocations = document.formcustomers4.storelocations.value;

  if (storeLocations == "1") {
      // alert("hello one");
      $("#d1").show('slow');
      $("#d2").hide('slow');
      $("#d3").hide('slow');
      $("#d4").hide('slow');
      $("#d5").hide('slow');
      $("#d6").hide('slow');
  } else if (storeLocations == "2") {
      $("#d1").show('slow');
      $("#d2").show('slow');
      $("#d3").hide('slow');
      $("#d4").hide('slow');
      $("#d5").hide('slow');
      $("#d6").hide('slow');
      // alert("hello two");
  } else if (storeLocations == "3") {
      $("#d1").show('slow');
      $("#d2").show('slow');
      $("#d3").show('slow');
      $("#d4").hide('slow');
      $("#d5").hide('slow');
      $("#d6").hide('slow');
      // alert("hello three");
  } else if (storeLocations == "4") {
      $("#d1").show('slow');
      $("#d2").show('slow');
      $("#d3").show('slow');
      $("#d4").show('slow');
      $("#d5").hide('slow');
      $("#d6").hide('slow');
      // alert("hello four");
  } else if (storeLocations == "5") {
      $("#d1").show('slow');
      $("#d2").show('slow');
      $("#d3").show('slow');
      $("#d4").show('slow');
      $("#d5").show('slow');
      $("#d6").hide('slow');
      // alert("hello five");
  } else if (storeLocations == "mas-5") {
      // alert("hello six");
      $("#d1").hide('slow');
      $("#d2").hide('slow');
      $("#d3").hide('slow');
      $("#d4").hide('slow');
      $("#d5").hide('slow');
      $("#d6").show('slow');
  }

  else
  {
    $("#f1").hide('slow');
    $("#f2").hide('slow');
    $("#f3").hide('slow');
    $("#f4").hide('slow');
    $("#f5").hide('slow');
    $("#f6").hide('slow');
  }
}
