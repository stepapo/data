<?php

declare(strict_types=1);

namespace Stepapo\Data;

use Stepapo\Utils\Attribute\CopyValue;
use Stepapo\Utils\Attribute\KeyProperty;
use Stepapo\Utils\Attribute\Type;
use Stepapo\Utils\Config;


class Column extends Config
{
	public const string ALIGN_LEFT = 'left';
	public const string ALIGN_CENTER = 'center';
	public const string ALIGN_RIGHT = 'right';

	#[KeyProperty] public string $name;
	#[CopyValue('name')] public ?string $columnName = null;
	public ?string $label = null;
	public ?string $description = null;
	public ?int $width = null;
	public string $align = self::ALIGN_LEFT;
	public ?string $prepend = null;
	public ?string $append = null;
	public ?string $valueTemplateFile = null;
	public bool $hide = false;
	public ?string $class = null;
	public bool $cross = false;
	public ?float $multiply = null;
	public ?\Closure $linkCallback = null;
	#[Type(LatteFilter::class)] public ?LatteFilter $latteFilter = null;
	#[Type(Link::class)] public ?Link $link = null;
	#[Type(Sort::class)] public ?Sort $sort = null;
	#[Type(Filter::class)] public ?Filter $filter = null;
	#[Type(Chart::class)] public ?Chart $chart = null;


	public function getNextrasName(): string
	{
		if (str_contains($this->columnName, '.')) {
			return str_replace('.', '->', $this->columnName);
		}
		if (str_contains($this->columnName, '_')) {
			return str_replace('_', '->', $this->columnName);
		}
		return $this->columnName;
	}


	public function getLatteName(): string
	{
		if (str_contains($this->columnName, '.')) {
			return str_replace('.', '_', $this->columnName);
		}
		return $this->columnName;
	}
}
