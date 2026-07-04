<?php

namespace App\Repositories\Contracts;

use App\Contracts\BaseRepositoryInterface;

interface TestimonialRepositoryInterface extends BaseRepositoryInterface
{
    /**
     * Get all featured testimonials.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getFeatured();
}
