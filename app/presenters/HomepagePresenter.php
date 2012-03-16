<?php

/**
 * Homepage presenter.
 *
 * @author     John Doe
 * @package    MyApplication
 */
class HomepagePresenter extends BasePresenter{

	public function renderDefault(){
		$items = range(1,1000);
		$paginator = $this['paginator']->getPaginator();
		$paginator->itemsPerPage = 15;
		$paginator->itemCount = count($items);
	}
	
	public function createComponentPaginator(){
		$control = new VisualPaginator;
		return $control;
	}

}
