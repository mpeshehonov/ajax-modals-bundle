<?php

namespace Jagilpe\AjaxModalsBundle\Controller;

use Jagilpe\AjaxModalsBundle\View\AjaxViewFactory;
use Jagilpe\AjaxModalsBundle\View\AjaxViewInterface;

/**
 * Base trait to work with Ajax View in a controller
 *
 * @author Javier Gil Pereda <javier.gil@module-7.com>
 */
trait AjaxViewControllerTrait
{

    /**
     * @var AjaxViewFactory
     */
    private $ajaxViewFactory;

    public function __construct(AjaxViewFactory $ajaxViewFactory)
    {
        $this->ajaxViewFactory = $ajaxViewFactory;
    }

    /**
     * Creates an Ajax View of the given type
     *
     * @param string $viewType
     *
     * @return AjaxViewInterface
     */
    protected function createAjaxView($viewType)
    {
        return $this->ajaxViewFactory->createView($viewType);
    }
}
