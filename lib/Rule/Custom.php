<?php

class Custom extends \V8n\Rule {

	private $closure;

	public function __construct($closure)
	{
		$this->closure = $closure;
	}

	public function validate($value)
	{
		return call_user_func($this->closure, $value);
	}
}