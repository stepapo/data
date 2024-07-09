<?php

declare(strict_types=1);

namespace Stepapo\Data\Control;

use Contributte\ImageStorage\ImageStorage;
use Nette\Application\UI\Presenter;
use Nette\Bridges\ApplicationLatte\Template;
use Nette\Security\User;
use Stepapo\Data\Column;
use Stepapo\Data\Text;


abstract class DataTemplate extends Template
{
	public Presenter $presenter;
	public User $user;
	public string $basePath;
	public Text $text;
//	/** @var Column[] */ public array $columns;
	public ?ImageStorage $imageStorage;
}
