<?php

namespace App\Repositories\Eloquent;

use App\Models\Hero;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\HeroRepositoryInterface;

class HeroRepository extends BaseRepository implements HeroRepositoryInterface
{
    /**
     * HeroRepository constructor.
     *
     * @param Hero $model
     */
    public function __construct(Hero $model)
    {
        parent::__construct($model);
    }
}
