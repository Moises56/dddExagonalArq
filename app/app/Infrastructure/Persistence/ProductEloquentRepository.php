<?php

namespace App\Infrastructure\Persistence; // Ruta de la clase

use App\Domain\Entities\Product; // Importación de la clase Product
use App\Domain\Repositories\ProductRepository; // Importación de la clase ProductRepository

class ProductEloquentRepository implements ProductRepository // Repositorio de productos
{
    public function create(array $data): Product
    {
        return Product::create($data);
    }
}
