<?php
/**
 * @var array|null             $errors
 * @var array|null             $msg
 * @var \CodeIgniter\View\View $this
 */

$this->extend('layouts/default');
$this->setVar('title', lang('contact.contact'));
$this->section('contents');
?>
	<h1><?= lang('contact.contact') ?></h1>

<?php if ($errors): ?>
	<div class="alert alert-danger">
		<?= lang('contact.error_occur') ?>
		<ul>
			<?php foreach ($errors as $error) : ?>
				<li><?= $error ?></li>
			<?php endforeach ?>
		</ul>
	</div>
<?php endif ?>

<?php if ($msg) : ?>
	<div class="alert alert-<?= $msg['type'] ?>"><?= $msg['contents'] ?></div>
<?php endif ?>

	<form action="<?= route_to('contact.store') ?>" method="post">
		<?= csrf_field() ?>
		<div class="form-group">
			<label for="name"><?= lang('contact.name') ?></label>
			<input type="text" class="form-control <?php if (isset($errors['name'])): ?> is-invalid <?php endif ?>" name="name" id="name" value="<?= old('name') ?>">
			<?php if (isset($errors['name'])): ?>
				<div class="invalid-feedback">
					<?= $errors['name'] ?>
				</div>
			<?php endif ?>
		</div>
		<div class="form-group">
			<label for="name"><?= lang('contact.email') ?></label>
			<input type="email" class="form-control <?php if (isset($errors['email'])): ?> is-invalid <?php endif ?>" name="email" id="email" value="<?= old('email') ?>">
			<?php if (isset($errors['email'])): ?>
				<div class="invalid-feedback">
					<?= $errors['email'] ?>
				</div>
			<?php endif ?>
		</div>
		<div class="form-group">
			<label for="subject"><?= lang('contact.subject') ?></label>
			<input type="text" class="form-control" name="subject" id="subject" value="<?= old('subject') ?>">
		</div>
		<div class="form-group">
			<label for="message"><?= lang('contact.message') ?></label>
			<textarea name="message" id="message" class="form-control"><?= old('message') ?></textarea>
		</div>
		<div class="form-group">
			<button class="btn btn-primary"><?= lang('contact.submit') ?></button>
		</div>
	</form>

<?php
$this->endSection();