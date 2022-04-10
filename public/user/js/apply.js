$(document).ready(function(){	
	
	//DISPLAY FUNCTION FROM JOB
	if($("#show")!=""){
		var show=$("#show").get(0).value;
		$.post("http://www.localhost/dmmmsu-ubra.com/public/job-apply",JSON.stringify({
			show: show
		}),
		function(data, status){
			var json=JSON.parse(data);
			var row="";
			for(var i=0;i<json.data.length;i++){
			row=row+"<div class='card-image left-align'>"+
						"<img src='img/"+json.data[i].j_img+"'>"+
					"</div>"+
					"<div class='card-content' style='padding: 10px 10px 10px 10px;'>"+
					"<p class='job'>"+json.data[i].j_name+"</p>"+
					"<i class='material material-icons'>work</i>"+json.data[i].j_specialization+"<br>"+
					"<i class='material material-icons'>place</i>"+json.data[i].j_location+"<br>"+
					"<i class='material material-icons'>business</i>"+json.data[i].j_organization+"<br>"+
					"<i class='material material-icons'>check_circle_outline</i>"+json.data[i].j_count+"<br>";
			}	
			$("#data").get(0).innerHTML=row
			console.log(JSON.parse(data));
		});
	}
	
	var id="";
	//SAVE FUNCTION
	$("#show").click(function(){
		var show=$("#show").get(0).value;
		$.post("http://www.localhost/dmmmsu-ubra.com/public/apply-save",
		JSON.stringify({
					show: show
				}),
			function(data,status){
		alert("Data: " + data + "\nStatus: " + status);
		});
	});
	
});