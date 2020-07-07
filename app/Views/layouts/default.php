<?php
/**
 * @var string                 $title
 * @var \CodeIgniter\View\View $this
 */
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= isset($title) ? $title : 'Simple Site' ?></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item <?php if (current_url(true)->getPath() === route_to('home.index')): ?> active <?php endif ?>">
					<a class="nav-link" href="<?= route_to('home.index') ?>"><?= lang('home.home') ?></a>
				</li>
				<li class="nav-item <?php if (current_url(true)->getPath() === route_to('about.index')): ?> active <?php endif ?>">
					<a class="nav-link" href="<?= route_to('about.index') ?>"><?= lang('about.about') ?></a>
				</li>
				<li class="nav-item <?php if (current_url(true)->getPath() === route_to('contact.create')): ?> active <?php endif ?>">
					<a class="nav-link" href="<?= route_to('contact.create') ?>"><?= lang('contact.contact') ?></a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<?= $this->renderSection('contents') ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>