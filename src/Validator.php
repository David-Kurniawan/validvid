<?php

namespace Validvid\Validation;

use Illuminate\Container\Container;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Translation\FileLoader;
use Illuminate\Translation\Translator;
use Illuminate\Validation\Factory;

class Validator
{
	public function make(array $data, array $rules)
	{
		try {
		    $loader = new FileLoader(new Filesystem, 'lang');
		    $translator = new Translator($loader, 'en');
		    $validation = new Factory($translator, new Container);

			return $validation->make($data, $rules);
		} catch (\Exception $e) {
			return $e->getMessage();
		}
	}
}