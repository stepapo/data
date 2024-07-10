<?php

declare(strict_types=1);

namespace Stepapo\Data;

use Stepapo\Utils\Attribute\ToArray;
use Stepapo\Utils\Attribute\ValueProperty;
use Stepapo\Utils\Schematic;


class Link extends Schematic
{
	#[ValueProperty] public string $destination;
	#[ToArray] public array $args = [];
}
