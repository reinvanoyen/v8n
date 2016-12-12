<?php

namespace V8n;

class Validator
{
	protected $rules = [];
	private $errors = [];

	public function addRule($key, $rules)
	{
		if (!isset($this->rules[$key])) {
			$this->rules[$key] = [];
		}
		if (is_array($rules)) {
			foreach ($rules as $rule) {
				$rule->setKey($key);
				$this->rules[$key][] = $rule;
			}
		} else {
			$rule = $rules;
			$rule->setKey($key);
			$this->rules[$key][] = $rule;
		}
		return $this;
	}

	public function validate($array)
	{
		$this->errors = [];

		foreach ($this->rules as $key => $rules) {
			foreach ($rules as $rule) {
				if (!$rule->validate( isset($array[$key]) ? $array[$key] : null )) {
					$this->errors[] = $rule->getErrorMessage();
				}
			}
		}

		return count( $this->errors ) === 0;
	}

	public function getErrorMessages()
	{
		return $this->errors;
	}
}