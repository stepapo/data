<?php

declare(strict_types=1);

namespace Stepapo\Data;

use Stepapo\Utils\Attribute\ToArray;
use Stepapo\Utils\Attribute\ValueProperty;
use Stepapo\Utils\Config;


class OrmFunction extends Config
{
	#[ValueProperty] public string $class;
	#[ToArray] public mixed $args = [];
}
