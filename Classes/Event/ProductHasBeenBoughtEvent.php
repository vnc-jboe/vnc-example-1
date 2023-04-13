<?php

declare(strict_types=1);

namespace Vancado\VncExample1\Event;

final class ProductHasBeenBoughtEvent
{
    private string $productName;
    private int $productCount;
    private int $stockCount;

    public function __construct(
        string $productName,
        int $productCount,
        int $stockCount
    ) {
        $this->productName = $productName;
        $this->productCount = $productCount;
        $this->stockCount = $stockCount;
    }

    /**
     * @return string
     */
    public function getProductName(): string
    {
        return $this->productName;
    }

    /**
     * @return int
     */
    public function getProductCount(): int
    {
        return $this->productCount;
    }

    /**
     * @param int $productCount
     */
    public function setProductCount(int $productCount): void
    {
        $this->productCount = $productCount;
    }

    /**
     * @return int
     */
    public function getStockCount(): int
    {
        return $this->stockCount;
    }

    /**
     * @param int $stockCount
     */
    public function setStockCount(int $stockCount): void
    {
        $this->stockCount = $stockCount;
    }
}