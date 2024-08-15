<?php

declare(strict_types=1);

namespace Stepapo\Data;

use Nextras\Orm\Collection\ICollection;
use Stepapo\Utils\Attribute\Type;
use Stepapo\Utils\Schematic;


class Search extends Schematic
{
	public ?string $placeholder = null;
	/** @var callable */ public mixed $prepareCallback = null;
	/** @var callable */ public mixed $suggestCallback = null;
	public string $sortDirection = ICollection::ASC;
	#[Type(OrmFunction::class)] public OrmFunction|array $searchFunction;
	#[Type(OrmFunction::class)] public OrmFunction|array|null $sortFunction = null;
	public bool $hide = false;
}
