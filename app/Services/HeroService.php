<?php

namespace App\Services;

use App\Repositories\Contracts\HeroRepositoryInterface;
use App\Traits\UploadTrait;

class HeroService extends BaseService
{
    use UploadTrait;

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
        if (isset($data['image']) && $data['image'] instanceof \Illuminate\Http\UploadedFile) {
            $data['image'] = $this->uploadFile($data['image'], 'heroes');
        }

        return $this->heroRepository->create($data);
    }

    /**
     * Update an existing hero.
     */
    public function updateHero(int $id, array $data)
    {
        $hero = $this->heroRepository->find($id);

        if (isset($data['image']) && $data['image'] instanceof \Illuminate\Http\UploadedFile) {
            if ($hero && $hero->image) {
                $this->deleteFile($hero->image);
            }
            $data['image'] = $this->uploadFile($data['image'], 'heroes');
        }

        return $this->heroRepository->update($id, $data);
    }

    /**
     * Delete a hero.
     */
    public function deleteHero(int $id)
    {
        $hero = $this->heroRepository->find($id);

        if ($hero && $hero->image) {
            $this->deleteFile($hero->image);
        }

        return $this->heroRepository->delete($id);
    }
}
