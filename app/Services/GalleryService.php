<?php

namespace App\Services;

use App\Repositories\Contracts\GalleryRepositoryInterface;
use App\Traits\UploadTrait;

class GalleryService extends BaseService
{
    use UploadTrait;

    protected string $uploadPath = 'galleries';

    /**
     * @var GalleryRepositoryInterface
     */
    protected GalleryRepositoryInterface $galleryRepository;

    /**
     * GalleryService constructor.
     *
     * @param GalleryRepositoryInterface $galleryRepository
     */
    public function __construct(GalleryRepositoryInterface $galleryRepository)
    {
        $this->galleryRepository = $galleryRepository;
    }

    /**
     * Get all galleries.
     */
    public function getAllGalleries()
    {
        return $this->galleryRepository->all();
    }

    /**
     * Find a gallery by ID.
     */
    public function getGalleryById(int $id)
    {
        return $this->galleryRepository->find($id);
    }

    /**
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function createGallery(array $data)
    {
        if (isset($data['image']) && $data['image'] instanceof \Illuminate\Http\UploadedFile) {
            $data['image'] = $this->uploadFile($data['image'], $this->uploadPath);
        }

        return $this->galleryRepository->create($data);
    }

    /**
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function updateGallery(int $id, array $data): bool
    {
        $gallery = $this->galleryRepository->find($id);

        if (!$gallery) {
            return false;
        }

        if (isset($data['image']) && $data['image'] instanceof \Illuminate\Http\UploadedFile) {
            if ($gallery->image) {
                $this->deleteFile($gallery->image);
            }
            $data['image'] = $this->uploadFile($data['image'], $this->uploadPath);
        }

        return $this->galleryRepository->update($id, $data);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function deleteGallery(int $id): bool
    {
        $gallery = $this->galleryRepository->find($id);

        if ($gallery) {
            if ($gallery->image) {
                $this->deleteFile($gallery->image);
            }
        }

        return $this->galleryRepository->delete($id);
    }
}
