function check_pass()
{
	var pass=document.getElementById("password").value;
	var conf_pass=document.getElementById("conf_password").value;
     /* if(pass.length<6)	
	 {
		 
		 $.ajax({
		type: 'GET',
		url: 'sign_up_validate.php',
		data: {pass:pass},
		success: function(data)
		{
			if(data!="valid")
			{
		
			$("#error_msg").html(data);
			return false;
			}
			else
				return true;
		}
		
	}
	);
	 }
	 else
		 alert("b smc");
	
	 */
		 if(pass.length<6)
	{
				document.getElementById("error_msg").innerHTML="enter a password of atleast 6 characters"; 
		return false;
	}
	
		
		else 
		{
			document.getElementById("error_msg").innerHTML=""; 
			return true;
		}
	
	 
}


function check_conf_pass()
{
	var pass=document.getElementById("password").value;
	var conf_pass=document.getElementById("conf_password").value;
	
	/* $.ajax({
		type: 'GET',
		url: 'conf_pass_validate.php',
		data: {pass:pass,conf_pass:conf_pass},
		success: function(data)
		{
			if(data!="valid")
			{
			$("#error1_msg").html(data);
			return false;
			}
			else
			{
				alert("bjkm");
				return true;
			}			
		}
		
	}
	);
	 */
if(pass!=conf_pass)
	{
		document.getElementById("error1_msg").innerHTML="password and confirm password does not match"; 
		return false;
		
	}
	else 
	{
		document.getElementById("error1_msg").innerHTML=""; 
		return true;
	}

	}
        
        function gender_check(){
           
            if(document.signup.gender.value == ""){
               document.getElementById("error2_msg").innerHTML="please select gender";
               return false;
            }
            else
            {
                document.getElementById("error2_msg").innerHTML="";
                return true;
            }
        }