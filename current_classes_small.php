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
		<h2> <a style="color:black" href="current_classes.php">Current Classes</a>
			<small>(<a href="calendar.png">calendar</a>)</small>  </h2>
		<table class="table table-striped table-bordered" style="width:initial">
			<thead>
				<tr>
					<th></th>
					<th>Drop</th>
					<th>Section</th>
					<th>Class Name</th>
					<th>Credits</th>
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
						'credits' => 3,
						'prof' => 'C. Bareiss',
						'location' => 'Weber Center, Room 325',
						'duration' => '8/1/2017 - 12/15/2017',
						'link' => 'http://catalog.olivet.edu/preview_course_nopop.php?catoid=5&coid=10785'
					),
					array(
						'id' => 'CSIS 311-01',
						'name' => 'Discrete Math',
						'days' => 'TR',
						'time' => '1:00pm - 2:15pm',
						'prof' => 'Lyle',
						'credits' => 3,
						'prof' => 'Lyle',
						'location' => 'Burke, Room 005',
						'duration' => '8/1/2017 - 12/15/2017',
						'link' => 'http://catalog.olivet.edu/preview_course_nopop.php?catoid=5&coid=9150',
						'open' => true
					),
					array(
						'id' => 'MATH 147-01',
						'name' => 'Calculus I',
						'days' => 'MTWRF',
						'time' => '12:00pm - 12:50pm',
						'credits' => 4,
						'prof' => 'Green',
						'location' => 'Burke, Room 007',
						'duration' => '8/1/2017 - 12/15/2017',
						'link' => 'http://catalog.olivet.edu/preview_course_nopop.php?catoid=5&coid=9608'
					)
				);
				foreach($classes as $class) {
					echo '<tr>';
					$open = isset($class['open']);
					$chev = $open ? "chevron-down" : "chevron-right";
					echo "<td><i class='fa fa-$chev'></i></td>";
					echo "<td><input type='checkbox' id='add'></td>";
					echo "<td>$class[id]</td>";
					echo "<td><a href='$class[link]'>$class[name]</a></td>";
					echo "<td>$class[credits]</td>";
					echo '</tr>';
					if($open) {
						echo "<tr><td colspan='5'><dl class='dl-horizontal'>";
						echo "<dt>Term:</dt><dd>Spring 2018</dd>";
						echo "<dt>Time:</dt><dd>$class[days] $class[time]</dd>";
						echo "<dt>Duration:</dt><dd>$class[duration]</dd>";
						echo "<dt>Location:</dt><dd>$class[location]</dd>";
						echo "<dt>Faculty:</dt><dd>$class[prof]</dd>";
						echo '</dl></td></tr>';
					}
				} ?>
			</tbody>
		</table>
		<a class="btn btn-danger" href="assets/dropslip.docx"
				onclick="return confirm('Some classes could not be dropped online, do you want to generate a drop slip for those classes?')">
			<i class="fa fa-times"></i>
			Drop Classes
		</a>
	</body>
</html>
