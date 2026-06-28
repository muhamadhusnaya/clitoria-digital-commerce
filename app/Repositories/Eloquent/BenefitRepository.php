<?php

namespace App\Repositories\Eloquent;

use App\Models\Benefit;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\BenefitRepositoryInterface;

class BenefitRepository extends BaseRepository implements BenefitRepositoryInterface
{
    /**
     * BenefitRepository constructor.
     *
     * @param Benefit $model
     */
    public function __construct(Benefit $model)
    {
        parent::__construct($model);
    }
}
