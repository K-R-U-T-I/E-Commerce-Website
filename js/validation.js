function sign_up()
{
	var fname=document.getElementById('txtfname');	
	var mname=document.getElementById('txtmname');
	var lname=document.getElementById('txtlname');	
    var email=document.getElementById('txtemail');
    var password=document.getElementById('txtpassword');
    var conf_psw=document.getElementById('txtconfpsw');
    var contact=document.getElementById('txtcontact');
	var dob=document.getElementById('txtdob');
	var gender1=document.getElementById('txtmale');
	var gender2=document.getElementById('txtfemale');
    var country=document.getElementById('txtcountry');


	if(fname.value=='')
	{
		//alert('Enter Name');
		document.getElementById('req_fname').style.display='';
		document.getElementById('valid_fname').style.display='none';
		fname.focus();
		return false;	
	}
	else if(fname.value.search(/^[A-Za-z ]+$/))
	{
		document.getElementById('req_fname').style.display='none';
		document.getElementById('valid_fname').style.display='';
		fname.focus();
		return false;
	}
	else
	{
		document.getElementById('req_fname').style.display='none';
		document.getElementById('valid_fname').style.display='none';
	}

	if(mname.value=='')
	{
		//alert('Enter Name');
		document.getElementById('req_mname').style.display='';
		document.getElementById('valid_mname').style.display='none';
		mname.focus();
		return false;	
	}
	else if(mname.value.search(/^[A-Za-z ]+$/))
	{
		document.getElementById('req_mname').style.display='none';
		document.getElementById('valid_mname').style.display='';
		mname.focus();
		return false;
	}
	else
	{
		document.getElementById('req_mname').style.display='none';
		document.getElementById('valid_mname').style.display='none';
	}

	if(lname.value=='')
	{
		//alert('Enter Name');
		document.getElementById('req_lname').style.display='';
		document.getElementById('valid_lname').style.display='none';
		lname.focus();
		return false;	
	}
	else if(lname.value.search(/^[A-Za-z ]+$/))
	{
		document.getElementById('req_lname').style.display='none';
		document.getElementById('valid_lname').style.display='';
		lname.focus();
		return false;
	}
	else
	{
		document.getElementById('req_lname').style.display='none';
		document.getElementById('valid_lname').style.display='none';
	}

	if(email.value=='')
	{
		//var ptrnemail=/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}.$/i;
		document.getElementById('req_email').style.display='';
		document.getElementById('valid_email').style.display='none';
		email.focus();
		return false;
		//alert("Plase Enter email");	
	}
	else if(email.value.search(/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}.$/i))
	{
		document.getElementById('req_email').style.display='none';
		document.getElementById('valid_email').style.display='';
		email.focus();
		return false;
	}
	else
	{
		document.getElementById('req_email').style.display='none';
		document.getElementById('valid_email').style.display='none';
    }

    if(password.value=='')
	{
		document.getElementById('req_password').style.display='';
		document.getElementById('valid_password').style.display='none';
		password.focus();
		return false;
	
	}
	else if(password.value.search(/^[a-zA-Z0-9!@#$%^&?]+$/))
	{
		document.getElementById('req_password').style.display='none';
		document.getElementById('valid_password').style.display='';
		password.focus();
		return false;
	}
	else
	{
		document.getElementById('req_password').style.display='none';
		document.getElementById('valid_password').style.display='none';
	}

	if(conf_psw==password) 
	{
		document.getElementById('req_password').style.display='none';
		document.getElementById('valid_password').style.display='';
	}


	if(contact.value=='')
	{
		document.getElementById('req_contact').style.display='';
		document.getElementById('valid_contact').style.display='none';
		document.getElementById("ten_contact").style.display='none';
	 	contact.focus();
		return false;
	}
	else if(contact.value.search(/^[0-9]+$/))
	{
		document.getElementById('req_contact').style.display='none';
		document.getElementById('valid_contact').style.display='';
		document.getElementById("ten_contact").style.display='none';
		contact.focus();
		return false;
	}
	else if(contact.value < 10)
	{
		document.getElementById('req_contact').style.display='none';
		document.getElementById('valid_contact').style.display='none';
		document.getElementById("ten_contact").style.display='';
	 	contact.focus();
		return false;
	}
	else
	{
		document.getElementById('req_contact').style.display='none';
		document.getElementById('valid_contact').style.display='none';
		document.getElementById('ten_contact').style.display='none';
	}

	if (dob.value=='0000-00-00' || dob.value=='')
	{
		document.getElementById('req_dob').style.display='';
		dob.focus();
		return false;
	}
	else
	{
		document.getElementById('req_dob').style.display='none';
	}

	if(gender1.checked==false && gender2.checked==false)
	{

		document.getElementById('req_gender').style.display='';
		gender1.focus();
		return false;
	}
	else
	{
		document.getElementById('req_gender').style.display='none';
	}
	
	if(country.value=='-1')
	{
		document.getElementById('req_country').style.display='';
		country.focus();
		return false;
	}
	else
	{
		document.getElementById('req_country').style.display='none';
	}

	return true;
}
