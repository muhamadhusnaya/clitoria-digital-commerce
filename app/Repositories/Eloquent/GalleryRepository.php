<?php

namespace App\Repositories\Eloquent;

use App\Models\Gallery;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\GalleryRepositoryInterface;

class GalleryRepository extends BaseRepository implements GalleryRepositoryInterface
{
    /**
     * GalleryRepository constructor.
     *
     * @param Gallery $model
     */
    public function __construct(Gallery $model)
    {
        parent::__construct($model);
    }
}
