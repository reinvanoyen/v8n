<?php

class Equals extends \V8n\Rule {

	private $equalValue;

	public function __construct($equalValue)
	{
		$this->equalValue = $equalValue;
	}

	public function validate( $value )
	{
		return $value === $this->equalValue;
	}
}