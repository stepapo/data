<?php

declare(strict_types=1);

namespace Stepapo\Data;


interface View
{
	function getFilterTemplate(): string;

	function getFilterListTemplate(): string;
}
