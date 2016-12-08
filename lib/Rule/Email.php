<?php

class Email extends \V8n\Rule {

	public function validate( $value )
	{
		return filter_var($value, FILTER_VALIDATE_EMAIL);
	}
}