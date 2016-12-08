<?php

namespace V8n;

class Validator {

	private $rules = [];

	public function addRule(Rule $rule)
	{
		$this->rules[] = $rule;
		return $this;
	}

	public function validate($value)
	{
		$valid = true;
		foreach( $this->rules as $rule ) {
			$valid = ( $rule->validate($value) && $valid );
		}
		return $valid;
	}
}