<?php

namespace App\Services;

use App\Repositories\Contracts\SettingRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

use App\Traits\UploadTrait;
use Illuminate\Http\UploadedFile;

class SettingService extends BaseService
{
    use UploadTrait;

    /**
     * @var SettingRepositoryInterface
     */
    protected SettingRepositoryInterface $repository;

    /**
     * SettingService constructor.
     *
     * @param SettingRepositoryInterface $repository
     */
    public function __construct(SettingRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Get all settings.
     *
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->repository->all();
    }

    /**
     * Find a setting by ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function find(int $id): ?Model
    {
        return $this->repository->find($id);
    }

    /**
     * Create a new setting.
     *
     * @param array $data
     * @return Model
     */
    public function create(array $data): Model
    {
        return $this->repository->create($data);
    }

    /**
     * Update an existing setting.
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
     * Delete a setting.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        return $this->repository->delete($id);
    }

    /**
     * Mass update settings by key.
     *
     * @param array $settings
     * @return void
     */
    public function updateMany(array $settings): void
    {
        foreach ($settings as $key => $value) {
            if ($value instanceof UploadedFile) {
                $oldValue = get_setting($key);
                if ($oldValue) {
                    $this->deleteFile($oldValue);
                }
                $value = $this->uploadFile($value, 'settings');
            }

            $this->repository->updateByKey($key, $value);
        }
    }
}
