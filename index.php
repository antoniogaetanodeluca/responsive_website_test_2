<?php include("setup.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/jquery.mmenu.all.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/style.css" />
	<script src="<?php echo $path_js; ?>/jquery-2.2.1.min.js"></script>
	<script src="<?php echo $path_js; ?>/bootstrap.min.js"></script>
	<script src="<?php echo $path_js; ?>/jquery.mmenu.min.js"></script>
	<script src="<?php echo $path_js; ?>/custom.js"></script>
	<title>How I Work! - Test Website</title>
</head>

<body>

	<div>

		<header id="header">
			<?php include("inc/header.php"); ?>
		</header>

		<section class="services">
			<?php include("inc/services.php"); ?>
		</section>

		<section class="featured_work">
			<header>
				<h2 class="text-center">Featured Work.</h2>
			</header>
			<?php include("inc/featured_work.php");?>
		</section>

		<section class="tabs">
			<?php include("inc/tabs.php"); ?>
		</section>

		<section class="contacts">
			<?php include("inc/contacts.php"); ?>
		</section>

		<section class="map">
			<?php include("inc/map.php"); ?>
		</section>


		<footer id="footer">
			<?php include("inc/footer.php"); ?>
		</footer>


		<?php
			include("inc/analytics.php");
		?>

	</div>

</body>

</html>
