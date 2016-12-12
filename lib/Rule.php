<?php

namespace V8n;

abstract class Rule {

	protected $errorMsg = '%s is invalid';

	private $key;

	abstract public function validate($value);

	public function getKey()
	{
		return $this->key;
	}

	public function setKey($key)
	{
		$this->key = $key;
	}

	public function getErrorMessage()
	{
		return sprintf($this->errorMsg, $this->getKey());
	}
}