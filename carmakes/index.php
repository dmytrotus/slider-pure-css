<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Touch slider pure CSS</title>
	<link rel="stylesheet" href="./style.css">
</head>
<body>
	<section class="section-slider">
		<div class="slider">
		<?php
		$makes = [
			'bmw',
			'audi',
			'mercedes',
			'ford',
			'inifinity',
			'bentey',
			'bmw',
			'audi',
			'mercedes',
			'ford',
			'inifinity',
			'bentey',
			'bmw',
			'audi',
			'mercedes',
			'ford',
			'inifinity',
			'bentey'

		];
		foreach ($makes as $make) {
			?>
			<div class="img-slider"><?php echo $make ?></div>
			<?php
		}
		?>
		</div>
	</section>
	
</body>
</html>