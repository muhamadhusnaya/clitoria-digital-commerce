<?php

namespace App\Repositories\Eloquent;

use App\Models\Testimonial;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\TestimonialRepositoryInterface;

class TestimonialRepository extends BaseRepository implements TestimonialRepositoryInterface
{
    /**
     * TestimonialRepository constructor.
     *
     * @param Testimonial $model
     */
    public function __construct(Testimonial $model)
    {
        parent::__construct($model);
    }

    /**
     * Remove featured status from all testimonials.
     *
     * @return bool
     */
    public function removeFeaturedAll(): bool
    {
        return $this->model->newQuery()->update(['featured' => false]) > 0;
    }
}
