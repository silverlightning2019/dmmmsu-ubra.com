$(document).ready(function(){
	$("#register").click(function(){
		var emp_id=$("#emp_id").get(0).value;
		var emp_uname=$("#emp_uname").get(0).value;
		var emp_pass=$("#emp_pass").get(0).value;
		var emp_cpass=$("#emp_cpass").get(0).value;
		var emp_name=$("#emp_name").get(0).value;
		var emp_brand=$("#emp_brand").get(0).value;
		var tax_id=$("#tax_id").get(0).value;
		var emp_type=$("#emp_type").get(0).value;
		var emp_num=$("#emp_num").get(0).value;
		var emp_municipal=$("#emp_municipal").get(0).value;
		var emp_province=$("#emp_province").get(0).value;
		var emp_barangay=$("#emp_barangay").get(0).value;
		var emp_person=$("#emp_person").get(0).value;
		var emp_position=$("#emp_position").get(0).value;
		var emp_telephone=$("#emp_telephone").get(0).value;
		var emp_mobile=$("#emp_mobile").get(0).value;
		var emp_email=$("#emp_email").get(0).value;

		$.post("http://www.localhost/ubra/public/employer/register",JSON.stringify ({
			emp_id: emp_id,
			emp_uname: emp_uname,
			emp_pass: emp_pass,
			emp_cpass: emp_cpass,
			emp_name: emp_name,
			emp_brand: emp_brand,
			tax_id: tax_id,
			emp_type: emp_type,
			emp_num: emp_num,
			emp_municipal: emp_municipal,
			emp_province: emp_province,
			emp_barangay: emp_barangay,
			emp_person: emp_person,
			emp_position: emp_position,
			emp_telephone: emp_telephone,
			emp_mobile: emp_mobile,
			emp_email: emp_email,
		}),
		function(data,status){
			alert("Data: " + data + "\nStatus: " + status);
			var json=JSON.parse(data);
			if(json.status=="success"){
				self.location="http://localhost/ubra/public/index.php";
			}else{
				alert(json.data.title);
				self.location="http://localhost/ubra/public/index.php";
			}
		});
	});

	$("#login").click(function(){
		$(".error").hide();
        var hasError = false;
		var emp_uname=$("#emp_uname").get(0).value;
		var emp_pass=$("#emp_pass").get(0).value;

		if(emp_uname == '') {
            $("#emp_uname").after('<span class="error">Please enter your username.</span>');
            hasError = true;
        }
		if(emp_pass == '') {
            $("#emp_pass").after('<span class="error">Please enter your password.</span>');
            hasError = true;
        }

		if(hasError == true)
		{
			return false; 
		}

		$.post("http://localhost/ubra/public/employer/login",JSON.stringify({
				emp_uname:emp_uname,	
				emp_pass:emp_pass
		}),
		function(data, status)
		{
			alert("Data: " + data + "\nStatus: " + status);
			var json=JSON.parse(data);
			if(json.status=="success"){
					self.location="http://localhost/ubra/public/employer/home.php";
			}else{
				alert(json.data.title);
			}
		});
	});

	$("#chpass").click(function(){
		$(".error").hide();
        var hasError = false;

		var emp_pass = $("#emp_pass").val();
		var password1 = $("#password1").val();
		var password2 = $("#password2").val();
        var password3 = $("#password3").val();
        var passReg =  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
		
		if(password1 == '') {
            $("#password1").after('<span class="error">Please enter your old password.</span>');
            hasError = true;
        }

		else{
			if(password1 != emp_pass) {
				$("#password1").after('<span class="error">Invalid old password.</span>');
				hasError = true;
			}
		}
		
		if(password2 == '') 
        {
            $("#password2").after('<span class="error">Please enter your new password.</span>');
            hasError = true;
        }
        else
        {
        	if(!passReg.test(password2)) 
        	{
            	$("#password2").after('<span class="error">Enter a valid password.</span>');
            	hasError = true;
        	}
        }
       	if(password3 == '') 
        {
	        $("#password3").after('<span class="error">Please enter again your new password.</span>');
	        hasError = true;
        }
        else{
	        if(password2 != password3) 
	        {
	            $("#password3").after('<span class="error">Password do not match</span>');
	            hasError = true;
	       	}
        }
        if(hasError == true)
		{
			return false; 
		}
		var emp_id=$("#emp_id").get(0).value;
		var emp_pass=$("#emp_pass").get(0).value;
		var password1=$("#password1").get(0).value;
		var password2=$("#password2").get(0).value;
		var password3=$("#password3").get(0).value;
		$.post("http://localhost/ubra/public/employer/changepass",
			JSON.stringify(
			{
				emp_id:emp_id,
				emp_pass:emp_pass,
				password1:password1,
				password2:password2,
				password3:password3
			}),
			function(data, status)
			{
				alert("Data: " + data + "\nStatus: " + status);
				var json=JSON.parse(data);
				if(json.status=="success"){
					self.location="http://localhost/adamtech/public/profile.php";

				}else{
					alert(json.data.title);
					self.location="http://localhost/adamtech/public/change.php";
				}
			});
	});

	$("#editp").click(function(){
		$("input").prop('disabled', false);
	});

	$("#closep").click(function(){
		$("input").prop('disabled', true);
	});

	$("#updatep").click(function(){
		var emp_id=$("#emp_id").get(0).value;
		var emp_uname=$("#emp_uname").get(0).value;
		var emp_name=$("#emp_name").get(0).value;
		var emp_brand=$("#emp_brand").get(0).value;
		var tax_id=$("#tax_id").get(0).value;
		var emp_type=$("#emp_type").get(0).value;
		var emp_num=$("#emp_num").get(0).value;
		var emp_municipal=$("#emp_municipal").get(0).value;
		var emp_province=$("#emp_province").get(0).value;
		var emp_barangay=$("#emp_barangay").get(0).value;
		var emp_person=$("#emp_person").get(0).value;
		var emp_position=$("#emp_position").get(0).value;
		var emp_telephone=$("#emp_telephone").get(0).value;
		var emp_mobile=$("#emp_mobile").get(0).value;
		var emp_email=$("#emp_email").get(0).value;

		$.post("http://www.localhost/ubra/public/employer/updatep",JSON.stringify ({
			emp_id: emp_id,
			emp_uname: emp_uname,
			emp_name: emp_name,
			emp_brand: emp_brand,
			tax_id: tax_id,
			emp_type: emp_type,
			emp_num: emp_num,
			emp_municipal: emp_municipal,
			emp_province: emp_province,
			emp_barangay: emp_barangay,
			emp_person: emp_person,
			emp_position: emp_position,
			emp_telephone: emp_telephone,
			emp_mobile: emp_mobile,
			emp_email: emp_email,
		}),
		function(data,status){
			alert("Data: " + data + "\nStatus: " + status);
			var json=JSON.parse(data);
			if(json.status=="success"){
				self.location="http://localhost/ubra/public/employer/home.php";
			}else{
				alert(json.data.title);
				self.location="http://localhost/ubra/public/employer/home.php";
			}
		});
	});

	$("#postjob").click(function(){
		$(".error").hide();
        var hasError = false;
		var job_id=$("#job_id").get(0).value;
		var job_position=$("#job_position").get(0).value;
		var job_location=$("#job_location").get(0).value;
		var employer=$("#employer").get(0).value;
		var available=$("#available").get(0).value;

		if(job_position == '') {
            alert("Please enter a Job Position");
            hasError = true;
        }
		else if (available == '') {
            alert("Please enter number of available spots for job.");
            hasError = true;
        }

		if(hasError == true)
		{
			return false; 
		}

		$.post("http://www.localhost/ubra/public/employer/postjob",JSON.stringify ({
			job_id: job_id,
			job_position: job_position,
			job_location: job_location,
			employer: employer,
			available: available
		}),
		function(data,status){
			var json=JSON.parse(data);
			if(json.status=="success"){
				self.location="http://localhost/ubra/public/employer/company-job-registration-qualifications.php";
			}else{
				alert(json.data.title);
				self.location="http://localhost/ubra/public/employer/home.php";
			}
		});
	});

	$("#addnotes").click(function(){
		var job_id=$("#job_id").get(0).value;
		var notes=$("#notes").get(0).value;

		$.post("http://www.localhost/ubra/public/employer/addnotes",JSON.stringify ({
			job_id: job_id,
			notes: notes
		}),
		function(data,status){
			alert("Data: " + data + "\nStatus: " + status);
			var json=JSON.parse(data);
			if(json.status=="success"){
				self.location="http://localhost/ubra/public/employer/home.php";
			}else{
				alert(json.data.title);
				self.location="http://localhost/ubra/public/employer/home.php";
			}
		});
	});

	$("#updatejob").click(function(){
		var job_id=$("#job_id").get(0).value;
		var job_position=$("#job_position").get(0).value;
		var job_location=$("#job_location").get(0).value;
		var employer=$("#employer").get(0).value;
		var available=$("#available").get(0).value;

		$.post("http://www.localhost/ubra/public/employer/updatejob",JSON.stringify ({
			job_id: job_id,
			job_position: job_position,
			job_location: job_location,
			employer: employer,
			available: available
		}),
		function(data,status){
			alert("Data: " + data + "\nStatus: " + status);
			var json=JSON.parse(data);
			if(json.status=="success"){
				self.location="http://localhost/ubra/public/employer/edit-job-qualifications.php";
			}else{
				alert(json.data.title);
				self.location="http://localhost/ubra/public/employer/edit-job-qualifications.php";
			}
		});
	});

	$("#updatenotes").click(function(){
		var job_id=$("#job_id").get(0).value;
		var notes=$("#notes").get(0).value;

		$.post("http://www.localhost/ubra/public/employer/updatenotes",JSON.stringify ({
			job_id: job_id,
			notes: notes
		}),
		function(data,status){
			alert("Data: " + data + "\nStatus: " + status);
			var json=JSON.parse(data);
			if(json.status=="success"){
				self.location="http://localhost/ubra/public/employer/job-registered.php";
			}else{
				alert(json.data.title);
				self.location="http://localhost/ubra/public/employer/job-registered.php";
			}
		});
	});



});