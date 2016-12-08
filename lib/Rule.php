<?php

namespace V8n;

abstract class Rule {

	abstract public function validate( $value );
}