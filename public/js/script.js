$(document).ready(function(){
	$("#login").click(function(){
		var type=$("#type").get(0).value;
		var id_num=$("#id_num").get(0).value;
		var psword=$("#psword").get(0).value;
		$.post("http://localhost/enrollment/public/login",JSON.stringify({
				id_num:id_num,	
				psword:psword,
				type:type
		}),
		function(data, status)
		{
			var json=JSON.parse(data);
			if(json.status=="success"){
				if(type=="registrar"){
					self.location="http://localhost/enrollment/public/home.php";
				}
				else if(type=="cashier"){
					self.location="http://localhost/enrollment/public/cashier.php";
				}
				else{
					self.location="http://localhost/enrollment/public/ahome.php";
				}
			}else{
				alert(json.data.title);
			}
		});
	});
});