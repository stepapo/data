<?php

declare(strict_types=1);

namespace Stepapo\Data;

use Stepapo\Utils\Attribute\KeyProperty;
use Stepapo\Utils\Attribute\ValueProperty;
use Stepapo\Utils\Config;


class Button extends Config
{
	#[KeyProperty] public string $name;
	#[ValueProperty] public string $label;
	public string $style = 'primary';
	public ?\Closure $callback = null;
}
