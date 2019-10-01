
function validarFormCustomerUpdate3()
{
    if (document.formcustomers3.currency.value == "")
      {
          $("#avisocurrency").show('slow');
          document.formcustomers3.currency.style.border = "1px solid #f22012";
      }

    if (document.formcustomers3.currency.value != "")
      {
          $("#avisocurrency").hide('slow');
          document.formcustomers3.currency.style.border = "1px solid #17dd37";
      }

    if (document.formcustomers3.bankname.value == "")
      {
          $("#avisobankname").show('slow');
          document.formcustomers3.bankname.style.border = "1px solid #f22012";
      }

    if (document.formcustomers3.bankname.value != "")
      {
          $("#avisobankname").hide('slow');
          document.formcustomers3.bankname.style.border = "1px solid #17dd37";
      }

    if (document.formcustomers3.branch.value == "")
    {
        $("#avisobranch").show('slow');
        document.formcustomers3.branch.style.border = "1px solid #f22012";
    }

    if (document.formcustomers3.branch.value != "")
    {
        $("#avisobranch").hide('slow');
        document.formcustomers3.branch.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers3.accountnumber.value == "")
    {
        $("#avisoaccountnumber").show('slow');
        document.formcustomers3.accountnumber.style.border = "1px solid #f22012";
    }

    if (document.formcustomers3.accountnumber.value != "")
    {
      $("#avisoaccountnumber").hide('slow');
      document.formcustomers3.accountnumber.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers3.paymenttype.value == "NOTHING")
    {
      $("#avisotypepayment").show("slow");
      document.formcustomers3.paymenttype.style.border = "1px solid #f22012";
    }

    if (document.formcustomers3.paymenttype.value == "other" &&
        document.formcustomers3.others.value == "")
    {
      $("#avisotypeothhers").show("slow");
      document.formcustomers3.others.style.border = "1px solid #f22012";
    }

    if (document.formcustomers3.buyercontactsquantity.value == "")
    {
      $("#avisoquantitybuyers").show("slow");
      document.formcustomers3.buyercontactsquantity.style.border = "1px solid #f22012";
    }

    if (document.formcustomers3.buyercontactsquantity.value == "1")
    {
      //Contact One
      validarContactOne();
    }

    if (document.formcustomers3.buyercontactsquantity.value == "2")
    {
      //Contact One
      validarContactOne();

      //Contact two
      validarContactTwo();
    }

    if (document.formcustomers3.buyercontactsquantity.value == "3")
    {
      //Contact One
      validarContactOne();

      //Contact two
      validarContactTwo();

      //Contact Three
      validarContactThree();
    }

    if (document.formcustomers3.buyercontactsquantity.value == "4")
    {
      //Contact One
      validarContactOne();

      //Contact two
      validarContactTwo();

      //Contact Three
      validarContactThree();

      //Contact Four
      validarContactFour();
    }

    if (document.formcustomers3.buyercontactsquantity.value == "5")
    {
      //Contact One
      validarContactOne();

      //Contact two
      validarContactTwo();

      //Contact Three
      validarContactThree();

      //Contact Four
      validarContactFour();

      //Contact Five
      validarContactFive();
    }

    if (document.formcustomers3.buyercontactsquantity.value == "none")
    {
      $("#avisoquantitybuyers").show('slow');
      document.formcustomers3.buyercontactsquantity.style.border = "1px solid #f22012";
    }

    if (document.formcustomers3.logisticcontactname.value == "")
    {
      $("#avisologisticcontact").show('slow');
      document.formcustomers3.logisticcontactname.style.border = "1px solid #f22012";
    }

    if (document.formcustomers3.logisticcontactname.value != "")
    {
      $("#avisologisticcontact").hide('slow');
      document.formcustomers3.logisticcontactname.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers3.logisticcontactphone.value == "")
    {
      $("#avisologisticphone").show('slow');
      document.formcustomers3.logisticcontactphone.style.border = "1px solid #f22012";
    }

    if (document.formcustomers3.logisticcontactphone.value != "")
    {
      $("#avisologisticphone").hide('slow');
      document.formcustomers3.logisticcontactphone.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers3.logisticcontactemail.value == "")
    {
      $("#avisologisticemail").show('slow');
      document.formcustomers3.logisticcontactemail.style.border = "1px solid #f22012";
    }

    if (document.formcustomers3.logisticcontactemail.value != "")
    {
      $("#avisologisticemail").hide('slow');
      document.formcustomers3.logisticcontactemail.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers3.accountspayablename.value == "")
    {
      $("#avisopayablename").show('slow');
      document.formcustomers3.accountspayablename.style.border = "1px solid #f22012";
    }

    if (document.formcustomers3.accountspayablename.value != "")
    {
      $("#avisopayablename").hide('slow');
      document.formcustomers3.accountspayablename.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers3.payablephone.value == "")
    {
      $("#avisopayablephone").show('slow');
      document.formcustomers3.payablephone.style.border = "1px solid #f22012";
    }

    if (document.formcustomers3.payablephone.value != "")
    {
      $("#avisopayablephone").hide('slow');
      document.formcustomers3.payablephone.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers3.payableEmail.value == "")
    {
      $("#avisopayableEmail").show('slow');
      document.formcustomers3.payableEmail.style.border = "1px solid #f22012";
    }

    if (document.formcustomers3.payableEmail.value != "")
    {
      $("#avisopayableEmail").hide('slow');
      document.formcustomers3.payableEmail.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers3.reference1name.value == "")
    {
        $("#avisonamereference1").show('slow');
        document.formcustomers3.reference1name.style.border = "1px solid #f22012";
    }

    if (document.formcustomers3.reference1name.value != "")
    {
        $("#avisonamereference1").hide('slow');
        document.formcustomers3.reference1name.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers3.phonereference1.value == "")
    {
        $("#avisophonereference1").show('slow');
        document.formcustomers3.phonereference1.style.border = "1px solid #f22012";
    }

    if (document.formcustomers3.phonereference1.value != "")
    {
        $("#avisophonereference1").hide('slow');
        document.formcustomers3.phonereference1.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers3.emailreference1.value == "")
    {
        $("#avisoemailreference1").show('slow');
        document.formcustomers3.emailreference1.style.border = "1px solid #f22012";
    }

    if (document.formcustomers3.emailreference1.value != "")
    {
        $("#avisoemailreference1").hide('slow');
        document.formcustomers3.emailreference1.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers3.reference2name.value == "")
    {
        $("#avisonamereference2").show('slow');
        document.formcustomers3.reference2name.style.border = "1px solid #f22012";
    }

    if (document.formcustomers3.reference2name.value != "")
    {
        $("#avisonamereference2").hide('slow');
        document.formcustomers3.reference2name.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers3.phonereference2.value == "")
    {
        $("#avisophonereference2").show('slow');
        document.formcustomers3.phonereference2.style.border = "1px solid #f22012";
    }

    if (document.formcustomers3.phonereference2.value != "")
    {
        $("#avisophonereference2").hide('slow');
        document.formcustomers3.phonereference2.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers3.emailreference2.value == "")
    {
        $("#avisoemailreference2").show('slow');
        document.formcustomers3.emailreference2.style.border = "1px solid #f22012";
    }

    if (document.formcustomers3.emailreference2.value != "")
    {
        $("#avisoemailreference2").hide('slow');
        document.formcustomers3.emailreference2.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers3.reference3name.value == "")
    {
        document.formcustomers3.reference3name.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers3.reference3name.value != "")
    {
        document.formcustomers3.reference3name.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers3.phonereference3.value == "")
    {
        document.formcustomers3.phonereference3.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers3.phonereference3.value != "")
    {
        document.formcustomers3.phonereference3.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers3.emailreference3.value == "")
    {
        document.formcustomers3.emailreference3.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers3.emailreference3.value != "")
    {
        document.formcustomers3.emailreference3.style.border = "1px solid #17dd37";
    }

    if (document.formcustomers3.currency.value != "" &&
        document.formcustomers3.bankname.value != "" &&
        document.formcustomers3.branch.value != "" &&
        document.formcustomers3.accountnumber.value != "" &&
        document.formcustomers3.paymenttype.value != "" &&
        document.formcustomers3.buyercontactsquantity.value != "none" &&
        document.formcustomers3.logisticcontactname.value != "" &&
        document.formcustomers3.logisticcontactphone.value != "" &&
        document.formcustomers3.logisticcontactemail.value != "" &&
        document.formcustomers3.accountspayablename.value != "" &&
        document.formcustomers3.payablephone.value != "" &&
        document.formcustomers3.payableEmail.value != "" &&
        document.formcustomers3.reference1name.value != "" &&
        document.formcustomers3.phonereference1.value != "" &&
        document.formcustomers3.emailreference1.value != "" &&
        document.formcustomers3.reference2name.value != "" &&
        document.formcustomers3.phonereference2.value != "" &&
        document.formcustomers3.emailreference2.value != "")
    {

        $("#avisovalidaciones3").hide('slow');
        var formData = new FormData($("#form-customers3")[0]);

        $.ajax({
          url: url + 'clientes/actualizacionDatosForm3',
          type: 'POST',
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function(){
            $("#exitoguardar").hide('fast');
            $("#carga3").show("fast");
          },
          success: function(resp){

            if (resp == 1)
            {
               console.log("Actualización exitosa...!");

               $.ajax({
                 url: url + 'clientes/actualizacionDatosForm3BuyersContacts',
                 type: 'POST',
                 data: formData,
                 cache: false,
                 contentType: false,
                 processData: false,
                 beforeSend: function(){
                   $("#exitoguardar").hide('fast');
                   $("#carga3").show("fast");
                 },
                 success: function(resp){

                   if (resp == 1)
                   {
                      $("#carga3").hide("slow");
         	           $("#exitoactualizacionForm3").show("slow");

                     setTimeout(function(){
                       location.reload();
                     }, 2000);
                   }
                 }
               });
            }
          }
        });
    }
    else
    {
        $("#avisovalidaciones3").show('slow');
    }
}

function validarLargoLogisticName()
{
  if (document.formcustomers3.logisticcontactname.value.length < 3)
  {
      $("#avisolargologisticname").show('slow');
      $("#avisologisticcontact").hide('slow');
      document.formcustomers3.logisticcontactname.style.border = "1px solid #f22012";
  }

  if(document.formcustomers3.logisticcontactname.value.length >= 3)
  {
      $("#avisolargologisticname").hide('slow');
      document.formcustomers3.logisticcontactname.style.border = "1px solid #17dd37";
  }
}

function validarLargoPayableName()
{
  if (document.formcustomers3.accountspayablename.value.length < 3)
  {
    $("#avisolargopayablename").show('slow');
    $("#avisopayablename").hide('slow');
    document.formcustomers3.accountspayablename.style.border = "1px solid #f22012";
  }

  if(document.formcustomers3.accountspayablename.value.length >= 3)
  {
    $("#avisolargopayablename").hide('slow');
    document.formcustomers3.accountspayablename.style.border = "1px solid #17dd37";
  }
}

function validarLargoPayablePhone()
{
  if (document.formcustomers3.payablephone.value.length < 3)
  {
    $("#avisolargopayablephone").show('slow');
    $("#avisopayablephone").hide('slow');
    document.formcustomers3.payablephone.style.border = "1px solid #f22012";
  }

  if(document.formcustomers3.payablephone.value.length >= 3)
  {
    $("#avisolargopayablephone").hide('slow');
    document.formcustomers3.payablephone.style.border = "1px solid #17dd37";
  }
}

function ValidarPayablerEmail()
{
  var correo = document.formcustomers3.payableEmail.value;
  expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if (expr.test(correo))
  {
      document.formcustomers3.payableEmail.style.border = "1px solid  #17dd37";
      $("#avisoformatopayableemail").hide('slow');
        $("#avisopayableEmail").hide('slow');
      return true;
  }
  else
  {
    document.formcustomers3.payableEmail.style.border = "1px solid #f22012";
    $("#avisoformatopayableemail").show('slow');
    $("#avisopayableEmail").hide('slow');
    return false;
  }

}

function validarLargoLogisticPhone()
{
  if (document.formcustomers3.logisticcontactphone.value.length < 5)
  {
      $("#avisolargologisticphone").show('slow');
      $("#avisologisticphone").hide('slow');
      document.formcustomers3.logisticcontactphone.style.border = "1px solid #f22012";
  }

  if(document.formcustomers3.logisticcontactphone.value.length >= 5)
  {
      $("#avisolargologisticphone").hide('slow');
      document.formcustomers3.logisticcontactphone.style.border = "1px solid #17dd37";
  }
}

function validarCurrency()
{
  if (document.formcustomers3.currency.value != "")
  {
    $("#avisocurrency").hide('slow');
    document.formcustomers3.currency.style.border = "1px solid #17dd37";
  }
}

function validarLargoBankName()
{
  if (document.formcustomers3.bankname.value.length < 3)
  {
      $("#avisolargobankname").show('slow');
      $("#avisobankname").hide('slow');
      document.formcustomers3.bankname.style.border = "1px solid #f22012";
  }

  if(document.formcustomers3.bankname.value.length >= 3)
  {
      $("#avisolargobankname").hide('slow');
      document.formcustomers3.bankname.style.border = "1px solid #17dd37";
  }

}

function ValidarLargoBranch()
{
  if (document.formcustomers3.branch.value.length < 3)
  {
      $("#avisolargobranch").show('slow');
      $("#avisobranch").hide('slow');
      document.formcustomers3.branch.style.border = "1px solid #f22012";
  }

  if(document.formcustomers3.branch.value.length >= 3)
  {
      $("#avisolargobranch").hide('slow');
      document.formcustomers3.branch.style.border = "1px solid #17dd37";
  }

}

function ValidarLargoAccountNumber()
{
  if (document.formcustomers3.accountnumber.value.length < 6)
  {
      $("#avisolargoaccountnumber").show('slow');
      $("#avisoaccountnumber").hide('slow');
      document.formcustomers3.accountnumber.style.border = "1px solid #f22012";
  }

  if(document.formcustomers3.accountnumber.value.length >= 6)
  {
      $("#avisolargoaccountnumber").hide('slow');
      document.formcustomers3.accountnumber.style.border = "1px solid #17dd37";
  }

}

function validarLargoWhichOne()
{
  if (document.formcustomers3.others.value.length < 4)
  {
    $("#avisolargoatypeothers").show('slow');
    $("#avisotypeothhers").hide('slow');
    document.formcustomers3.others.style.border = "1px solid #f22012";
  }

  if (document.formcustomers3.others.value.length >= 4)
  {
    $("#avisolargoatypeothers").hide('slow');
    document.formcustomers3.others.style.border = "1px solid #17dd37";
  }
}

//Buyer Contacts
//Contact One

function validarContactOne()
{
  if (document.formcustomers3.buyernamecontact.value == "")
  {
    $("#avisobuyername").show("slow");
    document.formcustomers3.buyernamecontact.style.border = "1px solid #f22012";
  }

  if (document.formcustomers3.buyernamecontact.value != "")
  {
    $("#avisobuyername").hide("slow");
    document.formcustomers3.buyernamecontact.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers3.buyerphonecontact.value == "")
  {
    $("#avisobuyerphone").show("slow");
    document.formcustomers3.buyerphonecontact.style.border = "1px solid #f22012";
  }

  if (document.formcustomers3.buyerphonecontact.value != "")
  {
    $("#avisobuyerphone").hide("slow");
    document.formcustomers3.buyerphonecontact.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers3.buyeremailcontact.value == "")
  {
    $("#avisobuyeremail").show("slow");
    document.formcustomers3.buyeremailcontact.style.border = "1px solid #f22012";
  }

  if (document.formcustomers3.buyeremailcontact.value != "")
  {
    $("#avisobuyeremail").hide("slow");
    document.formcustomers3.buyeremailcontact.style.border = "1px solid #17dd37";
  }
}
// Fin Contact One

//Buyer Contacts
//Contact Two
function validarContactTwo()
{
  if (document.formcustomers3.buyernamecontact2.value == "")
  {
    $("#avisobuyername2").show("slow");
    document.formcustomers3.buyernamecontact2.style.border = "1px solid #f22012";
  }

  if (document.formcustomers3.buyernamecontact2.value != "")
  {
    $("#avisobuyername2").hide("slow");
    document.formcustomers3.buyernamecontact2.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers3.buyerphone2.value == "")
  {
    $("#avisobuyerphone2").show("slow");
    document.formcustomers3.buyerphone2.style.border = "1px solid #f22012";
  }

  if (document.formcustomers3.buyerphone2.value != "")
  {
    $("#avisobuyerphone2").hide("slow");
    document.formcustomers3.buyerphone2.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers3.buyeremail2.value == "")
  {
    $("#avisobuyeremail2").show("slow");
    document.formcustomers3.buyeremail2.style.border = "1px solid #f22012";
  }

  if (document.formcustomers3.buyeremail2.value != "")
  {
    $("#avisobuyeremail2").hide("slow");
    document.formcustomers3.buyeremail2.style.border = "1px solid #17dd37";
  }
}

function validarContactThree()
{
  if (document.formcustomers3.buyername3.value == "")
  {
    $("#avisobuyername3").show("slow");
    document.formcustomers3.buyername3.style.border = "1px solid #f22012";
  }

  if (document.formcustomers3.buyername3.value != "")
  {
    $("#avisobuyername3").hide("slow");
    document.formcustomers3.buyername3.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers3.buyerphone3.value == "")
  {
    $("#avisobuyerphone3").show("slow");
    document.formcustomers3.buyerphone3.style.border = "1px solid #f22012";
  }

  if (document.formcustomers3.buyerphone3.value != "")
  {
    $("#avisobuyerphone3").hide("slow");
    document.formcustomers3.buyerphone3.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers3.buyeremail3.value == "")
  {
    $("#avisobuyeremail3").show("slow");
    document.formcustomers3.buyeremail3.style.border = "1px solid #f22012";
  }

  if (document.formcustomers3.buyeremail3.value != "")
  {
    $("#avisobuyeremail3").hide("slow");
    document.formcustomers3.buyeremail3.style.border = "1px solid #17dd37";
  }
}

function validarLargoBuyerName3()
{
  if (document.formcustomers3.buyername3.value.length < 3)
  {
    $("#avisolargobuyername3").show('slow');
    $("#avisobuyername3").hide('slow');
    document.formcustomers3.buyername3.style.border = "1px solid #f22012";
  }

  if (document.formcustomers3.buyername3.value.length >= 3)
  {
    $("#avisolargobuyername3").hide('slow');
    $("#avisobuyername3").hide('slow');
    document.formcustomers3.buyername3.style.border = "1px solid #17dd37";
  }
}

function validarLargoBuyerPhone3()
{
  if (document.formcustomers3.buyerphone3.value.length < 5)
  {
    $("#avisolargobuyerphone3").show('slow');
    $("#avisobuyerphone3").hide('slow');
    document.formcustomers3.buyerphone3.style.border = "1px solid #f22012";
  }

  if (document.formcustomers3.buyerphone3.value.length >= 5)
  {
    $("#avisolargobuyerphone3").hide('slow');
    $("#avisobuyerphone3").hide('slow');
    document.formcustomers3.buyerphone3.style.border = "1px solid #17dd37";
  }
}

function ValidarBuyerEmail3()
{
  var correo = document.formcustomers3.buyeremail3.value;
  expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if (expr.test(correo))
  {
      document.formcustomers3.buyeremail3.style.border = "1px solid  #17dd37";
      $("#avisoformatobuyeremail3").hide('slow');
        $("#avisobuyeremail3").hide('slow');
      return true;
  }
  else
  {
    document.formcustomers3.buyeremail3.style.border = "1px solid #f22012";
    $("#avisoformatobuyeremail3").show('slow');
    $("#avisobuyeremail3").hide('slow');
    return false;
  }

}

function ValidarLogisticEmail()
{
  var correo = document.formcustomers3.logisticcontactemail.value;
  expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if (expr.test(correo))
  {
      document.formcustomers3.logisticcontactemail.style.border = "1px solid  #17dd37";
      $("#avisoformatologisticemail").hide('slow');
        $("#avisologisticemail").hide('slow');
      return true;
  }
  else
  {
    document.formcustomers3.logisticcontactemail.style.border = "1px solid #f22012";
    $("#avisoformatologisticemail").show('slow');
    $("#avisologisticemail").hide('slow');
    return false;
  }

}

function validarLargoNameReference1()
{
  if (document.formcustomers3.reference1name.value.length < 3)
  {
      $("#avisolargonamereference1").show('slow');
      $("#avisonamereference1").hide('slow');
      document.formcustomers3.reference1name.style.border = "1px solid #f22012";
  }

  if(document.formcustomers3.reference1name.value.length >= 3)
  {
      $("#avisolargonamereference1").hide('slow');
      document.formcustomers3.reference1name.style.border = "1px solid #17dd37";
  }

}

function ValidarTypePayment()
{

if (document.formcustomers3.paymenttype.value == "NOTHING")
{
    $("#OthersPyment").hide('slow');

    document.formcustomers3.paymenttype.style.border = "1px solid #17dd37";
}

  if (document.formcustomers3.paymenttype.value != "")
  {
      $("#avisotypepayment").hide('slow');

      document.formcustomers3.paymenttype.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers3.paymenttype.value == "credit-card")
  {
      $("#avisofranchise").hide('slow');
      $("#avisofranchise").removeClass("ocultar");
      $("#OthersPyment").hide('slow');
      document.formcustomers3.franchise.style.border = "1px solid #f22012";
  }
  if (document.formcustomers3.paymenttype.value == "transaction")
  {
      $("#avisofranchise").hide('slow');
      $("#avisofranchise").removeClass("ocultar");
      $("#OthersPyment").hide('slow');
      document.formcustomers3.franchise.style.border = "1px solid #f22012";
  }
  if (document.formcustomers3.paymenttype.value == "other")
  {
      $("#avisotypepayment").hide('slow');
      $("#OthersPyment").show('slow');
      document.formcustomers3.paymenttype.style.border = "1px solid #17dd37";
  }
}

function validarLargoPhoneReference1()
{
  if (document.formcustomers3.phonereference1.value.length < 5)
  {
      $("#avisolargophonereference1").show('slow');
      $("#avisophonereference1").hide('slow');
      document.formcustomers3.phonereference1.style.border = "1px solid #f22012";
  }

  if(document.formcustomers3.phonereference1.value.length >= 5)
  {
      $("#avisolargophonereference1").hide('slow');
      document.formcustomers3.phonereference1.style.border = "1px solid #17dd37";
  }

}

function ValidarEmailReference1()
{
    var correo = document.formcustomers3.emailreference1.value;
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (expr.test(correo))
    {
        document.formcustomers3.emailreference1.style.border = "1px solid  #17dd37";
        $("#avisoformatoemailreference1").hide('slow');
          $("#avisoemailreference1").hide('slow');
        return true;
    }
    else
    {
      document.formcustomers3.emailreference1.style.border = "1px solid #f22012";
      $("#avisoformatoemailreference1").show('slow');
      $("#avisoemailreference1").show('slow');
      return false;
    }

}

function ValidarEmailReference2()
{
    var correo = document.formcustomers3.emailreference2.value;
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (expr.test(correo))
    {
        document.formcustomers3.emailreference2.style.border = "1px solid  #17dd37";
        $("#avisoformatoemailreference2").hide('slow');
        $("#avisoemailreference2").hide('slow');
        return true;
    }
    else
    {
      document.formcustomers3.emailreference1.style.border = "1px solid #f22012";
      $("#avisoformatoemailreference2").show('slow');
      $("#avisoemailreference2").show('slow');
      return false;
    }

}

function ValidarEmailReference3()
{
    var correo = document.formcustomers3.emailreference3.value;
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (expr.test(correo))
    {
        document.formcustomers3.emailreference3.style.border = "1px solid  #17dd37";
        $("#avisoformatoemailreference3").hide('slow');
        return true;
    }
    else
    {
      document.formcustomers3.emailreference3.style.border = "1px solid #f22012";
      $("#avisoformatoemailreference3").show('slow');
      return false;
    }

}

function ValidarBuyerEmail()
{
    var correo = document.formcustomers3.buyeremailcontact.value;
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (expr.test(correo))
    {
      document.formcustomers3.buyeremailcontact.style.border = "1px solid  #17dd37";
      $("#avisoformatobuyeremail").hide('slow');
        $("#avisobuyeremail").hide('slow');
      return true;
    }
    else
    {
      document.formcustomers3.buyeremailcontact.style.border = "1px solid #f22012";
      $("#avisoformatobuyeremail").show('slow');
      $("#avisobuyeremail").hide('slow');
      return false;
    }
}

function ValidarBuyerEmail2()
{
    var correo = document.formcustomers3.buyeremail2.value;
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (expr.test(correo))
    {
      document.formcustomers3.buyeremail2.style.border = "1px solid  #17dd37";
      $("#avisoformatobuyeremail2").hide('slow');
        $("#avisobuyeremail2").hide('slow');
      return true;
    }
    else
    {
      document.formcustomers3.buyeremail2.style.border = "1px solid #f22012";
      $("#avisoformatobuyeremail2").show('slow');
      $("#avisobuyeremail2").hide('slow');
      return false;
    }
}

function validarLargoNameReference2()
{

  if (document.formcustomers3.reference2name.value.length < 3)
  {
      $("#avisolargonamereference2").show('slow');
	  $("#avisonamereference2").hide("slow");
      document.formcustomers3.reference2name.style.border = "1px solid #f22012";
  }

  if (document.formcustomers3.reference2name.value.length >= 3)
  {
      $("#avisolargonamereference2").hide('slow');
      document.formcustomers3.reference2name.style.border = "1px solid #17dd37";
  }
}

function validarLargoPhoneReference2()
{
  if (document.formcustomers3.phonereference2.value.length < 5)
  {
      $("#avisolargophonereference2").show('slow');
      $("#avisophonereference2").hide('slow');
      document.formcustomers3.phonereference2.style.border = "1px solid #f22012";
  }

  if(document.formcustomers3.phonereference2.value.length >= 5)
  {
      $("#avisolargophonereference2").hide('slow');
      document.formcustomers3.phonereference2.style.border = "1px solid #17dd37";
  }

}

function validarLargoNameReference3()
{
  if (document.formcustomers3.reference3name.value.length < 3)
  {
      $("#avisolargonamereference3").show('slow');
      document.formcustomers3.reference3name.style.border = "1px solid #f22012";
  }

  if(document.formcustomers3.reference3name.value.length >= 3)
  {
      $("#avisolargonamereference3").hide('slow');
      document.formcustomers3.reference3name.style.border = "1px solid #17dd37";
  }

}

function validarLargoPhoneReference3()
{
  if (document.formcustomers3.phonereference3.value.length < 5)
  {
      $("#avisolargophonereference3").show('slow');
      document.formcustomers3.phonereference3.style.border = "1px solid #f22012";
  }

  if(document.formcustomers3.phonereference3.value.length >= 5)
  {
      $("#avisolargophonereference3").hide('slow');
      document.formcustomers3.phonereference3.style.border = "1px solid #17dd37";
  }

}

function validarLargoBuyerName()
{
  if (document.formcustomers3.buyernamecontact.value.length < 3)
  {
      $("#avisolargobuyername").show('slow');
      $("#avisobuyername").hide('slow');
      document.formcustomers3.buyernamecontact.style.border = "1px solid #f22012";
  }

  if(document.formcustomers3.buyernamecontact.value.length >= 3)
  {
      $("#avisolargobuyername").hide('slow');
      document.formcustomers3.buyernamecontact.style.border = "1px solid #17dd37";
  }

}

function validarLargoBuyerName2()
{
  if (document.formcustomers3.buyernamecontact2.value.length < 3)
  {
      $("#avisolargobuyername2").show('slow');
      $("#avisobuyername2").hide('slow');
      document.formcustomers3.buyernamecontact2.style.border = "1px solid #f22012";
  }

  if(document.formcustomers3.buyernamecontact2.value.length >= 3)
  {
      $("#avisolargobuyername2").hide('slow');
      document.formcustomers3.buyernamecontact2.style.border = "1px solid #17dd37";
  }

}

function validarLargoBuyerPhone()
{
  if (document.formcustomers3.buyerphonecontact.value.length < 5)
  {
    $("#avisolargobuyerphone").show('slow');
    $("#avisobuyerphone").hide('slow');
    document.formcustomers3.buyerphonecontact.style.border = "1px solid #f22012";
  }

  if(document.formcustomers3.buyerphonecontact.value.length >= 5)
  {
    $("#avisolargobuyerphone").hide('slow');
    document.formcustomers3.buyerphonecontact.style.border = "1px solid #17dd37";
  }

}

function validarLargoBuyerPhone2()
{
  if (document.formcustomers3.buyerphone2.value.length < 5)
  {
    $("#avisolargobuyerphone2").show('slow');
    $("#avisobuyerphone2").hide('slow');
    document.formcustomers3.buyerphone2.style.border = "1px solid #f22012";
  }

  if(document.formcustomers3.buyerphone2.value.length >= 5)
  {
    $("#avisolargobuyerphone2").hide('slow');
    document.formcustomers3.buyerphone2.style.border = "1px solid #17dd37";
  }
}

function validarContactFour()
{
  if (document.formcustomers3.buyername4.value == "")
  {
    $("#avisobuyername4").show("slow");
    document.formcustomers3.buyername4.style.border = "1px solid #f22012";
  }

  if (document.formcustomers3.buyername4.value != "")
  {
    $("#avisobuyername4").hide("slow");
    document.formcustomers3.buyername4.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers3.buyerphone4.value == "")
  {
    $("#avisobuyerphone4").show("slow");
    document.formcustomers3.buyerphone4.style.border = "1px solid #f22012";
  }

  if (document.formcustomers3.buyerphone4.value != "")
  {
    $("#avisobuyerphone4").hide("slow");
    document.formcustomers3.buyerphone4.style.border = "1px solid #17dd37";
  }

    if (document.formcustomers3.buyeremail4.value == "")
    {
      $("#avisobuyeremail4").show("slow");
      document.formcustomers3.buyeremail4.style.border = "1px solid #f22012";
    }

    if (document.formcustomers3.buyeremail4.value != "")
    {
      $("#avisobuyeremail4").hide("slow");
      document.formcustomers3.buyeremail4.style.border = "1px solid #17dd37";
    }
}

function validarLargoBuyerName4()
{

  if (document.formcustomers3.buyername4.value.length < 3)
  {
    $("#avisolargobuyername4").show("slow");
    $("#avisobuyername4").hide("slow");
    document.formcustomers3.buyername4.style.border = "1px solid #f22012";
  }

  if (document.formcustomers3.buyername4.value.length >= 3)
  {
    $("#avisolargobuyername4").hide("slow");
    document.formcustomers3.buyername4.style.border = "1px solid #17dd37";
  }
}

function validarLargoBuyerPhone4()
{
  if (document.formcustomers3.buyerphone4.value.length < 5)
  {
    $("#avisolargobuyerphone4").show("slow");
    $("#avisobuyerphone4").hide("slow");
    document.formcustomers3.buyerphone4.style.border = "1px solid #f22012";
  }

  if (document.formcustomers3.buyerphone4.value.length >= 5)
  {
    $("#avisolargobuyerphone4").hide("slow");
    document.formcustomers3.buyerphone4.style.border = "1px solid #17dd37";
  }
}

function ValidarBuyerEmail4()
{
    var correo = document.formcustomers3.buyeremail4.value;
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (expr.test(correo))
    {
      document.formcustomers3.buyeremail4.style.border = "1px solid  #17dd37";
        $("#avisoformatobuyeremail4").hide('slow');
        $("#avisobuyeremail4").hide('slow');
      return true;
    }
    else
    {
      document.formcustomers3.buyeremail4.style.border = "1px solid #f22012";
      $("#avisoformatobuyeremail4").show('slow');
      $("#avisobuyeremail4").hide('slow');
      return false;
    }
}

function validarContactFive()
{
  if (document.formcustomers3.buyername5.value == "")
  {
    $("#avisobuyername5").show("slow");
    document.formcustomers3.buyername5.style.border = "1px solid #f22012";
  }

  if (document.formcustomers3.buyername5.value != "")
  {
    $("#avisobuyername5").hide("slow");
    document.formcustomers3.buyername5.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers3.buyerphone5.value == "")
  {
    $("#avisobuyerphone5").show("slow");
    document.formcustomers3.buyerphone5.style.border = "1px solid #f22012";
  }

  if (document.formcustomers3.buyerphone5.value != "")
  {
    $("#avisobuyerphone5").hide("slow");
    document.formcustomers3.buyerphone5.style.border = "1px solid #17dd37";
  }

    if (document.formcustomers3.buyeremail5.value == "")
    {
      $("#avisobuyeremail5").show("slow");
      document.formcustomers3.buyeremail5.style.border = "1px solid #f22012";
    }

    if (document.formcustomers3.buyeremail5.value != "")
    {
      $("#avisobuyeremail5").hide("slow");
      document.formcustomers3.buyeremail5.style.border = "1px solid #17dd37";
    }
}

function ValidarBuyerEmai5()
{
    var correo = document.formcustomers3.buyeremail5.value;
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (expr.test(correo))
    {
      document.formcustomers3.buyeremail5.style.border = "1px solid  #17dd37";
        $("#avisoformatobuyeremail5").hide('slow');
        $("#avisobuyeremail5").hide('slow');
      return true;
    }
    else
    {
      document.formcustomers3.buyeremail5.style.border = "1px solid #f22012";
      $("#avisoformatobuyeremail5").show('slow');
      $("#avisobuyeremail5").hide('slow');
      return false;
    }
}

function validarLargoBuyerPhone5()
{
  if (document.formcustomers3.buyerphone5.value.length < 5)
  {
    $("#avisolargobuyerphone5").show("slow");
    $("#avisobuyerphone5").hide("slow");
    document.formcustomers3.buyerphone5.style.border = "1px solid #f22012";
  }

  if (document.formcustomers3.buyerphone5.value.length >= 5)
  {
    $("#avisolargobuyerphone5").hide("slow");
    document.formcustomers3.buyerphone5.style.border = "1px solid #17dd37";
  }
}

function validarLargoBuyerName5()
{
  if (document.formcustomers3.buyername5.value.length < 3)
  {
    $("#avisolargobuyername5").show("slow");
    $("#avisobuyername5").hide("slow");
    document.formcustomers3.buyername5.style.border = "1px solid #f22012";
  }

  if (document.formcustomers3.buyername5.value.length >= 3)
  {
    $("#avisolargobuyername5").hide("slow");
    document.formcustomers3.buyername5.style.border = "1px solid #17dd37";
  }
}
