<?php

declare(strict_types=1);

namespace Stepapo\Data;

use Stepapo\Utils\Attribute\ToArray;
use Stepapo\Utils\Attribute\ValueProperty;
use Stepapo\Utils\Schematic;


class OrmFunction extends Schematic
{
	#[ValueProperty] public string $class;
	#[ToArray] public array $args = [];
}
