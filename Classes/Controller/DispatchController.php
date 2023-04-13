<?php

declare(strict_types=1);

namespace Vancado\VncExample1\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Vancado\VncExample1\Event\ProductHasBeenBoughtEvent;

class DispatchController extends ActionController
{
    public function showAction()
    {
        /** @var ProductHasBeenBoughtEvent $event */
        $event = $this->eventDispatcher->dispatch(
            new ProductHasBeenBoughtEvent('Playstation X', 2, 100)
        );

        $this->view->assignMultiple([
            'productName' => $event->getProductName(),
            'productCount' => $event->getProductCount(),
            'stockCount' => $event->getStockCount(),
        ]);
    }
}