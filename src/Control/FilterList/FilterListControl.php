<?php

declare(strict_types=1);

namespace Stepapo\Data\Control\FilterList;

use Nette\Application\Attributes\Persistent;
use Nette\Application\UI\Multiplier;
use Stepapo\Data\Control\DataControl;
use Stepapo\Data\Control\Filter\FilterControl;
use Stepapo\Data\Control\MainComponent;


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
		private ?int $labelWidth = null,
	) {}


	public function render(): void
	{
		$this->template->show = false;
		foreach ($this->columns as $column) {
			if ($column->filter && !$column->filter->hide) {
				$this->template->show = true;
				break;
			}
		}
		$this->template->columns = $this->columns;
		
		$this->template->render($this->main->getView()->filterListTemplate);
	}


	public function createComponentFilter(): Multiplier
	{
		return new Multiplier(function ($name): FilterControl {
			$control = new FilterControl(
				$this->main,
				$this->columns[$name],
				$this->labelWidth,
				$this->visibleColumns === [] || ($this->visibleColumns && !isset($this->visibleColumns[$name])),
			);
			$control->onFilter[] = function (FilterControl $filter) {
				$this->onFilter($this);
				$this->redrawControl();
			};
			return $control;
		});
	}
}
