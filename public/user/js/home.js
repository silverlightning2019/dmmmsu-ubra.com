$(document).ready(function(){

	//DISPLAY FUNCTION FROM HOME
	if($("#j_name")!=""){
		var j_name=$("#j_name").get(0).value;
		$.post("http://www.localhost/dmmmsu-ubra.com/public/search",JSON.stringify({
			j_name: j_name
		}),
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
			$("#data").get(0).innerHTML=row
			console.log(JSON.parse(data));
		});
	}
	
});