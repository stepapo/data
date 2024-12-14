<?php

declare(strict_types=1);

namespace Stepapo\Data;

use Stepapo\Utils\Schematic;


class Link extends Schematic
{
	public string $destination;
	public array $args = [];
}