<?php

declare(strict_types=1);

namespace Stepapo\Data;

use Stepapo\Utils\Attribute\Type;
use Stepapo\Utils\Schematic;


class Search extends Schematic
{
	public ?string $placeholder = null;
	public ?\Closure $prepareCallback = null;
	public ?\Closure $suggestCallback = null;
	public ?\Closure $searchCallback = null;
	#[Type(OrmFunction::class)] public ?OrmFunction $searchFunction;
	#[Type(OrmFunction::class)] public ?OrmFunction $sortFunction = null;
	public string $sortDirection = 'asc';
	public bool $hide = false;
}
