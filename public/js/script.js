$(document).ready(function(){
	$("#register").click(function(){
		var app_id=$("#app_id").get(0).value;
		var fname=$("#fname").get(0).value;
		var mname=$("#mname").get(0).value;
		var lname=$("#lname").get(0).value;
		var uname=$("#uname").get(0).value;
		var email=$("#email").get(0).value;
		var pass1=$("#pass1").get(0).value;
		var pass2=$("#pass2").get(0).value;
		$.post("http://www.localhost/dmmmsu-ubra.com/public/register",JSON.stringify ({
			app_id: app_id,
			fname: fname,
			mname: mname,
			lname: lname,
			uname: uname,
			email: email,
			pass1: pass1,
			pass2: pass2
		}),
		function(data,status){
			alert("Data: " + data + "\nStatus: " + status);
			var json=JSON.parse(data);
			if(json.status=="success"){
				self.location="http://localhost/dmmmsu-ubra.com/public/index.php";
			}else{
				alert(json.data.title);
				self.location="http://localhost/dmmmsu-ubra.com/public/index.php";
			}
		});
	});

	$("#login").click(function(){
		var email=$("#email").get(0).value;
		var psword=$("#psword").get(0).value;
		$.post("http://localhost/dmmmsu-ubra.com/public/login",JSON.stringify({
				email:email,	
				psword:psword
		}),
		function(data, status)
		{
			var json=JSON.parse(data);
			if(json.status=="success"){
				if(email=="admin"){
					self.location="http://localhost/dmmmsu-ubra.com/public/admin.php";
				}else{
					self.location="http://localhost/dmmmsu-ubra.com/public/home.php";
				}
			}else{
				alert(json.data.title);
			}
		});
	});
	
	$("#apply").click(function(){
		var apply=$("#apply").get(0).value;
		$.post("http://www.localhost/dmmmsu-ubra.com/public/register",JSON.stringify ({
			apply: apply
		}),
		function(data,status){
			alert("Data: " + data + "\nStatus: " + status);
			var json=JSON.parse(data);
			if(json.status=="success"){
				self.location="http://localhost/dmmmsu-ubra.com/public/pass.php";
			}else{
				alert(json.data.title);
				self.location="http://localhost/dmmmsu-ubra.com/public/pass.php";
			}
		});
	});
	
	
});