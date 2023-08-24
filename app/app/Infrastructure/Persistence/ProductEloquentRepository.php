<?php

namespace App\Infrastructure\Persistence;

use App\Domain\Entities\Product;
use App\Domain\Repositories\ProductRepository;

class ProductEloquentRepository implements ProductRepository
{
    public function create(array $data): Product
    {
        return Product::create($data);
    }
}