$(document).ready(function(){
	
// start courses-cogs
$.post("http://www.localhost/test/public/jobtable",
function(data, status){	
var json=JSON.parse(data);
var row=""
for(var i=0;i<json.data.length;i++){
		row=row+"<tr><td>"+json.data[i].j_name+"</td><td>"+json.data[i].j_location+"</td><td>"+json.data[i].j_organization+"</td><td>"+json.data[i].j_count+"</td><td>"+
		json.data[i].j_id+"</td></tr>";}	
		$("#j_data").get(0).innerHTML=row;
		console.log(JSON.parse(data));
		

});

});