
function ValidarFormularioCustomers3()
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

    if (document.formcustomers3.paymenttype.value == "")
    {
        $("#avisotypepayment").show("slow");
        document.formcustomers3.paymenttype.style.border = "1px solid #f22012";
    }

    if (document.formcustomers3.paymenttype.value != "")
    {
        $("#avisotypepayment").hide("slow");
        document.formcustomers3.paymenttype.style.border = "1px solid #17dd37";
    }

    // if (document.formcustomers3.paymenttype.value == "credit-card" && document.formcustomers3.franchise.value == "")
    // {
    //     $("#avisofranchise").show('slow');
    //     $("#avisolargofranchise").hide('slow');
    //     document.formcustomers3.franchise.style.border = "1px solid #f22012";
    // }
    //
    // if (document.formcustomers3.paymenttype.value == "credit-card" && document.formcustomers3.franchise.value != "")
    // {
    //     $("#avisofranchise").hide('slow');
    //     $("#avisolargofranchise").hide('slow');
    //     document.formcustomers3.franchise.style.border = "1px solid #17dd37";
    // }

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

	 if (document.formcustomers3.buyername.value == "")
	{
		$("#avisobuyername").show("slow");
		document.formcustomers3.buyername.style.border = "1px solid #f22012";
	}

	if (document.formcustomers3.buyername.value != "")
	{
		$("#avisobuyername").hide("slow");
		document.formcustomers3.buyername.style.border = "1px solid #17dd37";
	}

	 if (document.formcustomers3.buyerphone.value == "")
	{
		$("#avisobuyerphone").show("slow");
		document.formcustomers3.buyerphone.style.border = "1px solid #f22012";
	}

	if (document.formcustomers3.buyerphone.value != "")
	{
		$("#avisobuyerphone").hide("slow");
		document.formcustomers3.buyerphone.style.border = "1px solid #17dd37";
	}

	 if (document.formcustomers3.buyeremail.value == "")
	{
		$("#avisobuyeremail").show("slow");
		document.formcustomers3.buyeremail.style.border = "1px solid #f22012";
	}

	if (document.formcustomers3.buyeremail.value != "")
	{
		$("#avisobuyeremail").hide("slow");
		document.formcustomers3.buyeremail.style.border = "1px solid #17dd37";
	}

    if (document.formcustomers3.currency.value != "" && document.formcustomers3.bankname.value != "" &&
        document.formcustomers3.branch.value != "" && document.formcustomers3.accountnumber.value != "" &&
        document.formcustomers3.paymenttype.value != "" && document.formcustomers3.reference1name.value != "" &&
        document.formcustomers3.phonereference1.value != "" && document.formcustomers3.emailreference1.value != "" &&
        document.formcustomers3.reference2name.value != "" && document.formcustomers3.phonereference2.value != "" &&
        document.formcustomers3.emailreference2.value != "" && document.formcustomers3.buyername.value != "" &&
        document.formcustomers3.buyerphone.value != "" && document.formcustomers3.buyeremail.value != "")
    {

        $("#avisovalidaciones3").hide('slow');
        var formData = new FormData($("#form-customers3")[0]);

        $.ajax({
          url: url + 'clientes/form4',
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
  	           $("#exitoguardar").show("slow");

                // setTimeout(function(){
                //   location.href = url + "home/index4";
                // }, 2000);
            }

          }
        });
    }
    else
    {
        $("#avisovalidaciones3").show('slow');
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

// function ValidarFranchise()
// {
//   if (document.formcustomers3.franchise.value == "")
//   {
//       $("#avisolargofranchise").show('slow');
//       $("#avisofranchise").hide('slow');
//       document.formcustomers3.franchise.style.border = "1px solid #f22012";
//   }
//
//   if(document.formcustomers3.franchise.value != "")
//   {
//       $("#avisolargofranchise").hide('slow');
//       document.formcustomers3.franchise.style.border = "1px solid #17dd37";
//   }
//
// }

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

  if (document.formcustomers3.paymenttype.value != "")
  {
      $("#avisotypepayment").hide('slow');
      document.formcustomers3.paymenttype.style.border = "1px solid #17dd37";
  }

  if (document.formcustomers3.paymenttype.value == "credit-card")
  {
      $("#avisofranchise").hide('slow');
      $("#avisofranchise").removeClass("ocultar");
      document.formcustomers3.franchise.style.border = "1px solid #f22012";
  }

  // if (document.formcustomers3.paymenttype.value == "credit-card")
  // {
  //   $("#franchise").removeClass("ocultar");
  // }
  //
  // if (document.formcustomers3.paymenttype.value != "credit-card")
  // {
  //   $("#franchise").addClass("ocultar");
  //   $("#avisofranchise").addClass("ocultar");
  // }
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
    var correo = document.formcustomers3.buyeremail.value;
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (expr.test(correo))
    {
        document.formcustomers3.buyeremail.style.border = "1px solid  #17dd37";
        $("#avisoformatobuyeremail").hide('slow');
          $("#avisobuyeremail").hide('slow');
        return true;
    }
    else
    {
      document.formcustomers3.buyeremail.style.border = "1px solid #f22012";
      $("#avisoformatobuyeremail").show('slow');
      $("#avisobuyeremail").show('slow');
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
  if (document.formcustomers3.buyername.value.length < 3)
  {
      $("#avisolargobuyername").show('slow');
      $("#avisobuyername").hide('slow');
      document.formcustomers3.buyername.style.border = "1px solid #f22012";
  }

  if(document.formcustomers3.buyername.value.length >= 3)
  {
      $("#avisolargobuyername").hide('slow');
      document.formcustomers3.buyername.style.border = "1px solid #17dd37";
  }

}

function validarLargoBuyerPhone()
{
  if (document.formcustomers3.buyerphone.value.length < 5)
  {
      $("#avisolargobuyerphone").show('slow');
      $("#avisobuyerphone").hide('slow');
      document.formcustomers3.buyerphone.style.border = "1px solid #f22012";
  }

  if(document.formcustomers3.buyerphone.value.length >= 5)
  {
      $("#avisolargobuyerphone").hide('slow');
      document.formcustomers3.buyerphone.style.border = "1px solid #17dd37";
  }

}

function mostrarDescripción()
{
  $("#text-credit").toggle();
}
