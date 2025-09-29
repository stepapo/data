<?php

declare(strict_types=1);

namespace Stepapo\Data\Control\Filter;

use Nette\Application\Attributes\Persistent;
use Nette\Application\BadRequestException;
use Nette\Application\ForbiddenRequestException;
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
	public array $options;
	public array $onFilter;


	public function __construct(
		private MainComponent $main,
		private Column $column,
		private bool $hide = false,
	) {}


	public function loadState(array $params): void
	{
		parent::loadState($params);
		$this->value = $this->column->filter ? ($this->column->filter->value ?: ($this->value ?: $this->column->filter->defaultValue)) : null;
		$this->options = $this->column->filter ? ($this->column->filter->options ?: ($this->column->filter->selectedCallback ? ($this->column->filter->selectedCallback)($this->value) : [])) : [];
		if ($this->value) {
			foreach (explode(',', $this->value) as $v) {
				if (!isset($this->options[$v])) {
					throw new BadRequestException;
				}
			}
		}
	}


	public function render(): void
	{
		$this->template->column = $this->column;
		$this->template->value = $this->column->filter->type === 'single' ? $this->value : ($this->value ? explode(',', $this->value) : null);
		$this->template->hide = $this->hide;
		$this->template->options = $this->options;
		$this->template->render($this->main->getView()->filterTemplate);
	}


	public function handleFilter(mixed $value = null): void
	{
		$this->value = $this->column->filter->value ?: $value;
		if ($this->presenter->isAjax()) {
			$this->onFilter($this);
			$this->redrawControl();
		}
	}


	public function handlePopulate(): void
	{
		$query = $this->presenter->getHttpRequest()->getQuery('query');
		if (!$this->column->filter->populateCallback) {
			throw new ForbiddenRequestException;
		}
		$this->options = ($this->column->filter->populateCallback)($query);
		$this->redrawControl('list');
	}
}
