<DOCTYPE! html>
<Html>
<head>
<meta charsset="utf-8">

<meta name="viewpoint" content="width=device-width, initial-scale=1"> 
<title>The Profiles </title>

<script src="asset/js/jquery.min.js"></script>
<link rel="stylesheet"  href="asset/jquery.dataTables.css"/> 
<link rel="stylesheet"  href="asset/jquery.dataTables.js"/> 
<link rel="stylesheet"  href="asset/jquery.dataTables.min.css"/> 
<link rel="stylesheet" href="asset/css/solid.css">
<link rel="stylesheet" href="asset/css/bootstrap.css">
<link rel="stylesheet" href="asset/css/fontawesome.css">
<link rel="stylesheet"  href="asset/datatables.min.css"/>  
<link rel="stylesheet" href="asset/css/bootstrap.min.css">

<script src="asset/js/jquery-3.6.0.js"></script>
<script src="asset/js/bootstrap.js"></script>
<script src="asset/datatables.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
<script src="asset/jquery.dataTables.min.js"></script>
<script src="asset/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" src="asset/js/solid.js"></script>
<script type="text/javascript" src="asset/js/fontawesome.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
    $('#example1').DataTable();
} );
</script>

<style type="text/css">
	
.table-borderless > tbody > tr > td,
.table-borderless > tbody > tr > th,
.table-borderless > tfoot > tr > td,
.table-borderless > tfoot > tr > th,
.table-borderless > thead > tr > td,
.table-borderless > thead > tr > th {
    border: none;
}	
</style>
</head>
<body style="background-image: url('bg2.jpg'); /*background-repeat: no-repeat;*/">

<!-- Topbar -->
<nav class="navbar navbar-expand-lg fixed-top"  style="background-color: #e3f2fd;"> 
	<div class="narbar-brand"><img src="../pulogo1.png" height="40px" width="120px"></div>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#togglemenu" aria-controls="#togglemenu" aria-expanded="false">
		<span class="navbar-toggler-icon"></span>
	</button>
	
	<div class="collapse navbar-collapse" id="togglemenu">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item"><a class="nav-link"><span class="fa fa-user"></span></a></li>
			<li class="nav-item"><a class="nav-link"><span class="fa fa-edit"></span></a></li>
		</ul>
	</div>
</nav>
<!-- end Topbar -->

<!-- Start Table  -->

<div class="container" style="margin-top: 5rem;">
	<div>
		<div>
			<table id="example1" class="table">
				<thead>
					<tr>
						<th>Photo</th>
						<th>Names</th>
						<th>Designation</th>
						<th>Department/School</th>
						<th>Edit</th>
					</tr>
				</thead>
<?php

$sql = mysqli_query($connection, "SELECT * FROM profile_info ORDER BY id DESC") OR die(mysqli_error($connection));

while ($row = mysqli_fetch_array($sql)) {
	// code...
	$id = $row['id'];
	$photo = "../user/passports/".$row['passport'];
	$names = $row['initials']."&nbsp".$row['sir_name']. "&nbsp".$row['f_name'];
	$des = $row['designation'];
	$dep = $row['depart'];


?>
				<tbody>
					<tr>
						<td><img src="<?php echo "$photo"; ?>" height="50px" weidth="80px"></td>
						<td><?php echo "$names"; ?></td>
						<td><?php echo "$des"; ?></td>
						<td><?php echo "$dep"; ?></td>
						<td><?php echo "$id"; ?></td>
					</tr>
				</tbody>
<?php
}

?>
			</table>
		</div>
	</div>
</div>


<!-- end Table  -->

</body>

</html>
