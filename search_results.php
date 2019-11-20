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
		<h2> Search Results </h2>
		<table class="table table-striped table-bordered" style="width:initial">
			<thead>
				<tr>
					<th></th>
					<th>Term</th>
					<th>Class ID</th>
					<th>Class Name</th>
					<th>Credits</th>
					<th>Academic Level</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$classes = array(
					array(
						'id' => 'CSIS 125',
						'name' => 'Computer Science Principles',
						'credits' => 3,
						'link' => 'http://catalog.olivet.edu/preview_course_nopop.php?catoid=5&coid=10785'
					),
					array(
						'id' => 'CSIS 251',
						'name' => 'Principles of Programming I',
						'credits' => 4,
						'description' => 'Prerequisites: CSIS 125 or other programming experience.',
						'link' => 'http://catalog.olivet.edu/preview_course_nopop.php?catoid=5&coid=9144',
						'sections' => array(
							array(
								'id' => 1,
								'days' => 'MWF',
								'time' => '11:00am - 11:50am',
								'location' => 'Weber Center, Room 002',
								'prof' => 'L. Vail',
								'available' => 5
							),
							array(
								'id' => 2,
								'days' => 'MWF',
								'time' => '2:00pm - 2:50pm',
								'location' => 'Weber Center, Room 305',
								'prof' => 'L. Vail',
								'available' => 0
							),
							array(
								'id' => 3,
								'days' => '',
								'time' => '',
								'location' => 'Online',
								'prof' => 'L. Vail',
								'available' => 25
							)
						)
					),
					array(
						'id' => 'CSIS 311<br>MATH 311',
						'name' => 'Discrete Math',
						'credits' => 3,
						'link' => 'http://catalog.olivet.edu/preview_course_nopop.php?catoid=5&coid=9150'
					),
					array(
						'id' => 'MATH 147',
						'name' => 'Calculus I',
						'credits' => 4,
						'link' => 'http://catalog.olivet.edu/preview_course_nopop.php?catoid=5&coid=9608'
					)
				);
				foreach($classes as $class) {
					echo '<tr>';
					$open = isset($class['sections']);
					$chev = $open ? "chevron-down" : "chevron-right";
					echo "<td><i class='fa fa-$chev'></i></td>";
					echo '<td>Spring 2018</td>';
					echo "<td>$class[id]</td>";
					echo "<td><a href='$class[link]'>$class[name]</a></td>";
					echo "<td>$class[credits]</td>";
					echo '<td>Undergraduate</td>';
					echo '</tr>';
					if($open) {
						echo "<tr><td colspan='6'><p>$class[description]<h5>Sections</h3><table><tbody>";
						foreach($class['sections'] as $section) {
							echo '<tr>';
							$icon = $section['available'] === 0 ? 'times' : 'plus';
							echo "<td><a class='btn btn-primary' href='#' ><i class='fa fa-$icon'></i></a></td>";
							echo "<td>$section[id]</td>";
							echo "<td>$section[days] $section[time]</td>";
							echo "<td>$section[location]</td>";
							echo "<td>$section[prof]</td>";
							echo "<td>Spaces: $section[available]</td>";
							echo '</tr>';
						}
						echo '</tbody></table></td></tr>';
					}
				} ?>
			</tbody>
		</table>
		<a href="class_queue.php" class="btn btn-primary">
			<i class="fa fa-list"></i>
			View queue
		</a>
	</body>
</html>
