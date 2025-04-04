<?php

declare(strict_types=1);

namespace Stepapo\Data\Control;

use Nette\Application\UI\Presenter;
use Nette\Bridges\ApplicationLatte\Template;
use Nette\Security\User;
use Stepapo\Data\Text;


#[\AllowDynamicProperties]
abstract class DataTemplate extends Template
{
	public Presenter $presenter;
	public User $user;
	public string $baseUrl;
	public string $basePath;
	public Text $text;
}
