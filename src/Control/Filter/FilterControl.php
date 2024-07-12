<?php

declare(strict_types=1);

namespace Stepapo\Data\Control\Filter;

use Nette\Application\Attributes\Persistent;
use Stepapo\Data\Column;
use Stepapo\Data\Control\DataControl;
use Stepapo\Data\Control\MainComponent;


/**
 * @property-read FilterTemplate $template
 * @method onFilter(FilterControl $control)
 */
class FilterControl extends DataControl
{
	#[Persistent] public mixed $value = null;
	public array $onFilter;


	public function __construct(
		private MainComponent $main,
		private Column $column,
		private bool $hide = false,
	) {}


	public function loadState(array $params): void
	{
		parent::loadState($params);
		$this->value = $this->column->filter->value ?: ($this->value ?: $this->column->filter->defaultValue);
	}


	public function render(): void
	{
		$this->template->column = $this->column;
		$this->template->value = $this->value;
		$this->template->hide = $this->hide;
		$this->template->render($this->main->getView()->filterTemplate);
	}


	public function handleFilter($value = null): void
	{
		$this->value = $this->column->filter->value ?: $value;
		if ($this->presenter->isAjax()) {
			$this->onFilter($this);
			$this->redrawControl();
		}
	}
}
