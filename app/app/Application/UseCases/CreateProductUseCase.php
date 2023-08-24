<?php
namespace App\Application\UseCases;

use App\Domain\Repositories\ProductRepository;

class CreateProductUseCase
{
    protected $productRepository; // Repositorio de productos-almacena una instancia de ProductRepository

    public function __construct(ProductRepository $productRepository) // Inyección de dependencias
    {
        $this->productRepository = $productRepository; // Asignación de dependencias - asegura que la clase tenga acceso a un repositorio
    }

    public function execute(array $data) // Ejecución del caso de uso
    {
        return $this->productRepository->create($data); // funcion principal del caso de uso
        //esto separa la logica de creacion de productos de los detalles de implementacion del repositorio
    }
}

/* En resumen, este código encapsula la lógica para crear un nuevo producto en una aplicación
siguiendo buenas prácticas de diseño, como la inversión de control y la separación de preocupaciones.
Separar esta lógica en un caso de uso específico facilita la comprensión,
el mantenimiento y la prueba de la funcionalidad de creación de productos en la aplicación.*/
