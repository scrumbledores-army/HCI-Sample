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
		<h2> Advanced Search </h2>
		<h4> Term and dates </h4>
		<div class="form-group pull-left" style="padding-right: 10px">
			<label><b>Term</b></label>
			<select class="form-control" style="width:initial">
				<option value="fa2017">Fall 2017</option>
				<option value="sp2018" selected>Spring 2018</option>
				<option value="sm2018">Summer 2018</option>
			</select>
		</div>
		<div class="form-group pull-left" style="padding-right: 10px">
			<label><b>Start Date</b></label>
			<input type="text" class="form-control"/>
		</div>
		<div class="form-group pull-left" style="padding-right: 10px">
			<label><b>End Date</b></label>
			<input type="text" class="form-control"/>
		</div>
		<div class="form-group pull-left">
			<label><b>Show</b></label>
			<select class="form-control" selected="both" style="width:initial">
				<option value="both">All Classes</option>
				<option value="campus">On campus</option>
				<option value="online">Online only</option>
			</select>
		</div>
		<div style="clear:both"></div>

		<h4> Class </h4>
		<div class="form-group pull-left" style="padding-right: 10px">
			<label><b>Department</b></label>
			<select class="form-control">
				<option value=""></option>
				<option value="BSNS">Business</option>
				<option value="CSIS">Computer Science</option>
				<option value="ENGR">Engineering</option>
				<option value="MATH">Mathematics</option>
				<option value="THEO">Theology</option>
			</select>
		</div>
		<div class="form-group pull-left" style="padding-right: 10px">
			<label><b>Class Level</b></label>
			<select class="form-control select-group">
				<option value=""></option>
				<option class="group" value="UG">Undergraduate</option>
					<option value="100">First Yr</option>
					<option value="200">Second Year</option>
					<option value="300">Third Year</option>
					<option value="400">Fourth Year</option>``
				<option class="group" value="TR">Transfer</option>
					<option value="1">One level below</option>
					<option value="2">Two levels below</option>
					<option value="3">Three levels below</option>
					<option value="3+">Four Levels below</option>
			  <option class="group" value="GR">Graduate</option>
					<option value="500">Graduate</option>
					<option value="900">Doctoral</option>
					<option value="SR">Senior</option>
					<option value="CE">Continuing Ed</option>
					<option value="REM">Remedial</option>
				<option class="group" value="OC">Occupational</option>
					<option value="A">Apprenticeship</option>
					<option value="B">Advanced</option>
					<option value="C">Clearly</option>
					<option value="D">Possibly</option>
					<option value="E">Non-Occupational</option>
					<option value="ET">Employee Training</option>
			</select>
		</div>
		<div class="form-group pull-left" style="padding-right: 10px">
			<label><b>Class ID</b></label>
			<input type="number" class="form-control" style="width:100px"/>
		</div>
		<div class="form-group pull-left" style="padding-right: 10px">
			<label><b>Class Name</b></label>
			<input type="text" class="form-control"/>
		</div>
		<div style='clear:both'></div>

		<h4> Weekday and time </h4>
		<div class="form-group pull-left" style="padding-right: 10px">
			<label><b>Meeting after</b></label>
			<input type="text" class="form-control" style="width:125px"/>
		</div>
		<div class="form-group pull-left" style="padding-right: 10px">
			<label><b>Meeting before</b></label>
			<input type="text" class="form-control" style="width:125px"/>
		</div>
		<div class="form-group pull-left" style="padding-right: 10px">
			<label><b>Weekday</b></label>
			<br>
			<p>
				<label style="padding-right: 15px"><input type="checkbox"/> Sun</label>
				<label style="padding-right: 15px"><input type="checkbox" checked/> Mon</label>
				<label style="padding-right: 15px"><input type="checkbox" checked/> Tue</label>
				<label style="padding-right: 15px"><input type="checkbox" checked/> Wed</label>
				<label style="padding-right: 15px"><input type="checkbox" checked/> Thur</label>
				<label style="padding-right: 15px"><input type="checkbox" checked/> Fri</label>
				<label style="padding-right: 15px"><input type="checkbox"/> Sat</label>
		  </p>
		</div>
		<div style='clear:both'></div>
		<br>
		<a href="search_results.php" class="btn btn-primary">
			<i class="fa fa-search"></i>
			Search
		</a>
	</body>
</html>
