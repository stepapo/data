<?php

declare(strict_types=1);

namespace Stepapo\Data\Control;

use Stepapo\Data\View;


interface MainComponent
{
	function getView(): ?View;
}
