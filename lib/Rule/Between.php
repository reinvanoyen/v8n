<?php

class Between extends \V8n\Rule {

	private $min;
	private $max;

	public function __construct($min, $max)
	{
		$this->min = $min;
		$this->max = $max;
	}

	public function validate( $value )
	{
		if (is_string($value)) {
			$value = strlen($value);
		}

		if (is_array($value)) {
			$value = count($value);
		}

		return $value > $this->min && $value < $this->max;
	}
}