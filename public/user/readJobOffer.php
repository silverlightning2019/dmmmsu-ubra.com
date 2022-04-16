<?php
include('conndb.php');

if(!empty($_POST["keyword"])) {
	$query ="SELECT DISTINCT j_name FROM job_tbl WHERE j_name like '" . $_POST["keyword"] . "%' ORDER BY j_name LIMIT 0,6";
	$result = $conn->query($query);
	if(!empty($result)) {
?>
		<ul id="job-list">
		<?php
		while($row = $result->fetch_assoc()) {
		?>
		<li onClick="selectJob('<?php echo $row["j_name"]; ?>');">
			<?php echo $row["j_name"]; ?>
		</li>
		<?php 
		} ?>
		</ul>
	<?php 
	}
}

if(!empty($_POST["keyword1"])) {
	$query ="SELECT DISTINCT j_specialization FROM job_tbl WHERE j_specialization like '" . $_POST["keyword1"] . "%' ORDER BY j_name LIMIT 0,6";
	$result = $conn->query($query);
	if(!empty($result)) {
?>
		<ul id="job-list">
		<?php
		while($row = $result->fetch_assoc()) {
		?>
		<li onClick="selectSpecialization('<?php echo $row["j_specialization"]; ?>');">
			<?php echo $row["j_specialization"]; ?>
		</li>
		<?php 
		} ?>
		</ul>
	<?php 
	}
}  
?>