<?php
/**
 * @var \CodeIgniter\View\View $this
 */

$this->extend('layouts/default');
$this->setVar('title', lang('about.about'));
$this->section('contents');
?>
	<h1><?= lang('about.about') ?></h1>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at, consequatur expedita facere facilis illo impedit iste laudantium molestias officia omnis ratione recusandae, reiciendis sapiente similique sunt tempora tenetur vel?</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam deserunt ducimus eius hic ipsum nulla recusandae tenetur voluptatibus! Aliquam consequatur eum inventore similique tenetur! Assumenda dolore fugiat odit voluptatem. Voluptatum?</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet cupiditate, delectus enim eum ipsam ipsum iure minus necessitatibus officia provident quas quisquam repellendus repudiandae sapiente soluta totam, ullam, veniam voluptates.</p>

<?php
$this->endSection();