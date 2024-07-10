<?php

declare(strict_types=1);

namespace Stepapo\Data;

use Stepapo\Utils\Schematic;


class Chart extends Schematic
{
    public const CHART_TYPE_LINE = 'LineChart';
    public const CHART_TYPE_AREA = 'AreaChart';
    public const CHART_TYPE_PIE = 'PieChart';
    public const CHART_TYPE_BAR = 'BarChart';

    public ?string $type = null;
    public ?float $min = null;
    public ?float $max = null;
    public ?int $left = null;
    public ?int $right = null;
    public ?int $top = null;
    public ?int $bottom = null;
    public ?string $hFormat = null;
    public ?string $vFormat = null;
    public bool $cumulative = false;
    public ?int $base = 0;
    public array $series = [];
    public ?string $stacked = null;
    public array $colors = [];
}
