<?php

namespace App\Services;

use App\Repositories\Contracts\TestimonialRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class TestimonialService extends BaseService
{
    /**
     * @var TestimonialRepositoryInterface
     */
    protected TestimonialRepositoryInterface $repository;

    /**
     * TestimonialService constructor.
     *
     * @param TestimonialRepositoryInterface $repository
     */
    public function __construct(TestimonialRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Get all testimonials.
     *
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->repository->all();
    }

    /**
     * Find a testimonial by ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function find(int $id): ?Model
    {
        return $this->repository->find($id);
    }

    /**
     * Create a new testimonial.
     *
     * @param array $data
     * @return Model
     */
    public function create(array $data): Model
    {
        return $this->repository->create($data);
    }

    /**
     * Update an existing testimonial.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data): bool
    {
        return $this->repository->update($id, $data);
    }

    /**
     * Delete a testimonial.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        return $this->repository->delete($id);
    }

    /**
     * Set a testimonial as featured and un-feature the rest.
     *
     * @param int $id
     * @return bool
     */
    public function setFeatured(int $id): bool
    {
        // First, remove featured status from all testimonials
        $this->repository->removeFeaturedAll();

        // Then, set the target testimonial as featured
        return $this->repository->update($id, ['featured' => true]);
    }
}
