<?php

namespace Stepapo\Data\Control;

use Latte\Essential\RawPhpExtension;
use Nette\Application\UI\Control;
use Nette\Application\UI\Template;


abstract class DataControl extends Control
{
	protected function createTemplate(?string $class = null): Template
	{
		$template = parent::createTemplate($class);
		$template->getLatte()->addExtension(new RawPhpExtension);
		return $template;
	}
}