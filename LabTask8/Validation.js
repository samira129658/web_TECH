function validate()
{
	bool = true;	

	//----------------------------------
	var fname = document.getElementById("fname");
	var vfname = fname.value;
	if(vfname.trim() == "")
	{
		fname.style.border = "solid 3px red";
		document.getElementById("sfname").innerHTML = "Cannot be empty";
		bool = false;
	}
	else if(!/^[a-zA-Z -]*$/.test(vfname))
	{
		fname.style.border = "solid 3px red";
		document.getElementById("sfname").innerHTML = "Must contain letters";
		bool = false;
	}
	else
	{
		fname.style.border = null;
		document.getElementById("sfname").innerHTML = "";
	}
		
	//----------------------------------
	var lname = document.getElementById("lname");
	var vlname = lname.value;
	if(vlname.trim() == "")
	{
		lname.style.border = "solid 3px red";
		document.getElementById("slname").innerHTML = "Cannot be empty";
		bool = false;
	}
	else if(!/^[a-zA-Z -]*$/.test(vlname))
	{
		lname.style.border = "solid 3px red";
		document.getElementById("slname").innerHTML = "Must contain letters";
		bool = false;
	}
	else
	{
		lname.style.border = null;
		document.getElementById("slname").innerHTML = "";
	}

	//----------------------------------
	var a1 = document.getElementById("a1");
	var va1 = a1.value;
	if(va1.trim() == "")
	{
		a1.style.border = "solid 3px red";
		document.getElementById("sa1").innerHTML = "Cannot be empty";
		bool = false;
	}
	else
	{
		a1.style.border = null;
		document.getElementById("sa1").innerHTML = "";
	}

	//----------------------------------
	var a2 = document.getElementById("a2");
	var va2 = a2.value;
	if(va2.trim() == "")
	{
		a2.style.border = "solid 3px red";
		document.getElementById("sa2").innerHTML = "Cannot be empty";
		bool = false;
	}
	else
	{
		a2.style.border = null;
		document.getElementById("sa2").innerHTML = "";
	}

	//----------------------------------
	var c1 = document.getElementById("c1");
	var vc1 = c1.value;
	if(vc1.trim() == "")
	{
		c1.style.border = "solid 3px red";
		document.getElementById("sc1").innerHTML = "Cannot be empty";
		bool = false;
	}
	else
	{
		c1.style.border = null;
		document.getElementById("sc1").innerHTML = "";
	}

	//----------------------------------
	var state = document.getElementById("state");
	var vstate = state.value;
	if(vstate == "")
	{
		state.style.border = "solid 3px red";
		document.getElementById("sstate").innerHTML = "Cannot be empty";
		bool = false;
	}
	else
	{
		state.style.border = null;
		document.getElementById("sstate").innerHTML = "";
	}

	//----------------------------------
	var zc = document.getElementById("zc");
	var vzc = zc.value;
	if(vzc.trim() == "")
	{
		zc.style.border = "solid 3px red";
		document.getElementById("szc").innerHTML = "Cannot be empty";
		bool = false;
	}
	else if(!/^[0-9]*$/.test(vzc))
	{
		zc.style.border = "solid 3px red";
		document.getElementById("szc").innerHTML = "Must contain unspaced numbers";
		bool = false;
	}
	else
	{
		zc.style.border = null;
		document.getElementById("szc").innerHTML = "";
	}

	//----------------------------------
	var country = document.getElementById("country");
	var vcountry = country.value;
	if(vcountry == "")
	{
		country.style.border = "solid 3px red";
		document.getElementById("scountry").innerHTML = "Cannot be empty";
		bool = false;
	}
	else
	{
		country.style.border = null;
		document.getElementById("scountry").innerHTML = "";
	}

	//----------------------------------
	var phone = document.getElementById("phone");
	var vphone = phone.value;
	if(vphone.trim() == "")
	{
		phone.style.border = "solid 3px red";
		document.getElementById("sphone").innerHTML = "Cannot be empty";
		bool = false;
	}
	else if(!/^[0-9]*$/.test(vphone))
	{
		phone.style.border = "solid 3px red";
		document.getElementById("sphone").innerHTML = "Must contain unspaced numbers";
		bool = false;
	}
	else if(vphone.length != 10)
	{
		phone.style.border = "solid 3px red";
		document.getElementById("sphone").innerHTML = "Must be 10 digits";
		bool = false;
	}
	else
	{
		phone.style.border = null;
		document.getElementById("sphone").innerHTML = "";
	}

	//----------------------------------
	var fax = document.getElementById("fax");
	var vfax = fax.value;
	if(vfax.trim() == "")
	{
		fax.style.border = "solid 3px red";
		document.getElementById("sfax").innerHTML = "Cannot be empty";
		bool = false;
	}
	else if(!/^[0-9]*$/.test(vfax))
	{
		fax.style.border = "solid 3px red";
		document.getElementById("sfax").innerHTML = "Must contain unspaced numbers";
		bool = false;
	}
	else if(vfax.length != 10)
	{
		fax.style.border = "solid 3px red";
		document.getElementById("sfax").innerHTML = "Must be 10 digits";
		bool = false;
	}
	else
	{
		fax.style.border = null;
		document.getElementById("sfax").innerHTML = "";
	}

	//----------------------------------
	var email = document.getElementById("email");
	var vemail = email.value;
	if(vemail.trim() == "")
	{
		email.style.border = "solid 3px red";
		document.getElementById("semail").innerHTML = "Cannot be empty";
		bool = false;
	}
	else if(!/\S+@\S+\.\S+/.test(vemail))
	{
		email.style.border = "solid 3px red";
		document.getElementById("semail").innerHTML = "Not an email address";
		bool = false;
	}
	else
	{
		email.style.border = null;
		document.getElementById("semail").innerHTML = "";
	}

	//----------------------------------
	var da = document.getElementsByName("donation");
	if(!(da[0].checked || da[1].checked || da[2].checked || da[3].checked || da[4].checked || da[5].checked))
	{
		//da.style.border = "solid 3px red";
		document.getElementById("sda").innerHTML = "Must select one";
		bool = false;
	}
	else
	{
		//da.style.border = null;
		document.getElementById("sda").innerHTML = "";
	}

	//----------------------------------
	var amount = document.getElementById("amount");
	var vamount = amount.value;
	if(!/^[0-9 ]*$/.test(vamount))
	{
		amount.style.border = "solid 3px red";
		document.getElementById("samount").innerHTML = "Must contain numbers";
		bool = false;
	}
	else
	{
		amount.style.border = null;
		document.getElementById("samount").innerHTML = "";
	}

	//----------------------------------
	var amount2 = document.getElementById("amount2");
	var vamount2 = amount2.value;
	if(!/^[0-9 ]*$/.test(vamount2))
	{
		amount2.style.border = "solid 3px red";
		document.getElementById("samount2").innerHTML = "Must contain numbers";
		bool = false;
	}
	else
	{
		amount2.style.border = null;
		document.getElementById("samount2").innerHTML = "";
	}

	//----------------------------------
	var months = document.getElementById("months");
	var vmonths = months.value;
	if(!/^[0-9 ]*$/.test(vmonths))
	{
		months.style.border = "solid 3px red";
		document.getElementById("smonths").innerHTML = "Must contain numbers";
		bool = false;
	}
	else if(vmonths > 12)
	{
		months.style.border = "solid 3px red";
		document.getElementById("smonths").innerHTML = "Must be less then 12";
		bool = false
	}
	else
	{
		months.style.border = null;
		document.getElementById("smonths").innerHTML = "";
	}


	//----------------------------------
	var name1 = document.getElementById("name1");
	var vname1 = name1.value;
	if(!/^[a-zA-Z -]*$/.test(vname1))
	{
		name1.style.border = "solid 3px red";
		document.getElementById("sname1").innerHTML = "Must contain letters";
		bool = false;
	}
	else
	{
		name1.style.border = null;
		document.getElementById("sname1").innerHTML = "";
	}

	//----------------------------------
	var adt = document.getElementById("adt");
	var vadt = adt.value;
	if(!/^[a-zA-Z -]*$/.test(vadt))
	{
		adt.style.border = "solid 3px red";
		document.getElementById("sadt").innerHTML = "Must contain letters";
		bool = false;
	}
	else
	{
		adt.style.border = null;
		document.getElementById("sadt").innerHTML = "";
	}

	//----------------------------------
	var state2 = document.getElementById("state2");
	var vstate2 = state2.value;
	if(vstate2 == "")
	{
		state2.style.border = "solid 3px red";
		document.getElementById("sstate2").innerHTML = "Please select a state";
	}
	else
	{
		state2.style.border = null;
		document.getElementById("sstate2").innerHTML = "";
	}

	//----------------------------------
	var zc2 = document.getElementById("zc2");
	var vzc2 = zc2.value;
	if(!/^[0-9]*$/.test(vzc2))
	{
		zc2.style.border = "solid 3px red";
		document.getElementById("szc2").innerHTML = "Must contain unspaced numbers";
		bool = false;
	}
	else
	{
		zc2.style.border = null;
		document.getElementById("szc2").innerHTML = "";
	}

	//----------------------------------
	var name2 = document.getElementById("name2");
	var vname2 = name2.value;
	if(!/^[a-zA-Z -]*$/.test(vname2))
	{
		name2.style.border = "solid 3px red";
		document.getElementById("sname2").innerHTML = "Must contain letters";
		bool = false;
	}
	else
	{
		name2.style.border = null;
		document.getElementById("sname2").innerHTML = "";
	}

	return bool;
}