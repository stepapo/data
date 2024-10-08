<?php

declare(strict_types=1);

namespace Stepapo\Data;

use Stepapo\Utils\Attribute\ArrayOfType;
use Stepapo\Utils\Schematic;


class Filter extends Schematic
{
	public ?string $prompt = null;
	public ?string $columnName = null;
	public ?string $function = null;
	public ?int $collapse = null;
	public bool $hide = false;
	public mixed $value = null;
	public mixed $defaultValue = null;
	/** @var Option[] */ #[ArrayOfType(Option::class)] public array $options = [];


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

}
