


function inputValidation()
{
	var guitarNum = document.getElementById("guitar").value;
	var mandolinNum = document.getElementById("mandolin").value;
	var banjoNum = document.getElementById("banjo").value;
	var user = document.getElementById("user").value;
	var pass = document.getElementById("pass").value;

	if((guitarNum >= 0) &&
	   (mandolinNum >= 0) &&
	   (banjoNum >= 0))
	{
		if(userNameCheck(user) == true)
		{
			if(document.getElementById("radio1").checked == true ||
			   document.getElementById("radio2").checked == true ||
			   document.getElementById("radio3").checked == true)
			{
				return true;
			}
			else
			{
				alert("You must choose a shipping option!");
				return false;
			}
		}
		else
		{
			alert("Must enter a valid username (email address) and password!");
			return false;
		}
	}
	else
	{
		alert("Intrument quantities must be positive, whole numbers!");
		return false;
	}
}

function userNameCheck(name)
{
	var atSymbol = 0;
	var hasCom = false;

	if(name.length > 0)
	{
		if(name[0] == '@')
		{
			return false;
		}
		for(var i = 0; i < name.length; i++)
		{
			if(name[i] == '@')
			{
				atSymbol++;
			}
		}
		if((name[name.length-1] == 'm') && (name[name.length-2] == 'o') &&
		   (name[name.length-3] == 'c') && (name[name.length-4] == '.'))
		{
			hasCom = true;
		}	
	}
	else
	{
		return false;
	}
	if(atSymbol == 1 && hasCom == true)
	{
		return true;
	}
	else
	{
		return false;
	}
}
