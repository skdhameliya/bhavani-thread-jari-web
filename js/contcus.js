      function postToGoogle() {
        // var field1 = $("#Choice option:selected").text();
        var field2 = $("#FirstName").val();
        // var field3 = $("#LastName").val();
        var field4 = $("#BussinessName").val();
        var field5 = $("#ContactNo").val();
        var field6 = $("#Message").val();
 				
        		// if(field1 == "Choose..."){
				// 	alert("Choose first");
				// 	document.getElementById("Choice").focus();
				// 	return false;
				// }
				if(field2 == ""){
					alert('Fill First Name');
					document.getElementById("FirstName").focus();
					return false;
				}
        		// if(field3 == ""){
				// 	alert('Fill Last Name');
				// 	document.getElementById("LastName").focus();
				// 	return false;
				// }
				if(field4 == ""){
					alert('Fill Bussiness/Event Name');
					document.getElementById("BussinessName").focus();
					return false;
				}
				if(field5 == "" || field5.length > 10 || field5.length < 10){
					alert('Fill Contact No. (10 digits)');
					document.getElementById("ContactNo").focus();
					return false;
				}
	
        $.ajax({
              url: "https://docs.google.com/forms/u/2/d/e/1FAIpQLSfuyMlB1sF3w1h-0-iBelgS34uAoM01jV86TeIiZEYgFXkM8A/formResponse",
				      data: {"entry.1970743055": field2, "entry.1886086429": field4, "entry.543634553":field5, "entry.463716650":field6},
              type: "POST",
              dataType: "xml",
              
              		success: function(d)
				    {
				    },
				    error: function(x, y, z)
				    {
						// $('#form').hide();
						// alert("Form Successfully Submitted.");
						document.getElementById("form").reset();
						$('#success-msg').show();
				    }
        });
				return false;
}