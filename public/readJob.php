<?php
include('conndb.php');

if(!empty($_POST["keyword"])) {
	$query ="SELECT DISTINCT j_name FROM job_tbl WHERE j_name like '" . $_POST["keyword"] . "%' ORDER BY j_name LIMIT 0,6";
	$result = $conn->query($query);
	$sql = ("SELECT COUNT(j_id) FROM job_tbl WHERE j_name like '" . $_POST["keyword"] . "%' ");
	$rs = $conn->query($sql);
	$rst = mysqli_fetch_array($rs);
	if(!empty($result)) {
?>
		<ul id="job-list">
		<?php
		while($row = $result->fetch_assoc()) {
		?>
		<li onClick="selectJob('<?php echo $row["j_name"]; ?>');">
			<?php echo $row["j_name"]; ?>&nbsp;<span style="color:#00C244;"><?php echo $rst[0]; ?> Job Post(s)</span>
		</li>
		<?php 
		} ?>
		</ul>
	<?php 
	}
} 
?>