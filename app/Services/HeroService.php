<?php

namespace App\Services;

use App\Repositories\Contracts\HeroRepositoryInterface;

class HeroService extends BaseService
{
    /**
     * @var HeroRepositoryInterface
     */
    protected HeroRepositoryInterface $heroRepository;

    /**
     * HeroService constructor.
     *
     * @param HeroRepositoryInterface $heroRepository
     */
    public function __construct(HeroRepositoryInterface $heroRepository)
    {
        $this->heroRepository = $heroRepository;
    }

    /**
     * Get all heroes.
     */
    public function getAllHeroes()
    {
        return $this->heroRepository->all();
    }

    /**
     * Find a hero by ID.
     */
    public function getHeroById(int $id)
    {
        return $this->heroRepository->find($id);
    }

    /**
     * Create a new hero.
     */
    public function createHero(array $data)
    {
        // Business logic here, e.g., file upload handling
        return $this->heroRepository->create($data);
    }

    /**
     * Update an existing hero.
     */
    public function updateHero(int $id, array $data)
    {
        // Business logic here, e.g., file upload handling and deleting old file
        return $this->heroRepository->update($id, $data);
    }

    /**
     * Delete a hero.
     */
    public function deleteHero(int $id)
    {
        // Business logic here, e.g., deleting associated file
        return $this->heroRepository->delete($id);
    }
}
