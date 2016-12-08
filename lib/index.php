<?php

require 'Validator.php';
require 'Rule.php';
require 'Rule/Required.php';
require 'Rule/Equals.php';
require 'Rule/Email.php';
require 'Rule/Custom.php';
require 'Rule/Between.php';

$validator = new \v8n\Validator();

$validator
	->addRule(new Required())
	->addRule(new Between(1, 5))
	->addRule(new Custom(function( $value ) {
		return $value === 'test';
	}));

var_dump( $validator->validate('test') );
var_dump( $validator->validate('test') );
var_dump( $validator->validate('test') );
var_dump( $validator->validate(' ') );
var_dump( $validator->validate('') );
var_dump( $validator->validate(false) );
var_dump( $validator->validate('fdsds') );

$validator2 = new \v8n\Validator();

$validator2
	->addRule(new Required())
	->addRule(new Email());

var_dump( $validator2->validate('rein@tnt.be') );
var_dump( $validator2->validate('rein') );