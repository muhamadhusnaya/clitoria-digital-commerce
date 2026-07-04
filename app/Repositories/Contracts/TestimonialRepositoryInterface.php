<?php

namespace App\Repositories\Contracts;

interface TestimonialRepositoryInterface extends BaseRepositoryInterface
{
    /**
     * Get all featured testimonials.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getFeatured();
}
