<?php

namespace App\Repositories\Contracts;

use App\Contracts\BaseRepositoryInterface;

interface TestimonialRepositoryInterface extends BaseRepositoryInterface
{
    /**
     * Remove featured status from all testimonials.
     *
     * @return bool
     */
    public function removeFeaturedAll(): bool;
}
