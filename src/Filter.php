<?php

declare(strict_types=1);

namespace Stepapo\Data;

use Stepapo\Utils\Attribute\ArrayOfType;
use Stepapo\Utils\Config;


class Filter extends Config
{
	public ?string $prompt = null;
	public string|array|null $columnName = null;
	public ?string $function = null;
	public ?int $collapse = null;
	public bool $hide = false;
	public mixed $value = null;
	public mixed $defaultValue = null;
	public string $type = 'single';
	public string $multiMode = 'any';
	/** @var \Closure(mixed): array|null */ public ?\Closure $populateCallback = null;
	/** @var \Closure(mixed): array|null */ public ?\Closure $selectedCallback = null;
	/** @var Option[] */ #[ArrayOfType(Option::class)] public array $options = [];
}
