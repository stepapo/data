<?php

declare(strict_types=1);

namespace Stepapo\Data\Control;

use Nette\Localization\Translator;
use Stepapo\Data\View;


interface MainComponent
{
	function getTranslator(): ?Translator;
	function getView(): ?View;
}
