<?php

declare(strict_types=1);

namespace Stepapo\Data\Control\FilterList;

use Nette\Application\Attributes\Persistent;
use Nette\Application\UI\Multiplier;
use Stepapo\Data\Control\DataControl;
use Stepapo\Data\Control\MainComponent;
use Stepapo\Data\Control\Filter\FilterControl;


/**
 * @property-read FilterListTemplate $template
 * @method onFilter(FilterListControl $control)
 */
class FilterListControl extends DataControl
{
	#[Persistent] public ?string $value = null;
	public array $onFilter;


	public function __construct(
		private MainComponent $main,
		private array $columns,
		private ?array $visibleColumns = null,
	) {}


	public function render()
	{
		$this->template->columns = $this->columns;
		$this->template->render($this->main->getView()->filterListTemplate);
	}


	public function createComponentFilter()
	{
		return new Multiplier(function ($name): FilterControl {
			$control = new FilterControl(
				$this->main,
				$this->columns[$name],
				$this->visibleColumns && !isset($this->visibleColumns[$name]),
			);
			$control->onFilter[] = function (FilterControl $filter) {
				$this->onFilter($this);
				$this->redrawControl();
			};
			return $control;
		});
	}
}
