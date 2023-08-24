<?php
namespace App\Application\UseCases;

use App\Domain\Repositories\ProductRepository;

class CreateProductUseCase
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function execute(array $data)
    {
        return $this->productRepository->create($data);
    }
}