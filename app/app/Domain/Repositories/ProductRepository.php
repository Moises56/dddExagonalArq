<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Product;

interface ProductRepository  //interfaz
{
    public function create(array $data): Product; //Firma del método
}
