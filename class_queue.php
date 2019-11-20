<head>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="assets/style.css"/>
	<script language="javascript">
		$("#checkAll").click(function(){
			$('#add').prop('checked', this.checked);
		});
	</script>
</head>
<html>
	<body>
		<h2> Class Queue </h2>
		<table class="table table-striped table-bordered" style="width:initial">
			<thead>
				<tr>
					<th></th>
					<th><input type="checkbox" id='checkAll'></th>
					<th>Term</th>
					<th>Section</th>
					<th>Class Name</th>
					<th>Time</th>
					<th>Available</th>
					<th>Credits</th>
					<th>Remove</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$classes = array(
					array(
						'id' => 'CSIS 125-01',
						'name' => 'Computer Science Principles',
						'days' => 'MWF',
						'time' => '12:00pm - 12:50pm',
						'available' => 4,
						'credits' => 3,
						'link' => 'http://catalog.olivet.edu/preview_course_nopop.php?catoid=5&coid=10785'
					),
					array(
						'id' => 'CSIS 251-01',
						'name' => 'Principles of Programming I',
						'days' => 'MWF',
						'time' => '11:00am - 11:50am',
						'available' => 4,
						'credits' => 4,
						'prof' => 'L. Vail',
						'location' => 'Weber Center, Room 002',
						'duration' => '8/1/2017 - 12/15/2017',
						'capacity' => '16 / 20',
						'error' => 'Missing required prerequisite CSIS 125',
						'link' => 'http://catalog.olivet.edu/preview_course_nopop.php?catoid=5&coid=9144'
					),
					array(
						'id' => 'CSIS 311-01',
						'name' => 'Discrete Math',
						'days' => 'TR',
						'time' => '1:00pm - 2:15pm',
						'available' => 6,
						'credits' => 3,
						'link' => 'http://catalog.olivet.edu/preview_course_nopop.php?catoid=5&coid=9150'
					),
					array(
						'id' => 'MATH 147-02',
						'name' => 'Calculus I',
						'days' => 'MTWRF',
						'time' => '8:00am - 8:50am',
						'available' => 0,
						'credits' => 4,
						'error' => 'Class is full',
						'link' => 'http://catalog.olivet.edu/preview_course_nopop.php?catoid=5&coid=9608'
					)
				);
				foreach($classes as $class) {
					echo '<tr>';
					$open = isset($class['prof']);
					$chev = $open ? "chevron-down" : "chevron-right";
					echo "<td><i class='fa fa-$chev'></i></td>";
					echo "<td><input type='checkbox' id='add'></td>";
					echo '<td>Spring 2018</td>';
					$error = isset($class['error']) ? "<i class='fa fa-exclamation-triangle' title='$class[error]'></i>" : null;
					echo "<td>$class[id] $error</td>";
					echo "<td><a href='$class[link]'>$class[name]</a></td>";
					echo "<td>$class[days] $class[time]</td>";
					echo "<td>$class[available]</td>";
					echo "<td><input type='number' class='form-control' value='$class[credits]' min=0 max='$class[credits]' style='width:60px'/></td>";
					echo "<td><a class='btn btn-danger' href='#' ><i class='fa fa-times'></i></a></td>";
					echo '</tr>';
					if($open) {
						echo "<tr><td colspan='10'><dl class='dl-horizontal'>";
						echo "<dt>Duration:</dt><dd>$class[duration]</dd>";
						echo "<dt>Location:</dt><dd>$class[location]</dd>";
						echo "<dt>Faculty:</dt><dd>$class[prof]</dd>";
						echo "<dt>Total Capacity:</dt><dd>$class[capacity]</dd>";
						echo '</dl></td></tr>';
					}
				} ?>
			</tbody>
		</table>
		<a class="btn btn-primary" href="current_classes.php"
				onclick="return confirm('* CSIS 251: Principles of Programming I could not be registered. You must take CSIS 125 or have other programming experience first.\n* Calculus I could not be registered, the section is full\n\nDo you want to register the remaining classes?')">
			<i class="fa fa-check"></i>
			Register
		</a>
		<a class="btn btn-primary" href="assets/addslip.docx">
			<i class="fa fa-plus"></i>
			Generate Add Slip
		</a>
	</body>
</html>
