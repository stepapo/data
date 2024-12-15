<?php

declare(strict_types=1);

namespace Stepapo\Data;

use Stepapo\Utils\Attribute\ToArray;
use Stepapo\Utils\Config;


class Link extends Config
{
	public string $destination;
	#[ToArray] public array $args = [];
}