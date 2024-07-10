<?php

declare(strict_types=1);

namespace Stepapo\Data\Control\Filter;

use Stepapo\Data\Column;
use Stepapo\Data\Control\DataTemplate;


class FilterTemplate extends DataTemplate
{
	public FilterControl $control;
	public Column $column;
	public ?string $value;
	public bool $hide;
}
