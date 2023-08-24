<?php

namespace App\Http\Controllers;

use App\Application\UseCases\CreateProductUseCase;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    protected $createProductUseCase;

    public function __construct(CreateProductUseCase $createProductUseCase)
    {
        $this->createProductUseCase = $createProductUseCase;
    }

    public function create(Request $request)
    {
        $data = $request->only(['name', 'price']);
        $product = $this->createProductUseCase->execute($data);

        return response()->json($product, 201);
    }
}

