<?php

namespace App\Repositories\Eloquent;

use App\Models\Partner;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\PartnerRepositoryInterface;

class PartnerRepository extends BaseRepository implements PartnerRepositoryInterface
{
    /**
     * PartnerRepository constructor.
     *
     * @param Partner $model
     */
    public function __construct(Partner $model)
    {
        parent::__construct($model);
    }
}
