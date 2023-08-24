<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Product;

interface ProductRepository
{
    public function create(array $data): Product;
}