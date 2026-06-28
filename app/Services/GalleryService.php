<?php

namespace App\Services;

use App\Repositories\Contracts\GalleryRepositoryInterface;
use App\Traits\UploadTrait;

class GalleryService extends BaseService
{
    use UploadTrait;

    protected string $uploadPath = 'galleries';

    /**
     * GalleryService constructor.
     *
     * @param GalleryRepositoryInterface $repository
     */
    public function __construct(GalleryRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    /**
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function create(array $data)
    {
        if (isset($data['image']) && $data['image'] instanceof \Illuminate\Http\UploadedFile) {
            $data['image'] = $this->uploadFile($data['image'], $this->uploadPath);
        }

        return parent::create($data);
    }

    /**
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data): bool
    {
        $gallery = $this->repository->find($id);

        if (!$gallery) {
            return false;
        }

        if (isset($data['image']) && $data['image'] instanceof \Illuminate\Http\UploadedFile) {
            if ($gallery->image) {
                $this->deleteFile($gallery->image);
            }
            $data['image'] = $this->uploadFile($data['image'], $this->uploadPath);
        }

        return parent::update($id, $data);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $gallery = $this->repository->find($id);

        if ($gallery) {
            if ($gallery->image) {
                $this->deleteFile($gallery->image);
            }
        }

        return parent::delete($id);
    }
}
