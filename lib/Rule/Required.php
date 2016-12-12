<?php

class Required extends \V8n\Rule {

	protected $errorMsg = '%s is required';

	public function validate( $value )
	{
		if (is_string($value)) {
			return strlen(trim($value)) > 0;
		}

		if (is_array($value)) {
			return count($value) > 0;
		}

		return $value !== null;
	}
}