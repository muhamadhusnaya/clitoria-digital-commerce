<?php

namespace App\Services;

use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Traits\UploadTrait;

class ProductService extends BaseService
{
    use UploadTrait;

    /**
     * @var ProductRepositoryInterface
     */
    protected $repository;

    /**
     * ProductService constructor.
     *
     * @param ProductRepositoryInterface $repository
     */
    public function __construct(ProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Get all products.
     */
    public function getAll()
    {
        return $this->repository->all();
    }

    /**
     * Get paginated products.
     */
    public function getPaginated($perPage = 10)
    {
        return $this->repository->paginate($perPage);
    }

    /**
     * Create a new product.
     *
     * @param array $data
     * @return mixed
     */
    public function store(array $data)
    {
        if (isset($data['image']) && $data['image'] instanceof \Illuminate\Http\UploadedFile) {
            $data['image'] = $this->uploadFile($data['image'], 'products');
        }

        return $this->repository->create($data);
    }

    /**
     * Find a product by ID.
     *
     * @param int $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->repository->find($id);
    }

    /**
     * Update an existing product.
     *
     * @param int $id
     * @param array $data
     * @return mixed
     */
    public function update($id, array $data)
    {
        $product = $this->repository->find($id);

        if (isset($data['image']) && $data['image'] instanceof \Illuminate\Http\UploadedFile) {
            $this->deleteFile($product->image);
            $data['image'] = $this->uploadFile($data['image'], 'products');
        }

        return $this->repository->update($id, $data);
    }

    /**
     * Delete a product.
     *
     * @param int $id
     * @return mixed
     */
    public function delete($id)
    {
        // For soft deletes, we don't physically remove the image.
        // It stays available in case of recovery.
        return $this->repository->delete($id);
    }
}
