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
	
	//DISPLAY JOB CATEGORY HOME
	$.post("http://www.localhost/dmmmsu-ubra.com/public/category",
	function(data, status){
		var json=JSON.parse(data);
		var row="";
		for(var i=0;i<json.data.length;i++){
			row=row+"<div class='col s12 m6 l4'>"+
						"<div class='card hoverable'>"+
							"<div class='card-content' style='padding: 10px 10px 10px 10px;'>"+
								"<h2 class='center light-blue-text'><i class='material-icons'>work</i></h2>"+
								"<h5 class='center black-text'>"+json.data[i].j_category+"</h5>"+
								"<p class='center black-text'>( Jobs)</p><br>"+
								"<center><button type='submit' name='showCat' id='showCat' value='"+json.data[i].j_category+"' class='waves-effect btn-flat'>Show Details</button></center>"+
							"</div>"+		
						"</div>"+		
					"</div>";
			}	
		$("#data").get(0).innerHTML=row
		console.log(JSON.parse(data));
	});
	
	//DISPLAY JOB CATEGORY HOME
	$.post("http://www.localhost/dmmmsu-ubra.com/public/featured",
	function(data, status){
		var json=JSON.parse(data);
		var row="";
		for(var i=0;i<json.data.length;i++){
			row=row+"<div class='col s12 m6 l4'>"+
						"<div class='card hoverable'>"+
							"<div class='card-image left-align'>"+
								"<img src='img/"+json.data[i].j_img+"'>"+
							"</div>"+
							"<div class='card-content' style='padding: 10px 10px 10px 10px;'>"+
								"<p class='job'>"+json.data[i].j_name+"</p>"+
								"<i class='material material-icons'>work</i>"+json.data[i].j_specialization+"<br>"+
								"<i class='material material-icons'>place</i>"+json.data[i].j_location+"<br>"+
								"<i class='material material-icons'>business</i>"+json.data[i].j_organization+"<br>"+
								"<i class='material material-icons'>check_circle_outline</i>"+json.data[i].j_count+"<br>"+
								"<center><button name='show' value='"+json.data[i].j_id+"' class='waves-effect btn-flat'>Show Details</button></center>"+
							"</div>"+		
						"</div>"+		
					"</div>";
			}	
		$("#featured").get(0).innerHTML=row
		console.log(JSON.parse(data));
	});
	
});