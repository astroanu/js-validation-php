<?php

namespace Astroanu\JsValidation;

use Illuminate\Foundation\Http\FormRequest;

class ValidatorFactory
{

	public static function create($className)
	{
		$class = new $className;

		if (!$class instanceOf FormRequest) {
			throw new \Exception($className . ' is not an instance of ' . FormRequest::class);
		}

		return new Validator($class->rules(), $class->attributes());
	}
}