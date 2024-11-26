<?php

declare(strict_types=1);

namespace Stepapo\Data;


class Helper
{
	public static function getNextrasName(string $name): string
	{
		if (str_contains($name, '.')) {
			return str_replace('.', '->', $name);
		}
		if (str_contains($name, '_')) {
			return str_replace('_', '->', $name);
		}
		return $name;
	}
}