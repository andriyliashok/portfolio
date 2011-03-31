<?php

namespace Application\PortfolioBundle\Menu;

use Knplabs\MenuBundle\Menu;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Router;

class BreadCrumbs extends Menu
{

    /**
     * @param Request $request
     * @param Router $router
     */
    public function __construct(Request $request, Router $router)
    {
        parent::__construct();

        $this->setCurrentUri($request->getRequestUri());
        $this->setCurrentAsLink(false);

        $this->addChild('Главная', $router->generate('homepage'));
    }
    
}