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
		var emp_uname=$("#emp_uname").get(0).value;
		var emp_pass=$("#emp_pass").get(0).value;
		$.post("http://localhost/ubra/public/employer/login",JSON.stringify({
				emp_uname:emp_uname,	
				emp_pass:emp_pass
		}),
		function(data, status)
		{
			var json=JSON.parse(data);
			if(json.status=="success"){
					self.location="http://localhost/ubra/public/employer/home.php";
			}else{
				alert(json.data.title);
			}
		});
	});
});