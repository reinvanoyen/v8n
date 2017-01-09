<?php

require 'Validator.php';
require 'Rule.php';
require 'Rule/Required.php';
require 'Rule/Equals.php';
require 'Rule/Email.php';
require 'Rule/Custom.php';
require 'Rule/Between.php';

$validator = new \V8n\Validator();

$validator
	->addRule('first_name', new Required())
	->addRule('last_name', [
		new Required(),
		new Between(10, 20),
	])
	->addRule('address', new Required())
;

$validator->setAliasses([
	'first_name' => 'First name',
]);

$validator->validate([
	'first_name' => '',
	'last_name' => 'Van Oyen',
	'address' => '',
]);

var_dump($validator->getErrorMessages());