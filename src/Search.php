<?php

declare(strict_types=1);

namespace Stepapo\Data;

use Nextras\Orm\Collection\ICollection;
use Stepapo\Utils\Attribute\Type;
use Stepapo\Utils\Config;


class Search extends Config
{
	public ?string $placeholder = null;
	/** @var \Closure(?string): ?string|null */ public ?\Closure $prepareCallback = null;
	/** @var \Closure(?string): ?string|null */ public ?\Closure $suggestCallback = null;
	/** @var \Closure(ICollection, string): ICollection|null */ public ?\Closure $searchCallback = null;
	#[Type(OrmFunction::class)] public ?OrmFunction $searchFunction;
	#[Type(OrmFunction::class)] public ?OrmFunction $sortFunction = null;
	public string $sortDirection = 'asc';
	public bool $hide = false;
}
