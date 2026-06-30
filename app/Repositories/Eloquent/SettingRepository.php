<?php

namespace App\Repositories\Eloquent;

use App\Models\Setting;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\SettingRepositoryInterface;

class SettingRepository extends BaseRepository implements SettingRepositoryInterface
{
    /**
     * SettingRepository constructor.
     *
     * @param Setting $model
     */
    public function __construct(Setting $model)
    {
        parent::__construct($model);
    }

    /**
     * Update or create a setting by its key.
     *
     * @param string $key
     * @param mixed $value
     * @return bool
     */
    public function updateByKey(string $key, $value): bool
    {
        $setting = $this->model->updateOrCreate(
            ['key' => $key],
            ['value' => $value]
        );

        return $setting ? true : false;
    }
}
