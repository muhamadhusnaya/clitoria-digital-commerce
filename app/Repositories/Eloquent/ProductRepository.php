<?php

namespace App\Repositories\Eloquent;

use App\Models\Product;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\ProductRepositoryInterface;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    /**
     * ProductRepository constructor.
     *
     * @param Product $model
     */
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }
}
