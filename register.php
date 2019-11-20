<head>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="assets/style.css"/>
</head>
<html>
	<body>
		<h2> <a style="color:black" href="search.php">Express Registration</a></h2>
		<div class="form-group pull-left" style="padding-right: 10px">
			<label><b>Term</b></label>
			<select class="form-control" style="width:initial">
				<option value="fa2017">Fall 2017</option>
				<option value="sp2018" selected>Spring 2018</option>
				<option value="sm2018">Summer 2018</option>
			</select>
		</div>
		<div style='clear:both'></div>
		<table class="table table-striped table-bordered" style="width:initial">
			<thead>
				<tr>
					<th>Synonym</th>
					<th>Department</th>
					<th>Class ID</th>
					<th>Section</th>
				</tr>
			</thead>
			<tbody>
				<?php for($i = 1; $i <= 5; $i++) { ?>
				<tr>
					<td><input type="number" class="form-control" style="width:100px"/></td>
					<td><select class="form-control">
						<option value=""></option>
						<option value="BSNS">Business</option>
						<option value="CSIS">Computer Science</option>
						<option value="ENGR">Engineering</option>
						<option value="MATH">Mathematics</option>
						<option value="THEO">Theology</option>
					</select></td>
					<td><select class="form-control">
						<option value=""></option>
						<?php foreach(array(125, 251, 280, 310, 326, 340, 453, 491, 492, 494) as $classID) {
							echo "<option value='$classID'>$classID</option>";
						} ?>
					</select></td>
					<td><select class="form-control">
						<option value=""></option>
						<?php foreach(array(1, 2, 3) as $classID) {
							echo "<option value='$classID'>$classID</option>";
						} ?>
					</select></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<a href="class_queue.php" class="btn btn-primary">
			<i class="fa fa-search"></i>
			Add To Queue
		</a>
		<a href="#" class="btn btn-primary">
			<i class="fa fa-plus"></i>
			Add Row
		</a>
	</body>
</html>
