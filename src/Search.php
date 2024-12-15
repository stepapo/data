<?php

declare(strict_types=1);

namespace Stepapo\Data;

use Stepapo\Utils\Attribute\Type;
use Stepapo\Utils\Config;


class Search extends Config
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
