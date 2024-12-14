<?php

declare(strict_types=1);

namespace Stepapo\Data;

use Stepapo\Utils\Attribute\ToArray;
use Stepapo\Utils\Schematic;


class Link extends Schematic
{
	public string $destination;
	#[ToArray] public array $args = [];
}