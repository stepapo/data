<?php

declare(strict_types=1);

namespace Stepapo\Data;

use Stepapo\Utils\Attribute\Type;
use Stepapo\Utils\Config;


class Sort extends Config
{
	public bool $isDefault = false;
	public string $direction = 'asc';
	#[Type(OrmFunction::class)] public ?OrmFunction $function = null;
	public bool $hide = false;
}
