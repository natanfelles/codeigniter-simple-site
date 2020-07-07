<?php
/**
 * @var \CodeIgniter\View\View $this
 */

$this->extend('layouts/default');
$this->setVar('title', lang('home.home'));
$this->section('contents');
?>
	<h1><?= lang('home.home') ?></h1>
<?php
$this->endSection();