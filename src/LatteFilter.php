<?php

declare(strict_types=1);

namespace Stepapo\Data;

use Stepapo\Utils\Attribute\ToArray;
use Stepapo\Utils\Schematic;


class LatteFilter extends Schematic
{
	public string $name;
	#[ToArray] public ?array $args = null;
}
