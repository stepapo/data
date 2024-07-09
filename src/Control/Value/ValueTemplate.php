<?php

declare(strict_types=1);

namespace Stepapo\Data\Control\Value;

use Nextras\Orm\Entity\IEntity;
use Stepapo\Data\Column;
use Stepapo\Data\Control\DataTemplate;


class ValueTemplate extends DataTemplate
{
	public IEntity $entity;

	public mixed $value;

	public ?array $linkArgs;

	public Column $column;
}
