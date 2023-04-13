<?php

declare(strict_types=1);

namespace Vancado\VncExample1\EventListener;

use Vancado\VncExample1\Event\ProductHasBeenBoughtEvent;

class ProductStockListener
{
    public function __invoke(ProductHasBeenBoughtEvent $event): void
    {
        $event->setStockCount($event->getStockCount() - $event->getProductCount());
    }
}