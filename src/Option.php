<?php

declare(strict_types=1);

namespace Stepapo\Data;

use Stepapo\Utils\Attribute\KeyProperty;
use Stepapo\Utils\Attribute\ValueProperty;
use Stepapo\Utils\Schematic;


class Option extends Schematic
{
	#[KeyProperty] public int|string|null $name;
	#[ValueProperty] public int|string|null $label = null;
	public array $condition = [];
}
